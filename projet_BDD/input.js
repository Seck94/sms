var choix = document.getElementById("sms");
var generer = document.getElementById("inputt");
choix.addEventListener("change",generertexte);
function generertexte() {
    let choix = document.getElementById("sms");
    let generer = document.getElementById("inputt");
    if(choix.value=="choixtexte"){
        generer.innerHTML="";
        let texteari = document.createElement('textarea');
        texteari.setAttribute('name','reponse');
        let label = document.createElement('h4');
        let div = document.createElement('div');
        div.setAttribute("class", "texxte");
        label.innerHTML="reponse";
        generer.append(div);
        div.append(label);
        div.append(texteari);
        
    }
    if(choix.value=="choixmultiple" || choix.value=="choixsimple" ){
       generer.innerHTML="";
        let ajouter = document.getElementById("gerer");
        ajouter.addEventListener("click",genererInput1);
        function genererInput1() {
          let cpt=generer.children.length;
          let ver = cpt+1;
           if(cpt<3){
            let div = document.createElement("div");
            div.setAttribute("class","generer");
            generer.append(div)
            let label = document.createElement("h4");
            let input = document.createElement("input");
            input.setAttribute('name','reponse[]');
            let checkbox = document.createElement("input");
            let img = document.createElement("img");
            img.setAttribute("src","maquette/ic-supprimer.png") ;
            img.addEventListener("click",clique);

            function clique(){
               div.innerHTML="";
            }

            if (choix.value=="choixmultiple") {
            checkbox.setAttribute("type","checkbox");
            checkbox.setAttribute("name","check[]");
            checkbox.setAttribute("value",ver)
            }
            else{
               checkbox.setAttribute("type","radio");
               checkbox.setAttribute("name","point");
               checkbox.setAttribute("value",ver)
            }
            label.innerHTML="reponse "+ver;

            div.append(label);
            div.append(input);
            div.append(checkbox);
            div.append(img);
           }
           
        }
        
       
    }
    
    if(choix.value=="txt") {
        generer.innerHTML="";
    }
}
