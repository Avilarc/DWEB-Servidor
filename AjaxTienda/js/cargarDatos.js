//Cliente
function anadirProductos(formulario){
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			alert("Producto añadido con éxito");
			cargarCarrito();
		}};
	let params = new FormData(formulario);
	params.append("cod", formulario.elements['cod'].value);
	params.append("unidades", formulario.elements['unidades'].value);
	xhttp.open("POST", "anadir_json.php", true);
	xhttp.send(params);
	return false;
}

function eliminarProductos(formulario){
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			alert("Producto eliminado con éxito");
			cargarCarrito();
		}};
	let params = new FormData(formulario);
	params.append("cod", formulario.elements['cod'].value);
	params.append("unidades", formulario.elements['unidades'].value);
	xhttp.open("POST", "eliminar_json.php", true);
	xhttp.send(params);
	return false;
}
//ADMIN
function editarCategoria(codCat, formulario) {
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			alert("Categoría editada con éxito");
			cargarModificarCategorias();
		}
	};
	let params = new FormData(formulario);
	params.append("codCate", codCat);
	params.append("nombre", formulario.elements['nombre'].value);
	xhttp.open("POST", "edita_categoria.php", true);
	xhttp.send(params);
	return false;
}

function eliminarCategoria(codCat) {
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			alert("Categoría eliminada con éxito");
			cargarModificarCategorias();
		}
	};
	let params = new FormData();
	params.append("codCat", codCat);
	xhttp.open("POST", "elimina_categoria.php", true);
	xhttp.send(params);
}

function editarUsuario(codUsu, formulario) {
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			alert("Usuario editado con éxito");
			cargarModificarUsuarios();
		}
	};
	let params = new FormData();
	params.append("codUsu", codUsu);
	params.append("nombre", formulario.elements['nombre'].value);
	params.append("direccion", formulario.elements['direccion'].value);
	params.append("correo", formulario.elements['correo'].value);
	params.append("contraseña", formulario.elements['contraseña'].value);
	params.append("permisos", formulario.elements['permisos'].value);
	xhttp.open("POST", "edita_usuario.php", true);
	xhttp.send(params);
}

function eliminarUsuario(codUsu) {
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			alert("Usuario eliminado con éxito");
			cargarModificarUsuarios();
		}
	};
	let params = new FormData();
	params.append("codUsu", codUsu);
	xhttp.open("POST", "elimina_usuario.php", true);
	xhttp.send(params);
}

function editarProducto(codProd, formulario) {
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			alert("Producto editado con éxito");
			cargarModificarProductos();
		}
	};
	let params = new FormData();
	params.append("codProd", codProd);
	params.append("nombre", formulario.elements['nombre'].value);
	params.append("descripcion", formulario.elements['descripcion'].value);
	params.append("precio", formulario.elements['precio'].value);
	params.append("stock", formulario.elements['stock'].value);
	params.append("codCate", formulario.elements['codCate'].value);
	xhttp.open("POST", "edita_producto.php", true);
	xhttp.send(params);
}

function eliminarProducto(codProd) {
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			alert("Producto eliminado con éxito");
			cargarModificarProductos();
		}
	};
	let params = new FormData();
	params.append("codProd", codProd);
	xhttp.open("POST", "elimina_producto.php", true);
	xhttp.send(params);
}

function anadirCategoria(formulario) {
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			alert("Categoría añadida con éxito");
			cargarAnadirCategorias();
		}
	};
	let params = new FormData(formulario);
	params.append("nombre", formulario.elements['nombre'].value);
	xhttp.open("POST", "anadir_categoria.php", true);
	xhttp.send(params);

}

function anadirUsuario(formulario) {
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			alert("Usuario añadido con éxito");
			cargarAnadirUsuarios();
		}
	};
	let params = new FormData(formulario);
	params.append("nombre", formulario.elements['nombre'].value);
	params.append("direccion", formulario.elements['direccion'].value);
	params.append("usuario", formulario.elements['usuario'].value);
	params.append("contraseña", formulario.elements['contraseña'].value);
	params.append("permisos", formulario.elements['permisos'].value);
	xhttp.open("POST", "anadir_usuario.php", true);
	xhttp.send(params);
	return false;
}

