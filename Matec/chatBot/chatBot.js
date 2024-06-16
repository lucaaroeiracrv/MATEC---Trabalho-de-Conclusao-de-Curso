import readline from "readline";
import fs from "fs";
import { mostProbablyQuestion, todosBancos } from "./possiveisPerguntas";

// Lê a pergunta do arquivo
let pergunta = fs.readFileSync("input.txt", "utf-8");
let palavrasPergunta;

// Remove um ponto de interrogação do final da pergunta, se houver
if (pergunta[pergunta.length - 1] === "?") {
  pergunta = pergunta.slice(0, -1);
}
palavrasPergunta = pergunta.toLowerCase().split(" ");

// Função para comparar as palavras da pergunta com um banco de palavras possíveis
function compararPergunta(banco) {
  const tamanhoBanco = banco.probablyWords.length;
  for (let i = 0; i < tamanhoBanco; ++i) {
    palavrasPergunta.forEach((palavra) => {
      if (banco.probablyWords[i] === palavra) {
        banco.matched++; // Incrementa o contador de correspondências se uma palavra da pergunta coincide com uma palavra do banco
      }
    });
  }
}

// Função para comparar a pergunta com todos os bancos de palavras possíveis
function compararTodos() {
  todosBancos.forEach((banco) => {
    compararPergunta(banco); // Chama a função compararPergunta para cada banco de palavras
  });
}

// Chama a função para comparar a pergunta com todos os bancos de palavras possíveis
compararTodos();

// Captura a resposta mais provável
let resposta = mostProbablyQuestion();

// Escreve a resposta em um arquivo de saída
fs.writeFileSync("output.txt", resposta);
