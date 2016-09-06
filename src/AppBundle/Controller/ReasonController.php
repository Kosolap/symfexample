<?php
/**
 * Created by PhpStorm.
 * User: kosolap
 * Date: 07.09.16
 * Time: 1:00
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;



class ReasonController extends Controller
{
    /**
     * @Route("/reason", name="Reason")
     */
    public function indexAction(Request $request)
    {
        if($request->query->get('type') != null){

            $serializer = $this->get('serializer');

            $reasons = $this->getDoctrine()->getRepository('AppBundle:Reason')->findBy(array('type' => $request->query->get('type')));
            $result = array();


            foreach ($reasons as $reason){

                array_push($result, $serializer->serialize($reason, 'json'));

            }

            $response = new JsonResponse($result);

            return $response;
        }
        else{
            $em = $this->getDoctrine()->getManager();

            $query = $em->createQueryBuilder()
                ->select('r.type')
                ->distinct()
                ->from('AppBundle:Reason','r')
                ->getQuery();
            $result = $query->getResult();

            return $this->render('info/dinamic.html.twig', ['data' => $result]);
        }
    }


}

