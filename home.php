<?php
require_once("config.php");
if ($auth->isLoggedIn()) {
    require('header.php');
}
else {
    header("Location:login-form.php");
    die();
}
?>
 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Submission</title>
     <link rel="stylesheet" href="https://unpkg.com/@yaireo/dragsort/dist/dragsort.css" media="print"
         onload="this.media='all'">
     <link rel="stylesheet" href="dist/tagify.css">
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <link rel="stylesheet" type="text/css" href="css/normalize.css" />
     <link rel="stylesheet" type="text/css" href="css/demo.css" />
     <link rel="stylesheet" type="text/css" href="css/component.css" />



 </head>

 <body>
     <div class="container-fluid">
         <div class="row">
             <h2 style="margin-left: 1%; margin-top: 1%;">New Submission</h2>
             <div class="col-sm-9 ">
                 <div class="card bg-light">
                     <div class="card-body">

                         <div class="row">

                             <main role="main" class="col-lg-12">

                                 <div class="row">

                                     <form action="submission.php" method="POST" enctype="multipart/form-data">
                                         <input type="hidden" name="userid" value="<?php echo $auth->getUserId(); ?>">
                                         <div class="row">
                                             <div class="col-md-8">
                                                 <div class="form-group row">
                                                     <label for="inputEmail" class="col-sm-2 col-form-label">Item
                                                         Name:</label>
                                                     <div class="col-sm-10">
                                                         <input type="text" class="form-control" name="itemName">

                                                     </div>
                                                 </div><br><br>
                                                 <div class="form-group row">
                                                     <label for="inputEmail"
                                                         class="col-sm-2 col-form-label">Property:</label>
                                                     <div class="col-sm-10">
                                                         <input type="text" class="form-control" name="property">

                                                     </div>
                                                 </div><br>
                                                 <div class="form-group row">
                                                     <label for="inputEmail" class="col-sm-2 col-form-label">Room
                                                         Type:</label>
                                                     <div class="col-sm-10">
                                                         <input type="text" class="form-control" name="roomType">

                                                     </div>
                                                 </div><br>
                                                 <div class="form-group row">
                                                     <label for="inputEmail"
                                                         class="col-sm-2 col-form-label">Area:</label>
                                                     <div class="col-sm-10">
                                                         <input type="text" class="form-control" name="area">

                                                     </div>
                                                 </div><br><br>
                                                 <div class="form-group row">
                                                     <label for="inputEmail"
                                                         class="col-sm-2 col-form-label">Brand:</label>
                                                     <div class="col-sm-10">
                                                         <input type="text" class="form-control" name="brand">

                                                     </div>
                                                 </div><br>
                                                 <div class="form-group row">
                                                     <label for="inputEmail"
                                                         class="col-sm-2 col-form-label">Model:</label>
                                                     <div class="col-sm-10">
                                                         <input type="text" class="form-control" name="model">

                                                     </div>
                                                 </div><br>
                                                 <div class="form-group row">
                                                     <label for="inputEmail"
                                                         class="col-sm-2 col-form-label">Version:</label>
                                                     <div class="col-sm-10">
                                                         <input type="text" class="form-control" name="version">
                                                     </div>
                                                 </div><br>
                                                 <div class="form-group row">
                                                     <label for="inputEmail"
                                                         class="col-sm-2 col-form-label">Notes:</label>
                                                     <div class="col-sm-10">
                                                         <textarea class="form-control" name="notes" cols="30"
                                                             rows="3"></textarea>
                                                     </div>
                                                 </div><br>
                                                 <div class="form-group row">
                                                     <label for="inputEmail"
                                                         class="col-sm-2 col-form-label">Categories:</label>
                                                     <div class="col-sm-10">
                                                         <input type="text" class="form-control" name="categories">
                                                     </div>
                                                 </div><br><br>

                                                 <div class="form-group row">
                                                     <label for="inputEmail"
                                                         class="col-sm-2 col-form-label">Tags:</label>
                                                     <div class="col-sm-10">
                                                         <input type="text" class="form-control" name="tags">

                                                     </div>
                                                 </div><br>
                                                 <div class="form-group row">
                                                     <label for="inputEmail" class="col-sm-4 col-form-label">Link to
                                                         other item:</label>
                                                     <div class="col-sm-8">
                                                         <input type="text" class="form-control" name="linkToOtherItem">

                                                     </div>
                                                 </div><br>
                                                 <div class="form-group row">
                                                     <label for="inputEmail"
                                                         class="col-sm-2 col-form-label">Price:</label>
                                                     <div class="col-sm-10">
                                                         <input type="text" class="form-control" name="price">

                                                     </div>
                                                 </div><br>
                                                 <div class="form-group row">
                                                     <label for="inputEmail" class="col-sm-3 col-form-label">Data
                                                         Purchased:</label>
                                                     <div class="col-sm-9">
                                                         <input type="date" class="form-control" name="dataPurchased">

                                                     </div>
                                                 </div><br>

                                                 <div class="form-group row">
                                                     <label for="inputEmail" class="col-sm-8 col-form-label"
                                                         style="text-align: right;">Proof of Purchased:</label>
                                                     <div class="col-sm-4">
                                                         <div class="box">
                                                             <input type="file" name="image" id="file-1"
                                                                 class="inputfile inputfile-3" style="display: none;"
                                                                 size="10" />
                                                             <label for="file-1"><span>(Click to upload)</span></label>
                                                         </div>
                                                     </div>
                                                 </div><br>
                                                 <div class="form-group row">
                                                     <label for="inputEmail" class="col-sm-8 col-form-label"
                                                         style="text-align: right;">SKU:</label>
                                                     <div class="col-sm-4">
                                                         <input type="text" class="form-control" name="sku">

                                                     </div>
                                                 </div><br>



                                             </div>
                                             <div class="col-md-4">
                                                 <div class="form-group row">
                                                     <label for="inputEmail" class="col-sm-4 col-form-label"
                                                         style="text-align: right;">Picture:</label>
                                                     <div class="col-sm-4">
                                                         <div class="box">
                                                             <input type="file" name="picture"  id="file-2"
                                                                 class="inputfile inputfile-3" style="display: none;"
                                                                 size="10" />
                                                             <label for="file-2"><span>(Click to upload)</span></label>
                                                         </div>
                                                     </div>
                                                 </div><br>
                                                 <div class="form-group row">
                                                     <label for="inputEmail" class="col-sm-4 col-form-label"
                                                         style="text-align: right;">Location 1:</label>
                                                     <div class="col-sm-4">
                                                         <div class="box">
                                                             <input type="file" name="location1"  id="file-3"
                                                                 class="inputfile inputfile-3" style="display: none;"
                                                                 size="10" />
                                                             <label for="file-3"><span>(Click to upload)</span></label>
                                                         </div>
                                                     </div>
                                                 </div><br>
                                                 <div class="form-group row">
                                                     <label for="inputEmail" class="col-sm-4 col-form-label"
                                                         style="text-align: right;">Location 2:</label>
                                                     <div class="col-sm-4">
                                                         <div class="box">
                                                             <input type="file" name="location2"  id="file-4"
                                                                 class="inputfile inputfile-3" style="display: none;"
                                                                 size="10" />
                                                             <label for="file-4"><span>(Click to upload)</span></label>
                                                         </div>
                                                     </div>
                                                 </div><br>




                                             </div>
                                         </div>
                                         <br><button type="submit" name="submitdata"
                                             class="btn btn-primary" style="float: right;">Submit</button>

                                     </form>





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
                         <a href="search.php">Your Ztorex</a>
                         <br>
                         <a href="user_account.php">Your Profile</a>
                         <br><br>
                         <a class="btn btn-primary" href="logout.php">Log out</a>


                     </div>
                 </div>
             </div>
         </div>


     </div>


     <br>





     </div>
 </body>

 </html>


 <script src="js/custom-file-input.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="dist/jQuery.tagify.min.js"></script>
 <script src="https://unpkg.com/@yaireo/dragsort"></script>

 <script>
var input = document.querySelector('input[name=tags-outside]')
// init Tagify script on the above inputs
var tagify = new Tagify(input, {
    whitelist: ["tag1", "tag2", "tag3"],
    dropdown: {
        position: "input",
        enabled: 0 // always opens dropdown when input gets focus
    }
})
 </script>

<script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#itemPicture').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>