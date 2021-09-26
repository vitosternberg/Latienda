//window.alert("Hello world!");
		let name    = document.getElementById("name")
        let botonEnvio   = document.getElementById("botonEnvio")
        let aviso        = document.getElementById("aviso")
		let apellidos    = document.getElementById("apellidos")
		let rut    = document.getElementById("rut")
		let calle    = document.getElementById("calle")
		let numero    = document.getElementById("numero")
		let comuna    = document.getElementById("comuna")
		let region    = document.getElementById("region")
		let pais    = document.getElementById("pais")
		let mail    = document.getElementById("mail")
		let pass    = document.getElementById("pass")
        
        class Formulario {
          constructor(name, botonEnvio) {
            this.name    = name
			this.apellidos =apellidos
			this.rut    = rut
			this.calle    = calle
			this.numero    = numero
			this.comuna    = comuna
			this.region    = region
			this.pais    = pais
			this.mail    = mail
			this.pass    = pass
            this.botonEnvio   = botonEnvio
          }
          
          validaElementos() {
            this.botonEnvio.addEventListener("submit", (event) => {
              event.preventDefault();
			  if(this.name.value.trim() === ""){
				  alert("Complete su nombre")
			  //cument.getElementById.name.focus()
			  } else if (this.apellidos.value.trim() === ""){
				  alert("Complete sus apellidos")
				  //cument.getElementById.apellidos.focus()
			  }
			  else if (this.rut.value.trim() === ""){
				  alert("Ingrese su rut con guion")
			  }
			   else if (this.calle.value.trim() === ""){
				  alert("Ingrese la calle de su domicilio")
			  }
			  else if (this.numero.value.trim() === ""){
				  alert("Ingrese un numero para su dirección")
			  }
			  else if (this.comuna.value.trim() === ""){
				  alert("Selecciones una Comuna")
			  }
			  else if (this.region.value.trim() === ""){
				  alert("Seleccione Region")
			  }
			  else if (this.pais.value.trim() === ""){
				  alert("Selecciones un pais")
			  }	
			  else if (this.mail.value.trim() === ""){
				  alert("Ingrese correo")
			  }
			  /*else
			  {window.location="./php/insert.php";}*/
		  })
          }
        }
		let formularioValidadoUno = new Formulario(name, registro)
        formularioValidadoUno.validaElementos()
		
	function checkRut(rut) {
    // Despejar Puntos
    var valor = rut.value.replace('.','');
    // Despejar Guión
    valor = valor.replace('-','');
	//Despejar Punto2 (Quito el punto de los miles que me queda)
	valor = valor.replace('.','');
    
    // Aislar Cuerpo y Dígito Verificador
    cuerpo = valor.slice(0,-1);
    dv = valor.slice(-1).toUpperCase();
    
    // Formatear RUN
    rut.value = cuerpo + '-'+ dv
    
    // Si no cumple con el mínimo ej. (n.nnn.nnn)
    if(cuerpo.length < 7) { rut.setCustomValidity("RUT Incompleto"); return false;}
    
    // Calcular Dígito Verificador
    suma = 0;
    multiplo = 2;
    
    // Para cada dígito del Cuerpo
    for(i=1;i<=cuerpo.length;i++) {
    
        // Obtener su Producto con el Múltiplo Correspondiente
        index = multiplo * valor.charAt(cuerpo.length - i);
        
        // Sumar al Contador General
        suma = suma + index;
        
        // Consolidar Múltiplo dentro del rango [2,7]
        if(multiplo < 7) { multiplo = multiplo + 1; } else { multiplo = 2; }
  
    }
    
    // Calcular Dígito Verificador en base al Módulo 11
    dvEsperado = 11 - (suma % 11);
    
    // Casos Especiales (0 y K)
    dv = (dv == 'K')?10:dv;
    dv = (dv == 0)?11:dv;
    
    // Validar que el Cuerpo coincide con su Dígito Verificador
    if(dvEsperado != dv) { rut.setCustomValidity("RUT Inválido"); return false; }
    
    // Si todo sale bien, eliminar errores (decretar que es válido)
    rut.setCustomValidity('');
	else {window.location="./php/insert.php";}
}
	