<?php 
    session_start();
    if(isset($_SESSION['user_id'])){
    $userlogin=$_SESSION['admin'];
    }
?>
<div class="login-btn">
    <div class="btn-group">
     <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      LogOut<span class="caret"></span>
      </button>
      <ul class="dropdown-menu">
        <li><a href="#">Hi! Mr.<?php echo $userlogin; ?><div class="online"><i class="fa fa-toggle-on " aria-hidden="true"></i></div></a></li>
         <li><a href="#">Hi! Mr.<?php echo $userlogin; ?><div class="online"><i class="fa fa-toggle-off " aria-hidden="true"></i></div></a></li>
        <li><a href="#">Log out</a></li>
      </ul>
        
    </div>
  

  </div>