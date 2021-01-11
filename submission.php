<?php
    require('header.php');
?>
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
        <label id="proofOfPurchased">Proof of Purchased:
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
        width: 25%;
        background: #f7f7f7;
    }

    input {
        width: 250px;
    }
</style>