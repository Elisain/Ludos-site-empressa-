<!--pergunta para o professor o pq meu php ta dando esse erro-->
<!-- ?php 
$products = [
  1 => ['id' => 1, 'name' => 'Hollow Knight', 'price' => 46.99, 'quantity' => 1],
  2 => ['id' => 2, 'name' => 'Disco Elysium', 'price' => 75.00, 'quantity' => 1],
  3 => ['id' => 3, 'name' => 'Stardew Valley', 'price' => 15.00, 'quantity' => 1],
  4 => ['id' => 4, 'name' => 'Loop Hero', 'price' => 5.00, 'quantity' => 1],
  5 => ['id' => 5, 'name' => 'Rain World', 'price' => 65.00, 'quantity' => 1],
  6 => ['id' => 6, 'name' => 'Outer Wilds', 'price' => 40.00, 'quantity' => 1],
  7 => ['id' => 7, 'name' => 'Mouthwashing', 'price' => 50.00, 'quantity' => 1],
  8 => ['id' => 8, 'name' => 'Celeste', 'price' => 32.00, 'quantity' => 1],
];

session_start();
require 'cart.php';
require 'product.php';

if(isset($_GET['id'])){
  
  $id = strip_tags($_GET['id']) ;
  $productInfo= $products[$id];
  $product = new product;
  $product->setId($productInfo['id']);
  $product->setName($productInfo['name']);
  $product->setPrice($productInfo['price']);
  $product->setQuantity($productInfo['quantity']);

  $cart= new Cart;
  $cart-> add($product);
}
var_dump($_SESSION['cart'] ??[]);
?> -->
<!DOCTYPE html>
<html lang="PT-BR">
<link rel="shortcut icon" type="imagem/x-icon" href="https://file.garden/Z_qT_GOCUBt3xGXM/morango.png">
<meta charset="UTF-8">
<title>Jogos</title>
<link rel="stylesheet" href="layout.css">
</head>
<body>
    <header>
        <h1>Jogos de ludos para PC</h1>
        <p>explore diversos títulos aclamados do ludos brasil jogos, 
        agora disponivel para jogar no pc atravez do Steam ou Epic games.</p>
       
        <ul id="menu">
            <li><a href="estrutura.html" target="_blank">Início</a></li>
            <li><a href="jogos.html" target="_blank">Jogos</a></li>
            <li><a href="Acessórios.html" target="_blank">Acessórios</a></li>
            <li><a href="Noticias.html" target="_blank">Notícias</a></li>
            <li><a href="Formulario_serviço.html" target="_blank">Suporte Técnico</a></li>
          </ul>
    </header>
  
  
         <div class="div Search">
          <input type="text" placeholder="Pesquisando..." id ="pesquisar">
         </div>
         


      <div id="Botoes"> 
        <button > Mostre todos</button>
        <button >Mais vendidos</button>
        <button >Novos</button>
        <button >Recomendados</button>
      </div> 

      <div class = "container">

       <div class="item"> <p>Hollow Knight<br><a href="?id=1">compre aqui!</a></p><a href="https://store.steampowered.com/app/367520/Hollow_Knight/"> <img src="https://cdn2.steamgriddb.com/thumb/9122e6917c43df2c068332f00db0ff97.jpg"  alt="Hollow Knight"> </a></div>
       
       <div class="item"><p>Disco Elysium<br><a href="?id=2">compre aqui!</a></p> <a href="https://store.steampowered.com/app/632470/Disco_Elysium__The_Final_Cut/"> <img src="https://file.garden/Z_qT_GOCUBt3xGXM/discoelysium.png" alt="Disco Elysium"> </a></div>

       <div class="item"><p>Stardew Valley<br><a href="?id=3">compre aqui!</a></p> <a href="https://store.steampowered.com/app/413150/Stardew_Valley/"> <img src="https://file.garden/Z_qT_GOCUBt3xGXM/Stardew%20valley.jpg" alt="Stardew Valley"> </a> </div>

       <div class="item"><p>Loop Hero<br><a href="?id=4">compre aqui!</a></p> <a href="https://store.steampowered.com/app/1282730/Loop_Hero/"><img src="https://file.garden/Z_qT_GOCUBt3xGXM/loop%20hero.jpg" alt="Loop Hero"></a></div>

       <div class="item"><p>Rain World<br><a href="?id=5">compre aqui!</a></p> <a href="https://store.steampowered.com/app/312520/Rain_World/"><img src="https://file.garden/Z_qT_GOCUBt3xGXM/Rain%20world.jpg" alt="Rain Worlds"></a></div>

       <div class="item"><p>Outer Wilds<br><a href="?id=6">compre aqui!</a></p> <a href="https://store.steampowered.com/app/753640/Outer_Wilds/"><img src="https://file.garden/Z_qT_GOCUBt3xGXM/outer%20wilds.jpg" alt="Outer Wilds"></a></div>
       
       <div class="item"><p>Mouthwashing<br><a href="?id=7">compre aqui!</a></p> <a href="https://store.steampowered.com/app/2475490/Mouthwashing/"><img src="https://cdn2.steamgriddb.com/thumb/42bd68812a735fd82fb147d647285227.jpg" alt="Mouthwashing"></a></div>

       <div class="item"><p>Celeste<br><a href="?id=8">compre aqui!</a></p> <a href="https://store.steampowered.com/app/504230/Celeste/"><img src="https://cdn2.steamgriddb.com/thumb/41ed419ab4a0d14a54f9c09526c03ccd.jpg" alt="Celeste" ></a></div>
     
    </div>
    
     <footer id="Ludos">
        <h3>Ludos</h3>
        <p>Fundanda em 1990, como a proprietaria, Lusia da conceição de 1999,a Ludos publica jogos para pc-sendo a maior editora do Brasil neste segmento-jogos,jogos 
          e mais jogos.</p>
        <p>Copyright & copy; 2023 Ludos Games Brasil. Todos os direitos para Elisa Sescon.</p> 
        <p>R.Rua aleatoria, 111 - Casa / São pedro da aldeia - Rj, CEP 00001-00</p>
        <p>Telefone: (22) 99999-9999</p>
        <a>elisasesconink@gmail.com</a>
        <p>Essa pagina foi criada para fins educacionais e não representa uma empresa real.</p>
    
          <h3>Redes sociais</h3>
          <p><a href="https://www.facebook.com/ludosgamesbrasil">Facebook</a></p>
          <p><a href="https://twitter.com/ludosgamesbrasil">Twitter</a></p>
          <p><a href="https://www.instagram.com/ludosgamesbrasil">Instagram</a></p>
          <p><a href="https://www.linkedin.com/company/ludosgamesbrasil">LinkedIn</a></p>
      
       </footer>
       <style> 
        p{
            color: white;
            font-size: 20px;
        }
       </style>
</body>
</html>