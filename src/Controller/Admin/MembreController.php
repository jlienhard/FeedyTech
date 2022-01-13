<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('admin/membre', name: 'admin_membre')]
class MembreController extends AbstractController
{
    #[Route('/', name: 'admin_membre_index')]
    public function index(): Response
    {
        return $this->render('admin/membre/index.html.twig', []);
    }
}
