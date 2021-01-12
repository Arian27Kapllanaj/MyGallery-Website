
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submission</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
    <body>
        <?php
            require('header.php');
        ?>
        <br>
        <div style="display: inline;">
        <div style="float: left; width: 80%">
            <h4>New Submission</h4>
            <div class="line"></div><br>
        </div>
        <div style="float: left; width: 20%">
            <div class="menu">
                    <h4>Menu</h4>
                    <div class="MenuLine"></div><br>
                    <? echo "test" ?>
                    <br>
                    <a href="<?php echo "submission.php"; ?>">Your Ztorex</a>
                    <br>
                    <a href="<?php echo "submission.php"; ?>">New Submission</a>
                    <br><br>
                    <a class="btn btn-primary" href="login.php">Log out</a>

            </div>
        </div>
    </div>

        <form action="submission.php" method="POST">
        <div class="backgroundColor">
            <div class="submission">
                <br>
                <div class="color" style="display: inline;">
                    <div style="float: left; width: 50%">
                        <label id="itemName-label">Item Name:
                    </div>
                    <div style="float: left; width: 50%">
                        <input type="text" id="itemName" required></label><br><br><br>
                    </div>
                </div>
                <div class="color" style="display: inline;">
                    <div style="float: left; width: 50%">
                    <label id="property">Property:
                    </div>
                    <div style="float: left; width: 50%">
                    <input type="text" id="property" required></label><br><br>
                    </div>
                </div>
                <div style="display: inline;">
                    <div style="float: left; width: 50%">
                        <label id="roomType">Room Type:
                    </div>
                    <div style="float: left; width: 50%">
                    <input type="text" id="roomType" required></label><br><br>
                    </div>
                </div>
                <div style="display: inline;">
                    <div style="float: left; width: 50%">
                        <label id="area">Area:
                        </div>
                    <div style="float: left; width: 50%">
                        <input type="text" id="area" required></label><br><br><br>
                    </div>
                </div>
                <div style="display: inline;">
                    <div style="float: left; width: 50%">
                    <label id="brand">Brand:
                    </div>
                    <div style="float: left; width: 50%">
                    <input type="text" id="brand" required></label><br><br>
                    </div>
                </div>
                <div style="display: inline;">
                    <div style="float: left; width: 50%">
                        <label id="model">Model:
                    </div>
                    <div style="float: left; width: 50%">
                        <input type="text" id="model" required></label><br><br>
                    </div>
                </div>
                <div style="display: inline;">
                    <div style="float: left; width: 50%">
                        <label id="version">Version:
                    </div>
                    <div style="float: left; width: 50%">
                        <input type="text" id="version" required></label><br><br><br>
                    </div>
                </div>
                <div style="display: inline;">
                    <div style="float: left; width: 50%">
                        <label id="notes">Notes:
                    </div>
                    <div style="float: left; width: 50%">
                        <input type="text" id="notes" style="height: 100px;" required></label><br><br>
                    </div>
                </div>
                <div style="display: inline;">
                    <div style="float: left; width: 50%">
                        <label id="categories">Categories:
                    </div>
                    <div style="float: left; width: 50%">
                        <input type="text" id="categories" required></label><br><br>
                    </div>
                </div>
                    <!--  Tags  --><br>
                <div style="display: inline;">
                    <div style="float: left; width: 50%">
                        <label id="linkToOtherItem">Link to <br>other item:
                    </div>
                    <div style="float: left; width: 50%">
                        <input type="text" id="linkToOtherItem" required></label><br><br><br><br>
                    </div>
                </div>
                <div style="display: inline;">
                    <div style="float: left; width: 50%">
                        <label id="price">Price:
                        </div>
                        <div style="float: left; width: 50%">
                            <input type="text" id="price" required></label><br><br>
                        </div>
                </div>
                <div style="display: inline;">
                    <div style="float: left; width: 50%">
                        <label id="dataPurchased">Data Purchased:
                    </div>
                    <div style="float: left; width: 50%">
                        <input type="text" id="dataPurchased" required></label><br><br>
                    </div>
                </div>
                    <div style="display: inline;">
                        <div style="float: left; width: 50%">
                            <label id="proofOfPurchased">Proof of Purchased:</label>
                        </div>
                        <div style="float: left; width: 50%">
                        <div id="drop_file_zone" ondrop="upload_file(event)" ondragover="return false">
                                <div id="drag_upload_file">
                                <p><input class="imageButton" type="button" value="(Click to upload/take a picture)" onclick="file_explorer();"></p>
                                <input type="file" id="selectfile">
                                <input type='file' id="imgInp" style="display:none;"/>
                            </div> 
                        </div>
                    </div><br><br>
                <div class="last" style="display: inline;">
                    <div style="float: left; width: 50%">
                        <label id="sku">SKU:
                    </div>
                    <div style="float: left; width: 50%">
                        <input type="text" id="sku" required></label><br>
                    </div>
                </div>  
            </div>
            </form>
        </div>
    </body>
</html>

<style>

    .backgroundColor {
        position: absolute;
        background-color: #f7f7f7;
        width: 50%;
        left: 2%;
        top: 20%;
    }

    h4 {
        font-weight: lighter;  
    }

    .line {
        padding-bottom: 10px;
        border-bottom-style: solid;
        border-width: 1px;
    }

    label {
        display: block;
        text-align: left;
        
    }

    .submission {
        width: 22%;
        height: 147%;
    }

    input {
        width: 250px;
    }

    /* image design */

    #drop_file_zone {
        background-color: #EEE;
        border: #999 5px dashed;
        width: 290px;
        height: 200px;
        padding: 8px;
        font-size: 18px;
    }

    .imageButton {
        font-weight: bold;
        color: blue;
        position: absolute;
        left: 11.5%;
        width: 37.1%;
        height: 17.65%;
        top: 79.2%;
        background-color: white;
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

    </style>

    <script>
        var fileobj;

        function upload_file(e) {
            e.preventDefault();
            fileobj = e.dataTransfer.files[0];
            ajax_file_upload(fileobj);
        }
        
        function file_explorer() {
            document.getElementById('selectfile').click();
            document.getElementById('selectfile').onchange = function() {
                fileobj = document.getElementById('selectfile').files[0];
                ajax_file_upload(fileobj);
            };
        }
        
        function ajax_file_upload(file_obj) {
            if(file_obj != undefined) {
                var form_data = new FormData();                  
                form_data.append('file', file_obj);
                $.ajax({
                    type: 'POST',
                    url: 'ajax.php',
                    contentType: false,
                    processData: false,
                    data: form_data,
                    success:function(response) {
                        alert(response);
                        $('#selectfile').val('');
                    }
                });
            }
        }
    </script>