function anadirProductos2(formulario) {
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			alert("Producto añadido con éxito");
			cargarAnadirProductos();
		}
	};
	let params = new FormData();
	params.append("nombre", formulario.elements['nombre'].value);
	params.append("descripcion", formulario.elements['descripcion'].value);
	params.append("precio", formulario.elements['precio'].value);
	params.append("stock", formulario.elements['stock'].value);
	params.append("codCate", formulario.elements['codCate'].value);
	xhttp.open("POST", "anadir_producto.php", true);
	xhttp.send(params);
}
function cargarProductos(destino){
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			var prod = document.getElementById("contenido");
			var titulo = document.getElementById("titulo");
			titulo.innerHTML ="Productos";
			try{
				var filas =  JSON.parse(this.responseText);
				var tabla = crearTablaProductos(filas);
				prod.innerHTML = "";
				prod.appendChild(tabla);
			}catch(e){
				var mensaje = document.createElement("p");
				mensaje.innerHTML = "Categoría sin productos";
				prod.innerHTML = "";
				prod.appendChild(mensaje);
			}
		}
	};
	xhttp.open("GET", destino, true);
	xhttp.send();
	return false;
}

function crear_fila(campos, tipo){
	var fila = document.createElement("tr");
	for(var i = 0; i < campos.length; i++){
		var celda = document.createElement(tipo);
		celda.innerHTML = campos[i];
		fila.appendChild(celda);
	}
	return fila;

}
function crearFormulario(texto, cod, stock, funcion){
	var formu = document.createElement("form");
	var unidades = document.createElement("input");
	unidades.value = 1;
	unidades.type = "number";
	unidades.name = "unidades";
	unidades.min = 1;
	unidades.max = stock;
	var codigo = document.createElement("input");
	codigo.value = cod;
	codigo.type = "hidden";
	codigo.name = "cod";
	var bsubmit = document.createElement("input");
	bsubmit.type = "submit";
	bsubmit.value = texto;
	formu.onsubmit = function(){return funcion(this);}
	formu.appendChild(unidades);
	formu.appendChild(codigo);
	formu.appendChild(bsubmit);
	return formu;
}
function crearTablaProductos(productos){
	var tabla = document.createElement("table");
	var cabecera = 	crear_fila(["Código", "Nombre", "Descripción","Precio", "Stock", "Comprar"], "th");
	tabla.appendChild(cabecera);
	for(var i = 0; i < productos.length; i++){
		/*formulario*/
		formu = crearFormulario( "Añadir", productos[i]['codProd'], productos[i]['stock'],anadirProductos);
		fila = crear_fila([productos[i]['codProd'], productos[i]['nombre'], productos[i]['descripcion'], productos[i]['precio'], productos[i]['stock']], "td");
		celda_form = document.createElement("td");
		celda_form.appendChild(formu);
		fila.appendChild(celda_form);
		tabla.appendChild(fila);
	}
	return tabla;
}
function procesarPedido(){
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			var contenido = document.getElementById("contenido");
			contenido.innerHTML = "";
			var titulo = document.getElementById("titulo");
			titulo.innerHTML ="Estado del pedido";
			if(this.responseText.length>0){
				contenido.innerHTML = "Pedido realizado";
				var filas =  JSON.parse(this.responseText);
					tabla = crearTablaPedido(filas);
				contenido.appendChild(tabla);
			}else{
				contenido.innerHTML = "Error al procesar el pedido";
			}
	}};
	xhttp.open("GET", "procesar_pedido_json.php", true);
	xhttp.send();
	return false;
}
function crearTablaPedido(productos){
	var tabla = document.createElement("table");
	var cabecera = 	crear_fila(["Código", "Nombre", "Descripción", "Unidades"], "th");
	tabla.appendChild(cabecera);
	for(var i = 0; i < productos.length; i++){
		fila = crear_fila([productos[i]['codProd'], productos[i]['nombre'], productos[i]['descripcion'],productos[i]['unidades']], "td");
		celda_form = document.createElement("td");
		fila.appendChild(celda_form);
		tabla.appendChild(fila);
	}
	return tabla;
}

