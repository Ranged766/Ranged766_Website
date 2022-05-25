function start(){
    
    $("#btnCambiaTesto").click(figura);

}

function figura(){

    var selettore = $("#figura").val();
    console.log(selettore);
    if(selettore==1){

        console.log("cerchio"+selettore);

        var colore = $("#colorin").val();

        console.log("colore"+colore);

        ///////////////////////////////////////////
    
        //Non ho idea ma sistema una cosa

        $("#div2").css("background-color","100px");

        $("#div2").css("width","100px");
        $('#div2').css("height","100px");
        $('#div2').css("border","180px solid'colore'");
        $('#div2').css("border-radius","180px");

        ////////////////////////////////////////////////////////////

        $('#div2').css("width",colore);
        $('#div2').css("height","100px");
        $('#div2').css("background",colore);

        $('#div2').css("border","0px solid 'colore'");
        $('#div2').css("border-radius","0px");

    }
    if(selettore==2){

        console.log(selettore);
        
        $("#div2").css("background-color","100px");

        $("#div2").css("width","100px");
        $('#div2').css("height","100px");
        $('#div2').css("border","180px solid'colore'");
        $('#div2').css("border-radius","180px");

    }

}