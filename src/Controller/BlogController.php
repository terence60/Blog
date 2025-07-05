<?php

namespace App\Controller;

use App\Entity\Article;
use App\Form\ArticleForm;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class BlogController extends AbstractController
{
    #[Route('/blog/afficher', name: 'app_blog_index')]
    public function index(): Response
    {
        return $this->render('blog/index.html.twig', [
        ]);
    }
    #[Route('/blog/ajouter', name: 'app_blog_new')]
    public function new(): Response
    {
       $article = new Article();
       $form = $this->createForm(ArticleForm::class,$article);

        return $this->render('blog/new.html.twig',[
         'formArticle' => $form->createView()
        ]
        );
    }
}


