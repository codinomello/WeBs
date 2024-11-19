<!DOCTYPE html>
<html lang="pt-br">

<head>
  <?php
    $title = "Projeto PHP";
    $description = "Página convertida para PHP";
    $fontUrl = "https://fonts.googleapis.com/css2?family=Comic+Neue&display=swap";
    $cssFile = "estilo.css";
    $jsFile = "função.js";
  ?>
  <link rel="stylesheet" href="<?= $cssFile ?>">  
  <link href="<?= $fontUrl ?>" rel="stylesheet">
  <title><?= $title ?></title>
  <meta name="description" content="<?= $description ?>"> 
</head>

<body>
  <script src="<?= $jsFile ?>"></script>

  <h1>Bem-vindo à minha página de testes!</h1>

  <button> 
    <a id="bt" href="https://youtu.be/dQw4w9WgXcQ">
      Clique aqui!
    </a>
  </button>

  <h2 id="h2" class="ímpar">Esses</h2>
  <h3 id="h3" class="par">Parágrafos</h3>
  <h4 id="h4" class="ímpar">Vão</h4>
  <h5 id="h5" class="par">Ficando</h5>
  <h6 id="h6" class="ímpar">Pequenininhos</h6>

  <!-- Isso é um segredo! -->

  <p>
    <sub>Tudo</sub> <sup>bem</sup><ins>?</ins> <b>Eu</b> sou <i>legal</i>
  </p>
  <a id="fac" href="https://www.eniac.com.br" target="_self">Faculdade</a> 
  <p>
    <a href="mailto:gabrielmello84033@gmail.com" target="self" title="Contato">Meu Email</a>
  </p>

  <a href="https://www.roblox.com/home" target="_blank">
    <img src="./imagens/porquenaci.png" width="150" height="150" alt="Roblox triste" title="Tristonho">
  </a>

  <p>
    <audio controls src="./áudios/among.mp3"></audio>
  </p>
  <p>
    <video controls loop muted autoplay src="./vídeos/roblox.mp4" height="300" width="350"></video>
  </p>

  <div id="i1"></div>
  <h3><i>Listinha Desorganizada da Programação</i></h3>
  <ul>
    <li><mark>HTML</mark></li>
    <li>CSS</li>
    <li>JavaScript</li>  
  </ul>

  <h3>O que fazer na página?</h3>
  <ol type="a">
    <li>Escrever</li>
    <li>Ler</li>
    <li>Se divertir 😄</li>
  </ol>

  <h3 id="f1">Front-End</h3>
  <dl>
    <dt><b>HTML</b></dt>
    <dd>Adiciona estrutura para uma página na web</dd>
    <dt><b>CSS</b></dt>
    <dd>Adiciona estilo para uma página na web</dd>
    <dt><b>JavaScript</b></dt>
    <dd>Adiciona função para uma página na web</dd>
  </dl>

  <h3>Tabelinha do Ranque dos Elementos Químicos</h3>
  <table bgcolor="black" width="800" height="150" border="5px black solid">
    <tr bgcolor="darkgray">
      <th width="200">H</th>
      <th width="200">He</th>
      <th width="200">Ag</th>
      <th width="200">Au</th>
      <th width="200">Fe</th>
    </tr>
    <tr bgcolor="lightgray" align="center">
      <td>Muito incrível</td>
      <td>Meio meh</td>
      <td>Legalzinho</td>
      <td>Elemento dos esnobes</td>
      <td>Enferruja facilmente</td>
    </tr>
  </table>
  <p id="l1" style="color:#1a168c"><b>"Penso, logo existo"</b></p>
  <p id="caixa"><b>Oi<b></p>

  <h1 id="meuh1">Olá</h1>

  <label>Nome:</label>
  <input id="myText"><br><br>
  <button id="mySubmit">Envie</button>

  <p id="pp">Teste</p>
</body>
</html>
