<!DOCTYPE html>
<html>

<head>
    <title>Exp3</title>
    <?php include("head.php"); ?>
    <style>
        .column {
            float: left;
            text-align: center;
            height: 531px;
        }

        .left {
            width: 45%;
        }

        .right {
            width: 55%;
        }

        .row:after {
            content: "";
            display: table;
            clear: both;
        }
    </style>
    <script src="../JavaScript/exp3.js"></script>
</head>

<body>

<div id="frame">
    <h2>Experiment 3</h2>

    <p>Entscheide, ob das Bild auf dem Personalausweis zu der Person auf dem Livebild gehört oder ob es gemorpht
        wurde.</p>

    <div class="row">
        <div class="column left">
            <video id="videoExp3" width="400" height="300" controls style="padding-top: 114px;">
                <source src="../img/live/DSCF0127_x264.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="column right"
             style="text-align: left; background-image: url('../img/Perso.png'); background-position: left; background-repeat: no-repeat; background-size: 499px 300px;">
            <img id="imgExp3" onclick="zoom()" src="../img/morph/Morph-IMG_2052-IMG_2076-2.JPG"
                 style="padding-left: 15px; padding-top: 145px;" height="205px">
        </div>
    </div>

    <br>
    <div style="text-align: center;">
        <button id="button1" onclick="changeImgAndVideo()" type="button">Morph</button>
        <button id="button2" onclick="changeImgAndVideo()" type="button">Original</button>
    </div>


    <div style="text-align: right">
        <div class="pagination">
            <a href="Evaluation.php">weiter zur Evaluierung</a>
        </div>
    </div>
</div>

<?php include("footer.php"); ?>
</body>

</html>