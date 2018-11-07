<?php
/**
 * Created by IntelliJ IDEA.
 * User: karasev-dl
 * Date: 07.11.2018
 * Time: 14:09
 */

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class ArticleController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('OMG! My first page already!');
    }
    
    /**
     * @Route("/news/{slug}", requirements={"slug"="\d+-.*"})
     * @param $slug
     * @return Response
     */
    public function show($slug)
    {
        return new Response(sprintf('Future page to show article: %s'
            , $slug
        ));
    }
}