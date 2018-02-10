<?php

namespace Blogger\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class PostController extends Controller
{
    /**
     * @Route("/post", name="blog_post");
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function postAction()
    {
        return $this->render("BlogBundle:Post:index.html.twig");
    }

}