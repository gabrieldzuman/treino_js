var nome = "Gabriel Dzuman";
let idade = 23;
const pais = "Brasil";

if (idade >= 18) {
    console.log("Você é maior de idade.");
} else {
    console.log("Você é menor de idade.");
}

for (let i = 0; i < 50; i++) {
    console.log("Número: " + i);
}

function saudacao(nome) {
    console.log("Olá, " + nome + "!");
}
saudacao("Gabriel Dzuman");

// Objeto que armazena informações sobre a pessoa
const pessoa = {
    nome: "Gabriel Dzuman",
    idade: 23,
    pais: "Brasil"
};

// Função para verificar se a pessoa é maior de idade com base no país
function verificarMaioridade(infoPessoa) {
    if (infoPessoa.idade >= 18) {
        console.log(infoPessoa.nome + " é maior de idade.");
    } else if (infoPessoa.idade < 18 && infoPessoa.pais === "Brasil") {
        console.log(infoPessoa.nome + " é menor de idade no Brasil.");
    } else {
        console.log(infoPessoa.nome + " é menor de idade em seu país de residência.");
    }
}

// Chamando a função com as informações da pessoa
verificarMaioridade(pessoa);