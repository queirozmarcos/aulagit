//adiciona mascara de cnpj
function MascaraCNPJ(cnpj){
	if(mascaraInteiro(cnpj)==false){
		event.returnValue = false;
	}
	return formataCampo(cnpj, '00.000.000/0000-00', event);
}
//--------------PERMITIR APENAS NUMEROS-------------//
   function numeros(caracter)
   {
      //alert(caracter);
      tecla = (window.Event) ? caracter.which : caracter.keyCode;
      //alert (tecla);
      if((tecla >= 47 && tecla < 58)||(tecla >= 96 && tecla <= 105))
      { // numeros de 0 a 9
         return true;
      }
      else
      {
         //if((tecla == 13) || (tecla == 8))
         if (tecla >= 0 && tecla <= 9)
         { // backspace, del, setas de navegacao
            //return false;
            return true;
         }
         else
         {
            return false;
         }
      }
   }
//fim

//--------------PERMITIR APENAS NUMEROS-------------//
 function letras(e){
     var tecla=(window.event)?event.keyCode:e.which;
     //alert(tecla);
     if((tecla >= 65 && tecla <= 90)||(tecla >= 97 && tecla <= 122)) return true;
    else{
    if (tecla != 8 && tecla != 32) return false;
    else return true;
    }
}

//fim

//--------------Validar numeros de CNPJ-------------//
function verificarCNPJ(edit) {
   if(edit.value=='')return false;
   s = edit.value;
   var mensagem = "CNPJ inválido!"
   var msg = "";
   var a1=s.substr(0,2);
   var a2=s.substr(3,3);
   var a3=s.substr(7,3);
   var a4=s.substr(11,4);
   var a5=s.substr(16,2);
   s = a1+a2+a3+a4+a5;
   var y;
   var c = s.substr(0,12);
   var dv = s.substr(12,2);
   var d1 = 0;
   for (y = 0; y < 12; y++)
   {
      d1 += c.charAt(11-y)*(2+(y % 8));
   }
   if (d1 == 0) msg = mensagem;
   d1 = 11 - (d1 % 11);
   if (d1 > 9) d1 = 0;
   if (dv.charAt(0) != d1) msg = mensagem;
   d1 *= 2;
   for (y = 0; y < 12; y++)
   {
      d1 += c.charAt(11-y)*(2+((y+1) % 8));
   }
   d1 = 11 - (d1 % 11);
   if (d1 > 9) d1 = 0;
   if (dv.charAt(1) != d1) msg = mensagem;
   if (msg != "")
   {
      alert(msg);
      edit.value='';
      edit.focus();
      return false;
   }
   return msg;

   //fim
}

//--------------Validar numeros de CPF-------------//
function verificarCPF(c)
{
   if (c.value.length == 14)
   {
      //alert(c.value);
      var edit=c;
      var c=c.value;
      var i;
      var a1=c.substr(0,3);
      var a2=c.substr(4,3);
      var a3=c.substr(8,3);
      var a4=c.substr(12,2);
      c = a1+a2+a3+a4;
      if (c == "00000000000" || c == "11111111111" || c == "22222222222" || c == "33333333333" || c == "44444444444" ||
      c == "55555555555" || c == "66666666666" || c == "77777777777" || c == "88888888888" || c == "99999999999" || c.length!=11)
      {
         alert("CPF Inválido ")
         v = true;
         edit.value="";
         edit.focus();
         return false;
      }
      s = c;
      var c = s.substr(0,9);
      var dv = s.substr(9,2);
      var d1 = 0;
      var v = false;
      for (i = 0; i < 9; i++)
      {
         d1 += c.charAt(i)*(10-i);
      }
      if (d1 == 0)
      {
         alert("CPF Inválido!")
         v = true;
         edit.value="";
         edit.focus();
         return false;
      }
      d1 = 11 - (d1 % 11);
      if (d1 > 9) d1 = 0;
      if (dv.charAt(0) != d1)
      {
         alert("CPF Inválido!")
         v = true;
         edit.value="";
         edit.focus();
         return false;
      }
      d1 *= 2;
      for (i = 0; i < 9; i++)
      {
         d1 += c.charAt(i)*(11-i);
      }
      d1 = 11 - (d1 % 11);
      if (d1 > 9) d1 = 0;
      if (dv.charAt(1) != d1)
      {
         alert("CPF Inválido!")
         v = true;
         edit.value="";
         edit.focus();
         return false;
      }
   }
   else
   {
     if(c.value.length > 0)
      alert("CPF Inválido!")
      v = true;
      c.value="";
      c.focus();
      return false;
   }
}
//fim

