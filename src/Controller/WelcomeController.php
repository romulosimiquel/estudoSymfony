<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class WelcomeController extends AbstractController
{
    /**
     * @Route("/welcome", name="welcome")
     */
    public function index()
    {   
        // assim é como se usa a questão do response, é um dos jeitos para gerar a view com o conteudo que você quer no ato aqui da compra
        // $response = new Response();

        // $response->setContent('Bom dia 100or');
        // $response->setStatusCode(Response::HTTP_OK);

        // $response->headers->set('Content-Type', 'text/html');

        // $response->send();
        
        $user = 'Aldaberam';

        $array = array(
            'segunda' => array(
                'dia'   => 13,
                'local' => 'debaixo da ponte',
                'horas' => '22:13'
            ),
            'terça'   => array(
                'dia'   => 14,
                'local' => 'esquina',
                'horas' => '15:35',
            ),
            'quarta'  => array(
                'dia'   => 15,
                'local' => 'morro',
                'horas' => '07:19',
            )
        );

        return $this->render('welcome/index.html.twig', [
            'user'  => $user,
            'array' => $array
        ]);
    }
}
