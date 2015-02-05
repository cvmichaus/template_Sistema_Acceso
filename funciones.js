// MUESTRA LA FEHCA
		function obtiene_fecha() {
		var fecha_actual = new Date()
		var d = fecha_actual.getDay()
		var dia = fecha_actual.getDate()
		var mes = fecha_actual.getMonth() + 1
		var anio = fecha_actual.getFullYear()
		if (mes == 1)
		mes = 'Enero'
		if (mes == 2)
		mes = 'Febrero'
		if (mes == 3)
		mes = 'Marzo'
		if (mes == 4)
		mes = 'Abril'
		if (mes == 5)
		mes = 'Mayo'
		if (mes == 6)
		mes = 'Junio'
		if (mes == 7)
		mes = 'Julio'
		if (mes == 8)
		mes = 'Agosto'
		if (mes == 9)
		mes = 'Septiembre'
		if (mes == 10)
		mes = 'Octubre'
		if (mes == 11)
		mes = 'Noviembre'
		if (mes == 12)
		mes = 'Diciembre'
		if (d == 0)
		d = 'Domingo'
		if (d == 1)
		d = 'Lunes'
		if (d == 2)
		d = 'Martes'
		if (d == 3)
		d = 'Miercoles'
		if (d == 4)
		d = 'Jueves'
		if (d == 5)
		d = 'Viernes'
		if (d == 6)
		d = 'Sabado'
		return (d + ", " + dia + " de " + mes + " del " + anio)
		}
		function fecha() {
		document.write ( obtiene_fecha() )
		}

		//CERRAR MENSAJE
		function cerrar(){
		div = document.getElementById('mesaje');
		div.style.display='none';
		}