function cargarCarrito(){
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			var contenido = document.getElementById("contenido");
			contenido.innerHTML = "";
			var titulo = document.getElementById("titulo");
			titulo.innerHTML ="Carrito de la compra";
			try{
				var filas =  JSON.parse(this.responseText);
				tabla = crearTablaCarrito(filas);
				contenido.appendChild(tabla);
				/*ahora el vínculo de procesar pedio*/
				var procesar = document.createElement("a");
				procesar.href ="#";
				procesar.innerHTML= "Realizar pedido";
				procesar.onclick = function (){return procesarPedido();};
				contenido.appendChild(procesar);
			}catch(e){
				var mensaje = document.createElement("p");
				mensaje.innerHTML = "Todavía no tiene productos";
				contenido.appendChild(mensaje);
			}

	}};
	xhttp.open("GET", "carrito_json.php", true);
	xhttp.send();
	return false;
}

function crearTablaCarrito(productos){
	var tabla = document.createElement("table");
	var cabecera = 	crear_fila(["Código", "Nombre", "Descripción", "Unidades", "Eliminar"], "th");
	tabla.appendChild(cabecera);
	for(var i = 0; i < productos.length; i++){
		/*formulario*/
		formu = crearFormulario("Eliminar", productos[i]['codProd'], productos[i]['unidades'], eliminarProductos);
		fila = crear_fila([productos[i]['codProd'], productos[i]['nombre'], productos[i]['descripcion'],productos[i]['unidades']], "td");
		celda_form = document.createElement("td");
		celda_form.appendChild(formu);
		fila.appendChild(celda_form);
		tabla.appendChild(fila);
	}
	return tabla;
}


function crearVinculoCategorias(nom, cod){
	var vinculo = document.createElement("a");
	var ruta = "productos_json.php?categoria=" +cod;;
	vinculo.href = ruta;
	vinculo.innerHTML = nom;
	vinculo.onclick = function(){return cargarProductos(this);}
	return vinculo;
}

function cargarCategorias() {
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			var cats =  JSON.parse(this.responseText);
			var lista = document.createElement("ul");
			for(var i = 0; i < cats.length; i++){
				elem = document.createElement("li");
				vinculo = crearVinculoCategorias(cats[i].nombre, cats[i].codCate);
				elem.appendChild(vinculo);
				lista.appendChild(elem);
			}
			var contenido = document.getElementById("contenido");
			contenido.innerHTML = "";
			var titulo = document.getElementById("titulo");
			titulo.innerHTML ="Categorías";
			contenido.appendChild(lista);
		}
	};
	xhttp.open("GET", "categorias_json.php", true);
	xhttp.send();
	return false;
}

function crearFormularioRegistro() {
	var formu = document.createElement("form");
	formu.onsubmit = function(){return registrarUsuario(this);};

	var title = document.createElement("h2");
	title.textContent = "Registro";
	formu.appendChild(title);

	var labelUsuario = document.createElement("label");
	labelUsuario.textContent = "Correo";
	formu.appendChild(labelUsuario);

	var usuario = document.createElement("input");
	usuario.type = "text";
	usuario.name = "usuario";
	formu.appendChild(usuario);

	var labelClave = document.createElement("label");
	labelClave.textContent = "Contraseña";
	formu.appendChild(labelClave);

	var clave = document.createElement("input");
	clave.type = "password";
	clave.name = "clave";
	formu.appendChild(clave);

	var labelDireccion = document.createElement("label");
	labelDireccion.textContent = "Dirección";
	formu.appendChild(labelDireccion);

	var direccion = document.createElement("input");
	direccion.type = "text";
	direccion.name = "direccion";
	formu.appendChild(direccion);

	var labelNombre = document.createElement("label");
	labelNombre.textContent = "Nombre";
	formu.appendChild(labelNombre);

	var nombre = document.createElement("input");
	nombre.type = "text";
	nombre.name = "nombre";
	formu.appendChild(nombre);

	var bsubmit = document.createElement("input");
	bsubmit.type = "submit";
	bsubmit.value = "Registrarse";
	formu.appendChild(bsubmit);

	var loginSection = document.getElementById("login");
	loginSection.appendChild(formu);
}

