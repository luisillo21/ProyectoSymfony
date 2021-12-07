<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends Controller
{

    public function homeAction()
    {
        // replace this example code with whatever you need
        return $this->render('AppBundle:home:index.html.twig');
    }

    public function usersAction()
    {
        $objService = $this->get("service_home");
        $users = $objService->getUsers();
        return new JsonResponse($users);
    }
}
