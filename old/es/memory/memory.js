var celle;
const Celle = 16;
var ncoppie;
const cellem = Celle/2; 

var flag; 

var t1; 
var t2; 
var to;

const fsi = "24px"; 

$(document).ready(function(){
  celle = $("td button");
  inizializza();
  celle.each(function(){$(this).click(clicca);})
});

function inizializza(){
  flag = true;
  ncoppie = 0;
  celle.each(function(){
    $(this).html("");
    $(this).prop("disabled", false);
    $(this).css("font-size", fsi);
    });
    genera();
    to = setTimeout(function(){
      celle.each(function(){
        $(this).css("font-size", "0px");});}, 1500);
}

function genera(){
  for(var i=0; i<cellem; i++){
    inserisci(i+1);
  }
}

function inserisci(n){
  var idx;
  var cont=0;
  while(cont < 2){
    idx = Math.floor(Math.random()*Celle);
    if(celle[idx].innerHTML == ""){
      celle[idx].innerHTML = n;
      cont++;
    }
  }
}

function copri(tessera){
  tessera.prop("disabled",false);
  tessera.css("font-size","0px");
}

function scopri(tessera){
tessera.prop("disabled",true);
tessera.css("font-size",fsi);
}

function clicca(){
  scopri($(this));
  if(flag){
    t1=$(this);
  }
  else{
    t2=$(this);
    if(t1.html()==t2.html()){
      ncoppie++;
    }else{
      $("body").css("pointer-events","none");
      setTimeout(function(){
      copri(t1);
      copri(t2);
      $("body").css("pointer-events","auto");}, 1000);
    }
  }
  flag=!flag;
}