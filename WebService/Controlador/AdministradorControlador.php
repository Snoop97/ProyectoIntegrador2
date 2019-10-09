<?php
    require_once '../Bean/AdministradorBean.php';
    require_once '../DAO/AdministradorDAO.php';

    $op =  $_GET['op'];
    $usuarioAdm = '';
    $passwordAdm = '';

    switch($op)
    {
        case 1:
         {
             $usuarioAdm = $_GET['usuarioAdm'];
             $passwordAdm = $_GET['passwordAdm'];

             $objadmbean = new AdministradorBean();
             $objadmdao = new AdministradorDAO();

             $objadmbean->setEmail_adm($usuarioAdm);
             $objadmbean->setPassword_adm($passwordAdm);

             $estado = $objadmdao->Login($objadmbean);
             echo ($estado == 1) ? "success":"failed";
             break; 
         }
         case 2:
            break;
         case 3:
            break;
         default:{
             break;
         }
    }
?>