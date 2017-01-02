<?php
	list($server) = explode("[:/]",$_SERVER['HTTP_HOST']);

	if($server == 'localhost' ) 
	{
		#path information
		define('REAL_PATH', $_SERVER['DOCUMENT_ROOT'].'/n2/');	#real path
		define('URL', 'http://'.$server.'/n2/');			#access URL
	}
	else 
	{
		#path information
		define('REAL_PATH', '/home/avemaria/public_html/NEXTGENWEB.CO.NZ/');		#real path
		define('URL', 'http://nextgenweb.co.nz/');				#access URL
	}