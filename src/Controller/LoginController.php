<?php

namespace App\Controller;

use App\Domain\Model\Usuario;
use App\Infrastructure\Form\LoginForm;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LoginController extends AbstractController
{
    /**
     * @Route("/login", name="login")
     */
    public function index(Request $request): Response
    {
        $usuario = new Usuario();

        $loginForm = $this->createForm(LoginForm::class, $usuario);
        $loginForm->handleRequest($request);
        if ($loginForm->isSubmitted() && $loginForm->isValid()) {
            $usuario = $loginForm->getData();

            dump($usuario);die;
        }

        return $this->render(
            'login/index.html.twig',
            [
                'login_form' => $loginForm->createView()
            ]
        );
    }
}
