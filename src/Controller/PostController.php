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
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use App\Entity\Post;
class PostController extends Controller
{

    public function showPostAction($id)
    {
        
        $repository = $this->getDoctrine()->getRepository(Post::class);
        
        $post = $repository->findByIdPost($id);
        
        
        return $this->render('show_post.html.twig',
            array(
                'post' => $post[0],
            )
        );
    }

}