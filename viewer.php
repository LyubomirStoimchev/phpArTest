<?php
include_once 'database/connection.php';
include_once 'database/queries.php';
include 'database/logging.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="theme-color" content="#000000" />

    <script src="https://aframe.io/releases/1.0.3/aframe.min.js"></script>
    <script src="https://unpkg.com/aframe-animation-component@5.1.2/dist/aframe-animation-component.min.js"></script>
    <script src="https://unpkg.com/aframe-particle-system-component@1.1.3/dist/aframe-particle-system-component.min.js"></script>
    <script src="https://unpkg.com/aframe-outline@1.1.1/build/aframe-outline.min.js"></script>


    <script src="https://cdn.rawgit.com/jeromeetienne/AR.js/2.1.4/aframe/build/aframe-ar.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css" href="styles\main.css">
    <link rel="stylesheet" type="text/css" href="styles\modal.css">

    <script src="scripts\arScripts.js"></script>

    <title>AR APP</title>

</head>

<body style='margin : 0px; overflow: hidden;'>
    <noscript>You need to enable JavaScript to run this app.</noscript>

    <div class="container">
        <?php include 'modal.php'; ?>
    </div>
    <?php
    if (!isset($conn) || $conn == false) {
        LogError("Failed to establish database connection.");
    }

    if (!isset($_GET['modelId'])) {
        LogError("No model id parameter.");
    }

    if (!isset($result) || (mysqli_num_rows($result) <= 0)) {
        LogError("Cannot retrieve Model base data.");
    }

    if (!isset($resultDesc) || (mysqli_num_rows($resultDesc) <= 0)) {
        LogError("Cannot retrieve Model description data.");
    }

    if (!isset($resultInfo) || (mysqli_num_rows($resultInfo) <= 0)) {
        LogError("Cannot retrieve Model misc data.");
    }
    ?>

    <a-scene embedded arjs="
            sourceType: webcam;
            debugUIEnabled: false;
            detectionMode: mono_and_matrix;
            matrixCodeType: 3x3;" inspector>

        <?php include 'arAssets.php'; ?>

        <a-marker type="barcode" value="<?php echo $barcodeId; ?>" visible="false" material="" arjs-anchor="" arjs-hit-testing="">

            <a-entity position='0 0.6 0' scale='0.04 0.04 0.04' rotation='200 0 0' obj-model='obj: url(<?php echo $objUrl; ?>); mtl: url(<?php echo $mtlUrl; ?>)'>
            </a-entity>


            <a-plane position="0 0 0.8" color="transparent" opacity="0" width="2" height="0.3" rotation="-90 0 0">

                <?php include 'arButtons.php'; ?>

            </a-plane>
        </a-marker>

        <?php include 'arCursor.php'; ?>

    </a-scene>

</body>

</html>