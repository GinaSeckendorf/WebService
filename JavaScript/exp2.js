function changeImg() {
    if (document.getElementById("rb1").checked || document.getElementById("rb2").checked) {
        document.getElementById("rb1").checked = false;
        document.getElementById("rb2").checked = false;
        document.getElementById("Img1").src = "../img/original/IMG_2088.JPG";
    }
}