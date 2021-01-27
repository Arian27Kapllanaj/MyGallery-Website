<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
    <?php 
        require("header.php");
        require("authentication.php");
    ?>
    <div style="display: inline;">
        <div style="float: left; width: 80%">
            <h4>Your Ztorex</h4>
            <div class="line"></div><br>
            <div class="backgroundColor"><br>
            <div class="input-group">
                <div class="form-outline">
                    <label for="search">Search</label>
                        <input type="search" id="form1"/>
            <br><br>
            <button type="button" class="btn btn-light"><strong>Filter</strong></button><br>
            <button type="button" class="btn btn-light">Property</button><br>
            <button type="button" class="btn btn-light">Room Type</button><br>
            <button type="button" class="btn btn-light">Area</button><br>
            <button type="button" class="btn btn-light">Brand</button><br>
            <button type="button" class="btn btn-light">Model</button><br>
            <button type="button" class="btn btn-light">Version</button><br>
            <button type="button" class="btn btn-light">Categories</button><br>
            <button type="button" class="btn btn-light">Price</button><br>
            <button type="button" class="btn btn-light">Data Purchased</button><br>
            </div>           
        </div>
                    
    </div>
        </div>

        <div style="float: right; width: 20%">
        <br>
            <div class="menu">
                    <h4><strong>Menu</strong></h4>
                        <div class="MenuLine"></div><br>
                            <?  
                                echo $_SESSION['username'];
                            ?>
                            <br>
                        <a href="user_account.php">Your Ztorex</a>
                        <br>
                        <a href="submission.php">New Submission</a>
                        <br><br>
                        <a class="btn btn-primary" href="logout.php">Log out</a>

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