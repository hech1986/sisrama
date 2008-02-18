<?php

class Rooms extends Controller {
	
    function listRooms()
    {
        
        $this->load->model('master/RoomsModel');
		$data=$this->RoomsModel->listRooms();
		$data['roomsData']=array('id' => ''
									,'name'=>''
									,'parent'=>''
									,'regionid'=>''
									,'studentheadid'=>''
									,'campusid'=>''
									,'capacity'=>''					
									,'filled'=>''
									);

		$this->load->view("master/roomsview",$data);
    }
    
    function save()
    {
        $this->load->model('master/RoomsModel');
        $arrData = $_POST;
		unset($arrData['filled']);
        $this->RoomsModel->saveRooms($arrData);

        $this->load->helper('url');
        redirect('/master/rooms/listrooms', 'refresh');
    }

    function edit()
    {
        $this->load->model('master/RoomsModel');
        //display all data
        $regData = $this->RoomsModel->editRooms($this->uri->uri_to_assoc(4));
		$data=$this->RoomsModel->listRooms();
		$data['roomsData']=array('id' => $regData[0]->id
									,'name'=>$regData[0]->name
									,'parent'=>$regData[0]->parent
									,'regionid'=>$regData[0]->regionid
									,'studentheadid'=>$regData[0]->studentheadid
									,'campusid'=>$regData[0]->campusid
									,'capacity'=>$regData[0]->capacity
									,'filled'=>$regData[0]->filled);

        $this->load->view("master/roomsview",$data);
    }
    
    function remove()
    {
        $this->load->model('master/RoomsModel');
        $this->RoomsModel->removeRooms($this->uri->uri_to_assoc(4));
        $this->load->helper('url');
        redirect('/master/rooms/listrooms', 'refresh');
        
    }
}
?>