function registrarUsuario(formulario) {
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			alert("Usuario registrado con éxito");
			window.location.href = 'una_sola_pagina.php'; // Redirige al usuario a la página de inicio de sesión
		}
	};
	let params = new FormData(formulario);
	params.append("usuario", formulario.elements['usuario'].value);
	params.append("clave", formulario.elements['clave'].value);
	params.append("direccion", formulario.elements['direccion'].value);
	params.append("nombre", formulario.elements['nombre'].value);
	xhttp.open("POST", "registrar_usuario.php", true);
	xhttp.send(params);
	return false;
}

function cargarBody() {
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			var permisos = parseInt(this.responseText);
			if (permisos == 0) {
				cargarCategorias();
			} else if (permisos == 1) {
				cargarCategoriasAdministrador();
			}
		}
	};
	xhttp.open("GET", "permisos_sesion.php", true);
	xhttp.send();
}
function cargarCategoriasAdministrador() {
	var paginas = ["Categorias", "Usuarios", "Productos"];
	var contenido = document.getElementById("contenido");
	contenido.innerHTML = "";
	var tabla = crearTablaCategoriasAdministrador(paginas);
	var titulo = document.getElementById("titulo");
	titulo.innerHTML ="ADMINISTRADOR";
	contenido.appendChild(tabla);
}

function crearTablaCategoriasAdministrador(paginas) {
	var tabla = document.createElement("table");
	var cabecera = crear_fila(["Nombre", "Modificar", "Añadir"], "th");
	tabla.appendChild(cabecera);
	for(let i = 0; i < paginas.length; i++){
		var fila = crear_fila([paginas[i]], "td");

		var celda_modificar = document.createElement("td");
		var vinculo_modificar = document.createElement("a");
		vinculo_modificar.href = "#";
		vinculo_modificar.textContent = "Modificar";
		vinculo_modificar.onclick = function(event) {
			event.preventDefault();
			if (typeof paginas[i] === 'string') {
				switch(paginas[i].toLowerCase()) {
					case 'categorias':
						return cargarModificarCategorias();
					case 'usuarios':
						return cargarModificarUsuarios();
					case 'productos':
						return cargarModificarProductos();
				}
			}
		};
		celda_modificar.appendChild(vinculo_modificar);
		fila.appendChild(celda_modificar);

		var celda_anadir = document.createElement("td");
		var vinculo_anadir = document.createElement("a");
		vinculo_anadir.href = "#";
		vinculo_anadir.textContent = "Añadir";
		vinculo_anadir.onclick = function(event) {
			event.preventDefault();
			if (typeof paginas[i] === 'string') {
				switch(paginas[i].toLowerCase()) {
					case 'categorias':
						return cargarAnadirCategorias();
					case 'usuarios':
						return cargarAnadirUsuarios();
					case 'productos':
						return cargarAnadirProductos();
				}
			}
		};
		celda_anadir.appendChild(vinculo_anadir);
		fila.appendChild(celda_anadir);

		tabla.appendChild(fila);
	}
	return tabla;
}

