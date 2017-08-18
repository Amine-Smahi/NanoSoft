<html dir="rtl" lang="ar">
<head>
	<title></title>

	<!--Custom CSS-->
	<link rel="stylesheet" type="text/css" href="css/global.css">
	<!--Bootstrap CSS-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/earlyaccess/droidarabickufi.css" rel="stylesheet">
    <!--Script-->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
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
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            	<!--
                <ul class="nav navbar-nav navbar-left">
                    <li><a href=""><span class="glyphicon glyphicon-list"></span> Topics</a></li>
                </ul>
            -->
                <div>
					<form class="navbar-form navbar-left" method="POST"role="search" action="pages/login.php">
					<div class="form-group">
					<input type="text" class="form-control" name="username" placeholder="إسم المستخدم">
					<input type="password" class="form-control" name="password" placeholder="كلمة المرور">
					</div>
					<button type="submit" class="btn btn-success">الدخول</button>
					</form>
				</div><
                
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
			<div class="container" style="margin:4% auto;">
				<div class="col-sm-5 col-md-5 pull-right"><br><br>
					<h3>أصبحت تقنيات مايكروسوفت أكثر وضوحا</h3>
					<p>
                        نانوسوفت هي منصة تبادل خبرات في كل ما يخص عالم برمجة و تطوير بإستخدام تقنيات مايروسوفت، مستوحاة من الطريقة التي تفكر بها. و من المشاكل إلى إجابات، يمكنك مشاركة معرفتك مع العالم  
                    </p>
                    <img style="width:100%;" src="./images/bg.png" />
				</div>
				 <div class="col-sm-8 col-md-5 pull-left">
                   <div class="row hwd">
                 
						<form method="POST" class="form-signin" action="functions/register.php">
								<h3 class="text-center">قم بالتسجيل من هنا </h3>
							<input type="text" name="fname"placeholder="الإسم"class="form-control" required>
							<input type="text" name="lname"placeholder="اللقب"class="form-control" required>
							<select class="form-control" name="gender"required>
								<option>الجنس</option>
								<option value="Male">ذكر</option>
								<option value="Female">أنثا</option>
							</select>
							<input type="text" placeholder="إسم المستخدم" name="username"class="form-control" required>
							<input id="pwd" type="password" minlength="6" placeholder="كلمة المرور" name="password" class="form-control" required>
                            <input id="pwd2" type="password"  minlength="6" placeholder="إعادة كلمة المرور"  class="form-control" required>
                                <input onmouseover="chk(this)" type="submit" value="التسجيل" class="btn btn-success" style="width:100%;">
						</form>
				</div>
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
<script>
function chk(x) {
  var pw =  document.getElementById('pwd').value;
    var pw2 = document.getElementById('pwd2').value;
    if(pw != pw2){
        alert("كلمات المرور غير متوافقة");  
    }
}
</script>
</body>
</html>