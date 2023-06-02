function mascaraCPF(cpf){
    var v = cpf.value;
    
    if(isNaN(v[v.length-1])){ // impede entrar outro caractere que não seja número
       cpf.value = v.substring(0, v.length-1);
       return;
    }
    
    if (v.length == 3 || v.length == 7) cpf.value += ".";
    if (v.length == 11) cpf.value += "-";
 
}

 function mascaraMoeda(valor){
    var m = valor.value;

    var filter_valor = /^[0-9]+\.?[0-9]*$/;
    if(!filter_valor.test(m)){
        valor.value = m.substring(0, m.length-1);
        return;
    }
 }

 function validaNome(nome){
    var n = nome.value;

    var filter_nome = /^([a-zA-Zà-úÀ-Ú]|\s+)+$/;
        if (!filter_nome.test(n)){
            nome.value = n.substring(0, n.length-1);
            return;
     }
}