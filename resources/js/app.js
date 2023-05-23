//EventListeners

//Metodo para hacer el fade de los mensajes de error
window.addEventListener('load', ini, false);
    function ini() {               
    setTimeout(function () {
        $("#mensaje").fadeOut(500);
    }, 4000);    
};

document.getElementById('modificar').addEventListener('click',function e() {
    
    enabDisab();
    enablDisabPadres(); 
    document.getElementById('afilForm').action = "http://localhost:8000/update";
    //document.getElementById('afilForm').append = "@method('DELETE')";
    document.getElementById('nuevoUsu').innerHTML = "Modificar afiliado";   
});


// document.getElementById('nuevo').addEventListener('click',function e() {
//     enabDisab();
//     enablDisabPadres(); 
//     clearInp();
//     document.getElementById('afilForm').action = "http://localhost:8000/store";
//     document.getElementById('nuevoUsu').innerHTML = "Crear afiliado";   
// });



document.getElementById('nuevoUsu').addEventListener('click',function e() {
    document.getElementById('codigo').disabled = false;
    document.getElementById('codPadre').disabled = false; 
    document.getElementById('codMadre').disabled = false;     
});

document.getElementById('savePadre').addEventListener('click',function e() {
    document.getElementById('cod_padre').value = document.getElementById('codPadre').value;
    document.getElementById('nom_padre').value = document.getElementById('nomPadre').value;
});

document.getElementById('saveMadre').addEventListener('click',function e() {
    document.getElementById('cod_madre').value = document.getElementById('codMadre').value
    document.getElementById('nom_madre').value = document.getElementById('nomMadre').value
});

document.getElementById('showMadre').addEventListener('click',function e() {
    document.getElementById('nomMadre').disabled = true;  
    document.getElementById('dniMadre').disabled = true;  
    document.getElementById('domiMadre').disabled = true;  
    document.getElementById('cposMadre').disabled = true;  
    document.getElementById('poblMadre').disabled = true;  
    document.getElementById('provMadre').disabled = true;  
    document.getElementById('telfMadre').disabled = true;  
    document.getElementById('telf2Madre').disabled = true;  
    document.getElementById('emailMadre').disabled = true;  
    document.getElementById('variosMadre').disabled = true;  
    document.getElementById('predMadre').disabled = true;
    
    document.getElementById('saveMadre').hidden = true;
});

document.getElementById('showPadre').addEventListener('click',function e() {    
    document.getElementById('nomPadre').disabled = true;  
    document.getElementById('dniPadre').disabled = true;  
    document.getElementById('domiPadre').disabled = true;  
    document.getElementById('cposPadre').disabled = true;  
    document.getElementById('poblPadre').disabled = true;  
    document.getElementById('provPadre').disabled = true;  
    document.getElementById('telfPadre').disabled = true;  
    document.getElementById('telf2Padre').disabled = true;  
    document.getElementById('emailPadre').disabled = true;  
    document.getElementById('variosPadre').disabled = true;  
    document.getElementById('predPadre').disabled = true;
    
    document.getElementById('savePadre').hidden = true;
});

document.getElementById('closePadre').addEventListener('click',function e() {    
    document.getElementById('nomPadre').disabled = false;  
    document.getElementById('dniPadre').disabled = false;  
    document.getElementById('domiPadre').disabled = false;  
    document.getElementById('cposPadre').disabled = false;  
    document.getElementById('poblPadre').disabled = false;  
    document.getElementById('provPadre').disabled = false;  
    document.getElementById('telfPadre').disabled = false;  
    document.getElementById('telf2Padre').disabled = false;  
    document.getElementById('emailPadre').disabled = false;  
    document.getElementById('variosPadre').disabled = false;  
    document.getElementById('predPadre').disabled = false;
    
    document.getElementById('savePadre').hidden = false;
});