//--------------Verificar se a data esta correta-------------//
//verificar se a data esta correta
function mesano(edit) {
   mes = edit.value;
    ano = (mes.substring(6,10));
        //document.form.nr_ano.value=ano;
    mes = (mes.substring(3,5));
        //document.form.nr_mes.value=mes;
}


function verifica_data(edit) {
   //verificar tipo de parametro passado(string ou object)
   if(edit.value == undefined)
   {
      var aux; aux=edit;
      var edit = new String('');
      edit.value = aux;
      //alert(aux);
   }

   if (edit.value.length > 0)
   {
   data    = edit.value;
   var dia = data.substr(0,2);
   var mes = data.substr(3,2);
   var ano = data.substr(6,4);
   var situacao = "";
   if (edit.value.length != 10)
   { situacao= "falsa" }

   if ((dia < 01)||(dia < 01 || dia > 30) && ( mes == 04 || mes == 06 || mes == '09' || mes == 11 ) || dia > 31) {
   situacao = "falsa";
   }
   if (mes < 01 || mes > 12 ) {
   situacao = "falsa";
   }
   if (mes == 2 && ( dia < 01 || dia > 29 || ( dia > 28 && (parseInt(ano / 4) != ano / 4)))) {
   situacao = "falsa";
   }
   if (situacao == "falsa") {
    alert("Data inválida!");
    edit.value='';
    if(edit.value == "")edit.focus();//receber foco apenas se for passado objeto
    return false;
   }else {return true;}
   mesano(edit);
   }
}
//----------------fim-----------------//



//--------------Validar E-mail-------------//
function verificarEmail(edit) {
   //alert(edit.value);
    strMail = new String(edit.value);
   //re = /^[^@]+@[^@]+.[a-z]{2,}$/i;
   re = /^[\w-]+(\.[\w-]+)*@(([A-Za-z\d][A-Za-z\d-]{0,61}[A-Za-z\d]\.)+[A-Za-z]{2,6}|\[\d{1,3}(\.\d{1,3}){3}\])$/;
    if (edit.value.length > 0){
        if ((strMail.search(re) == -1)) {
            alert("E-mail inválido!");
            edit.value='';
            edit.focus();
            return false;
        }
    }
}
//-----------------fim-----------------//



/*-----------------------------------------------------------------*
 | CalculaDigitoMod11(Dado, NumDig, LimMult)                       |
 |    Retorna o(s) NumDig Dï¿½itos de Controle Mï¿½ulo 11 do       |
 |    Dado, limitando o Valor de Multiplicaï¿½o em LimMult:        |
 |                                                                 |
 |        Nmeros Comuns:               NumDig     LimMult          |
 |            CGC                         2            9           |
 |            CPF                         2           12           |
 |            PIS,C/C,Age                 1            9           |
function matricula(Dado, NumDig, LimMult) {
 *-----------------------------------------------------------------*/
function verificarDado(matricula) {
  Dado = matricula.value;
  //alert(Dado);
  if (Dado != ''){
    Dado = ("0000000".substring(1,(8-Dado.length)))+Dado;
    matricula.value=Dado;
    Dado1 = Dado.substring(0,5);
    Dado2 = Dado.substring(6,7);
    var Mult, Soma, i, n;
    NumDig = 1;
    LimMult = 5;
    for(n=1; n<=NumDig; n++) {
      Soma = 0;
      Mult = 2;
      for(i=Dado1.length-1; i>=0; i--) {
        Soma += (Mult * parseInt(Dado1.charAt(i)));
        if(++Mult > LimMult) { Mult = 2; }
      }
      Dado1 += ((Soma * 10) % 11) % 10;
    }
    DV = Dado1.substr(Dado1.length-NumDig, NumDig);
    if (DV != Dado2) {
    alert("Matrícula inválida.\nVerifique se o numero está correto.");
    matricula.value='';
    matricula.focus();
    return false;
    }
  return Dado.substr(Dado.length-NumDig, NumDig);
  }
}
//------------------fim-------------------//


