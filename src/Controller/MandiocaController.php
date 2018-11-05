<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MandiocaController extends AbstractController
{
    /**
     * @Route("/mandioca", name="mandioca")
     */
    public function index()
    {
        return $this->render('mandioca/index.html.twig', [
            'controller_name' => 'MandiocaController',
        ]);
    }

    /**
     * @Route("/mandioca/acao", name="mandioca")
     */
    public function acao()
    {
        $retorno = 2*2;

        return $this->render('mandioca/index.html.twig',  [
            'controller_name' => $retorno,
        ]);
    }
}
