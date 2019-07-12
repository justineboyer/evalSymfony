<?php

namespace App\Controller;

use App\Entity\BlogPost;
use App\Repository\BlogPostRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @Route("/blog")
 */
class BlogPostController extends AbstractController
{
    /**
     * @Route("/", name="layout")
     */
    public function content()
    {
        return $this->render('layout.html.twig', [
            //'controller_name' => 'BlogPostController',
        ]);
    }
     /**
     * @Route("/", name="index", methods={"GET"})
     */
    public function index(BlogPostRepository $blogPostRepository): Response
    {
        return $this->render('index.html.twig', [
            'blogPost' => $blogPostRepository->findAll(),
        ]);
    }
}
