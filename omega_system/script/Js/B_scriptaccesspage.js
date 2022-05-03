


function Go_tableaudebord(){
    var blocentreprise=document.getElementById("blocentreprise")
    var bloctableaudebord=document.getElementById("tableaudebord")
    var blocconsultat=document.getElementById("blocconsultat")

    blocconsultat.style.display = 'none';
    blocentreprise.style.display = 'none';
    bloctableaudebord.style.display = 'block';
}
function Go_consultat(){
    var blocentreprise=document.getElementById("blocentreprise")
    var bloctableaudebord=document.getElementById("tableaudebord")
    var blocconsultat=document.getElementById("blocconsultat")
    
    bloctableaudebord.style.display = 'none';
    blocconsultat.style.display = 'block';
    blocentreprise.style.display = 'none';
   
}
function Go_entreprise(){
    var blocentreprise=document.getElementById("blocentreprise")
    var bloctableaudebord=document.getElementById("tableaudebord")
    var blocconsultat=document.getElementById("blocconsultat")
   
    blocconsultat.style.display = 'none';
    blocentreprise.style.display = 'block';
    bloctableaudebord.style.display = 'none';
}