<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verifica se a opção foi enviada
    if (isset($_POST['opcao'])) {
        $opcao = $_POST['opcao'];

        // Realiza o redirecionamento com base na opção escolhida
        switch ($opcao) {
            case 'link1':
                header('Location: formulariovoluntario.php');
                exit();
            case 'link2':
                header('Location: formulariomedico.php');
                exit();
            case 'link3':
                header('Location: formulariodentista.php ');
                exit();
            case 'link4':
                header('Location: formulariopsicologo.php ');
                exit();
            case 'link5':
                header('Location: formulariomusico.php ');
                exit();  
            case 'link6':
                header('Location: formularioadm.php ');
                exit();  

            default:
                echo 'Opção inválida';
        }
    } else {
        echo 'Opção não especificada';
    }
}
?>
