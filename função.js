console.log("Teste do JavaScript");
window.alert('oi');
// isso é um comentário oculto!
let idade;
idade = 14;
idade = idade + 0;
let nome = "Gabriel";
let legal = true;
let preço = 25.00;
let continha = 2 + 3 * (6 / 3);
// let username;
// username = window.prompt(`Qual é o seu nome de usuário`); 
// console.log(username)
console.log("Eu tenho", idade, "anos");
console.log("Meu nome é", nome);
console.log("Eu sou legal?", legal);
console.log("Resultado é igual a:", continha);
console.log(`Meu nome é ${nome}`);
console.log(typeof nome);
console.log(typeof idade);

let username;

document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("mySubmit").onclick = function() {
        let username = document.getElementById("myText").value;
        console.log(username);
    }
});

let x = "queijo";
let y = "queijo";
let z = "queijo";

x = Number(x);
y = String(y);
z = Boolean(z);

console.log(x, typeof x);
console.log(y, typeof y);
console.log(z, typeof z);

const PI = 3.14159;
let raio;
let área;
raio = window.prompt('Insira o raio de uma circunferência')
raio = Number(raio);

área =  PI * raio * raio;
console.log(área);
