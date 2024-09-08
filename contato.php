<?php include 'includes/dados.php';?>
<!DOCTYPE html>
<html>
    <head>
        <title>Contato - <?php echo $nomepag;?> </title>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/styles.css">
    </head>
    <body>
        <div class="container">
            <?php include 'includes/header.php';?>
            <main>
                <div>
                    <h1 id="clique_exercicio">Contato</h1>
                    <p>Fale com a nossa empresa</p>
                    <div class="grid">
                        <form action="" method="get" id="form_exercicio">
                            <div class="grid-item">
                                <label for="form_nome">Digite seu nome</label>
                                <input type="text" id="form_nome" name="nome">
                            </div>
                            <div class="grid-item">
                                <label for="form_email">Digite seu e-mail</label>
                                <input type="text" id="form_email" name="email">
                            </div>
                            <div class="grid-item">
                                <label for="form_mensagem">Digite sua mensagem</label>
                                <textarea id="form_mensagem" placeholder="Digite a mensagem completa" name="mensagem"></textarea>
                            </div>
                            <button type="submit" id="botao">Enviar via botão</button>
                            <input type="submit" value="Enviar via atributo do input">
                        </form>
                    </div>
                </div>
            </main>
            <?php include 'includes/footer.php';?>
        </div>
    </body>
</html>