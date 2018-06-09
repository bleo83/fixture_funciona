function isNumber(e) {
    k = (document.all) ? e.keyCode : e.which;
    if (k==8 || k==0) return true;
    patron = /\d/;
    n = String.fromCharCode(k);
    return patron.test(n);
}

function vaciar(campo) {
	return "";
}


