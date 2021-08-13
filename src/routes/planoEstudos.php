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

$app->get('/api/v1/questoes', function (Request $request, Response $response, array $args) {
    $bancas = new Questao();
    $id_orgao = $request->getParam('id_orgao');
    $id_banca = $request->getParam('id_banca');
    $listaQuestoes = $bancas->getQuestoes($id_orgao,$id_banca)->toArray();

    $ids = array_map( function($questao){ return $questao['id_assunto']; }, $listaQuestoes );
    
    $assuntos = new Assunto();
    $listaAssuntos = $assuntos->getAssuntos(array_unique($ids));
    return $response->withJson(
        ['questoes' => $listaQuestoes,'assuntos'=>$listaAssuntos]);
});