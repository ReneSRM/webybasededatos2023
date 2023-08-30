$(document).ready(function(){
    alert("Funciona JQuery");
    $("#boton1").on("click",function(){
        //console.log("Funciona click");
        $("#texto1").html("Texto agregado al parrafo");
    });


    $("#texto1").hover(function(){
        $(this).css("background-color","blue");
        $(this).css("font-size","50px");
    }, function(){
        $(this).css("background-color","white");
        $(this).css("font-size","20px");
    }
    );

    $("#boton2").on("click",function(){
        $("#imagen1").fadeToggle("slow");
    });

});