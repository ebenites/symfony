<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AppBundle\Entity\Usuario;

class UsuariosController extends Controller{
    
    /**
     * @Route("/usuarios/") 
     */
    public function indexAction(){
        
        $usuarios = $this->getDoctrine() ->getRepository('AppBundle:Usuario')->findAll();
        
        $params = array('usuarios' => $usuarios);
        
        return $this->render('Usuarios/index.html.twig', $params);
        
    }
    
    /**
     * @Route("/usuarios/registrar/")
     */
    public function registrarAction(){
        
        $roles = $this->getDoctrine() ->getRepository('AppBundle:Rol')->findAll();
        
        if($this->getRequest()->isMethod('POST')){
            
            $usuario = new Usuario();
            $usuario->setUsername($this->getRequest()->get('username'));
            $usuario->setPassword($this->getRequest()->get('password'));
            $usuario->setNombres($this->getRequest()->get('nombres'));
            $usuario->setEmail($this->getRequest()->get('email'));
            
            $rol = $this->getDoctrine()->getRepository('AppBundle:Rol')->find($this->getRequest()->get('roles_id'));
            $usuario->setRol($rol);
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($usuario);
            $em->flush();
            
            $this->addFlash('notice', 'Registro guardado satisfactoriamente');
            return $this->redirectToRoute("app_usuarios_index"); 
        }
        
        $params = array('roles' => $roles);
        
        return $this->render('Usuarios/registrar.html.twig', $params);
        
    }
    
    /**
     * @Route("/usuarios/editar/{id}/")
     */
    public function editarAction($id){
        
        $roles = $this->getDoctrine() ->getRepository('AppBundle:Rol')->findAll();
        
        $repository = $this->getDoctrine()->getRepository('AppBundle:Usuario');
        $usuario = $repository->find($id);
        
        if($this->getRequest()->isMethod('POST')){
            
            $usuario->setUsername($this->getRequest()->get('username'));
            $usuario->setPassword($this->getRequest()->get('password'));
            $usuario->setNombres($this->getRequest()->get('nombres'));
            $usuario->setEmail($this->getRequest()->get('email'));
            
            $rol = $this->getDoctrine()->getRepository('AppBundle:Rol')->find($this->getRequest()->get('roles_id'));
            $usuario->setRol($rol);
            
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            
            $this->addFlash('notice', 'Registro actualizado satisfactoriamente');
            return $this->redirectToRoute("app_usuarios_index");
        }
        
        $params = array('roles' => $roles, 'usuario' => $usuario);
        
        return $this->render('Usuarios/editar.html.twig', $params);
        
    }
    
    /**
     * @Route("/usuarios/eliminar/{id}/")
     */
    public function eliminarAction($id){
        
        $repository = $this->getDoctrine()->getRepository('AppBundle:Usuario');
        $usuario = $repository->find($id);
        
        $em = $this->getDoctrine()->getManager();
        $em->remove($usuario);
        $em->flush();

        $this->addFlash('notice', 'Registro eliminado satisfactoriamente');
        return $this->redirectToRoute("app_usuarios_index");
        
    }
    
}
