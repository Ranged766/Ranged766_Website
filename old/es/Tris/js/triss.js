const SIM_X="X";
const SIM_O="O";
var turno="SIM_O";
var numTurno = 0;
$(document).ready(function(){
    //codice al caricamento pagina
    $("td button").each(function(idx,el){
        //istruzioni eseguite per ogni elemento ciclato dall'each
        $(el).click({indice:idx,elemento:el},setSimbolo);

    });

});

//setta simbolo X o O
function setSimbolo(param){
    //disable bottone

    var el = $(param.data.elemento);
    el.prop("disabled",true);

    var simbolo=SIM_X;
    if(turno==SIM_O){
        simbolo=SIM_O;
        turno=SIM_X;
    }else{
        turno=SIM_O;
    }

   el.html(simbolo);

    numTurno++;
    if(numTurno>4){
        checkTris();
    }


}

//controlla se c'e' un tris
function checkTris(){
    //alert("controlla tris");
    //controllo tris dopo il 5 turno
    //controllo righe
    checkRighe();
    //controllo colonne
    checkColonne();
    //controllo diagonali
    checkDiagonali();
    //se arrivo al 9 turno e non ci sono tris mi fermo 
}

function checkRighe(){
    var celle = $("td button");
    //prima riga
/*    if($(celle[0]).html()==$(celle[1]).html()){
        if(celle[0].innerHTML==celle[2].innerHTML){
            if(celle[0].innerHTML== SIM_X || celle[0].innerHTML== SIM_O){
                setVitt();
            }
        }
    }
    //seconda riga
    if($(celle[3]).html()==$(celle[4]).html()){
        if(celle[3].innerHTML==celle[5].innerHTML){
            if(celle[3].innerHTML== SIM_X || celle[3].innerHTML== SIM_O){
                setVitt();
            }
        }
    }
    //terza riga
    if($(celle[6]).html()==$(celle[7]).html()){
        if(celle[6].innerHTML==celle[8].innerHTML){
            if(celle[6].innerHTML== SIM_X || celle[6].innerHTML== SIM_O){
                setVitt();
            }
        }
    }*/

    for(var i=0;i<9;i=i+3){
        if($(celle[i]).html()==$(celle[i+1]).html()){
            if(celle[i].innerHTML==celle[i+2].innerHTML){
                if(celle[i].innerHTML== SIM_X || celle[i].innerHTML== SIM_O){
                    setVitt();
                }
            }
        }
    }
}

function checkColonne(){

    var celle = $("td button");

    for(var i=0;i<3;i=i++){
        if($(celle[i]).html()==$(celle[i+3]).html()){
            if(celle[i].innerHTML==celle[i+6].innerHTML){
                if(celle[i].innerHTML== SIM_X || celle[i].innerHTML== SIM_O){
                    setVitt();
                }
            }
        }
    }

}

function checkDiagonali(){

    var celle = $("td button");

        if($(celle[0]).html()==$(celle[4]).html()){
            if(celle[0].innerHTML==celle[8].innerHTML){
                if(celle[0].innerHTML== SIM_X || celle[0].innerHTML== SIM_O){
                    setVitt();
                }
            }
        }

        if($(celle[2]).html()==$(celle[4]).html()){
            if(celle[2].innerHTML==celle[6].innerHTML){
                if(celle[0].innerHTML== SIM_X || celle[0].innerHTML== SIM_O){
                    setVitt();
                }
            }
        }
    }

function setVitt(){
	var celle = $("td button");
	var vincitore=SIM_O;
	if(turno == SIM_O){
		vincitore=SIM_X;
	}
	//$("#cambiaFrase").html("Winner winner chicken dinner "+vincitore);
	celle.each(function(){
        $(this).prop("disabled", true);
    });
	fine=1;
}

//azzera tabella
function restart(){
    var celle = $("td button");
	celle.each(function(){
		$(this).html("-");
		$(this).prop("disabled", false);
	});
	if(turno == SIM_O){
	   $("#cambiaFrase").html("Turno X");
    }else{
	   $("#cambiaFrase").html("Turno O");
    }
	numTurno=0;
	fine=0;
}