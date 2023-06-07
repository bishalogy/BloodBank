dd<!DOCTYPE html>
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
        <title>Details of Enquiry</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-danger">
            <a class="navbar-brand" href="index.html"
                ><img src="../images/blood-bank-logo.jpg" height="40px" width="50px" class="logo"
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
                    <li class="nav-item active">
                        <a class="nav-link" href="../index.html" style="color: white;">Blood Bank</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../aboutus.html" style="color: white;">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../contactUs.html" style="color: white;"
                            >Contact Us</a
                        >
                    </li>
                </ul>
                <ul class="navbar-nav mr-right">
                    <li class="nav-item active">
                        <a class="nav-link" href="../adminLogin.html" style="color: white;"
                            >Admin Login</a
                        >
                    </li>
                </ul>
            </div>
        </nav>
        
        <div class="container-fluid">
            <div class="row" style="margin-left: 30%; margin-top: 20%;">
                <div class="col col-lr-12">
                    
                        <?php
                            if(isset($_GET['submit-btn'])){
                                $type = $_GET['bloodtype'];
                                $amount = $_GET['amount'];
                                $city = $_GET['city'];
                                // Testing purposes
                                // echo $type;
                                // echo '<br>';
                                // echo $amount;

                                $connection = mysqli_connect("localhost","root","","bloodbank");

                                $query = "select * from blood_storage where blood_type ='".$type."' and amount >= ".$amount." and city = '".$city."'";
                                $qryobj = mysqli_query($connection, $query);
                                $row = mysqli_fetch_assoc($qryobj);
                                if($row == null){
                                    echo '<div class="alert alert-danger" role="alert"style="width: 50%; text-align: center;""><p>Unfortunately the requested amount of blood is not available in '.$city.'.</p>';
                                    echo '<a href="../enquire.html"><button class="btn btn-outline-danger">Click to go back</button></a></div>';
                                }
                                else{
                                    echo '<div class="alert alert-success" role="alert" style="width: 50%; text-align: center;"">';
                                    echo '<p>The blood type '.$type.' is available in '.$city.'.</p>';
                                    echo '<a href="../index.html"><button class="btn btn-outline-success">Click to go back</button></a></div>';
                                }
                            }
                            else{
                                header("Location: ../enquire.html");
                            } 
                        ?>                                       
                </div>
            </div>
        </div>
        
        <div class="footer bg-danger">
            <p style="padding: 5px 5px 1px 5px;">© 2020 DrizzleWebs</p>
        </div>
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
