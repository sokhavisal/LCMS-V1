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
            $Erromsg='';
            if(isset($_SESSION['userid'])){
                    $username=$_POST['username'];
                    $userpass=$_POST['userid'];
                    $_SESSION['username']=$username;
                    $_SESSION['userid']= $userpass;
                    setcookie('username', $username, time()+408000);
                    setcookie('userid', $username, time()+408000);
                    header('Location:/LCMS/main.php');
                    
                }  else {
                    header('Location:/LCMS/logout.php');
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
                            <input type="hidden" name="login_id" value="login_id" >
                            <div class="input-group marginb20">
                                <span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-user"></span></span>
                                <input type="text" name="username" id="user" onclick="test();" class="form-control"  data-toggle="popover" data-container="body"   title="User Guide" placeholder="User Name" aria-describedby="sizing-addon2"  data-content="Hello,Guy Wellcome to visit me,please log in for use our system, Thank for enjoined.">
                            </div> 
                            <div class="input-group marginb20">
                                <span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-cog"></span></span>
                                <input type="text"  id="pass" name="userid" onclick="passpopover();" class="form-control password" name="password" placeholder="User password" aria-describedby="sizing-addon2" data-toggle="popover" data-container="body"   title="Password Guide" placeholder="Username" aria-describedby="sizing-addon2"  data-content="Hello,Guy Wellcome to visit me,please log in for use our system,this Password input must be at lest 6 digit Thank for enjoined.">
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
