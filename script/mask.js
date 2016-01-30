function mascara(obj, fn)
{
	v_obj = obj;
	v_fun = fn;
	setTimeout("execmascara()", 1);
}

function execmascara()
{
	v_obj.value = v_fun(v_obj.value);
}

function cpfmask(v)
{
	v = v.replace(/\D/g,"");
	v = v.replace(/(\d{3})(\d)/,"$1.$2");
	v = v.replace(/(\d{3})(\d)/,"$1.$2");
	v = v.replace(/(\d{3})(\d)/,"$1-$2");
	return v;
}

function fonemask(v)
{
	v = v.replace(/\D/g,"");
	v = v.replace(/(\d{2})(\d)/,"($1) $2");
	v = v.replace(/(\d{4})(\d)/,"$1-$2");
	return v;
}

function celmask(v)
{
	v = v.replace(/\D/g,"");
	v = v.replace(/(\d{2})(\d)/,"($1) $2");
	v = v.replace(/(\d{4})(\d)/,"$1-$2");
	
	if(v.length == 15)
	{
		v = v.replace(/\D/g,"");
		v = v.replace(/(\d{2})(\d)/,"($1) $2");
		v = v.replace(/(\d{5})(\d)/,"$1-$2");
	}
	
	return v;
}

function cepmask(v)
{
	v = v.replace(/\D/g,"");
	v = v.replace(/(\d{5})(\d)/,"$1-$2");
	return v;
}

function datemask(v)
{
	v = v.replace(/\D/g,"");
	v = v.replace(/(\d{2})(\d)/,"$1/$2");
	v = v.replace(/(\d{2})(\d)/,"$1/$2");
	return v;
}