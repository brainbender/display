<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">


<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

  <head>Big Room CMS<br />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    
    <title>Big Room CMS</title>
    
    <link rel="stylesheet" type="text/css" href="../Downloads/SimpleCMS/style.css" />
  </head>

  <body>
  	<div id="page-wrap">
    <?php
//Connect info
      include_once('../Downloads/SimpleCMS/_class/bigroomCMS.php');
      $obj = new bigroomCMS();

	  /* CHANGE THESE SETTINGS FOR YOUR OWN DATABASE */
      $obj->host = 'localhost';
      $obj->username = 'brainbender';
      $obj->password = '@Brainbender1.';
      $obj->table = 'demo;
      $obj->connect();
    
      if ( $_POST )
        $obj->write($_POST);
    
      echo ( $_GET['admin'] == 1 ) ? $obj->display_admin() : $obj->display_public();
    
    ?>
	</div>
  </body>

</html>