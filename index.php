<?php
$imagens = glob("imagens/*jpg"); //Pegar todas as imagem .jpg da pasta informada 
$dados = json_decode(file_get_contents("dados.json"), true); //Ler os dados do arquivo em json

$imagemAleatoria = $imagens[array_rand($imagens)]; //Escolhe uma imagem aleatoria dentre as presentes na pasta e com o array_rand e coloca em uma variavel

$nomeImagem = basename($imagemAleatoria); //extrai somente o nome do arquivo

$personagem = $dados[$nomeImagem]; //recupera os dados dos personagems

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        * {
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
        }

        .title{
            margin-top: 15px;
            margin-bottom: 10px;
            font-size: 30px;
            color: #e6b800;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color:rgb(0, 0, 0);
            padding: 25px;
            border-radius: 20px;
            box-shadow: 0 0 20px rgba(0,0,0,0.4);
            border: 3px solid #fff;
        }
        

        body {
            background-image: url(./deathstar-background.jpg);
            background-size: 1400px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 115vh;
            padding: 20px;
        }

        container {
            text-align: center;
            background-color: rgba(248, 3, 3, 0.05);
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 0 20px rgba(0,0,0,0.4);
        }

        img {
            width: 500px;
            height: 400px;
            object-fit: cover;
            border-radius: 15px;
            margin-bottom: 20px;
            border: 3px solid #fff;
            object-fit: cover;
        }

        h2 {
            margin-bottom: 10px;
            font-size: 24px;
        }

        

        button {
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 10px;
            background-color: #ffcc00;
            color: #000;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        h3{
            font-size: 28px;
            color: #ffcc00;
            margin-bottom: 10px;
        }

        button:hover {
            background-color: #e6b800;
        }
        .paragrafo{
            font-size: 18px;
            color: white;
            font-weight: bold;
            padding: 10px 20px;
            
        }

        .fundo{
            background-color: rgb(0, 0, 0, 0.8);
            border: solid, #ccc, 3px;
            border-radius: 10px;
            margin-bottom: 15px;
        }
    </style>
 
    <h1 class="title">PERSONAGENS ALEATÓRIOS DE STAR WARS</h1>
 
    <form method="POST" action="index.php">
            <button type="submit">Mostrar personagem aleatório</button>
    </form><br>
    <img src="./<?php echo $imagemAleatoria; ?>" alt="">
    <h3 class="h3"><?php echo $personagem['nome'];?></h3>
    <div class="fundo">
    <p class="paragrafo"> <?php echo $personagem['descricao']; ?> </p>
    </div>

</body>
</html>
