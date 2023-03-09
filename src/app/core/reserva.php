<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //Inclui a função irá redirecionar o usuário com o erro 
    include('C:\\xampp\htdocs\TCC_2021-main\src/app/common/fcq.php');

    if (!empty($_POST['nomeVacina']) && !empty($_POST['nomeClinica']) && 
        !empty($_POST['dataReserva']) && !empty($_POST['horarioReserva'])) {

        include('../controller/cliente.php');
        include('../controller/controller.php');
        
        $reserva = new cliente();
        $verifica = new Controller();

        //Recebe o valor do input da vacina
        $idTipo = $_POST['nomeVacina'];
        //Pega a primeira letra da string e transforma em inteiro
        $idTipo = intval(substr($idTipo,0,1));

         //Recebe o valor do nome clinica
         $idClinica = $_POST['nomeClinica'];
         //Pega a primeira letra da string e transforma em inteiro
         $idClinica = intval(substr($idTipo,0,1));

         $dataReserva = $verifica->clean($_POST['dataReserva']);
         $horarioReserva = $verifica->clean($_POST['horarioReserva']);

         $idU = $_SESSION['usuario'];
         $idUsuario = $idU['id'];

         //Faz a verificação se já existe uma reserva 
         $resultadoVerifica =  $reserva->checkReservation($idUsuario,$idClinica);

         if($resultadoVerifica[0]['total'] == 0) {
             echo "Nenhuma reserva criada";
         }
         else {
            $msg = "";
            $url = "//localhost/TCC_2021-main/src/app/view/administrador/painelAdm.php";
            createAlert($msg, $url);
            die();
         }
    } 
    else {
        $msg = "Verifique se inseriu todos os dados corretamente da reserva";
        $url = "//localhost/TCC_2021-main/src/app/view/administrador/painelAdm.php";
        createAlert($msg, $url);
        die();
    }
} 
else {
    header("location: //localhost/TCC_2021-main/src/");
}