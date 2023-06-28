function ajax(){
        var xmlhttp=false;
        try {
                xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
                try {
                   xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                } catch (E) {
                        xmlhttp = false;
                }
        }

        if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
                xmlhttp = new XMLHttpRequest();
        }
        return xmlhttp;
}

function seleccionardiv(idop){
        switch(idop){
                case 1:
                        contenedor= document.getElementById('contenedor_submenu');
                        break;
                case 2:
                        contenedor= document.getElementById('contenido');
                        break;
                case 3:
                        contenedor= document.getElementById('tabla_libros');
                        break;
                case 4:
                        contenedor= document.getElementById('aquino');
                        break;
                case 5:
                                contenedor= document.getElementById('chely');
                                break;
        }
        return contenedor;
}


function buscar(idusu,idop,div){ 
    
//contenedor=document.getElementById('contenedor_submenu');
          seleccionardiv(div)
      // objeto es una variable y se puede cambiar          
                objetoajax=ajax();
                objetoajax.open("GET", "controller.php?idop="+idop); 
                objetoajax.onreadystatechange=function() {
         if (objetoajax.readyState==4 && objetoajax.status==200) {
                
                contenedor.innerHTML = objetoajax.responseText
                         }
   }
   // send es para embiar y open para abrir
   objetoajax.send(null)    
}



function guardar(idusu,idop,div,tipop){ 
    
        //contenedor=document.getElementById('contenedor_submenu');
                  seleccionardiv(div);
                  switch(tipop){
                           case 1:
                                Informacion="c1="+document.getElementById('c1').value+"&c2="+document.getElementById('c2').value+"&c3="+document.getElementById('c3').value+"&c4="+document.getElementById('c4').value+"&c5="+document.getElementById('c5').value+"&c6="+document.getElementById('c6').value
                                console.log(Informacion);
                           break;
                           case 2:
                                Informacion="&c9="+idusu
                                console.log(Informacion);
                           break;
                           case 3:
                                Informacion="c1="+document.getElementById('c1').value+"&c2="+document.getElementById('c2').value+"&c3="+document.getElementById('c3').value+"&c4="+document.getElementById('c4').value +"&c5="+document.getElementById('c5').value
                                console.log(Informacion);
                           break;
                           case 4:
                                Informacion="c1="+document.getElementById('c1').value
                                console.log(Informacion);

                                break;


                  }
                  // objeto es una variable y se puede cambiar          
                        objetoajax=ajax();
                        objetoajax.open("POST", "controller.php?idop="+idop); 
                        objetoajax.onreadystatechange=function() {
                 if (objetoajax.readyState==4 && objetoajax.status==200) {
                        
                        contenedor.innerHTML = objetoajax.responseText
                                 }
           }
           // send es para embiar y open para abrir
           objetoajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
           objetoajax.send(Informacion);  
        }

 function libro(idop,div,str){ 
    
                //contenedor=document.getElementById('contenedor_submenu');
                          seleccionardiv(div);
                          Informacion="&c9="+str
                            console.log(Informacion);
                          // objeto es una variable y se puede cambiar          
                                objetoajax=ajax();
                                objetoajax.open("POST", "controller.php?idop="+idop); 
                                objetoajax.onreadystatechange=function() {
                         if (objetoajax.readyState==4 && objetoajax.status==200) {
                                
                                contenedor.innerHTML = objetoajax.responseText
                                         }
                   }
                   // send es para embiar y open para abrir
                   objetoajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                   objetoajax.send(Informacion);  
                }