<?php
$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$db_name = 'mecura_db'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
  die ('Failed to connect to MySQL: ' . mysqli_connect_error());  
}
$query = "NULL";
if($_SERVER["REQUEST_METHOD"] == "POST") {
       
      $myusername = $_GET["id"];
      $sql1 = "SELECT * FROM doc WHERE did = '$myusername'";
      $result = mysqli_query($conn,$sql1);
      $sql2 = "SELECT * FROM available WHERE did = '$myusername'";
      $query = mysqli_query($conn,$sql2);
      
}
?>
<html>
<head>
  <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Mecura Health</title>
        <link rel="icon" href="img/favicon.png" type="image/x-icon">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/nav.css"> -->
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" type="text/css" href="css/doc.css">
        <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
        <script src="js/bootstrap.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script> 
          $(function() { 
          $( "#datepicker" ).datepicker(); 
          }); 
        </script>

  
</head>
<body>
  <!-- nav bar -->
        <section class="sct-all container-fluid">
    <div class="navbar navbar-default nav-custom navbar-fixed-top">
      <div class="container-fluid" style="background-color: #333;">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#Main-nav">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
          <a class="navbar-brand company-name" href="#" ><h3>Mecura <span>Health</span></h3></a>
        </div>
        <div class="collapse navbar-collapse" id="Main-nav">
          <ul class="nav navbar-nav navbar-right">
              <li><a href="#">Home</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Doctors</a></li>
              <li><a href="#">Careers</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">Mecura Child</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
        <!-- End of nav bar -->
  <section class="doc">
    <div class="container-fluid">
      <h2>Book Apointment</h2>
      <form action="<?php $_PHP_SELF ?>" method="POST">
        <div class="col-md-6">
          <div class="form-group">
            <label for="name">Full Name</label>
            <input type="text" class="form-control" placeholder="Full name" name="name" required>
          </div>
          <div class="form-group">
            <label for="age">Age</label>
            <input type="text" class="form-control" maxlength="2" placeholder="00" name="age" required>
          </div>
          <div class="form-group">
            <label for="mbl">Mobile</label>
            <input type="text" class="form-control bfh-phone" maxlength="10" placeholder="9996663333" name="mbl" required>
          </div>
          <div class="form-group">
            <label for="add">Address</label>
            <input type="text" class="form-control" placeholder="Address" name="add"  required>
          </div>
          <div class="form-group">
            <label for="add">Gender</label><br>
            <label class="radio-inline"><input type="radio" name="gender" value="male" required>Male</label>
            <label class="radio-inline"><input type="radio" name="gender" value="female" required>Female</label>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="doctor">Doctor</label>
            <input type="text" class="form-control" value="<?php 
            $row = mysqli_fetch_array($result);
            echo $row['doctor'];?>" name="doc" readonly>
          </div>
        <div class="form-group">
          <?php
            while ($row = mysqli_fetch_array($query))
            {
              if($row['mon']=='y')
              {
                echo  '<label><input type="radio" value="Monday '.$row['time'].'" name="day" required>Mon '.$row['time'].'</label><br>';
              }
              if($row['tue']=='y')
              {
                echo  '<label><input type="radio" value="Tuesday '.$row['time'].'" name="day" required required>Tue '.$row['time'].'</label><br>';
              }
             if($row['wed']=='y')
              {
                echo  '<label><input type="radio" value="Wednesday '.$row['time'].'" name="day" required>Wed '.$row['time'].'</label><br>';
              }
              if($row['thr']=='y')
              {
                echo  '<label><input type="radio" value="Thursday '.$row['time'].'" name="day" required>thr '.$row['time'].'</label><br>';
              }
             if($row['fri']=='y')
              {
                echo  '<label><input type="radio" value="Friday '.$row['time'].'" name="day" required>Fri '.$row['time'].'</label><br>';
              }
             if($row['sat']=='y')
              {
                echo  '<label><input type="radio" value="Saturday '.$row['time'].'" name="day" required>Sat '.$row['time'].'</label><br>';
              }
             if($row['sun']=='y')
              {
                echo  '<label><input type="radio" value="Sunday '.$row['time'].'" name="day" required>Sun '.$row['time'].'</label><br>';
              }   
            }
          ?>
        </div>
        <div>
          <label>Date</label>
          <input type="text" name="date" id="datepicker">
        </div>
        <br>
        <br>
        <button type="submit" name="update" id="update" class="btn btn-default">Submit</button>
        <button type="Reset" class="btn btn-default">Reset</button>
        </div>
      </form>
    </div>
  </section>

  <?php
  if(isset($_POST['update']))
  {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $age = mysqli_real_escape_string($conn, $_POST['age']);
    $mobile = mysqli_real_escape_string($conn, $_POST['mbl']);
    $add = mysqli_real_escape_string($conn, $_POST['add']);
    $gen = mysqli_real_escape_string($conn, $_POST['gender']);
    $doc = mysqli_real_escape_string($conn, $_POST['doc']);
    $time = mysqli_real_escape_string($conn, $_POST['day']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);
  
  $sql3 = "INSERT INTO appointment (p_name, p_age, p_mbl, p_add, p_sex, p_doc, p_date, p_day, did, p_time) VALUES ('$name', $age, $mobile, '$add', '$gen', '$doc', $date, '$time', $myusername, now())";
  if (mysqli_query($conn, $sql3)) {
    echo '<script language="javascript">';
    echo 'alert("Appointment booked");';
    echo 'window.location.href = "index.html";';
    echo '</script>';

  } else {
    echo '<script language="javascript">';
    echo 'alert("data inappropriate");';
    echo 'window.location.href = "index.html";';
    echo '</script>';
  }
  }
?>
    
         
  <!-- Footer -->
        <footer>
            <div class="footer-all">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-5">
                            <img src="img/mecuralogo.png" height="40" alt="Mecura"><br><br>
                            <p>
                                <a href="#">Home</a>
                                <a href="#">Services</a>
                                <a href="#">Doctors</a>
                                <a href="#">Careers</a>
                                <a href="#">About</a>
                                <a href="#">Mecura Child</a>
                            </p>
                        </div>
                        <div class="col-md-3">
                            <h3>Contact Us</h3>
                            <p class="fa fa-location-arrow"><span class="footer-p">  4G M. M. Ali Road Kidderpore </span><br>  Kolkata, India</p>
                            <p class="fa fa-location-arrow">  Mecura eClinic:<span class="footer-p"> 38 Dent Mission Road kidderpore</span><br> Kolkata :700023  
                            <p class="fa fa-phone-square">  +91 80170 12294</p>
                            <p><a href="mailto:info@mecurahealth.com">info@mecurahealth.com</a></p>
                        </div>
                        <div class="col-md-4">
                            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FMecuraIndia&tabs=timeline&width=280&height=500&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=313582392097066" width="280" height="200" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="row">
                    <div class="col-md-12">
                        <p >Mecura Health &copy; 2017</p>                        
                    </div>
                </div>
            </div>
        </footer>
        <!-- end of footer -->
        <script type="text/javascript">
          function jsfunction(){
            document.write("RoadRoasndasnkjcnkjdnckjsdnckjsdncj");
              $("#myModal").modal("show");}
        </script>
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>

