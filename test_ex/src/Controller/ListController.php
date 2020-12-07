<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Address;
use App\Repository\AddressRepository;
use App\Entity\Users;
use App\Repository\UsersRepository;

class ListController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        return $this->render('list/index.html.twig', [
            'controller_name' => 'ListController',
        ]);
    }

    /**
     * @Route("/list_elements", name="list_elements")
     */

    public function list_address(AddressRepository $repo,UsersRepository $repo_user )
    {
        $address = $repo->findAll();
        $users = $repo_user->findAll();
        return $this->render('list/list_elements.html.twig', [
            'controller_name' => 'ListController',
            'address' => $address,
            'users' => $users
        ]);
    }

}
