

    function RutValidate(input)
    {
        
        if (!/^[0-9]+-[0-9kK]{1}$/.test(input))
            return false;
        var tmp   = input.split('-');
        var digv  = tmp[1]; 
        var rut   = tmp[0];
        if (digv == 'K') digv = 'k' ;
        return (dvValidate(rut) == digv);

    }

    function dvValidate(dv)
    {

        var m=0, s=1;
        for(;dv;dv=Math.floor(dv/10))
            s=(s+dv%10*(9-m++%6))%11;
        return s?s-1:'k';

    }

    function onlyNumbers(e)
    {

      var charCode = (evt.which) ? evt.which : evt.keyCode;
      if (charCode != 45 && charCode > 31 && (charCode < 48 || charCode > 57))
        return false;

        return true;

    }


    function emailValidate(email)
    {
    
        expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if(!expr.test(email)) {
            return false;
        } else {
            return true;
        }
    
    }


    function emptyValidate(input)
    {

        if(input.trim() == '' || input.trim().length == 0) {
            return false;
        }


    }
