<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/*
* Mentry security library buat aplikasi sisrama
* Edited by Ahmad Furqon dari sebelumnya Sentry
* Nov, 16 2007
*/

define('SQL_GET_MENU_LIST', <<<SQL
SELECT
	u.userid,
	ur.rolename,
	m.menuname,
	m.menuhead,
	m.modname,
	m.actname,
	m.isshow
FROM
	(adm_users u JOIN adm_userrole_rel ur ON u.userid = ur.userid)
	RIGHT JOIN (adm_rolemenu_rel rm JOIN adm_menus m ON rm.menuname = m.menuname)
	ON rm.rolename = ur.rolename
WHERE
	u.userid = ? AND
	m.isshow = 1
ORDER BY
	m.menuhead,
	m.horder
SQL
);



class Mentry 
{

	function Mentry()
	{
		$this->obj =& get_instance();
	}

	/* 
	bagian ini untuk melakukan pengecekan apakah seseorang masih dalam posisi login atau tidak,
	untuk menggunakan di dalam controller:
	if (!$this->mentry->is_logged_in()) {redirect('ke halaman muka (login)', 'location'); exit;}
	*/

	function is_logged_in()
	{

		if ($this->obj->session) {
			$sessid = $this->obj->db->query("SELECT sessid FROM adm_users WHERE userid = '".$this->obj->session->userdata('user_id')."'");

			if($sessid->row_array() == $this->obj->session->userdata('session_id')) $sessid = TRUE;
			if ($this->obj->session->userdata('logged_in') && $sessid) {
				return true;
			} else {
				return false;
			}
		} else {
			return false;
		}
	} 

	/*
	bagian ini digunakan pertama kali ketika tombol login diklik
	setelah melakukan pengecekan userid dan password, akan dilakukan penyimpanan data ke dalam session
	*/

	function login_routine()
	{
		//Make the input userid and password into variables
		$frmData = $this->obj->input->post('frmData');

		//Use the input userid and password and check against 'adm_users' table
		$query = $this->obj->db->get('adm_users');

		$login_result = false;
		foreach($query->result() as $row){
			if($row->userid == $frmData['userid'] && $row->passw == MD5($frmData['password'])){
				$login_result = true;
				$id = $row->userid;
			}
		}

		//If username and password match set the a logged in flag in 'ci_sessions'
		if ($login_result==1) {

			//menu setting
			$menu = $this->obj->db->query(SQL_GET_MENU_LIST, $frmData['userid']);
			
			//record current session id to adm_users so that can be shyncronized when checking
			//XXX FIXME when someone login in another kompi, automatically another one will be loged out
			//XXX is it bug or feature ?? XXX
			$this->obj->db->query('UPDATE adm_users SET sessid = ? WHERE userid = ?', array($this->obj->session->userdata('session_id'), $frmData['userid']));

			//XXX next on....
			//XXX can be done by using scheduler such cron to cleared sessid in case user leave apps without logout. 

			//user privileges by its username -> get it into privs array
			foreach($menu->result() as $m){
                		$s_module = $m->modname;  //class
                		$s_action = $m->actname;  //controller
                		$s_priv   = $s_module.$s_action;

                		if ($m->isshow == '1') { // only get showable menus
                    			$a_appMenu[$m->menuhead]['items'][] =
                        			array('name'   => $m->menuname,
                              				'module' => $s_module,
                              				'action' => $s_action
                        			);
                		}
            		}
			$menus = $a_appMenu;
			$_SESSION['menu_list'] = $menus;

			//array of session that will be kept during logged_in
			$credentials = array(
						'user_id' => $id, 
						'logged_in' => $login_result, 
						'menu_list' => $menus,
						'curr_page' => 1 
					);

			$this->obj->session->set_userdata($credentials);
			redirect('','location'); //On success redirect user to default page
		} else {
			//On error send user back to login page, and add error message
			redirect('welcome/index/', 'location'); //On success redirect user to default page
		}
	}
	
	function logout()
	{
		$this->obj->session->sess_destroy();
		redirect('welcome', 'location');
	}
}
