function active(j) {
    for (var i = 1; i < 5; i++){
        $("#" + i).removeClass("active");
    }
    $("#" + j).addClass("active");
}

function mostra(id) {
    document.getElementById("inicio").style.display = "none";
    document.getElementById("historia").style.display = "none";
    document.getElementById("produtos").style.display = "none";
    document.getElementById("saude").style.display = "none";
    document.getElementById(id).style.display = "block";
    if(id === "produtos") {
        $('#footer').css("position", "initial");
    } else {
        $('#footer').css("position", "fixed");
    }
}