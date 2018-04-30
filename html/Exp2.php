<!DOCTYPE html>
<html>

<head>
    <title>Experiment 2</title>
    <?php include("head.php"); ?>
    <script src="../JavaScript/exp2.js"></script>
</head>

<body>

<div id="frame">
    <h2>Experiment 2</h2>
    <p>Entschiede, ob es sich bei folgendem Bild um ein Original oder ein Morph handelt.</p>

    <div style="text-align: center">
        <img id="Img1" src="../img/morph/Morph_IMG_2052-IMG_2011-2.JPG" width="300px">
        <br>
        <form>
            <input type="radio" name="type" id="rb1" value="morph">Morph
            <input type="radio" name="type" id="rb2" value="original">Original
            <button type="button" onclick="changeImg()">weiter</button>
        </form>
    </div>

    <div style="text-align: right">
        <div class="pagination">
            <a href="IntroExp3.php">weiter zu Exp3</a>
        </div>
    </div>
</div>

<?php include("footer.php"); ?>
</body>

</html>