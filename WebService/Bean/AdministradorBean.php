<?php
    class AdministradorBean
    {
        public $id_adm;
        public $email_adm;
        public $password_adm;

        function getid_adm()
        {
            return $this->id_adm;
        }
        function getemail_adm()
        {
            return $this->email_adm;
        }
        function getpassword_adm()
        {
            return $this->password_adm;
        }
        function setid_adm($id_adm)
        {
            $this->id_adm=$id_adm;
        }
        function setemail_adm($email_adm)
        {
            $this->email_adm=$email_adm;
        }
        function setpassword_adm($password_adm)
        {
            $this->password_adm=$password_adm;
        }
    }
?>