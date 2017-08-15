<?php
  session_start();
  if (isset($_SESSION['username'])&&$_SESSION['username']!=""){
  }
  else
  {
    header("Location:../index.php");
  }
$username=$_SESSION['username'];
$userid = $_SESSION['user_Id'];

?>
<html dir="rtl" lang="ar">
<head>
	<title></title>

	<!--Custom CSS-->
	<link rel="stylesheet" type="text/css" href="../css/global.css">
	<!--Bootstrap CSS-->
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/earlyaccess/droidarabickufi.css" rel="stylesheet">
    <!--Script-->
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.js"></script>
     <style>
       body{
           font-family: 'Droid Arabic Kufi', sans-serif;
           background-color: #E0E3EF;
       }
      @media only screen and (max-width: 768px) {
           .fg{
           margin-top:-45px;
               float: right;
       }
          .hwd{
              padding-top: 10px;
              width: 100%;
          }
       }
    </style>
</head>
<body>
	<!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="home.php"></a>
            </div>
            <div class="navbar-header fg navbar-right">
                <a class="navbar-brand" href="home.php">نانوسوفت</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse">
					 <ul class="nav navbar-nav navbar-left">
                         <li ><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> الخروج</a></li>
                         <li><a href="#" ><span class="glyphicon glyphicon-user"></span> <?php echo $username;?></a></li>
                          <li><a href="#quest"> إطرح سؤال </a></li>
                
                </ul>		
			
                
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <div class="container" style="margin:7% auto;">
    	<h4>آخر مناقشة</h4>
    	<hr>
        <?php  include "../functions/db.php";

        $sel = mysql_query("SELECT * from category");
        while($row=mysql_fetch_assoc($sel)){
            extract($row);
           echo '<div class="panel panel-success">
                    <div class="panel-heading">
                    <h3 class="panel-title">'.$category.'</h3>
                    </div> 
                    <div class="panel-body">
                    <table class="table table-stripped">
                    <tr>
                    <th><font style="float:right;">السؤال</font></th>
                    <th><font style="float:right;">الفئة</font></th>
                    <th><font style="float:right;">عمل</font></th>
                    </tr>';
                    $sel1 = mysql_query("SELECT * from tblpost where cat_id='$cat_id' ");
                    while($row1=mysql_fetch_assoc($sel1)){
                        extract($row1);
                        echo '<tr>';
                        echo '<td>'.$title.'</td>';
                        echo '<td>'.$category.'</td>';
                        echo '<td><a href="content.php?post_id='.$post_Id.'"><button class="btn btn-success">شاهد</button></td>';
                        echo '</tr>';
                    }


                echo '</table>
                    </div>
                </div>';
        }
        ?>
		<div class="my-quest" id="quest">
            <div> 
                <form method="POST" action="question-function.php">
                        
                         <label>الفئة</label>
                        <select name="category" class="form-control">
                            <option></option>
                            <?php $sel = mysql_query("SELECT * from category");

                                if($sel==true){
                                    while($row=mysql_fetch_assoc($sel)){
                                        extract($row);
                                        echo '<option value='.$cat_id.'>'.$category.'</option>';
                                    }
                                }
                            ?>
                        </select>
                        <label>السؤال</label>
                        <input type="text" class="form-control" name="title"required>
                        <label>أكتر توضيحا</label>
                        <textarea name="content"class="form-control">
                        </textarea>
                       <br>
                        <input type="hidden" name="userid" value=<?php echo $userid; ?>>
                        <input type="submit" class="btn btn-success pull-right" value=" إطرح السؤال">
                   </form><br>
                <hr>
                  <a href="" class="pull-right">إغلق</a>
              </div>
        </div>

<hr>
    <div class="footer">
		<nav align="center">
			<ul class="nav navbar-nav">
				<li><a href="">عن الفريق</a></li>
				<li><a href="">الأحكام والشروط</a></li>
			</ul>
		</nav>
	</div>

</body>
</html>