# Bagaimana cara checkout (unduh) source code untuk pertama kalinya? #

**Untuk siapa dokumen ini?**

Bagi pengembang yang baru pertama kali menggunakan subversion (svn).

**Persiapan**
  * Platform: Linux
  * Webserver: Apache
  * Program subversion client terinstal. Untuk Windows silahkan coba [tortoisesvn](http://tortoisesvn.tigris.org/).
  * Koneksi Internet
  * Sudah memiliki username sisrama ALIAS sudah memiliki account Google atau Gmail. Bisa buat disini: http://www.google.com/accounts/NewAccount. Setelah itu silahkan kontak asofyan AT gmail.com atau bwidyasanyata AT gmail.com untuk didaftarkan sebagai tim pengembang.


**Jalankan Perintah**
  1. Buka program Terminal
  1. Login sebagai root
  1. Pindah ke direktori `DocumentRoot` (mis: /var/www)
  1. Arahkan browser ke website SISRAMA google code http://code.google.com/p/sisrama
  1. Perintah checkout tertulis lengkap di halaman [source](http://code.google.com/p/sisrama/source), ATAU klik tab **Source** di menu\_tab bagian atas halaman. Syntaxnya (contoh username: bwidyasanyata): `svn checkout https://sisrama.googlecode.com/svn/trunk/ sisrama --username bwidyasanyata`
  1. Copy perintah tersebut dan paste ke terminal, lalu 

&lt;ENTER&gt;


  1. Masukkan password sesuai yang Anda dapat, atau bisa klik link di akhir baris: "When prompted, enter your [generated googlecode.com password](http://code.google.com/hosting/settings)"

Berikut contoh screenshot:

```
root@ubuntu:/var/www# svn checkout https://sisrama.googlecode.com/svn/trunk/ sisrama --username bwidyasanyata
Authentication realm: <https://sisrama.googlecode.com:443> Google Code Subversion Repository
Password for 'bwidyasanyata': 
A    sisrama/sql
A    sisrama/sql/sisrama_user.sql
A    sisrama/system
A    sisrama/system/scaffolding
A    sisrama/system/scaffolding/images
A    sisrama/system/scaffolding/images/logo.jpg
A    sisrama/system/scaffolding/images/index.html
A    sisrama/system/scaffolding/images/background.jpg
A    sisrama/system/scaffolding/Scaffolding.php
A    sisrama/system/scaffolding/index.html
A    sisrama/system/scaffolding/views
A    sisrama/system/scaffolding/views/stylesheet.css
A    sisrama/system/scaffolding/views/view.php
A    sisrama/system/scaffolding/views/footer.php
A    sisrama/system/scaffolding/views/delete.php
A    sisrama/system/scaffolding/views/index.html
A    sisrama/system/scaffolding/views/no_data.php
A    sisrama/system/scaffolding/views/edit.php
A    sisrama/system/scaffolding/views/add.php
A    sisrama/system/scaffolding/views/header.php
A    sisrama/system/plugins
A    sisrama/system/plugins/captcha_pi.php
A    sisrama/system/plugins/js_calendar_pi.php
A    sisrama/system/plugins/index.html
A    sisrama/system/helpers
A    sisrama/system/helpers/xml_helper.php
A    sisrama/system/helpers/url_helper.php
A    sisrama/system/helpers/smiley_helper.php
A    sisrama/system/helpers/form_helper.php
A    sisrama/system/helpers/html_helper.php
A    sisrama/system/helpers/directory_helper.php
A    sisrama/system/helpers/string_helper.php
A    sisrama/system/helpers/typography_helper.php
A    sisrama/system/helpers/security_helper.php
A    sisrama/system/helpers/download_helper.php
A    sisrama/system/helpers/cookie_helper.php
A    sisrama/system/helpers/date_helper.php
A    sisrama/system/helpers/array_helper.php
A    sisrama/system/helpers/file_helper.php
A    sisrama/system/helpers/text_helper.php
A    sisrama/system/helpers/index.html
A    sisrama/system/helpers/inflector_helper.php
A    sisrama/system/application
A    sisrama/system/application/hooks
A    sisrama/system/application/hooks/index.html
A    sisrama/system/application/models
A    sisrama/system/application/models/index.html
A    sisrama/system/application/config
A    sisrama/system/application/config/mimes.php
A    sisrama/system/application/config/user_agents.php
A    sisrama/system/application/config/routes.php
A    sisrama/system/application/config/hooks.php
A    sisrama/system/application/config/index.html
A    sisrama/system/application/config/database.php
A    sisrama/system/application/config/smileys.php
A    sisrama/system/application/config/config.php
A    sisrama/system/application/config/autoload.php
A    sisrama/system/application/controllers
A    sisrama/system/application/controllers/welcome.php
A    sisrama/system/application/controllers/blog.php
A    sisrama/system/application/controllers/index.html
A    sisrama/system/application/index.html
A    sisrama/system/application/errors
A    sisrama/system/application/errors/error_db.php
A    sisrama/system/application/errors/error_404.php
A    sisrama/system/application/errors/error_php.php
A    sisrama/system/application/errors/index.html
A    sisrama/system/application/errors/error_general.php
A    sisrama/system/application/libraries
A    sisrama/system/application/libraries/Mentry.php
A    sisrama/system/application/libraries/index.html
A    sisrama/system/application/views
A    sisrama/system/application/views/index.html
A    sisrama/system/application/views/master
A    sisrama/system/application/views/master/room.php
A    sisrama/system/application/views/master/period.php
A    sisrama/system/application/views/master/studentroom.php
A    sisrama/system/application/views/master/region.php
A    sisrama/system/application/views/master/student.php
A    sisrama/system/application/views/master/campus.php
A    sisrama/system/application/views/report
A    sisrama/system/application/views/activity
A    sisrama/system/application/views/activity/permit.php
A    sisrama/system/application/views/activity/presence.php
A    sisrama/system/application/views/login.php
A    sisrama/system/cache
A    sisrama/system/cache/index.html
A    sisrama/system/language
A    sisrama/system/language/english
A    sisrama/system/language/english/calendar_lang.php
A    sisrama/system/language/english/ftp_lang.php
A    sisrama/system/language/english/validation_lang.php
A    sisrama/system/language/english/date_lang.php
A    sisrama/system/language/english/unit_test_lang.php
A    sisrama/system/language/english/scaffolding_lang.php
A    sisrama/system/language/english/profiler_lang.php
A    sisrama/system/language/english/imglib_lang.php
A    sisrama/system/language/english/index.html
A    sisrama/system/language/english/upload_lang.php
A    sisrama/system/language/english/db_lang.php
A    sisrama/system/language/english/email_lang.php
A    sisrama/system/language/index.html
A    sisrama/system/database
A    sisrama/system/database/DB_active_rec.php
A    sisrama/system/database/DB_driver.php
A    sisrama/system/database/DB_result.php
A    sisrama/system/database/index.html
A    sisrama/system/database/DB.php
A    sisrama/system/database/drivers
A    sisrama/system/database/drivers/mssql
A    sisrama/system/database/drivers/mssql/mssql_driver.php
A    sisrama/system/database/drivers/mssql/mssql_result.php
A    sisrama/system/database/drivers/mssql/mssql_utility.php
A    sisrama/system/database/drivers/mssql/index.html
A    sisrama/system/database/drivers/sqlite
A    sisrama/system/database/drivers/sqlite/sqlite_driver.php
A    sisrama/system/database/drivers/sqlite/sqlite_result.php
A    sisrama/system/database/drivers/sqlite/sqlite_utility.php
A    sisrama/system/database/drivers/sqlite/index.html
A    sisrama/system/database/drivers/oci8
A    sisrama/system/database/drivers/oci8/oci8_driver.php
A    sisrama/system/database/drivers/oci8/oci8_result.php
A    sisrama/system/database/drivers/oci8/index.html
A    sisrama/system/database/drivers/oci8/oci8_utility.php
A    sisrama/system/database/drivers/postgre
A    sisrama/system/database/drivers/postgre/postgre_driver.php
A    sisrama/system/database/drivers/postgre/postgre_result.php
A    sisrama/system/database/drivers/postgre/index.html
A    sisrama/system/database/drivers/postgre/postgre_utility.php
A    sisrama/system/database/drivers/mysql
A    sisrama/system/database/drivers/mysql/mysql_driver.php
A    sisrama/system/database/drivers/mysql/mysql_result.php
A    sisrama/system/database/drivers/mysql/index.html
A    sisrama/system/database/drivers/mysql/mysql_utility.php
A    sisrama/system/database/drivers/odbc
A    sisrama/system/database/drivers/odbc/odbc_utility.php
A    sisrama/system/database/drivers/odbc/odbc_driver.php
A    sisrama/system/database/drivers/odbc/index.html
A    sisrama/system/database/drivers/odbc/odbc_result.php
A    sisrama/system/database/drivers/index.html
A    sisrama/system/database/drivers/mysqli
A    sisrama/system/database/drivers/mysqli/mysqli_driver.php
A    sisrama/system/database/drivers/mysqli/mysqli_result.php
A    sisrama/system/database/drivers/mysqli/mysqli_utility.php
A    sisrama/system/database/drivers/mysqli/index.html
A    sisrama/system/database/DB_utility.php
A    sisrama/system/database/DB_cache.php
A    sisrama/system/logs
A    sisrama/system/logs/index.html
A    sisrama/system/fonts
A    sisrama/system/fonts/index.html
A    sisrama/system/fonts/texb.ttf
A    sisrama/system/codeigniter
A    sisrama/system/codeigniter/CodeIgniter.php
A    sisrama/system/codeigniter/Base4.php
A    sisrama/system/codeigniter/Base5.php
A    sisrama/system/codeigniter/index.html
A    sisrama/system/codeigniter/Common.php
A    sisrama/system/libraries
A    sisrama/system/libraries/Pagination.php
A    sisrama/system/libraries/Parser.php
A    sisrama/system/libraries/User_agent.php
A    sisrama/system/libraries/Sha1.php
A    sisrama/system/libraries/Output.php
A    sisrama/system/libraries/Zip.php
A    sisrama/system/libraries/Config.php
A    sisrama/system/libraries/Loader.php
A    sisrama/system/libraries/Calendar.php
A    sisrama/system/libraries/Unit_test.php
A    sisrama/system/libraries/Profiler.php
A    sisrama/system/libraries/Language.php
A    sisrama/system/libraries/Controller.php
A    sisrama/system/libraries/Encrypt.php
A    sisrama/system/libraries/Upload.php
A    sisrama/system/libraries/Email.php
A    sisrama/system/libraries/Xmlrpcs.php
A    sisrama/system/libraries/Ftp.php
A    sisrama/system/libraries/Validation.php
A    sisrama/system/libraries/Benchmark.php
A    sisrama/system/libraries/URI.php
A    sisrama/system/libraries/Input.php
A    sisrama/system/libraries/Model.php
A    sisrama/system/libraries/Xmlrpc.php
A    sisrama/system/libraries/Image_lib.php
A    sisrama/system/libraries/Router.php
A    sisrama/system/libraries/Log.php
A    sisrama/system/libraries/Exceptions.php
A    sisrama/system/libraries/Hooks.php
A    sisrama/system/libraries/Session.php
A    sisrama/system/libraries/index.html
A    sisrama/system/libraries/Trackback.php
A    sisrama/system/libraries/Table.php
A    sisrama/index.php
Checked out revision 12.
```

DONE! Alhamdulillah...

Gampang khan? :)

**Author:** bwidyasanyata AT gmail.com |
**Version:** 1.0 |
**Date:** 13-Dec-2007