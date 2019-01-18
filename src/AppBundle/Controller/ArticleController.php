<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Article;
use AppBundle\Repository\ArticleRepository;
use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class ArticleController extends Controller
{
    private $manager;
    private $repository;

    public function __construct(EntityManager $em, ArticleRepository $repo)
    {
        $this->manager = $em;
        $this->repository = $repo;
    }

    /**
     * @Route(admin/create, name = "create")
     */
    public function createAction(Request $request)
    {
        $article = new Article();
    }
}
