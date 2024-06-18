<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
//$routes->get('cadastro', 'Home::cadastro');
$routes->get('ExibirAluno', 'Home::ExibirAluno');
$routes->get('cadastro','Home::CadastroAluno');
$routes->post('cadastro','Home::CadastroAluno');
$routes->get('avaliacao','Home::avaliacao');
$routes->post('avaliacao','Home::avaliacao');
$routes->get('Submissao','Home::Submissao');
$routes->post('Submissao','Home::Submissao');
$routes->get('Avaliacao', 'Home::Avaliacao');
$routes->post('Avaliacao', 'Home::Avaliacao');
$routes->get('ExibirAvaliacao', 'Home::ExibirAvaliacao');
$routes->post('ExibirAvaliacao', 'Home::ExibirAvaliacao');
$routes->get('ExibirSubmissao', 'Home::ExibirSubmissao');
$routes->post('ExibirSubmissao', 'Home::ExibirSubmissao');
$routes->get('Administracao', 'Home::Administracao');
$routes->post('Administracao', 'Home::Administracao');

$routes->get('admin','Home::admin',['filter'=>'group:admin']);
$routes->post('admin','Home::admin',['filter'=>'group:admin']);

$routes->get('aluno','Home::Submissao',['filter'=>'group:user']);
$routes->post('aluno','Home::Submissao',['filter'=>'group:user']);

$routes->get('/user','Home::Submissao');
$routes->post('/user','Home::Submissao');

$routes->get('verSubmissao','Home::verSubmissao');
$routes->post('verSubmissao','Home::verSubmissao');

service('auth')->routes($routes);