function cargarModificarCategorias() {
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			var contenido = document.getElementById("contenido");
			contenido.innerHTML = "";
			var titulo = document.getElementById("titulo");
			titulo.innerHTML = "Modificar Categorías";
			var filas = JSON.parse(this.responseText);
			var tabla = crearTablaModificarCategorias(filas);
			contenido.appendChild(tabla);
		}
	};
	xhttp.open("GET", "categorias_modificar.php", true);
	xhttp.send();
	return false;
}


function crearTablaModificarCategorias(datos) {
	var tabla = document.createElement("table");
	var cabecera = crear_fila(["Código", "Nombre", "Editar", "Eliminar"], "th");
	tabla.appendChild(cabecera);
	for(var i = 0; i < datos.length; i++){
		var fila = crear_fila([datos[i]['codCate'], datos[i]['nombre']], "td");
		var input_hidden = document.createElement("input");
		input_hidden.type = "hidden";
		input_hidden.value = datos[i]['codCate'];

		var celda_editar = document.createElement("td");
		var boton_editar = document.createElement("button");
		boton_editar.textContent = "Editar";
		boton_editar.onclick = function() { abrirEditorCategorias(input_hidden.value); };
		celda_editar.appendChild(boton_editar);
		fila.appendChild(celda_editar);

		var celda_eliminar = document.createElement("td");
		var boton_eliminar = document.createElement("button");
		boton_eliminar.textContent = "Eliminar";

		boton_eliminar.onclick = function() { eliminarCategoria(input_hidden.value); };
		celda_eliminar.appendChild(boton_eliminar);
		fila.appendChild(celda_eliminar);

		tabla.appendChild(fila);
	}
	return tabla;
}

function abrirEditorCategorias(codCat) {
	var contenido = document.getElementById("contenido");

	var formu = document.createElement("form");
	formu.id = "formEditarCategoria";

	var labelNombre = document.createElement("label");
	labelNombre.textContent = "Nombre de la categoría";
	formu.appendChild(labelNombre);

	var nombre = document.createElement("input");
	nombre.type = "text";
	nombre.name = "nombre";
	formu.appendChild(nombre);

	var bsubmit = document.createElement("input");
	bsubmit.type = "submit";
	bsubmit.value = "Editar categoría";
	bsubmit.onclick = function(event) {
		event.preventDefault();
		editarCategoria(codCat, formu);
	};

	var backLink = document.createElement("a");
	backLink.href = "#";
	backLink.textContent = "Volver atrás";
	backLink.onclick = function(event) {
		event.preventDefault();
		cargarCategoriasAdministrador();
	};

	formu.appendChild(bsubmit);
	contenido.innerHTML = "";
	contenido.appendChild(formu);
	contenido.appendChild(backLink);
}

function cargarModificarUsuarios() {
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			var contenido = document.getElementById("contenido");
			contenido.innerHTML = "";
			var titulo = document.getElementById("titulo");
			titulo.innerHTML = "Modificar Usuarios";
			var filas = JSON.parse(this.responseText);
			var tabla = crearTablaModificarUsuarios(filas);
			contenido.appendChild(tabla);
		}
	};
	xhttp.open("GET", "usuarios_modificar.php", true);
	xhttp.send();
	return false;
}

function crearTablaModificarUsuarios(datos) {
	var tabla = document.createElement("table");
	var cabecera = crear_fila(["Código", "Nombre", "Dirección", "Correo", "Contraseña", "Permisos", "Editar", "Eliminar"], "th");
	tabla.appendChild(cabecera);
	for(var i = 0; i < datos.length; i++){
		var fila = crear_fila([datos[i]['codUsu'], datos[i]['nombre'], datos[i]['direccion'], datos[i]['correo'], datos[i]['contraseña'], datos[i]['permisos']], "td");
		var input_hidden = document.createElement("input");
		input_hidden.type = "hidden";
		input_hidden.value = datos[i]['codUsu'];
		var celda_editar = document.createElement("td");
		var boton_editar = document.createElement("button");
		boton_editar.textContent = "Editar";
		boton_editar.onclick = function() { abrirEditorUsuarios(input_hidden); };
		celda_editar.appendChild(boton_editar);
		fila.appendChild(celda_editar);

		var celda_eliminar = document.createElement("td");
		var boton_eliminar = document.createElement("button");
		boton_eliminar.textContent = "Eliminar";
		boton_eliminar.onclick = function() { eliminarUsuario(input_hidden); };
		celda_eliminar.appendChild(boton_eliminar);
		fila.appendChild(celda_eliminar);

		tabla.appendChild(fila);
	}
	return tabla;
}

