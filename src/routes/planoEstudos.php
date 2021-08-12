<?php

use Slim\Http\Request;
use Slim\Http\Response;


use App\Models\Orgao;
use App\Models\Questao;
use App\Models\Assunto;

//LISTAGEM DE Orgao DISPONÍVEIS
$app->get('/api/v1/orgaos', function (Request $request, Response $response, array $args) {    
    $orgaos = new Questao();
    return $response->withJson($orgaos->getOrgaosDisponiveis());
});

//LISTAGEM DE BANCAS
$app->get('/api/v1/bancas/{id_orgao}', function (Request $request, Response $response, array $args) {
    $bancas = new Questao();
    $listaBancas = $bancas->getBancasDisponiveis($args['id_orgao']);
    return $response->withJson($listaBancas);
});