<?php
/**
 * Created by PhpStorm.
 * User: kosolap
 * Date: 06.09.16
 * Time: 22:51
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class RegionController extends Controller
{

    /**
     * @Route("/region", name="Region")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $regions = $em->getRepository('AppBundle\Entity\Region')->findAll();

        $titles = array('Название','Добавлен');
        $collData = array('name', 'createdDate');

        return $this->render('info/static.html.twig', ['data' => $regions, 'titles' => $titles, 'callData' => $collData]);
    }

}