function abrirEditorUsuarios(codUsu) {
	var contenido = document.getElementById("contenido");

	var formu = document.createElement("form");
	formu.id = "formEditarUsuario";

	var labelNombre = document.createElement("label");
	labelNombre.textContent = "Nombre";
	formu.appendChild(labelNombre);

	var nombre = document.createElement("input");
	nombre.type = "text";
	nombre.name = "nombre";
	formu.appendChild(nombre);

	var labelDireccion = document.createElement("label");
	labelDireccion.textContent = "Dirección";
	formu.appendChild(labelDireccion);

	var direccion = document.createElement("input");
	direccion.type = "text";
	direccion.name = "direccion";
	formu.appendChild(direccion);

	var labelUsuario = document.createElement("label");
	labelUsuario.textContent = "Correo";
	formu.appendChild(labelUsuario);

	var usuario = document.createElement("input");
	usuario.type = "text";
	usuario.name = "correo";
	formu.appendChild(usuario);

	var labelClave = document.createElement("label");
	labelClave.textContent = "Contraseña";
	formu.appendChild(labelClave);

	var clave = document.createElement("input");
	clave.type = "password";
	clave.name = "contraseña";
	formu.appendChild(clave);

	var labelPermisos = document.createElement("label");
	labelPermisos.textContent = "Permisos";
	formu.appendChild(labelPermisos);

	var permisos = document.createElement("input");
	permisos.type = "text";
	permisos.name = "permisos";
	formu.appendChild(permisos);

	var bsubmit = document.createElement("input");
	bsubmit.type = "submit";
	bsubmit.value = "Editar usuario";
	bsubmit.onclick = function(event) {
		event.preventDefault();
		editarUsuario(codUsu, formu);
	};

	var backLink = document.createElement("a");
	backLink.href = "#";
	backLink.textContent = "Volver atrás";
	backLink.onclick = function(event) {
		event.preventDefault();
		cargarModificarUsuarios();
	};

	formu.appendChild(bsubmit);
	contenido.innerHTML = "";
	contenido.appendChild(formu);
	contenido.appendChild(backLink);
}



function cargarModificarProductos() {
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			var contenido = document.getElementById("contenido");
			contenido.innerHTML = "";
			var titulo = document.getElementById("titulo");
			titulo.innerHTML = "Modificar Productos";
			var filas = JSON.parse(this.responseText);
			var tabla = crearTablaModificarProductos(filas);
			contenido.appendChild(tabla);
		}
	};
	xhttp.open("GET", "productos_modificar.php", true);
	xhttp.send();
	return false;
}

function crearTablaModificarProductos(datos) {
	var tabla = document.createElement("table");
	var cabecera = crear_fila(["Código", "Nombre", "Descripción", "Precio", "Stock", "Código de Categoría", "Editar", "Eliminar"], "th");
	tabla.appendChild(cabecera);
	for(var i = 0; i < datos.length; i++){
		var fila = crear_fila([datos[i]['codProd'], datos[i]['nombre'], datos[i]['descripcion'], datos[i]['precio'], datos[i]['stock'], datos[i]['codCate']], "td");
		var input_hidden = document.createElement("input");
		input_hidden.type = "hidden";
		input_hidden.value = datos[i]['codProd'];
		var celda_editar = document.createElement("td");
		var boton_editar = document.createElement("button");
		boton_editar.textContent = "Editar";
		boton_editar.onclick = function() { abrirEditorProductos(input_hidden.value); };
		celda_editar.appendChild(boton_editar);
		fila.appendChild(celda_editar);

		var celda_eliminar = document.createElement("td");
		var boton_eliminar = document.createElement("button");
		boton_eliminar.textContent = "Eliminar";
		boton_eliminar.onclick = function() { eliminarProducto(input_hidden.value); };
		celda_eliminar.appendChild(boton_eliminar);
		fila.appendChild(celda_eliminar);

		tabla.appendChild(fila);
	}
	return tabla;
}

