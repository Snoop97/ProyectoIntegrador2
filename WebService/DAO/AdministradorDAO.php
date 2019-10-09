<?php
    require_once '../Conexion/Conexion.php';
    require_once '../Bean/AdministradorBean.php';
    class AdministradorDAO
    {
        public function Login(AdministradorBean $objadmbean)
        {
            try
            {
                $cn = new ConexionBD();
                $cnx = $cn->getConexionBd();
                $sql = "SELECT * FROM `administrador` where email_adm=? AND password_adm=?;";
                $stmt = $cnx->prepare($sql);
                $stmt->bind_param('ss',$objadmbean->email_adm,$objadmbean->password_adm);
                $stmt->execute();

                $estado = 0;
                $response = $stmt->get_result();

                if(mysqli_stmt_affected_rows($stmt)>0)
                {
                    $estado = 1;   
                }else{
                    $estado = 0;
                }
            }
            catch(Exception $exc)
            {
                echo $exc->getTraceAsString();
            }
            return $estado;
        }
    }
?>