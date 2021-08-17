<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Articles;
use App\Entity\Boutiques;
use Doctrine\ORM\EntityManagerInterface;

class HomeController extends AbstractController {

  public function __construct(EntityManagerInterface $mysql)
  {
    $this->mysql = $mysql;
  }

  /**
   * @Route("/", name="home")
  */
  function home() {
    try
    {
      $resultatArticles = $this->mysql
      ->getRepository(Articles::class)
      ->findAll();
    }
    catch ( Doctrine_Connection_Exception $e )
    {
      return $resultat = false;
    }

    try
    {
      $resultatBoutiques = $this->mysql
      ->getRepository(Boutiques::class)
      ->findAll();
    }
    catch ( Doctrine_Connection_Exception $e )
    {
      return $resultat = false;
    }


    if ($resultatArticles != false) {

      // Récupération des 5 derniers articles
      for($counter = 0; $counter <= 5; $counter++) {
        $returnArticles[$counter] = array(
          "id" => $resultatArticles[$counter]->getId(),
          "nom" => $resultatArticles[$counter]->getNom()
        );
      }

      // Récupération des 5 derniers produits
      for($counter = 0; $counter <= 5; $counter++) {
        $resultatBoutiques[$counter] = array(
          "id" => $resultatBoutiques[$counter]->getId(),
          "nom" => $resultatBoutiques[$counter]->getNom()
        );
      }

      return $this->render('home.html.twig', [
        'articles' => $returnArticles,
        'boutiques' => $resultatBoutiques
      ]);
    }
    else
    {
      return $this->redirectToRoute("home");
    }
  }

}