//inicio -> mascara para campos
function matriculaFormat(fld, milSep, decSep, e) {
    var sep = 0;
    var key = '';
    var i = j = 0;
    var len = len2 = 0;
    var strCheck = '0123456789';
    var aux = aux2 = '';
    var whichCode = (window.Event) ? e.which : e.keyCode;

    //window.alert(whichCode);
    if ((whichCode == 8) || (whichCode == 13) || (whichCode == 0)){
        return true;  // Enter
    }
    key = String.fromCharCode(whichCode);  // Get key value from key code
    if (strCheck.indexOf(key) == -1) {
        return false;  // Not a valid key
    }
    len = fld.value.length;
    for(i = 0; i < len; i++) {
        if ((fld.value.charAt(i) != '0') && (fld.value.charAt(i) != decSep)){
             break;
        }
    }

    aux = '';
    for(i; i < len; i++) {
        if (strCheck.indexOf(fld.value.charAt(i))!=-1){
            aux += fld.value.charAt(i);
        }
    }
    aux += key;

    len = aux.length;
    if (len == 0) {
        fld.value = '';
    } else if (len == 1) {
        fld.value = '0'+ decSep + aux;
    } else if (len > 1) {
        aux2 = '';

        for (j = 0, i = len - 2; i >= 0; i--) {
            if (j == 2) {
                aux2 += milSep;
                j = 0;
            }
            aux2 += aux.charAt(i);
            j++;
        }
        fld.value = '';
        len2 = aux2.length;
        for (i = len2; i >= 0; i--) {
            fld.value += aux2.charAt(i);
        }

        fld.value += decSep + aux.substr(len - 1, len);
    }
    return false;
}



//--------------Formatar campos do tipo MOEDA-------------//
function currencyFormat(fld, milSep, decSep, e) {
    var sep = 0;
    var key = '';
    var i = j = 0;
    var len = len2 = 0;
    var strCheck = '0123456789';
    var aux = aux2 = '';
    var whichCode = (window.Event) ? e.which : e.keyCode;

    //window.alert(whichCode);
    if ((whichCode == 8) || (whichCode == 13) || (whichCode == 0)){
        return true;  // Enter
    }
    key = String.fromCharCode(whichCode);  // Get key value from key code
    if (strCheck.indexOf(key) == -1) {
        return false;  // Not a valid key
    }
    len = fld.value.length;
    for(i = 0; i < len; i++) {
        if ((fld.value.charAt(i) != '0') && (fld.value.charAt(i) != decSep)){
             break;
        }
    }

    aux = '';
    for(; i < len; i++) {
        if (strCheck.indexOf(fld.value.charAt(i))!=-1){
            aux += fld.value.charAt(i);
        }
    }
    aux += key;

    len = aux.length;
    if (len == 0) {
        fld.value = '';
    } else if (len == 1) {
        fld.value = '0'+ decSep + '0' + aux;
    } else if (len == 2) {
        fld.value = '0'+ decSep + aux;
    } else if (len > 2) {
        aux2 = '';

        for (j = 0, i = len - 3; i >= 0; i--) {
            if (j == 3) {
                aux2 += milSep;
                j = 0;
            }
            aux2 += aux.charAt(i);
            j++;
        }
        fld.value = '';
        len2 = aux2.length;
        for (i = len2 - 1; i >= 0; i--) {
            fld.value += aux2.charAt(i);
        }

        fld.value += decSep + aux.substr(len - 2, len);
    }
    return false;
}
//-----------------------fim--------------------------//


