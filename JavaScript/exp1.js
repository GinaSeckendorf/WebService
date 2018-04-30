var imgSelected = false;

function chooseImg(x) {
    imgSelected = true;

    switch (x) {
        case 1:
            document.getElementById("Img1").style.border = "solid";
            document.getElementById("Img2").style.border = "none";
            break;
        case 2:
            document.getElementById("Img1").style.border = "none";
            document.getElementById("Img2").style.border = "solid";
            break;
        default:
            break;
    }
}

function changeImg() {
    if (imgSelected) {
        imgSelected = false;
        document.getElementById("Img1").style.border = "none";
        document.getElementById("Img2").style.border = "none";
        document.getElementById("Img1").src = "../img/morph/Morph-IMG_2102-IMG_2052-2.JPG";
        document.getElementById("Img2").src = "../img/original/IMG_2079.JPG";
    }
}