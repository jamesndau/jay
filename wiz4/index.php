<?php
$apachevar=apache_get_version();
$phpvar=phpversion();
$mysqlivar="";
$uploadsvar="";
$required_extensions = [
                'mysqli',
                'pcre',
                'tokenizer',
                'ctype',
                'session',
                'json',
                'xml',
                'dom',
                'phar',
                'openssl',
                'gd',
                'mbstring',
                'curl',
                'zlib',
                'fileinfo',
            ];

if (!empty($_GET) && array_key_exists('phpinfo', $_GET)) {
    phpinfo();
    die();
}
 foreach ($required_extensions as $required_extension) {
                if (extension_loaded($required_extension)) {
					
					if (in_array("mysqli", $required_extensions))
						  {
						  $mysqlivar=" Mysqli library loaded";
						  }
                    
                } else {
                  
                }
            }
			
if($phpvar>=5.4){
$phpvar="Php version ok";	
}else{
	$phpvar="Php version not ok";
}
if(ini_get('file_uploads') == 1)
{
  $uploadsvar="HTTP Upload Enabled";
}
else
{
  $uploadsvar='HTTP Upload Disabled';
}
?>
<html lang="en">

  <head>
    <title>Form Wizard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
      <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/font-awesome.css"> 
	<link rel="stylesheet" href="style.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="jquery.js"></script>
    <script src="script.js"></script>
   

  </head>
  <body>
<!-- MultiStep Form -->
<div class="container-fluid" id="grad1">
    <div class="row justify-content-center mt-0">
        <div class="col-11 col-sm-9 col-md-7 col-lg-6 text-center p-0 mt-3 mb-2">
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                <h2><strong>IEBC System Installation</strong></h2>
                <p>Fill all form field to go to next step</p>
                <div class="row">
                    <div class="col-md-12 mx-0">
                        <form id="msform">
                            <!-- progressbar -->
                            <ul id="progressbar">
                                <li class="active" id="account"><strong>Server info <a href='phpinfo.php'>Get info</a></strong></li>
                                <li id="personal"><strong>SuperAdmin</strong></li>
                                <li id="payment"><strong>Database</strong></li>
                                <li id="confirm"><strong>Finish</strong></li>
                            </ul>
                            <!-- fieldsets -->
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">Server Information</h2>
                                    <input type="text" name="phpversion" placeholder="Php version" value="<?php echo $phpvar;?>"/>
                                    <input type="text" name="apacheversion" placeholder="Apache version" value="<?php echo $apachevar;?>"/>
                                    <input type="text" name="mysqliready" placeholder="Mysqli ready" value="<?php echo $mysqlivar;?>"/>
                                    <input type="text" name="fileuploadsready" placeholder="File upload ready" value="<?php echo $uploadsvar;?>"/>
                                </div>
                                <input type="button" name="next" class="next action-button" value="Next Step"/>
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">Site and SuperAdmin details</h2>
                                    <input type="text" name="uname" placeholder="Username"/>
                                    <input type="password" name="pass" placeholder="Password"/>
                                    <input type="email" name="email" placeholder="Email"/>
                                    <input type="text" name="sitename" placeholder="Site name"/>
                                </div>
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                                <input type="button" name="next" class="next action-button" value="Next Step"/>
                            </fieldset>
							<fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">Database Information</h2>
                                    <input type="text" name="server" placeholder="Server"/>
                                    <input type="password" name="dbuser" placeholder="DB user"/>
                                    <input type="email" name="dbpass" placeholder="password"/>
                                    <input type="text" name="dbname" placeholder="Database name"/>
                                </div>
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                                <input type="button" name="next" class="next action-button" value="Next Step"/>
                            </fieldset>
                           
						   <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title text-center">Success !</h2>
                                    <br><br>
                                    <div class="row justify-content-center">
                                        <div class="col-3">
                                            <img src="https://img.icons8.com/color/96/000000/ok--v2.png" class="fit-image">
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="row justify-content-center">
                                        <div class="col-7 text-center">
                                            <h5>You Have Successfully Setup your environment</h5>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>