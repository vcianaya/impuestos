function solonumeros(e){
	key=e.keycode || e.which || e.keyCode;
	teclado =String.fromCharCode(key);
	numero="0123456789";
	especiales="8-9-37-38-46";
	teclado_especial=false;
	for(var i in especiales){
	if(key==especiales[i]){
		teclado_especial=true;
		}
	}
		if(numero.indexOf(teclado)==-1 && !teclado_especial){
			return false;
			}
		}
function tabular(e,obj) {
  tecla=(document.all) ? e.keyCode : e.which;
  if(tecla!=13) return;
  frm=obj.form;
  for(i=0;i<frm.elements.length;i++)
    if(frm.elements[i]==obj) {
      if (i==frm.elements.length-1) i=-1;
      break }
  frm.elements[i+1].focus();
  return false;
}  
function sololetras(e){
	key=e.keycode || e.which || e.keyCode;
	teclado =String.fromCharCode(key).toUpperCase();
	letras=" ABCDEFGHIJKLMNÑOPQRSTUVWXYZ-";
	especiales="8-9-32-37-38-46-164";
	teclado_especial=false;
		for(var i in especiales){
			if(key==especiales[i]){
				teclado_especial=true;
				}
					}
			if(letras.indexOf(teclado)==-1 && !teclado_especial){
						return false;
					}
				}
		
function alfanumerico(e){
	key=e.keycode || e.which || e.keyCode;
	teclado =String.fromCharCode(key).toUpperCase();
	letras=" ABCDEFGHIJKLMNÑOPQRSTUVWXYZ0123456789-";
	especiales="8-9-32-37-38-46-164-191";
	teclado_especial=false;

		for(var i in especiales){
			if(key==especiales[i]){

			teclado_especial=true;break;
				}
		}

		if(letras.indexOf(teclado)==-1 && !teclado_especial){
			return false;
				}

				}
function captura(){
	var a= document.guarda.cant_fol.value;
	alert(a);
}