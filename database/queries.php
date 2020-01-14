<?php

if(!isset($_GET['modelId']) || !isset($conn) || $conn == false){
   return;
} 

$objId = $_GET['modelId'];

// MODELS SELECT
$objUrl;
$mtlUrl;
$barcodeId;

$sql = "SELECT * FROM models WHERE ObjectId = '" . $objId . "';";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $objUrl = $row['ObjectUrl'];
        $mtlUrl = $row['MaterialUrl'];
        $barcodeId = $row['BarcodeId'];
    }
}

// MODAL select
$headerText;
$footerText;
$content;

$sqlDesc = "SELECT * FROM modalinformation WHERE ObjectId = '" . $objId . "';";
$resultDesc = mysqli_query($conn, $sqlDesc);

if (mysqli_num_rows($resultDesc) > 0) {
    while ($row = mysqli_fetch_assoc($resultDesc)) {
        $headerText = $row['Header'];
        $footerText = $row['Footer'];
        $content = $row['Content'];
    }
}

// AR INFO SELECT
$audioUrl;
$websiteUrl;

$sqlInfo = "SELECT * FROM objectinformation WHERE ObjectId = '" . $objId . "';";
$resultInfo = mysqli_query($conn, $sqlInfo);

if (mysqli_num_rows($resultInfo) > 0) {
    while ($row = mysqli_fetch_assoc($resultInfo)) {
        $audioUrl = $row['AudioUrl'];
        $websiteUrl = $row['WebsiteUrl'];
    }
}
