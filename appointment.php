<?php
$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$db_name = 'mecura_db'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
  die ('Failed to connect to MySQL: ' . mysqli_connect_error());  
}
     $sql = "SELECT * FROM appointment";
      $query = mysqli_query($conn,$sql);


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
        <!-- Place favicon.ico in the root directory -->
        <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/nav.css">
        <link rel="stylesheet" href="css/list.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" type="text/css" href="css/doc.css">
        <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
        <script src="js/bootstrap.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


  
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
  <section class="list">
    <div class="container">
        
  <div class="container" >
  <table class="table table-bordered table-hover table-responsive data-toggle" style="background-color: #ffffff; opacity: 0.9">
    <thead>
      <tr>
        <th>No</th>
        <th>Patient ID</th>
        <th>Name</th>
        <th>Age</th>
        <th>Gender</th>
        <th>Contact</th>
        <th>Address</th>
        <th>Doctor</th>
        <th>Appointment Date</th>
        <th>Time</th>
        <th>Booking Time</th>
      </tr>
    </thead>
    <tbody>
    <?php
    $no   = 1;
    $total  = 0;
    while ($row = mysqli_fetch_array($query))
    {
      
      echo '<tr>
          <td>'.$no.'</td>
          <td>'.$row['p_id'].'</td>
          <td>'.$row['p_name'].'</td>
          <td>'.$row['p_age']. '</td>
          <td>'.$row['p_sex'].'</td>
          <td>'.$row['p_mbl'].'</td>
          <td>'.$row['p_add']. '</td>
          <td>'.$row['p_doc'].'</td>
          <td>'.$row['p_date'].'</td>
          <td>'.$row['p_day']. '</td>
          <td>'.$row['p_time'].'</td>
        </tr>';
      $no++;
    }?>
    </tbody>
  </table>
</div>
</section>
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