function abrirEditorProductos(codProd) {
	var contenido = document.getElementById("contenido");

	var formu = document.createElement("form");
	formu.id = "formEditarProducto";
	formu.onsubmit = function(event) {
		event.preventDefault();
		editarProducto(codProd, formu);
	};

	var labelNombre = document.createElement("label");
	labelNombre.textContent = "Nombre del producto";
	formu.appendChild(labelNombre);

	var nombre = document.createElement("input");
	nombre.type = "text";
	nombre.name = "nombre";
	formu.appendChild(nombre);

	var labelPrecio = document.createElement("label");
	labelPrecio.textContent = "Precio";
	formu.appendChild(labelPrecio);

	var precio = document.createElement("input");
	precio.type = "number";
	precio.name = "precio";
	formu.appendChild(precio);

	var labelStock = document.createElement("label");
	labelStock.textContent = "Stock";
	formu.appendChild(labelStock);

	var stock = document.createElement("input");
	stock.type = "number";
	stock.name = "stock";
	stock.min = 0;
	formu.appendChild(stock);

	var labelDescripcion = document.createElement("label");
	labelDescripcion.textContent = "Descripción";
	formu.appendChild(labelDescripcion);

	var descripcion = document.createElement("input");
	descripcion.type = "text";
	descripcion.name = "descripcion";
	formu.appendChild(descripcion);

	var labelCodCate = document.createElement("label");
	labelCodCate.textContent = "Código de Categoría";
	formu.appendChild(labelCodCate);

	var codCate = document.createElement("input");
	codCate.type = "text";
	codCate.name = "codCate";
	formu.appendChild(codCate);

	var bsubmit = document.createElement("input");
	bsubmit.type = "submit";
	bsubmit.value = "Editar producto";
	formu.appendChild(bsubmit);

	var backLink = document.createElement("a");
	backLink.href = "#";
	backLink.textContent = "Volver atrás";
	backLink.onclick = function(event) {
		event.preventDefault();
		cargarModificarProductos();
	};

	contenido.innerHTML = "";
	contenido.appendChild(formu);
	contenido.appendChild(backLink);
}

function cargarAnadirCategorias() {
	var contenido = document.getElementById("contenido");

	var formu = document.createElement("form");
	formu.id = "formAnadirCategoria";

	var labelNombre = document.createElement("label");
	labelNombre.textContent = "Nombre de la categoría";
	formu.appendChild(labelNombre);

	var nombre = document.createElement("input");
	nombre.type = "text";
	nombre.name = "nombre";
	formu.appendChild(nombre);

	var bsubmit = document.createElement("input");
	bsubmit.type = "submit";
	bsubmit.value = "Añadir categoría";
	bsubmit.onclick = function(event) {
		event.preventDefault();
		anadirCategoria(formu);
	};

	var backLink = document.createElement("a");
	backLink.href = "#";
	backLink.textContent = "Volver atrás";
	backLink.onclick = function(event) {
		event.preventDefault();
		cargarCategoriasAdministrador();
	};


	formu.appendChild(bsubmit);
	contenido.innerHTML = "";
	contenido.appendChild(formu);
	contenido.appendChild(backLink);
}

