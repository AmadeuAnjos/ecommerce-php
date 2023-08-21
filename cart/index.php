<?php
ob_start();
require('./sheep_core/config.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEGA-Store</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <!--- TOPO DO SITE HEADER--->
    <header>
            <p class="logo">MEGASTORE</p>
            <div class="cart">
                <i class="fa fa-shopping-cart"></i>
                <p>0</p>
            </div>
    </header>
    <!--- FIM TOPO DO SITE HEADER --->

    <!--- CORPO DO SITE MAIN --->
    <main>
        <!--- PRODUTOS DO SITE SECTION --->
        <section>
            <!--- INICIO PRODUTO --->
            <div class="container">
                <form action="filtros/criar.php" method="POST" enctype="multipart/form-data">
                    <div class="linha-produtos">
                        <div class="corpoProduto">
                            <div class="imgProduto">
                                <img src="assets/img/produto-1.jpg" alt="" class="produtoMiniatura">
                            </div>
                            <div class="titulo">
                                <p>Curso PHP</p>
                                <h2>R$ 495,00</h2>
                                <input type="hidden" name="id_produto" value="">
                                <input type="hidden" name="valor" value="">
                                <button type="submit" name="addCarrinho">Adicionar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!--- FIM PRODUTO --->

            <!--- INICIO PRODUTO --->
            <form action="filtros/criar.php" method="POST">
                <div class="container">
                    <div class="linha-produtos">
                        <div class="corpoProduto">
                            <div class="imgProduto">
                                <img src="assets/img/produto-2.jpg" alt="" class="produtoMiniatura">
                            </div>
                            <div class="titulo">
                                <p>Curso PHP</p>
                                <h2>R$ 495,00</h2>
                                <input type="hidden" name="id_produto" value="">
                                <input type="hidden" name="valor" value="">
                                <button type="submit" name="addCarrinho">Adicionar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <!--- FIM PRODUTO --->

            <!--- INICIO PRODUTO --->
            <form action="filtros/criar.php" method="POST">
                <div class="container">
                    <div class="linha-produtos">
                        <div class="corpoProduto">
                            <div class="imgProduto">
                                <img src="assets/img/produto-3.jpg" alt="" class="produtoMiniatura">
                            </div>
                            <div class="titulo">
                                <p>Curso PHP</p>
                                <h2>R$ 495,00</h2>
                                <input type="hidden" name="id_produto" value="">
                                <input type="hidden" name="valor" value="">
                                <button type="submit" name="addCarrinho">Adicionar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <!--- FIM PRODUTO --->

            <!--- INICIO PRODUTO --->
            <form action="filtros/criar.php" method="POST">
                <div class="container">
                    <div class="linha-produtos">
                        <div class="corpoProduto">
                            <div class="imgProduto">
                                <img src="assets/img/produto-4.jpg" alt="" class="produtoMiniatura">
                            </div>
                            <div class="titulo">
                                <p>Curso PHP</p>
                                <h2>R$ 495,00</h2>
                                <input type="hidden" name="id_produto" value="">
                                <input type="hidden" name="valor" value="">
                                <button type="submit" name="addCarrinho">Adicionar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <!--- FIM PRODUTO --->

            <!--- INICIO PRODUTO --->
            <form action="filtros/criar.php" method="POST">
                <div class="container">
                    <div class="linha-produtos">
                        <div class="corpoProduto">
                            <div class="imgProduto">
                                <img src="assets/img/produto-4.jpg" alt="" class="produtoMiniatura">
                            </div>
                            <div class="titulo">
                                <p>Curso PHP</p>
                                <h2>R$ 495,00</h2>
                                <input type="hidden" name="id_produto" value="">
                                <input type="hidden" name="valor" value="">
                                <button type="submit" name="addCarrinho">Adicionar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <!--- FIM PRODUTO --->

            <!--- INICIO PRODUTO --->
            <form action="filtros/criar.php" method="POST">
                <div class="container">
                    <div class="linha-produtos">
                        <div class="corpoProduto">
                            <div class="imgProduto">
                                <img src="assets/img/produto-4.jpg" alt="" class="produtoMiniatura">
                            </div>
                            <div class="titulo">
                                <p>Curso PHP</p>
                                <h2>R$ 495,00</h2>
                                <input type="hidden" name="id_produto" value="">
                                <input type="hidden" name="valor" value="">
                                <button type="submit" name="addCarrinho">Adicionar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <!--- FIM PRODUTO --->
        </section>
        <!--- FIM PRODUTOS DO SITE SECTION --->

        <!--- INICIO BARRA LATERAL SITE  --->
        <aside>
            <div class="barraLateral">
                <div class="topoCarrinho">
                    <p>Meu carrinho</p>
                </div> 
            </div>

            <!--- INICIO PRODUTO CARRINHO  --->
            <div class="item-carrinho">
                <div class="linha-da-imagem">
                    <img src="assets/img/produto-4.jpg" alt="" class="img-carrinho">
                </div>
                <p>Curso PHP</p>
                <h2>R$ 497,00</h2>
                <form action="filtros/excluir.php" method="POST">
                    <input type="hidden" name="id_produto" value="">
                    <button id="btn" type="submit"><i class="fa fa-trash-o"></i></button>
                </form>
            </div>
            <!--- FIM PRODUTO CARRINHO  --->

            <!--- INICIO CARRINHO VAZIO --->
            <div class="item-carrinho-vazio">
                Seu carrinho está vazio !
            </div>
            <div class="rodape">
                <h3>Total</h3>
                <h2>R$ 597,00</h2>
            </div>
            <!--- FIM CARRINHO VAZIO --->

        </aside>
        <!--- FIM BARRA LATERAL SITE  --->
        
    </main>
    <!--- FIM DO CORPO DO SITE MAIN --->

</body>

</html>