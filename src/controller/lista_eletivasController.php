<?php

namespace My_Web_Struct\controller;

use My_Web_Struct\controller\inheritance\Controller;
use Nyholm\Psr7\Response;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Server\RequestHandlerInterface;

class CadastroEletivasController extends Controller implements RequestHandlerInterface
{

    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $path_info = $request->getServerParams()["PATH_INFO"];
        $response = null;

         if (strpos($path_info, "cadastro")) {
            $response = $this->create();
        } else if (strpos($path_info, "lista")) {
            // $response = $this->list();
        } else {
            $bodyHttp = $this->getHTTPBodyBuffer("/erro/Erro_404.php",);
            $response = new Response(200, [], $bodyHttp);
        }
        return $response;
    }

public function create(): ResponseInterface
    {
        $validate = $this->validateCredentials(["adm"]);
        if(!is_null($validate)){
            return $validate;
        }
        $bodyHttp = $this->getHTTPBodyBuffer("cadastro_eletiva/lista_eletivas.php");
        $response = new Response(200, [], $bodyHttp);
        return $response;
    }
}