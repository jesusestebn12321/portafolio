
function enviar(){
	var texto= document.getElementById('input2').value;
	document.getElementById('input1').value=texto;
}
function mostrar(){
	document.getElementById('btn1').style.display="block";
}
function ocultar(){
	document.getElementById('btn1').style.display="none";
}
function ocultar_mostrar() {
	var btn= document.getElementById('btn1');
	if (btn.style.display == "block") {
		ocultar();
	}else{
		mostrar();
	}
}
function popUp(){
	window.open("{!!view('pantalla2')!!}","","width=2000","height=2000");
}