<?php
class ConexionBD{
    const SERVER = "localhost";
    const USER = "id9631414_flopezs";
    const PASS = "Snoopy301297";
    const DATABASE = "id9631414_bd_route360";

    private $cn = null;

    public function getConexionBd()
    {
        try
        {
           $this->cn = mysqli_connect(self::SERVER, self::USER, self::PASS, self::DATABASE);
           $this->cn->set_charset("utf8");
    }
        
        catch(Exception $e)
        {
        }
        return $this->cn;
    }
}
?>