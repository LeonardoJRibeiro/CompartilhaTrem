<?php
    require_once 'index.php';
    $RemoverTransacao = "delete from transacao where id_objeto = '".$IdObjetoASerDesgritado
            ."' and id_usuario = '".$_SESSION['idusuario']."' and status_transacao = '0';";
    echo $RemoverTransacao;
    if($Conexao->query($RemoverTransacao)){
        if(mysqli_affected_rows($Conexao) == 0){
            echo '<script>alert("Voc� n�o pode mais fazer isso! O doador j� autorizou a busca dessa doa��o!");</script>';
        }
        echo '<script>window.location ="index";</script>';
    }
?>