//----------Calcular diferenca de dias entre datas-----------------//
function calcDays(date1,date2,format){
//funcao para calcular diferenca entre duas datas. aceita como parametros "objetos text" ou valores diretos
  //alert('1');
  //identificar parametro (objeto text ou valor)
  if((date1.type=='text')) {date1 = date1.value;}
  if((date2.type=='text')) {date2 = date2.value;}

  if(!format) format='dd/mm/yyyy'; //padrao pt_BR

  //identificar tipo de separador
  if ((date1.indexOf("-")>=0) && (date2.indexOf("-")>=0))
  {
     //alert('-');
     date1 = date1.split("-");
     date2 = date2.split("-");
  }
  else
  {
     //alert('/');
     date1 = date1.split("/");
     date2 = date2.split("/");
  }
  if((format.toLowerCase()=='mm/dd/yyyy') || (format.toLowerCase() == 'mm/dd/yy'))
  {
    //format en_US padrao
   //alert('en_US');
    var sDate = new Date(date1[0]+"/"+date1[1]+"/"+date1[2]);
    var eDate = new Date(date2[0]+"/"+date2[1]+"/"+date2[2]);
  }
  else if((format.toLowerCase()=='yyyy/mm/dd') || (format.toLowerCase() == 'yy/mm/dd'))
    {
      //format en_US invertido
      //alert('en_US');
      var sDate = new Date(date1[1]+"/"+date1[0]+"/"+date1[2]);
      var eDate = new Date(date2[1]+"/"+date2[0]+"/"+date2[2]);
    }
    else if((format.toLowerCase()=='dd/mm/yyyy') || (format.toLowerCase() == 'dd/mm/yy')||format=='')
       {
        //format pt_BR
        //alert('pt_BR');
        var sDate = new Date(date1[1]+"/"+date1[0]+"/"+date1[2]);
        var eDate = new Date(date2[1]+"/"+date2[0]+"/"+date2[2]);
       }
  //calculo diferenca
  var daysApart = Math.abs(Math.round((sDate-eDate)/86400000));
  //alert(daysApart);
  return daysApart;
}

//-----------Funcao para validar Titulo de Eleitor------------\\
function validaTituloEleitor(rcpf1) {
  if (rcpf1.value.length == 0)
    return true;

  if(rcpf1.value=='1111111111111' || rcpf1.value=='2222222222222' || rcpf1.value=='3333333333333' || rcpf1.value=='4444444444444' || rcpf1.value=='5555555555555')
  {
    rcpf1.value='';
    return alert("Número do título eleitoral inválido!");
  }

/*
  if(!(parseInt(rcpf1.value)))
  {
    rcpf1.value='';
    return alert("Número do título eleitoral deve ser numérico.");
  }
*/

  if ( (rcpf1.value.length != 13)  )
     wrcpf1 = ("0000000000000".substring(0,(13-rcpf1.value.length)))+rcpf1.value;

  rcpf2 = wrcpf1.substr(11,2);
  j = wrcpf1.substr(9,2);

  if ( (j<1) || (j>28) )
  {
    rcpf1.value='';
    return alert("Número do título eleitoral inválido!");
  }

  d1 = 0;
  for (i=0;i<9;i++)
    d1 += wrcpf1.charAt(i)*(10-i);
  d1 = (d1 % 11);
  if (d1<=1){
     if (j<=2)
        d1 = 1 - d1;
      else
        d1 = 0;}
   else
     d1 = 11 - d1;

  if (rcpf2.charAt(0) != d1)
  {
    rcpf1.value='';
    return alert("Número do título eleitoral inválido!");
  }


  d1 *= 2;
     for (i=9;i<11;i++)
    d1 += wrcpf1.charAt(i)*(13-i);
  d1 = (d1 % 11);
  if (d1<=1){
     if (j<=2)
        d1 = 1 - d1;
      else
        d1 = 0;}
   else
     d1 = 11 - d1;

  if (rcpf2.charAt(1) != d1)
  {
    rcpf1.value='';
    return alert("Número do título eleitoral inválido");
  }


  return true;
}


//----------------------FIM----------------------//
