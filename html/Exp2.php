<!DOCTYPE html>
<html>

<head>
    <title>Experiment 2</title>
    <?php include ("head.php"); ?>
</head>

<body>

<?php include ("header.php"); ?>


<section style="text-align: center">

    <h2>Experiment 2</h2>
    <div>
        <p>Entscheide, ob es sich bei dem untenstehenden Bild um einen Morph handelt. Wie sicher bist du dir?</p>

        <video width="320" height="240" controls>
            <source src="movie.mp4" type="video/mp4">
            <source src="movie.ogg" type="video/ogg">
            Your browser does not support the video tag.
        </video>

        <img src="../img/xD.png" width="200px">

        <br>

        <label for="button1">Das ist ein Morph.</label>
        <button id="button1" type="button">1</button><br>

        <label for="button2">Bin mir nicht sicher, aber tendiere zu Morph.</label>
        <button id="button2" type="button">2</button><br>

        <label for="button3">Bin mir nicht sicher, aber tendiere zu Original.</label>
        <button id="button3" type="button">3</button><br>

        <label for="button4">Das ist ein Original.</label>
        <button id="button4" type="button">4</button>
    </div>
</section>


<?php include ("footer.php"); ?>
</body>

</html>