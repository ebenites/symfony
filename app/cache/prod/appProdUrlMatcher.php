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

        if (0 === strpos($pathinfo, '/roles')) {
            // app_roles_index
            if (rtrim($pathinfo, '/') === '/roles') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'app_roles_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\RolesController::indexAction',  '_route' => 'app_roles_index',);
            }

            // app_roles_registrar
            if (rtrim($pathinfo, '/') === '/roles/registrar') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'app_roles_registrar');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\RolesController::registrarAction',  '_route' => 'app_roles_registrar',);
            }

            if (0 === strpos($pathinfo, '/roles/e')) {
                // app_roles_editar
                if (0 === strpos($pathinfo, '/roles/editar') && preg_match('#^/roles/editar/(?P<id>[^/]++)/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'app_roles_editar');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_roles_editar')), array (  '_controller' => 'AppBundle\\Controller\\RolesController::editarAction',));
                }

                // app_roles_eliminar
                if (0 === strpos($pathinfo, '/roles/eliminar') && preg_match('#^/roles/eliminar/(?P<id>[^/]++)/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'app_roles_eliminar');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_roles_eliminar')), array (  '_controller' => 'AppBundle\\Controller\\RolesController::eliminarAction',));
                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
