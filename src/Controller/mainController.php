<?php

namespace App\Controller;

use App\Entity\Movie;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class mainController extends AbstractController
{
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    #[Route('/', name: 'app_homepage')]
    public function homepage(): Response
    {
        // findAll() - SELECT * FROM mvoies;
        // find() - SELECT * FROM movies WHERE id = 5;
        // findBy([], ['id' => 'DESC']) - SELECT * FROM movies ORDER BY id DESC - the empty array means get all the entities
        // findOneBy(['id' => 5, 'title' => 'The Dark Knight'], ['id' => 'DESC']) - SELECT * FROM movies WHERE id = 5 AND title = 'The Dark Knight' ORDER BY id DESC
        // count(['id' => 5]) - SELECT COUNT() WHERE id = 5

        $repository = $this->em->getRepository(Movie::class);

        $movies = $repository->getClassName();
        dd($movies);
        return $this->render('app/homepage.html.twig');
    }
}
