function active(j) {
    for (var i = 1; i < 5; i++){
        $("#" + i).removeClass("active");
    }
    $("#" + j).addClass("active");
}
