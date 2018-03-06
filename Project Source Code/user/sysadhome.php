<?php
include '../public/common/config.php';
//echo "this is the page for the head of education institute to control account";
$sql="select * from account";
$query = $dbh->query($sql);

?>
<!DOCTYPE html>
<html >
<head>
<meta name="keywords" content="powerful, responsive, fluid, bootstrap, blue, white, free website template, templatemo" />
	<meta name="description" content="Powerful is a responsive template based on Bootstrap. This fluid layout is ready for mobile devices and provided by templatemo for free download." />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Account Information</title>

<link rel="stylesheet" href="public/css/normalize.css">
 <link href="../public/css/bootstrap.min.css" rel="stylesheet">
    <link href="../public/css/font-awesome.min.css" rel="stylesheet">
    <link href="../public/css/templatemo_style.css" rel="stylesheet">

    <link href="../public/css/circle.css" rel="stylesheet">
    <link href="../public/css/jquery.bxslider.css" rel="stylesheet" />
    <link rel="stylesheet" href="../public/css/nivo-slider.css">
    <link href='http://fonts.useso.com/css?family=Raleway:400,100,600' rel='stylesheet' type='text/css'>
    <script src="../public/js/modernizr.custom.js"></script>

<style type="text/css">
.btn { display: inline-block; *display: inline; *zoom: 1; padding: 4px 10px 4px; margin-bottom: 0; font-size: 13px; line-height: 18px; color: #333333; text-align: center;text-shadow: 0 1px 1px rgba(255, 255, 255, 0.75); vertical-align: middle; background-color: #f5f5f5; background-image: -moz-linear-gradient(top, #ffffff, #e6e6e6); background-image: -ms-linear-gradient(top, #ffffff, #e6e6e6); background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#ffffff), to(#e6e6e6)); background-image: -webkit-linear-gradient(top, #ffffff, #e6e6e6); background-image: -o-linear-gradient(top, #ffffff, #e6e6e6); background-image: linear-gradient(top, #ffffff, #e6e6e6); background-repeat: repeat-x; filter: progid:dximagetransform.microsoft.gradient(startColorstr=#ffffff, endColorstr=#e6e6e6, GradientType=0); border-color: #e6e6e6 #e6e6e6 #e6e6e6; border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25); border: 1px solid #e6e6e6; -webkit-border-radius: 4px; -moz-border-radius: 4px; border-radius: 4px; -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05); -moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05); box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05); cursor: pointer; *margin-left: .3em; }
.btn:hover, .btn:active, .btn.active, .btn.disabled, .btn[disabled] { background-color: #e6e6e6; }
.btn-large { padding: 9px 14px; font-size: 15px; line-height: normal; -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; }
.btn:hover { color: #333333; text-decoration: none; background-color: #e6e6e6; background-position: 0 -15px; -webkit-transition: background-position 0.1s linear; -moz-transition: background-position 0.1s linear; -ms-transition: background-position 0.1s linear; -o-transition: background-position 0.1s linear; transition: background-position 0.1s linear; }
.btn-primary, .btn-primary:hover { text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25); color: #ffffff; }
.btn-primary.active { color: rgba(255, 255, 255, 0.75); }
.btn-primary { background-color: #4a77d4; background-image: -moz-linear-gradient(top, #6eb6de, #4a77d4); background-image: -ms-linear-gradient(top, #6eb6de, #4a77d4); background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#6eb6de), to(#4a77d4)); background-image: -webkit-linear-gradient(top, #6eb6de, #4a77d4); background-image: -o-linear-gradient(top, #6eb6de, #4a77d4); background-image: linear-gradient(top, #6eb6de, #4a77d4); background-repeat: repeat-x; filter: progid:dximagetransform.microsoft.gradient(startColorstr=#6eb6de, endColorstr=#4a77d4, GradientType=0);  border: 1px solid #3762bc; text-shadow: 1px 1px 1px rgba(0,0,0,0.4); box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.5); }
.btn-primary:hover, .btn-primary:active, .btn-primary.active, .btn-primary.disabled, .btn-primary[disabled] { filter: none; background-color: #4a77d4; }
.btn-block { width: 20%; display:block; }
.btn-al {align:rignt;}

* { -webkit-box-sizing:border-box; -moz-box-sizing:border-box; -ms-box-sizing:border-box; -o-box-sizing:border-box; box-sizing:border-box; }

td
{
	text-align:center;
}
input
{
	
  border-top:0px ;
  border-left:0px ;
  border-right:0px ;
  text-align:center;
}

.font{
font-family:Arial, Helvetica, sans-serif;
font-size:16px;
}
a{ color:#333; text-decoration:none;}
a:hover{ color:#F00; text-decoration:underline;}
a:active{ color:#30F;}
</style>

</head>
<body>
<div class="mWrapper">
      <div class="container">
        <div class="row">
          <div class="col-sm-4 col-md-4">
            <div class="logo">
              <a  href="../../index.php"><img src="../public/images/logo.png" alt="TAS"></a>
            </div>
          </div>
          <div class="col-sm-8 col-md-8">
            <nav class="mainMenu">
              <ul class="nav">
                <li><a href="../../index.php">Home</a></li>
                <li><a href="sysadhome.php">Edit</a></li>
                <li><a href="add.php">Add</a></li>
                <li><a href="maintain.php">Maintain</a></li>
                <li><a href="mailto:fcui@deakin.edu.au">Email</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div> 
   
    <h1 align="center" class="font2"><strong>Account Information</strong></h1>
    <br>
   <form>
    <table class="font" border="1" align="center" width="550">
    <tr align="center"><th style="text-align:center">StaffID</th>
    <th style="text-align:center">Username</th>
    <th style="text-align:center">Status</th>
    <th style="text-align:center">Role</th>
    <th style="text-align:center">&nbsp;&nbsp;Edit&nbsp;&nbsp;</th>
    <th style="text-align:center">Delete</th>
    </tr>
  
  <?php
  $i=0;
 
 // $row=$query->fetch(PDO::FETCH_ASSOC);
while($row=$query->fetch(PDO::FETCH_ASSOC)){
?>

<tr>
<?php echo "<td>{$row['staffid']}</td>";
echo "<td>{$row['username']}</td>";
echo "<td>{$row['status']}</td>";
echo "<td>{$row['role']}</td>";
echo "<td width='20px' height='10px'><a href='editaccount.php?StaffID={$row['staffid']}'><img alt='edit account' src='../public/images/editsta.png' width='20px' height='10px' ></a></td>";
echo "<td width='20px' height='10px'><a href='deleteaccount.php?StaffID={$row['staffid']}'><img alt='delete account' src='../public/images/delete.png' width='20px' height='10px' ></a></td>";
?>
</tr>
<?php
$i++;
}
?></table>
</form>
  
</body>
</html>

