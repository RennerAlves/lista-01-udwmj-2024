<?php 

class session{

        function session(){
                //construtor
        }

        function setSession($vars,$val){
                session_start();
                $_SESSION[$vars] = $val;
        }

        function getSession($vars){
                session_start();
                return $_SESSION[$vars];
        }

}
