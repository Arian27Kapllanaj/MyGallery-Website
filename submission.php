<?php
    require('header.php');
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<br>
<h4>New Submission</h4>
<br>
<div class="line"></div><br>
<form action="submission.php" method="POST">
<div class="submission">
    <br>
        <label id="itemName-label">Item Name:
        <input type="text" id="itemName" required></label><br><br>
        <label id="property">Property:
        <input type="text" id="property" required></label><br>
        <label id="roomType">Room Type:
        <input type="text" id="roomType" required></label><br>
        <label id="area">Area:
        <input type="text" id="area" required></label><br><br>
        <label id="brand">Brand:
        <input type="text" id="brand" required></label><br>
        <label id="model">Model:
        <input type="text" id="model" required></label><br>
        <label id="version">Version:
        <input type="text" id="version" required></label><br><br>
        <label id="notes">Notes:
        <input type="text" id="notes" style="height: 100px;" required></label><br>
        <label id="categories">Categories:
        <input type="text" id="categories" required></label><br>
        <!--  Tags  --><br>
        <label id="linkToOtherItem">Link to <br>other item:
        <input type="text" id="linkToOtherItem" required></label><br><br><br>
        <label id="price">Price:
        <input type="text" id="price" required></label><br>

        <label id="dataPurchased">Data Purchased:
        <input type="text" id="dataPurchased" required></label><br>

        <label id="proofOfPurchased">Proof of Purchased:</label>
                <div id="drop_file_zone" ondrop="upload_file(event)" ondragover="return false">
                    <div id="drag_upload_file">
                    <p><input class="imageButton" type="button" value="(Click to upload/take a picture)" onclick="file_explorer();"></p>
                    <input type="file" id="selectfile">
                    <input type='file' id="imgInp" style="display:none;"/>
                </div>          
</div>
</form>

<style>

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
        width: 30%;
        background: #f7f7f7;
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
        left: 2px;
        width: 18.7%;
        height: 25.3%;
        top: 1125px;
        background-color: white;
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