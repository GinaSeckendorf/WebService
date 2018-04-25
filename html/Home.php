<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    <?php include ("head.php"); ?>
</head>

<body>

<?php include ("header.php"); ?>

<section style="text-align: center">
<h1>Prüfung der Qualität von Gesichtsmorphs</h1>

<div style="text-align: center">
	<img id="img" src="../img/thema.png" width="400px">
    <br>
	<button id="b1" onclick="navigateToExp(1)" type="button">Exp1</button>
    <button id="b2" onclick="navigateToExp(2)" type="button">Exp2</button>
    <button id="b3" onclick="navigateToExp(3)" type="button">Exp3</button>
</div>
</section>

<?php include ("../php/DBconnect.php"); ?>

<?php include ("footer.php"); ?>
</body>

</html> 