<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
      integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
      crossorigin="anonymous"
    />
    <link rel="icon" href="../images/blood-bank-logo.jpg" />

    <link rel="stylesheet" href="../styles/css/style.css" />
    <style>
      body{
        background-image: linear-gradient(180deg,#ffffff,#f5bac1);
      }
    </style>
    <title>Admin Home</title>
  </head>
  <body>    
    <nav class="navbar navbar-expand-lg navbar-light bg-danger">
      <a class="navbar-brand" href="index.html"
        ><img
          src="../images/blood-bank-logo.jpg"
          height="40px"
          width="50px"
          class="logo"
      /></a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li>
            <a class="nav-link" href="../index.html" style="color: white;"
              >Blood Bank</a
            >
          </li>
          <li>
            <a class="nav-link" href="../aboutus.html" style="color: white;"
              >About Us</a
            >
          </li>
          <li>
            <a class="nav-link" href="../contactUs.html" style="color: white;"
              >Contact Us</a
            >
          </li>
        </ul>
        
      </div>
    </nav>

    
    
    <div class="heading" style="margin-top: 100px;">
      <h1 align="center" class="heading">Admin Home</h1>
    </div>
    
    <form action="adminHome.php" method="GET">
      <div class="container">
        <div class="row" >
          <div class="col col-lg-6">
            <button class="btn btn-danger" style="margin-left: 30%" name = "refresh">Refresh</button> 
          </div> 
          <div class="col col-lg-6">          
            <button class="btn btn-danger" style="margin-left: 30%" name = "update">Update Records</button>
          </div>
        </div>
      </div>
    </form>

    <?php
        if(isset($_GET['refresh'])){
          header("Location:adminHome.php");
        }
    ?>

    <?php
      if(isset($_GET['update'])){
        header("Location:adminupdate.php");
      }
    ?>

    <form action="adminHome.php" method="GET">
      
    </form>

    <h2 align="center" style="color: #d9534f; margin-top: 50px; padding: 10px;" class="admin-page-heading">Details of Requesters:</h2>
    <div class="container" id="req" style="margin-bottom: 150px;">
      <table class="table table-hovarable table-bordered table-hover">
        <thead class="thead-dark">
          <tr align="center">
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>E-mail</th>
            <th>Phone</th>
            <th>Blood Type</th>
            <th>Amount</th>
            <th>Address</th>
            <th>City</th>            
            <th>Action</th>
          </tr>
        </thead>
        <tbody align="center">
          <!-- PHP Goes Here -->          
          <?php
              $connection = mysqli_connect("localhost","root","","bloodbank");

              $query = "select * from requests";

              $result = mysqli_query($connection, $query);
              while($row = mysqli_fetch_assoc($result)){
                echo '<tr >';
                echo '<td>'.$row['id'].'</td>';
                echo '<td>'.$row['first_name'].'</td>';
                echo '<td>'.$row['last_name'].'</td>';
                echo '<td>'.$row['email'].'</td>';
                echo '<td>'.$row['phone'].'</td>';
                echo '<td>'.$row['blood'].'</td>';
                echo '<td>'.$row['amount'].'</td>';
                echo '<td>'.$row['user_address'].'</td>';
                echo '<td>'.$row['city'].'</td>';                  
                echo '<td><a href="deleterequest.php?id='.$row['id'].'">Delete this Record</a></td>';
                echo '</tr>';
              }
          ?>          
        </tbody>
      </table>
    </div>

    <h2 align="center" style="color: #d9534f; margin-top: 50px; padding: 10px;" class="admin-page-heading">Details of Donors:</h2>
    <div class="container" id="donor" style="margin-bottom: 150px;">
      <table class="table table-hovarable table-bordered table-hover">
        <thead class="thead-dark">
          <tr align="center">
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>E-mail</th>
            <th>Phone</th>
            <th>Blood Type</th>
            <th>Last Donated Date</th>
            <th>Address</th>
            <th>City</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody align="center">
          <!-- PHP Goes Here -->
          <?php
            $connection = mysqli_connect("localhost","root","","bloodbank");

            $query = "select * from donors";

            $result = mysqli_query($connection, $query);
            while($row = mysqli_fetch_assoc($result)){
              echo '<tr>';
              echo '<td>'.$row['did'].'</td>';
              echo '<td>'.$row['first_name'].'</td>';
              echo '<td>'.$row['last_name'].'</td>';
              echo '<td>'.$row['email'].'</td>';
              echo '<td>'.$row['phone'].'</td>';
              echo '<td>'.$row['blood'].'</td>';
              echo '<td>'.$row['last_date'].'</td>';
              echo '<td>'.$row['user_address'].'</td>';
              echo '<td>'.$row['city'].'</td>';
              echo '<td>'.$row['age'].'</td>';
              echo '<td>'.$row['gender'].'</td>';
              echo '<td><a href="deletedonor.php?did='.$row['did'].'">Delete this Record</a></td>';
              echo '</tr>';
            }
          ?>
          
        </tbody>
      </table>
    </div>

    <h2 align="center" style="color: #d9534f; margin-top: 30px; padding: 10px;" class="admin-page-heading">Blood Bank Status:</h2>
    <div class="container">
      <table class="table table-bordered table-hovarable table-hover">
        <thead class="thead-dark">
            <tr align="center">
                <th>ID</th>                
                <th>Type</th>
                <th>Amount</th>
                <th>Branch</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody align="center">
          <!-- PHP Goes Here -->
          <?php
            $connection = mysqli_connect("localhost","root","","bloodbank");

            $query = "select * from blood_storage";
            $result = mysqli_query($connection, $query);
            while($row = mysqli_fetch_assoc($result)){
              echo '<tr>';
              echo '<td>'.$row['bid'].'</td>';
              echo '<td>'.$row['blood_type'].'</td>';
              echo '<td>'.$row['amount'].'</td>';
              echo '<td>'.$row['city'].'</td>';
              echo '<td><a href="deleteblood.php?bid='.$row['bid'].'">Delete this Record</a></td>';
              echo '</tr>';
            }
            
          ?> 
               
        </tbody>
      </table>
    </div>
    <div class="footer bg-danger">
      <p style="padding: 5px 5px 1px 5px;">© 2020 DrizzleWebs</p>
    </form>
  </body>
  <script
    src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
    crossorigin="anonymous"
  ></script>
</html>
