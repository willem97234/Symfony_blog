<?php
/**
 * Created by PhpStorm.
 * User: Will
 * Date: 30/12/2018
 * Time: 15:45
 */

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\Post;

class WallController extends Controller
{
    /**
     * @Route("/login", name="login")
     * @param AuthenticationUtils $authenticationUtils
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function listPostsAction()
    {
        
        $repository = $this->getDoctrine()->getRepository(Post::class);
        
        $posts = $repository->findBy(['author' => 1]);
        
        
        return $this->render('wall.html.twig',
            array(
                'user' => "jo",
                'posts'         => $posts,
            )
        );
    }

}