<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="boostrap/css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
         
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
       <script type="text/javascript" src="js/boostrap-login.js"></script>
       <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="boostrap/js/bootstrap.min.js"></script>
        
        <title>Log In</title>
    </head>
    <body>
       <?php
	    session_start();
	   // $key  = DB_PASS;	    
	    if(!isset($_SESSION['user_id'])){
		
		if(isset($_REQUEST['web_login'])=='login'){
		    if ($_REQUEST['user_id'] && $_REQUEST['user_pass']){
			$user= $_REQUEST['user_id'];
			$pass= $_REQUEST['user_pass'];
			
		    }
		    if (mb_strlen($user) >0 && mb_strlen($pass)>0){
			$_SESSION['user_id']=$_REQUEST['user_id'];
			$_SESSION['user_pass']=$_REQUEST['user_pass'];
			$_SESSION['admin']= 1;
		    }
		    setcookie('user',$user,  time()+604800);
		    setcookie('password',$pass, time()+604800);
		    
		   header('Location:/LCMS-V1/pmc.php');
		} 
	    }  else {
		 header('Location:/LCMS-V1/pmc.php');
	    }  
	     
	?>
        <div id="content-login">
            <div class="wrapper-login">
                <div class="panel panel-default">
                    <div class="panel-heading  panel-primary">
                        <div class="login-logo"><img src="image/nobg.png" alt="Logo"></div>
                        <div class="login-title"><h3>Log In Form</h3></div>
                    </div>
                    <div class="panel-body">
                        <form action="<?=$_SERVER['PHP_SELF']?>" method="POST" >
                            <input type="hidden" name="web_login" value="login" >
                            <div class="input-group marginb20">
                                <span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-user"></span></span>
                                <input type="text" name="user_id" id="user" onclick="test();" class="form-control"  data-toggle="popover" data-container="body"   title="User Guide" placeholder="User Name" aria-describedby="sizing-addon2"  data-content="Hello,Guy Wellcome to visit me,please log in for use our system, Thank for enjoined.">
                            </div> 
                            <div class="input-group marginb20">
                                <span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-cog"></span></span>
                                <input type="text"  id="pass" name="user_pass" onclick="passpopover();" class="form-control password" name="password" placeholder="User password" aria-describedby="sizing-addon2" data-toggle="popover" data-container="body"   title="Password Guide" placeholder="Username" aria-describedby="sizing-addon2"  data-content="Hello,Guy Wellcome to visit me,please log in for use our system,this Password input must be at lest 6 digit Thank for enjoined.">
                            </div> 
                            <div class="alert alert-success" id="error"  role="alert">
                                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                <span class="sr-only">Error:</span>
                               wellcome to my system 
                            </div>
                            <div class="panel-footer">
                              <center>
                                  <button type="submit" class="btn btn-primary" ><span class="glyphicon glyphicon-ok"></span> Log In</button>
                                  <button type="button" class="btn btn-danger"> <span class="glyphicon glyphicon-share"></span> Cancel</button>
                              </center>
                          </div>
                     </form>
                    </div>
                    
                  </div>
            </div>
        </div>
    </body>
</html>
