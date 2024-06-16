import fs from "fs";
import { mostProbablyQuestion, todosBancos } from "./possiveisPerguntas";

// Lê a pergunta do arquivo
const pergunta = fs.readFileSync("question.txt", "utf8");
let palavrasPergunta;

// Remove um ponto de interrogação do final da pergunta, se houver
if (pergunta[pergunta.length - 1] === "?") {
  pergunta = pergunta.slice(0, -1);
  palavrasPergunta = pergunta.toLowerCase().split(" ");
} else {
  palavrasPergunta = pergunta.toLowerCase().split(" ");
}

// Função para comparar as palavras da pergunta com um banco de palavras possíveis
function compararPergunta(banco) {
  const tamanhoBanco = banco.probablyWords.length;
  for (let i = 0; i < tamanhoBanco; ++i) {
    palavrasPergunta.forEach((palavra) => {
      if (banco.probablyWords[i] === palavra) {
        banco.matched++;
      }
    });
  }
}

// Função para comparar a pergunta com todos os bancos de palavras possíveis
function compararTodos() {
  todosBancos.forEach((banco) => {
    compararPergunta(banco);
  });
}

// Chama a função para comparar a pergunta com todos os bancos de palavras possíveis
compararTodos();

// Deduz a resposta mais provável
const resposta = mostProbablyQuestion();

// Salva a resposta em um arquivo
fs.writeFileSync("answer.txt", resposta);
