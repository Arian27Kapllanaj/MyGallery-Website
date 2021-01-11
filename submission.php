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
    <div class="color" style="display: inline;">
        <div style="float: left; width: 35%">
            <label id="itemName-label">Item Name:
        </div>
        <div style="float: left; width: 35%">
            <input type="text" id="itemName" required></label><br><br><br>
        </div>
    </div>
    <div class="color" style="display: inline;">
        <div style="float: left; width: 35%">
        <label id="property">Property:
        </div>
        <div style="float: left; width: 35%">
        <input type="text" id="property" required></label><br><br>
        </div>
    </div>
    <div style="display: inline;">
        <div style="float: left; width: 35%">
            <label id="roomType">Room Type:
        </div>
        <div style="float: left; width: 35%">
        <input type="text" id="roomType" required></label><br><br>
        </div>
    </div>
    <div style="display: inline;">
        <div style="float: left; width: 35%">
            <label id="area">Area:
            </div>
        <div style="float: left; width: 35%">
            <input type="text" id="area" required></label><br><br><br>
        </div>
    </div>
    <div style="display: inline;">
        <div style="float: left; width: 35%">
        <label id="brand">Brand:
        </div>
        <div style="float: left; width: 35%">
        <input type="text" id="brand" required></label><br><br>
        </div>
    </div>
    <div style="display: inline;">
        <div style="float: left; width: 35%">
            <label id="model">Model:
        </div>
        <div style="float: left; width: 35%">
            <input type="text" id="model" required></label><br><br>
        </div>
    </div>
    <div style="display: inline;">
        <div style="float: left; width: 35%">
            <label id="version">Version:
        </div>
        <div style="float: left; width: 35%">
            <input type="text" id="version" required></label><br><br><br>
        </div>
    </div>
    <div style="display: inline;">
        <div style="float: left; width: 35%">
            <label id="notes">Notes:
        </div>
        <div style="float: left; width: 35%">
            <input type="text" id="notes" style="height: 100px;" required></label><br><br>
        </div>
    </div>
    <div style="display: inline;">
        <div style="float: left; width: 35%">
            <label id="categories">Categories:
        </div>
        <div style="float: left; width: 35%">
            <input type="text" id="categories" required></label><br><br>
        </div>
    </div>
        <!--  Tags  --><br>
    <div style="display: inline;">
        <div style="float: left; width: 35%">
            <label id="linkToOtherItem">Link to <br>other item:
        </div>
        <div style="float: left; width: 35%">
            <input type="text" id="linkToOtherItem" required></label><br><br><br><br>
        </div>
    </div>
    <div style="display: inline;">
        <div style="float: left; width: 35%">
            <label id="price">Price:
            </div>
            <div style="float: left; width: 35%">
                <input type="text" id="price" required></label><br><br>
            </div>
    </div>
    <div style="display: inline;">
        <div style="float: left; width: 35%">
            <label id="dataPurchased">Data Purchased:
        </div>
        <div style="float: left; width: 35%">
            <input type="text" id="dataPurchased" required></label><br><br>
        </div>
    </div>
        <div style="display: inline;">
            <div style="float: left; width: 35%">
                <label id="proofOfPurchased">Proof of Purchased:</label>
            </div>
            <div style="float: left; width: 35%">
            <div id="drop_file_zone" ondrop="upload_file(event)" ondragover="return false">
                    <div id="drag_upload_file">
                    <p><input class="imageButton" type="button" value="(Click to upload/take a picture)" onclick="file_explorer();"></p>
                    <input type="file" id="selectfile">
                    <input type='file' id="imgInp" style="display:none;"/>
                </div> 
            </div>
        </div><br><br>
    <div style="display: inline;">
        <div style="float: left; width: 35%">
            <label id="sku">SKU:
        </div>
        <div style="float: left; width: 35%">
            <input type="text" id="sku" required></label><br>
        </div>
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
        width: 22%;
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
        left: 7.9%;
        width: 18.7%;
        height: 25.3%;
        top: 139.6%;
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