document.getElementById('closeMadre').addEventListener('click',function e() {
    document.getElementById('nomMadre').disabled = false;  
    document.getElementById('dniMadre').disabled = false;  
    document.getElementById('domiMadre').disabled = false;  
    document.getElementById('cposMadre').disabled = false;  
    document.getElementById('poblMadre').disabled = false;  
    document.getElementById('provMadre').disabled = false;  
    document.getElementById('telfMadre').disabled = false;  
    document.getElementById('telf2Madre').disabled = false;  
    document.getElementById('emailMadre').disabled = false;  
    document.getElementById('variosMadre').disabled = false;  
    document.getElementById('predMadre').disabled = false;
    
    document.getElementById('saveMadre').hidden = false;
});





//Metododo para activar/desactivar los inpunts
 function enabDisab() {
    var apelInput = document.getElementById('apellidos');
       
    if (apelInput.disabled == true) {
                
        document.getElementById('apellidos').disabled = false;
        document.getElementById('nombre').disabled = false;
        document.getElementById('lopd').disabled = false;
        document.getElementById('fnaci').disabled = false;
        document.getElementById('dni').disabled = false;
        document.getElementById('telf').disabled = false;
        document.getElementById('telf2').disabled = false;
        document.getElementById('email').disabled = false;
        document.getElementById('domi').disabled = false;
        document.getElementById('prov').disabled = false;
        document.getElementById('pobl').disabled = false;
        document.getElementById('cpos').disabled = false;
        document.getElementById('falta').disabled = false;
        document.getElementById('grupoFam').disabled = false;        
        document.getElementById('desc').disabled = false;
        document.getElementById('fdesc').disabled = false;
        document.getElementById('mdesc').disabled = false;
       
        
        
        document.getElementById('fotoCamb').hidden = false;
        document.getElementById('nuevoUsu').hidden = false;
    }else{
        
        document.getElementById('apellidos').disabled = true;
        document.getElementById('nombre').disabled = true;
        document.getElementById('lopd').disabled = true; 
        document.getElementById('fnaci').disabled = true;
        document.getElementById('dni').disabled = true;
        document.getElementById('telf').disabled = true;
        document.getElementById('telf2').disabled = true;
        document.getElementById('email').disabled = true;
        document.getElementById('domi').disabled = true;
        document.getElementById('prov').disabled = true;
        document.getElementById('pobl').disabled = true;
        document.getElementById('cpos').disabled = true;
        document.getElementById('falta').disabled = true;
        document.getElementById('grupoFam').disabled = true;        
        document.getElementById('desc').disabled = true; 
        document.getElementById('fdesc').disabled = true;
        document.getElementById('mdesc').disabled = true;
        
        
        document.getElementById('fotoCamb').hidden = true;
        document.getElementById('nuevoUsu').hidden = true;

    }     
}

//Metodo para limpiar los inputs
function clearInp() {
    

    document.getElementById('codigo').value = "";
    document.getElementById('apellidos').value = "";
    document.getElementById('nombre').value = "";
    document.getElementById('lopd').onclick = "";
    document.getElementById('fnaci').value = "";
    document.getElementById('dni').value = "";
    document.getElementById('telf').value = "";
    document.getElementById('telf2').value = "";
    document.getElementById('email').value = "";
    document.getElementById('domi').value = "";
    document.getElementById('prov').value = "";
    document.getElementById('pobl').value = "";
    document.getElementById('cpos').value = "";
    document.getElementById('falta').value = "";
    document.getElementById('grupoFam').value = "";
    document.getElementById('cod_padre').value = "";
    document.getElementById('nom_padre').value = "";
    document.getElementById('cod_madre').value = "";
    document.getElementById('nom_madre').value = "";
    document.getElementById('desc').onclick = "";
    document.getElementById('fdesc').value = "";
    document.getElementById('mdesc').value = "";
    
    
}

//Metodo para habilitar edicion de padres

function enablDisabPadres() {
    if (document.getElementById('editPadre').hidden == true) 
    {
    document.getElementById('editPadre').hidden = false;
    document.getElementById('editMadre').hidden = false;
    
    }else
    {
    document.getElementById('editPadre').hidden = true;
    document.getElementById('editMadre').hidden = true;
    
    }
}
        