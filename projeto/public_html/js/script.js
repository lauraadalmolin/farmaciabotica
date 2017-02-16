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

function mostraDetalhes(i) {
   alert(i);
   $('#' + i).on('click', function() {
    // Do something on an existent or future .dynamicElement
    document.getElementById(i).style.display = "block";
    });
}

function mostraProduto(p) {
    document.getElementById("pesquisa").style.display = "none";
    document.getElementById("fitos").style.display = "none";
    document.getElementById("cosmeticos").style.display = "none";
    document.getElementById("chas").style.display = "none";
    document.getElementById("florais").style.display = "none";
    document.getElementById(p).style.display = "block";
}