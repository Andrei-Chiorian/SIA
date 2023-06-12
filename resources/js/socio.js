var url = window. location. href; //PARA USAR LAS FUNCIONES EN DETERMINADAS PAGINAS 

window.addEventListener('load', ini, false);
    function ini() {                                    
        setTimeout(function () {                
            $("#mensaje").fadeOut(500);
        }, 4000);   
};

if (url == 'http://localhost:8000/afiliados/socios/nuevo-socio') {
    

    var childrenP = document.getElementById('buttDivPers').children;
    var childrenC = document.getElementById('buttDivClubs').children;

    for (let i = 0; i < childrenP.length; i++) {
        let element = childrenP[i].value;        
        document.getElementById('pers' + element).addEventListener('click', function e(){          
            document.getElementById('codPer').value = document.getElementById('pers' + element).value;
            document.getElementById('nombre').value = document.getElementById('nombPers' + element).textContent;
        });    
    }

    for (let i = 0; i < childrenC.length; i++) {
        let element = childrenC[i].value;        
        document.getElementById('club' + element).addEventListener('click', function e(){          
            document.getElementById('codClu').value = document.getElementById('club' + element).value;
            document.getElementById('club').value = document.getElementById('nombClub' + element).textContent;
        });    
    }


    document.getElementById('nuevoSoci').addEventListener('click',function e() {
        document.getElementById('codSoc').disabled = false;
        document.getElementById('codPer').disabled = false; 
        document.getElementById('codClu').disabled = false;
        
        if (document.getElementById('elegirCuota').selected == true) {

            
            document.getElementById('elegirCuota').selected = false;
            document.getElementById('sinCuota').selected = true;
        }
        document.getElementById('cCuo').disabled = false;
        
        document.getElementById("afilForm").submit();
    });

}else{

    document.getElementById('afilForm').action = "http://localhost:8000/update/socio";

    document.getElementById('modificar').addEventListener('click',function e() {
        
        if (document.getElementById('fAlta').disabled == true) {

            document.getElementById('fAlta').disabled = false;
            document.getElementById('carg').disabled = false;
            document.getElementById('cCuo').disabled = false;
            document.getElementById('soFu').disabled = false;
            document.getElementById('fBaj').disabled = false;
            document.getElementById('moti').disabled = false;

            document.getElementById('modiSoci').hidden = false;        
        }else{
            document.getElementById('fAlta').disabled = true;
            document.getElementById('carg').disabled = true;
            document.getElementById('cCuo').disabled = true;
            document.getElementById('soFu').disabled = true;
            document.getElementById('fBaj').disabled = true;
            document.getElementById('moti').disabled = true;

            document.getElementById('modiSoci').hidden = true;   

        }        
    });

    document.getElementById('modiSoci').addEventListener('click',function e() {

        document.getElementById('codSoc').disabled = false;
        document.getElementById('afilForm').submit();
    });
}
