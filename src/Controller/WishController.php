<?php

namespace App\Controller;

use App\Repository\WishRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WishController extends AbstractController
{
//    #[Route('/wish', name: 'app_wish')]
//    public function index(): Response
//    {
//        return $this->render('wish/index.html.twig', [
//            'controller_name' => 'WishController',
//        ]);
//    }

    #[Route('/wish/list', name: 'app_wish_list')]
    public function list(WishRepository $wishRepo): Response
    {
        $wishList = $wishRepo->findAll();

        return $this->render('wish/list.html.twig', [
            'wishList' => $wishList,
        ]);
    }

    #[Route('/wish/detail/{id}', name: 'app_wish_detail')]
    public function detail(WishRepository $wishRepo, $id): Response
    {
        $wishDetail = $wishRepo->find($id);

        return $this->render('wish/detail.html.twig', [
            'wishDetail' => $wishDetail,
        ]);
    }
}