function cargarAnadirUsuarios() {
	var contenido = document.getElementById("contenido");

	var formu = document.createElement("form");
	formu.id = "formAnadirUsuario";

	var labelNombre = document.createElement("label");
	labelNombre.textContent = "Nombre";
	formu.appendChild(labelNombre);

	var nombre = document.createElement("input");
	nombre.type = "text";
	nombre.name = "nombre";
	formu.appendChild(nombre);

	var labelDireccion = document.createElement("label");
	labelDireccion.textContent = "Dirección";
	formu.appendChild(labelDireccion);

	var direccion = document.createElement("input");
	direccion.type = "text";
	direccion.name = "direccion";
	formu.appendChild(direccion);

	var labelUsuario = document.createElement("label");
	labelUsuario.textContent = "Correo";
	formu.appendChild(labelUsuario);

	var usuario = document.createElement("input");
	usuario.type = "text";
	usuario.name = "usuario";
	formu.appendChild(usuario);

	var labelClave = document.createElement("label");
	labelClave.textContent = "Contraseña";
	formu.appendChild(labelClave);

	var clave = document.createElement("input");
	clave.type = "password";
	clave.name = "contraseña";
	formu.appendChild(clave);

	var labelPermisos = document.createElement("label");
	labelPermisos.textContent = "Permisos";
	formu.appendChild(labelPermisos);

	var permisos = document.createElement("input");
	permisos.type = "text";
	permisos.name = "permisos";
	formu.appendChild(permisos);

	var bsubmit = document.createElement("input");
	bsubmit.type = "submit";
	bsubmit.value = "Añadir usuario";
	bsubmit.onclick = function(event) {
		event.preventDefault();
		anadirUsuario(formu);
	};

	var backLink = document.createElement("a");
	backLink.href = "#";
	backLink.textContent = "Volver atrás";
	backLink.onclick = function(event) {
		event.preventDefault();
		cargarCategoriasAdministrador();
	};

	formu.appendChild(bsubmit);
	contenido.innerHTML = "";
	contenido.appendChild(formu);
	contenido.appendChild(backLink);
}

function cargarAnadirProductos() {
	var contenido = document.getElementById("contenido");

	var formu = document.createElement("form");
	formu.id = "formAnadirProducto";

	var labelNombre = document.createElement("label");
	labelNombre.textContent = "Nombre del producto";
	formu.appendChild(labelNombre);

	var nombre = document.createElement("input");
	nombre.type = "text";
	nombre.name = "nombre";
	formu.appendChild(nombre);

	var labelDescripcion = document.createElement("label");
	labelDescripcion.textContent = "Descripción";
	formu.appendChild(labelDescripcion);

	var descripcion = document.createElement("input");
	descripcion.type = "text";
	descripcion.name = "descripcion";
	formu.appendChild(descripcion);

	var labelPrecio = document.createElement("label");
	labelPrecio.textContent = "Precio";
	formu.appendChild(labelPrecio);

	var precio = document.createElement("input");
	precio.type = "number";
	precio.name = "precio";
	formu.appendChild(precio);

	var labelStock = document.createElement("label");
	labelStock.textContent = "Stock";
	formu.appendChild(labelStock);

	var stock = document.createElement("input");
	stock.type = "number";
	stock.name = "stock";
	stock.min = 0;
	formu.appendChild(stock);

	var labelCodCate = document.createElement("label");
	labelCodCate.textContent = "Código de Categoría";
	formu.appendChild(labelCodCate);

	var codCate = document.createElement("input");
	codCate.type = "text";
	codCate.name = "codCate";
	formu.appendChild(codCate);

	var bsubmit = document.createElement("input");
	bsubmit.type = "submit";
	bsubmit.value = "Añadir producto";
	bsubmit.onclick = function(event) {
		event.preventDefault();
		anadirProductos2(formu);
	};

	var backLink = document.createElement("a");
	backLink.href = "#";
	backLink.textContent = "Volver atrás";
	backLink.onclick = function(event) {
		event.preventDefault();
		cargarCategoriasAdministrador();
	};

	formu.appendChild(bsubmit);
	contenido.innerHTML = "";
	contenido.appendChild(formu);
	contenido.appendChild(backLink);
}

