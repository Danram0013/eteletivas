<?php

use My_Web_Struct\controller\MainPageController;
use My_Web_Struct\controller\UsuarioController;
use My_Web_Struct\controller\ErroController;
use My_Web_Struct\controller\LoginController;
use My_Web_Struct\controller\CadastroEletivasController;
use My_Web_Struct\controller\lista_eletivasController;

return [
    "/" => MainPageController::class,
    "/main_page" => MainPageController::class,
    "/erro" => ErroController::class,
    "/erro/acesso_negado" => ErroController::class,
    "/login" => LoginController::class,
    "/login/logar" => LoginController::class,
    "/login/deslog" => LoginController::class,
    "/usuario/lista" => UsuarioController::class,
    "/usuario/cadastro" => UsuarioController::class,
    "/usuario/atualizar" => UsuarioController::class,
    "/usuario/remover" => UsuarioController::class,
    "/CadastrarEletiva" => CadastroEletivasController::class,
    "/CadastroEletiva/cadastro" => CadastroEletivasController::class,
    "/lista_eletivas" => lista_eletivasController::class,
];
