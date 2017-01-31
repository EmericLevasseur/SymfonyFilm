<?php
// src/Devschool/BiblioBundle/Controller/DefaultController.php
namespace Devschool\BiblioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
    * @Route("/")
    */
    public function indexAction()
    {
        return $this->render('DevschoolBiblioBundle:Default:index.html.twig');
    }

    /**
    * @Route("/livres")
    */
    public function listAction()
    {
        return $this->render('DevschoolBiblioBundle:Film:list.html.twig');
    }

    /**
    * @Route("/livre/{id}", requirements={"id": "\d+"})
    */
    public function showAction($id)
    {
        return $this->render('DevschoolBiblioBundle:Film:show.html.twig');
    }
}
