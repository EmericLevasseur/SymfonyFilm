<?php

// src/IIM/CinemaBundle/Controller/DefaultController.php
namespace IIM\CinemaBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
    * @Route("/", name="page_accueil")
    */
    public function indexAction()
    {
        return $this->render('IIMCinemaBundle:Default:index.html.twig');
    }

    /**
    * @Route("/films", name="page_films")
    */
    public function listAction()
    {
        $films = $this->getDoctrine()->getRepository('IIMCinemaBundle:Film')->findAll();

        $titre_de_la_page = 'Films';

        return $this->render(
            'IIMCinemaBundle:Film:list.html.twig',
            ['films' => $films, 'titre' => $titre_de_la_page]
          );
    }

    /**
    * @Route("/realisateurs", name="page_realisateurs")
    */
    public function listRealisateur()
    {
        $realisateurs = $this->getDoctrine()->getRepository('IIMCinemaBundle:Personne')->findAll();

        $titre_de_la_page = 'Réalisateurs';

        return $this->render(
            'IIMCinemaBundle:Personne:list.html.twig',
            ['realisateurs' => $realisateurs, 'titre' => $titre_de_la_page]
          );
    }


    public function showRealisateur($id)
    {
    $realisateur = $this->getDoctrine()->getRepository('IIMCinemaBundle:Personne')->find($id);

      return $this->render(
          'IIMCinemaBundle:Personne:show.html.twig',
          ['realisateur' => $realisateur]
        );
    }

    /**
    * @Route("/film/{id}", requirements={"id": "\d+"}, name="page_film")
    */
    public function showAction($id)
    {
    $film = $this->getDoctrine()->getRepository('IIMCinemaBundle:Film')->find($id);

      return $this->render(
          'IIMCinemaBundle:Film:show.html.twig',
          ['film' => $film]
        );
    }
}
