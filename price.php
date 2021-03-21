<?php
require_once("config.php");
if ($auth->isLoggedIn()) {
  
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mygallery";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>

<body>
    <?php 
        require("header.php");
    ?>
    <div class="container-fluid">
        <div class="row">
            <h2 style="margin-left: 1%; margin-top: 1%;">Your Ztorex</h2>


            <div class="col-sm-9 ">
                <div class="card bg-light">
                    <div class="card-body">
                        <div class="form-group row">
                          <form method="POST" action="search.php">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Search:</label>
                            <div class="col-sm-4">
                                <input type="text" name="search" class="form-control"><input type="submit" style="visibility: hidden;" />
                            </div>
                          </form>
                        </div>
                        <div class="row">
                            <div
                                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3">
                                <div class="btn-toolbar mb-2 mb-md-0">
                                </div>
                            </div>
                            <nav class="col-md-3 d-none d-md-block sidebar">
                                <div class="sidebar-sticky">
                                    <ul class="nav flex-column">

                                        <li class="nav-item">
                                            <a class="nav-link active" href="property.php">
                                                <span data-feather="home"></span>
                                                Property </span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="room_type.php">
                                                <span data-feather="file"></span>
                                                Room Type
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="area.php">
                                                <span data-feather="shopping-cart"></span>
                                                Area
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="brand.php">
                                                <span data-feather="users"></span>
                                                Brand
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="model.php">
                                                <span data-feather="bar-chart-2"></span>
                                                Model
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="version.php">
                                                <span data-feather="layers"></span>
                                                Version
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="categories.php">
                                                <span data-feather="layers"></span>
                                                Categories
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="price.php">
                                                <span data-feather="layers"></span>
                                                Price
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="data_purchased.php">
                                                <span data-feather="layers"></span>
                                                Date purchased
                                            </a>
                                        </li>
                                    </ul>


                                </div>
                            </nav>


                            <main role="main" class="col-lg-9">

                                <div class="row">

                                <?php 
                                 $id = $auth->getUserId();
                                $sql = "SELECT * FROM form_submission Where user_id = '".$id."' ORDER BY price ASC";
                                $result = $conn->query($sql);
                                
                                if ($result->num_rows > 0) {
                                  // output data of each row
                                  while($row = $result->fetch_assoc()) {
                                
                                ?>

                                    <div class="col-sm-4" style="margin-top: 1%;">
                                        <div class="card">
                                            <div class="card-body">
                                                <img src="uploads/<?php echo $row['picture'] ?>" width="180" height="180">
                                                <p> <?php echo "<strong>".$row['item_name']."</strong>" ?><br>
                                                <?php echo $row['price'] ?>
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                
                                <?php 
                                }
                              } else {
                                echo "No result Found";
                              }
                              ?>

                                </div>

                            </main>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-sm-3" style="margin-top: -3.5%;">
                <div class="card">
                    <div class="card-body bg-light">
                        <h4><strong>Menu</strong></h4>
                        <div class="MenuLine"></div><br>
                        <?php
                    $username = $auth->getUsername();
                        echo 'Hi, '.$username;
                    ?>
                        <br>
                        <a href="home.php">New Submission</a>
                        <br>
                        <a href="user_account.php">Your Profile</a>
                        <br><br>
                        <a class="btn btn-primary" href="logout.php">Log out</a>


                    </div>
                </div>
            </div>
        </div>


    </div>

</body>

</html>

<style>
.line {
    padding-bottom: 10px;
    border-bottom-style: solid;
    border-width: 1px;
    width: 98%;
}

.menu {
    background-color: #f7f7f7;
    width: 90%;
}

.MenuLine {
    padding-bottom: 3px;
    border-bottom-style: solid;
    border-width: 0.1px;
    color: gray;
}

.backgroundColor {
    background-color: #f7f7f7;
    width: 99%;
}
</style>
<?php
}
else {
    header("Location:login-form.php");
    die();
}