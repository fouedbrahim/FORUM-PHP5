   
 function verifiCourriel(Courriel) {
      if ((Courriel.indexOf("@")>=0)&&(Courriel.indexOf(".")>=0)) {
         return true 
      } else {
         alert("Courriel invalide !");
         return false
      }
   };
   
function verifNom(Nom){
	if ((Nom<20) || (Nom>70))
	 alert ("Nom invalide!");
};



function controle()
{ var Question=window.document.a.Question.value;
 var Nom=window.document.a.Nom.value;
 var Courriel=window.document.a.Courriel.value;
 var Numero=window.document.a.Numero.value;
 var Code=window.document.a.Code.value;
  verifNom(Nom);
  verifiCourriel(Courriel) ;
 if(Question=="" || Nom=="" || Courriel==""  || Numero==""  || Code==""  )
 {alert("verfier les champs!");
}
}