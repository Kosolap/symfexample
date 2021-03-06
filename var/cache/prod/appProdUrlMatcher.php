<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/re')) {
            // Reason
            if ($pathinfo === '/reason') {
                return array (  '_controller' => 'AppBundle\\Controller\\ReasonController::indexAction',  '_route' => 'Reason',);
            }

            // Region
            if ($pathinfo === '/region') {
                return array (  '_controller' => 'AppBundle\\Controller\\RegionController::indexAction',  '_route' => 'Region',);
            }

        }

        // User
        if ($pathinfo === '/user') {
            return array (  '_controller' => 'AppBundle\\Controller\\UserController::indexAction',  '_route' => 'User',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
