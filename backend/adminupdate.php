bd<!DOCTYPE html>
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
        <title>Update Blood Record</title>
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
                        <a class="nav-link" href="../index.html" style="color: white;"
                            >Blood Bank</a
                        >
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../aboutus.html" style="color: white;"
                            >About Us</a
                        >
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../contactUs.html" style="color: white;"
                            >Contact Us</a
                        >
                    </li>
                </ul>
            </div>
        </nav>

        <form action="adminupdate.php" method="GET"> 
            <div class="container" style="margin-top: 150px;">
                <h2 style="color: #d9534f;">Select details update:</h2>
                <div class="row" style="padding: 20px;">
                    <div class="col col-lr-4">
                        <label class="font-weight-bold" style="color: #d9534f;">City:</label>
                        <select class="custom-select" name="city">
                            <option>Bengaluru</option>
                            <option>Chennai</option>
                            <option>Hyderabad</option>
                            <option>Kochi</option>
                            <option>Mangaluru</option>
                            <option>Mumbai</option>
                            <option>Pune</option>
                        </select>
                    </div>
                    <div class="col col-lr-4">
                        <label class="font-weight-bold" style="color: #d9534f;">Blood Group:</label>
                        <select class="custom-select" name="bloodtype">
                            <option>O+</option>
                            <option>O-</option>
                            <option>A+</option>
                            <option>A-</option>
                            <option>B+</option>
                            <option>B-</option>
                            <option>AB+</option>
                            <option>AB-</option>
                        </select>
                    </div>
                    <div class="col col-lr-4">
                        <label class="font-weight-bold" style="color: #d9534f;">Amount:</label>
                        <input
                            type="number"
                            name="updateAmount"
                            class="form-control"
                            placeholder="Increse Amount By"
                        />
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-lg-12">
                        <button class="btn btn-danger" style="width: 100%;" name="sbtbtn">
                            Submit
                        </button>
                    </div>
                </div>
            </div>
        </form>
        <div class="container-fluid">
            <div class="row" style="margin-left: 30%;">
                <div class="col col-lr-12">
                    <?php
                        if(isset($_GET['sbtbtn'])){
                            $city = $_GET['city'];
                            $group = $_GET['bloodtype'];
                            $amount_offset =$_GET['updateAmount'];

                            // echo $city.'<br>';
                            // echo $group.'<br>';
                            // echo var_dump($amount_offset);
                            // $amount_offset = (int)$amount_offset;
                            // echo var_dump($amount_offset);
                            $connection = mysqli_connect("localhost","root","","bloodbank");
                            $query = "UPDATE blood_storage SET amount = amount + '$amount_offset' where city = '$city' and blood_type = '$group'";                  
                            
                            if($connection->query($query) === TRUE){
                                $sql = "SELECT amount FROM blood_storage where blood_type = '$group' and city = '$city'";

                                $result = mysqli_query($connection, $sql);
                                while($row = mysqli_fetch_assoc($result)){
                                    echo '<div class="alert alert-success" role="alert" style="width: 50%; text-align: center;"">';
                                    echo 'The amount has been increased to '.$row['amount'].'</br>';
                                    echo '<a href="adminHome.php"><button class="btn btn-outline-success">Click to go back</button></a></div>';
                                }
                            }
                            else{
                                echo "Error updating record.";
                            }
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
