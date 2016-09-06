<?php
/**
 * Created by PhpStorm.
 * User: kosolap
 * Date: 06.09.16
 * Time: 22:52
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class UserController extends Controller
{
    /**
     * @Route("/user", name="User")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $users = $em->getRepository('AppBundle\Entity\User')->findAll();

        $titles = array('Имя','Должность', 'Добавлен');
        $collData = array('name', 'type', 'createdDate');

        return $this->render('info/static.html.twig', ['data' => $users, 'titles' => $titles, 'callData' => $collData]);
    }

}