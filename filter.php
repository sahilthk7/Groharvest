
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GroHarvest</title>
    <link rel="apple-touch-icon" sizes="180x180" href="./images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon-16x16.png">
    <link rel="manifest" href="./images/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./style.css"/>
    <style>
        body{
            background: url(./images/filter.png);
            
        }
    </style>

</head>



<body>
    <nav class="menu menu-1" style="opacity:80%;">

        <ul>
          <li><a href="./index.html">home</a></li>
          <li><a href="./GroHarvest/index.html">Crop Bazaar</a></li>
          <li><a href="./login.html">log in</a></li>
          <li ><a href="./admin.html" ><img src="./images/logo_main.png"  class="logo-button"></a></li>
          <li><a href="./otherschemes.html">other schemes</a></li>
          <li><a href="./helpline1.html">helpline</a></li>
        </ul>
      </nav>
      
      
      <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 style="text-align:center;"></h4>
                        <iframe title="farmerdata" width="1070" height="700" src="https://app.powerbi.com/view?r=eyJrIjoiNjBiODIxMDYtOGIxYi00N2I1LTkyYzctOWU3ODQ4NGEwYTg3IiwidCI6ImMwNGViMjI2LWEyNDEtNDc4OS1hOGJkLTI5M2M4NjNkNDc4MSJ9" frameborder="0" allowFullScreen="true"></iframe>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="min_income">Min. Income</label>
                                    <input type="number" name="min_income" value="<?php echo isset($_POST['min_income']) ? $_POST['min_income'] : '0'; ?>" class="form-control">
                                </div>
                                <div class="col-md-2">
                                    <label for="max_income">Max. Income</label>
                                    <input type="number" name="max_income" value="<?php echo isset($_POST['max_income']) ? $_POST['max_income'] : '9999999'; ?>" class="form-control">
                                </div>
                              
            <div class="col-md-2">
                <label for="min_kgprice">Min. KG-Price</label>
                <input type="number" name="min_kgprice" value="<?php echo isset($_POST['min_kgprice']) ? $_POST['min_kgprice'] : '0'; ?>" class="form-control">
            </div>
            <div class="col-md-2">
                <label for="max_kgprice">Max. KG-Price</label>
                <input type="number" name="max_kgprice" value="<?php echo isset($_POST['max_kgprice']) ? $_POST['max_kgprice'] : '9999'; ?>" class="form-control">
            </div>
            <div class="col-md-2">
            <label for="state">STATE</label>
                        <select name="state">
                        <option value="">--select--</option>
                            <option value="arunachalpradesh">Arunachal Pradesh</option>
                            <option value="assam">Assam</option>
                            <option value="bihar">Bihar</option>
                            <option value="chhattisgarh">Chhattisgarh</option>
                            <option value="goa">Goa</option>
                            <option value="gujarat">Gujarat</option>
                            <option value="haryana">Haryana</option>
                            <option value="himachalpradesh">Himachal Pradesh</option>
                            <option value="jharkhand">Jharkhand</option>
                            <option value="karnataka">Karnataka</option>
                            <option value="kerala">Kerala</option>
                            <option value="madhyapradesh">Madhya Pradesh</option>
                            <option value="maharashtra">Maharashtra</option>
                            <option value="manipur">Manipur</option>
                            <option value="meghalaya">Meghalaya</option>
                            <option value="mizoram">Mizoram</option>
                            <option value="nagaland">Nagaland</option>
                            <option value="odisha">Odisha</option>
                            <option value="punjab">Punjab</option>
                            <option value="rajasthan">Rajasthan</option>
                            <option value="sikkim">Sikkim</option>
                            <option value="tamilnadu">Tamil Nadu</option>
                            <option value="telangana">Telangana</option>
                            <option value="tripura">Tripura</option>
                            <option value="uttarpradesh">Uttar Pradesh</option>
                            <option value="uttarakhand">Uttarakhand</option>
                            <option value="westbengal">West Bengal</option>
                            <option value="jammukashmir">J & K</option>
                        </select>
                                </div>
                            
                            <div class="col-md-2">
                            <label for="crop">Crop Harvested</label>
                <select name="crop">
                <option value="">--select--</option>
                    <option value="rice">Rice</option>
                    <option value="wheat">Wheat</option>
                    <option value="sugarcane">Sugarcane</option>
                    <option value="millet">Millet</option>
                    <option value="corn">Corn</option>
                </select>
            </div>
</div>
                            <div class="row mt-2">
                                <div class="col-md-9" style="margin-left:45%;">
                                    <input type="submit" value="Filter" class="btn btn-primary">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-12 mt-4">
                <div class="row">
                    <?php
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "nationals";
                        $con = mysqli_connect($servername,$username,$password,$dbname);

                    if (!$con) {
                        die("Connection failed: " . mysqli_connect_error());
                    }

                    $query = "SELECT * FROM `entry`";
                    
                    if (isset($_POST['min_income']) && isset($_POST['max_income']) && isset($_POST['state']) && isset($_POST['crop']) && isset($_POST['min_kgprice']) && isset($_POST['max_kgprice'])) {
                        $minincome = $_POST['min_income'];
                        $maxincome = $_POST['max_income'];
                        $state = $_POST['state'];
                        $crop = $_POST['crop'];
                        $min_kgprice = $_POST['min_kgprice'];
                        $max_kgprice = $_POST['max_kgprice'];
                    
                        $query = "SELECT * FROM entry WHERE income BETWEEN $minincome AND $maxincome";
                    
                        if (!empty($state)) {
                            $query .= " AND state = '$state'";
                        }
                    
                        if (!empty($crop)) {
                            $query .= " AND crop = '$crop'";
                        }
                    
                        $query .= " AND kgprice BETWEEN $min_kgprice AND $max_kgprice";
                    } else {
                        $query = "SELECT * FROM entry";
                    }
                    

                    $query_run = mysqli_query($con, $query);

                    if (mysqli_num_rows($query_run) > 0) {
                        while ($items = mysqli_fetch_assoc($query_run)) {
                            ?>
                            <div class="col-md-4">
                                <div class="card mt-4">
                                    <div class="card-body">
                                        <h5 class="card-title">UID:<?php echo $items['uid']; ?></h5>
                                        <p class="card-text">Income: $<?php echo $items['income']; ?></p>
                                        <p class="card-text">State: <?php echo $items['state']; ?></p>
                                        <p class="card-text">Crop: <?php echo $items['crop']; ?></p>
                                        <p class="card-text">KG-price: <?php echo $items['kgprice']; ?></p>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    } else {
                        echo "<div class='col-md-12 mt-4'><h3>No Data Found!</h3></div>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

      <footer class="footer">
      <p style="text-align:center; color:white">© Made By CapsLock💚</p>

    </div>
  </footer>

    <script src="./index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>