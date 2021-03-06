<div class="">
    <h1>CONTATO</h1>

    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $nome = htmlspecialchars($_POST["nome"]);
        $email = htmlspecialchars($_POST["email"]);
        $assunto = htmlspecialchars($_POST["assunto"]);
        $sensagem = htmlspecialchars($_POST["sensagem"]);

        echo '<div class="alert alert-success" role="alert">Dados enviados com sucesso! <br>Abaixo seguem os dados que voc&ecirc; enviou</div>';
        echo '<div class="well">';
        echo '<strong>Nome: </strong>' . $nome;
        echo '<br /><strong>Email: </strong>' . $email;
        echo '<br /><strong>Assunto: </strong>' . $assunto;
        echo '<br /><strong>Mensagem: </strong>' . $sensagem;
        echo '</div>';

    }
    ?>

    <form action="/contato" method="post">

        <div class="form-group">
            <input type="text" class="form-control" name="nome" required placeholder="Nome*">
        </div>
        <div class="form-group">
            <input type="email" class="form-control" name="email" required placeholder="Email*">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="assunto" required placeholder="Assunto*">
        </div>
        <div class="form-group">
            <textarea class="form-control" name="sensagem" rows="7" required placeholder="Messagem*"></textarea>
        </div>
        <div class="mbr-buttons mbr-buttons--right">
            <button type="submit" class="mbr-buttons__btn btn btn-lg btn-danger">ENVIAR</button>
        </div>
    </form>
</div>
