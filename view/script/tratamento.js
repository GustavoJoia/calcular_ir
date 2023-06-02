export default function formataDados(dado){
    let n_dado = dado.replace(/"?/g, '');
    let perm_dados = n_dado.split('=');

    return perm_dados[1];
}

export function formataValor(valor){
    let format = valor.toLocaleString('pt-br',{style: 'currency', currency: 'BRL'});
    return format;
}

export function check(divida){
    if(divida == 'Isento'){
        document.querySelector('#p').innerHTML = "Você está &nbsp";
        document.querySelector('#aliquota').innerHTML = divida;
        document.querySelector('#p2').innerHTML = "&nbsp da cobrança do Imposto de Renda";
        document.querySelector('#pali').innerHTML = "";
        document.querySelector('#pali2').innerHTML = "";
        document.querySelector('#porcentagem').innerHTML = "";
    } else {
        document.querySelector('#p').innerHTML = "Você deve &nbsp";
        document.querySelector('#aliquota').innerHTML = formataValor(parseFloat(divida));
        document.querySelector('#p2').innerHTML = "&nbspde Imposto de Renda";
    }
}