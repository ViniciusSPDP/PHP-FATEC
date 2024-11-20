<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
        require_once 'CartaoTravel.php';

        echo "<h3>Criando o objeto user1</h3>";
        $user1 = new CartaoTravel();
        $user1->cadastrarCartao("Black");
        $user1->setNumero(1);
        $user1->setUsuario("José");
        $user1->carregarCartao(1000);
        $user1->tarifacartao();
        $user1->usarCartao(550);
        $user1->encerrarCartao();
        $user1->usarCartao(500);
        $user1->encerrarCartao();
        print_r($user1);

        echo "<h3>Criando o objeto user2</h3>";
        $user2 = new CartaoTravel();
        $user2->cadastrarCartao("Compacto");
        $user2->setNumero(2);
        $user2->setUsuario("Maria");
        $user2->carregarCartao(500);
        $user2->tarifacartao();
        $user2->usarCartao(600);
        $user2->encerrarCartao();
        $user2->usarCartao(505);
        $user2->encerrarCartao();
        print_r($user2);
        ?>
        </pre>
    </body>
</html>
