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
         <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Programming</h3>
                </div> 
                 <div class="panel-body">
         
              
                
                            <?php

                include "../functions/db.php";
                     $id = $_GET['post_id'];
                     
                
                $sql =@mysql_query("SELECT * from tblpost as tp join category as c on tp.cat_id=c.cat_id where tp.post_Id='$id' ");
                if($sql==true){
                  while($row=mysql_fetch_assoc($sql)){
                    extract($row);
                    if($user_Id==009){
                       echo "<label>Topic Title: </label> ".$title."<br>";
                       echo "<label>Topic Category: </label> ".$category."<br>";
                       echo "<label>Date time posted: </label> ".$datetime;
                       echo "<p class='well'>".$content."</p>";
                       echo "<label>Posted By: </label> Admin";
                    }
                    else{
                      $sel =@mysql_query("SELECT * from tbluser where user_Id='$user_Id' ");
                      while($row=mysql_fetch_assoc($sel)){
                        extract($row);
                        echo "<label>السؤال: </label> ".$title."<br>";
                       echo "<label>فئة السؤال: </label> ".$category."<br>";
                       echo "<label>تاريخ طرح السؤال: </label> ".$datetime;
                       echo "<p class='well'>".$content."</p>";
                       echo '<label>  صاحب الإستفسار : </label>'.$fname.' '.$lname;
                      }
                      
                    }
                    
         
                }
                }
                
              
                    
              ?>

              <br><label>التعليقات</label><br>
              <div id="comments">
              <?php 
              $postid= $_GET['post_id'];
              $sql =@mysql_query("SELECT * from tblcomment as c join tbluser as u on c.user_Id=u.user_Id where post_Id='$postid' order by datetime");
              $num =@mysql_num_rows($sql);
              if($num>0){
              while($row=mysql_fetch_assoc($sql)){
                    echo "<label>تعليق من: </label> ".$row['fname']." ".$row['lname']."<br>";
                     echo '<label class="pull-right">'.$row['datetime'].'</label>';
                     echo "<p class='well'>".$row['comment']."</p>";
              }

            }

              ?>
            </div>
              </div>
          </div>
          <hr>
            <div class="col-sm-5 col-md-5 sidebar">
          <h3>تعليق</h3>
          <form method="POST">
            <textarea type="text" class="form-control" id="commenttxt"></textarea><br>
            <input type="hidden" id="postid" value="<?php echo $_GET['post_id']; ?>">
            <input type="hidden" id="userid" value="<?php echo $_SESSION['user_Id']; ?>">
            <input type="submit" id="save" class="btn btn-success pull-right" value="إرسال">
          </form>
        </div>
    </div>

		<div class="my-quest" id="quest">
            <div> 
                <form method="POST" action="question-function.php">
                        
                         <label>الفئة</label>
                        <select name="category" class="form-control">
                            <option></option>
                            <option value="Programming">Programming</option>
                            <option value="Multimedia">Multimedia</option>
                            <option value="Computer Networking">Computer Networking</option>
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
<script>

$("#save").click(function(){
var postid = $("#postid").val();
var userid = $("#userid").val();
var comment = $("#commenttxt").val();
var datastring = 'postid=' + postid + '&userid=' + userid + '&comment=' + comment;
if(!comment){
  alert("Please enter some text comment");
}
else{
  $.ajax({
    type:"POST",
    url: "../functions/addcomment.php",
    data: datastring,
    cache: false,
    success: function(result){
      document.getElementById("commenttxt").value=' ';
      $("#comments").append(result);
    }
  });
}
return false;
})

</script>
</html>