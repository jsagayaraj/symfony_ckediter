<?php

namespace App\Controller;

use App\Entity\Post;
use App\Form\PostType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PostController extends AbstractController
{
    /**
     * @Route ("/contact", name="contact")
     */
    public function contact()
    {
        return $this->render('post/contact.html.twig');
    }
    
    /**
     * @Route("/post", name="post")
     */
    public function post(Request $request)
    {   
        $post = new Post();
        $form = $this->createForm(PostType::class, $post);

        return $this->render('post/index.html.twig', [
            'form' => $form->createview()
        ]);
    }
}
