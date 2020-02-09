<?php

function req($onde){
    include("html/{$onde}/index.php");
}

function validarLogin(){
    if(isset($_COOKIE['iduser']) && isset($_COOKIE['cry'])){
        return true;
    } else{
        return false;
    }
}

function route(){
    if(isset($_GET['onde'])){
        $o = $_GET['onde'];
        if($o == "login"){
            //Valida se não estou logado
            if(!validarLogin()){
                req($o);
            } else{
                req("dashboard");
            }
        } else if($o == "register"){
            //Valida se não estou logado
            if(!validarLogin()){
                req($o);
            } else{
                req("dashboard");
            }
        } else if($o == "dashboard"){
            if(validarLogin()){
                req($o);
            } else{
                req("login");
            }
        }  else{
            req($o);
        }
        
    } else{
        if(validarLogin()){
            req("dashboard");
        } else{
            req("login");
        }
    }
}