
<?php
    session_start();
    if(!isset($_SESSION['user_id'])){
	header('Location:/LCMS-V1/index.php');
    }
    if(isset($_SESSION['last_activity'])){
	if( time() - $_SESSION['last_activity'] > $_SESSION["time_out"]){
	    header('Location:/LCMS-V1/logout.php');
	}
    }
    $_SESSION['last_activity'] = time(); 
    $_SESSION["time_out"] = 600;
?>
<html>
    <head>
        <meta charset="UTF-8">
       <!--Exinternal link  -->
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="http://w2ui.com/src/w2ui-1.4.2.min.css" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
	<script type="text/javascript" src="http://w2ui.com/src/w2ui-1.4.2.min.js"></script>
       
        <script type="text/javascript" src="boostrap/js/bootstrap.min.js"></script>
      
	<!--Internal link  -->
        <link rel="stylesheet" type="text/css" href="boostrap/css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
        <link rel="stylesheet" href="css/pmc.css">
	<script type="text/javascript" src="js/w2ui-1.4.3.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/w2ui-1.4.3.min.css" />
    </head>
    <body>
        <header>
            <div class="logo">
                <div class="box-logo">logo</div>
            </div>
           
            </div>
        </header>
        <div class="content">
            <div id="layout" style="width:100%;height: 700px;"></div>
        </div>
    </body>
</html>

<script type="text/javascript">
var pstyle = 'border: 1px solid #86aecc; padding: 2px; background-color:#FFF;';
var fstyle ='border: 1px solid #86aecc; padding: 2px; background-color:#FFF;';
var tstyle ='border: 1px solid #86aecc; padding: 2px; background-color:#FFF;';
var toolbarstyle='padding: 4px; border: 1px solid silver; border-radius: 3px;float:right;';
var pmc_layout={
	    layout:{
		name:'pmc_layout',
		panels:[
		    {type:'top',size:100,style:toolbarstyle}, // VALUE 1 OF PANEL IS TOP  
		    {type:'main',style:pstyle}, // VALUE 1 OF PANEL IS LEFT
		    {type:'right',size:300,style:pstyle}, // VALUE 1 OF PANEL IS RIGHT
                    {type:'bottom',size:50,style:fstyle},
                ],
	    }
    };
var toolbar={
        toolbar:{
            name:'toolbar',
            items:[
                //  { type: 'spacer' },
                 { type: 'drop',  id: 'item5', caption: 'Drop Down', icon: 'fa-plus', 
                     html: '<div class="btn-group">'+
                            ' <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'+
                               'Action <span class="caret"></span>'+
                            ' </button>'+
                             '<ul class="dropdown-menu">'+
                             '  <li><a href="#">Hi! Mr.Visal</a></li>'+
                               '<li><a href="#">Logout</a></li>'+
                             '</ul>'+
                           '</div>' 
                       },
                 
            ],   
        } 
};    
    
    
$(function(){
   $('#layout').w2layout(pmc_layout.layout); 
    //w2ui['pmc_layout'].content('top',$().w2toolbar(toolbar.toolbar));
    w2ui['pmc_layout'].load('top','loadcontent/admin_top.php');
    w2ui['pmc_layout'].load('main','loadcontent/admin_menu.php');
    w2ui['pmc_layout'].load('bottom','loadcontent/admin_footer.php');
   
});

</script>