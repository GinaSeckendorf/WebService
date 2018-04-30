<!DOCTYPE html>
<html>

<head>
    <title>Experiment 1</title>
    <?php include("head.php"); ?>
    <script src="../JavaScript/exp1.js"></script>
</head>

<body>

<div id="frame">

    <h2>Experiment 1</h2>

    <p>Wähle das Original aus.</p>

    <div style="text-align: center">
        <img id="Img1" style="border: none" src="../img/morph/Morph-IMG_2052-IMG_2076-1.JPG" width="300px"
             onclick="chooseImg(1)">
        <img id="Img2" style="border: none" src="../img/original/DSC_0018.JPG" width="300px" onclick="chooseImg(2)">
        <br>
        <button type="button" onclick="changeImg()">Nächstes</button>
    </div>

    <div style="text-align: right">
        <div class="pagination">
            <a href="IntroExp2.php">weiter zu Exp2</a>
        </div>
    </div>
</div>

<?php include("footer.php"); ?>
</body>

</html>