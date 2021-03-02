<?php

$db = mysqli_connect('localhost', 'root', '', 'mygallery');

if (isset($_POST['submitdata'])) {
    insertData();
}

function insertData(){

    global $db;
      if( file_exists($_FILES['image']['tmp_name']) ){

        $arr_file_types = ['image/png', 'image/gif', 'image/jpg', 'image/jpeg'];

        if (!(in_array($_FILES['image']['type'], $arr_file_types))) {
        echo "Wrong image format";
        return;
        }

     }

    if (!file_exists('uploads')) {
        mkdir('uploads', 0777);
    }

    move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/' . time() . '_' . $_FILES['image']['name']);
    move_uploaded_file($_FILES['picture']['tmp_name'], 'uploads/' . time() . '_' . $_FILES['picture']['name']);
    move_uploaded_file($_FILES['location1']['tmp_name'], 'uploads/' . time() . '_' . $_FILES['location1']['name']);
    move_uploaded_file($_FILES['location2']['tmp_name'], 'uploads/' . time() . '_' . $_FILES['location2']['name']);
   
    $user_id = $_POST['userid'];
    $itemName= $_POST['itemName'];
    $property = $_POST['property'];
    $roomType = $_POST['roomType'];
    $area = $_POST['area'];
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $version = $_POST['version'];
    $categories = $_POST['categories'];
  	$tags = $_POST['tags'];
    $notes = $_POST['notes'];
    $linkToOtherItem= $_POST['linkToOtherItem'];
    $price = $_POST['price'];
    $dataPurchased = $_POST['dataPurchased'];
    $sku = $_POST['sku'];
    $image = time() . '_' . $_FILES['image']['name'];
    $picture = time() . '_' . $_FILES['picture']['name'];
    $location1 = time() . '_' . $_FILES['location1']['name'];
    $location2 = time() . '_' . $_FILES['location2']['name'];

    $sql = "INSERT INTO form_submission (user_id,item_name,property,room_type,area,brand,model,version,notes,categories,tags,link_to_otherItem,price,data_purchased,image,picture,location1,location2,sku)
	 VALUES ('$user_id','$itemName','$property','$roomType','$area','$brand','$model','$version','$notes','$categories','$tags', '$linkToOtherItem','$price','$dataPurchased','$image','$picture','$location1','$location2','$sku')";
    if (mysqli_query($db, $sql)) {
        echo "New record created successfully !";
        //header('Location:home.php');
    }
    else{
        echo "error";
    }

} ?>
    <script>
        var timer = setTimeout(function() {
            window.location='home.php';
        }, 1000);
    </script>