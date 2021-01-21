<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index(): Response
    {
        return $this->render('default/index.html.twig', []);
    }

    /**
     * @Route("/nos-prestations", name="terms_conditions")
     */
    public function getServices(): Response
    {
        return $this->render('default/services.html.twig', []);
    }

    /**
     * @Route("/termes-et-conditions", name="terms_conditions")
     */
    public function getTerms(): Response
    {
        return $this->render('default/terms-and-conditions.html.twig', []);
    }

    /**
     * @Route("/mon-profil", name="user_account")
     */
    public function getProfile(): Response
    {
        return $this->render('default/account-profile.html.twig', []);
    }
}
