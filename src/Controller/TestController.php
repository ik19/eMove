<?php
/**
 * Created by PhpStorm.
 * User: bmmi
 * Date: 14/06/2018
 * Time: 12:56
 */

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends Controller
{
    /**
     * @Route("/")
     */
    public function index()
    {
        return $this->render('testFront.html.twig');
    }
}