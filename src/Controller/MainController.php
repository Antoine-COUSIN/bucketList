<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Exception\NotEncodableValueException;
use Symfony\Component\Serializer\SerializerInterface;

class MainController extends AbstractController
{
//    #[Route('/main', name: 'app_main')]
//    public function index(): Response
//    {
//        return $this->render('main/index.html.twig', [
//            'controller_name' => 'MainController',
//        ]);
//    }

    #[Route('/', name: 'app_home')]
    public function home(): Response
    {
        return $this->render('main/home.html.twig');
    }

    #[Route('/aboutUs', name: 'app_about_us')]
    public function aboutUs(SerializerInterface $serializer): Response
    {
        $dataPath = $this->getParameter('kernel.project_dir') . '/public/assets/data/team.json';


        if (!file_exists($dataPath)) {
            throw new \Exception('Fichier team.json introuvable');
        }

        $data = file_get_contents($dataPath);

        try {
            $teamMembers = $serializer->deserialize($data, 'App\Class\TeamMember[]', 'json');
        } catch (NotEncodableValueException $e) {
            throw new \Exception('Erreur lors de la désérialisation du fichier team.json');
        }

        return $this->render('main/about_us.html.twig', [
            'teamMembers' => $teamMembers
        ]);
    }
}
