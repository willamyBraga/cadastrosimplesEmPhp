<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/estilo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header class="cabecalho">
        <a href="#">Cadastro Simples</a>
        <nav>
            <li><a href="index.php">Home</a></li>
            <li><a href="#modal">Produtos</a></li>
            <li><a href="#modal">Usuario</a></li>
        </nav>
    </header>

    <section class="conteudo" id="conteudo"></section>

    <div class="modal" id="modal" tabindex="-1">
             <a href="#" class="modal__overlay" aria-label="Fechar"></a>
        <div class="modal__content">
            <a href="#" class="modal__fechar" aria-label="Fechar">x</a>
            <div class="formulario">
                <form action="grava.php" method="post">
                    <label>Nome produto</label>
                    <input type="text" name="nome" placehold="nome">
                    <label>Fornecedor</label>
                    <input type="text" name="Forne" placehold="nome">
                    <label>Quantidade</label>
                    <input type="number" name="qtd" placehold="nome">
                    <button name="enviar">Cadastrar</button>
                    <button>Listar</button>
                </form>
            </div>
        </div>
    </div>

    <script src="js/script.js"></script>
</body>
</html>