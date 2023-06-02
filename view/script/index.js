import {formataValor} from "./tratamento.js";
import { check } from "./tratamento.js";

fetch('../controller/retorno.php')
    .then(response => response.json())
    .then(data => {

        console.log(data);
        
        let rendimento = parseFloat(data.rendimento);
        document.querySelector("#rendimento").innerHTML = formataValor(rendimento);
        check(data.divida);

        let aliquota = data.aliquota;
        document.querySelector('#porcentagem').innerHTML = (aliquota);

        let nomeCompleto = data.nome + ' ' + data.sobrenome;
        document.querySelector('#nome').innerHTML = (nomeCompleto);

        let cpf = data.cpf;
        document.querySelector('#cpf').innerHTML = (cpf);

    })
    .catch(error => console.error(error));