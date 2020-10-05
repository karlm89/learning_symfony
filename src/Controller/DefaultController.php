<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Flex\Response;

class DefaultController extends AbstractController {
    public function index() {
        return $this->render('pages/index.html.twig', [
            'var' => 'Hello World!'
        ]);
    }

    public function show() {
        return $this->render('pages/show.html.twig', [
            'var' => 'Hello again!'
        ]);
    }
}