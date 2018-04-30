var ImgIsSmall = true;

function zoom() {
    if (ImgIsSmall) {
        document.getElementById("imgExp3").style.height = "531px";
        document.getElementById("imgExp3").style.paddingTop = "10px";
        ImgIsSmall = false;
    }
    else {
        document.getElementById("imgExp3").style.height = "205px";
        document.getElementById("imgExp3").style.paddingTop = "145px";
        ImgIsSmall = true;
    }
}

function changeImgAndVideo() {
    document.getElementById("imgExp3").src = "../img/morph/Morph_DSC_0009-IMG_2079.JPG";
    document.getElementById("videoExp3").src = "../img/live/DSCF0124_x264.mp4";
}