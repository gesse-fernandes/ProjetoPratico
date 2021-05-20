<?php
include('includes/sidebar.php');
?>
<main>
    <div class="container">
        <h1 class="display-4 text-center mt-5">Lista de Produtos</h1>
        <div class="row mt-5">
            <?php
            $p  = $_POST['pesquisar'] ?? null;

            if (isset($p)) {
                $lista = $noticia->Pesquisar($p);
                if ($lista) {
                    $imagem = $lista['imagem']; ?>
                    <div class="col-lg-4 mb-3">
                        <div class="card">
                            <img src="<?php echo INCLUDE_PATH ?>/uploads/<?php echo $imagem ?>" alt="">


                            <div class="card-body">
                                <h5 class="card-title"><strong><?php echo $lista['titulo']; ?></strong></h5>
                                <p class="card-text">
                                    <?php echo $lista['conteudo']; ?>
                                </p>
                                <div class="d-flex justify-content-between">
                                    <a href="excluir.php?id=<?php echo $lista['id']; ?>" class="btn btn-danger">Deletar notícia</a>
                                    <a href="editar.php?id=<?php echo $lista['id']; ?>" class="btn btn-primary">Editar notícia</a>
                                </div>
                            </div>
                            <!--card-body-->
                        </div>
                        <!--card-->
                    </div>
                    <?php
                } else {
                    echo "não existe essa noticia!";
                }
            } else {
                $lista = \backend\Models\ProdutosModels::listarProdutos();

                if ($lista) {
                    foreach ($lista as $item) :
                        $id = $item['id'];
                        $nome = $item['nomeProduto'];
                        $descricao = $item['descricao'];
                        $preco = $item['preco'];
                        $imagem = $item['imagem'];
                    ?>
                        <div class="col-lg-4 mb-3">
                            <div class="card">
                                <img src="<?php echo INCLUDE_PATH ?>/uploads/<?php echo $imagem ?>" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <p>Nome: <?php echo $nome; ?></p>
                                    </h5>
                                    <p class="card-text">
                                        Preço R$: <?php echo $preco; ?>
                                    </p>
                                    <p class="card-text">
                                        Descricao do produto: <?php echo $descricao ?>
                                    </p>
                                    <div class="d-flex justify-content-between">
                                        <?php
                                        if (isset($_SESSION['login'])) {
                                        ?>
                                            <a href="excluir.php?id=<?php echo $id; ?>" class="btn btn-danger">Deletar produto</a>
                                            <a href="editar.php?id=<?php echo $id; ?>" class="btn btn-primary">Editar produto</a>
                                        <?php
                                        }
                                        ?>

                                    </div>
                                </div>
                                <!--card-body-->
                            </div>
                            <!--card-->
                        </div>
                        <!--col-lg-4-->
                    <?php endforeach;
                } else {
                    ?>
                    <div class="col-lg-4 mb-3">
                        <div class="card">



                            <div class="card-body">

                                <p class="card-text text-right">
                                    Nenhum conteudo a ser exibido cadastre uma noticia
                                </p>

                            </div>
                            <!--card-body-->
                        </div>
                        <!--card-->
                    </div>
            <?php
                }
            } ?>




        </div>
        <!--row-->
    </div>
    <!--container-->
</main>
<?php
include('includes/footer.php');
?>