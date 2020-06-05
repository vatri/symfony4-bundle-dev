<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Vatri\GoogleDriveBundle\Service\DriveApiService;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="blog_index")
     * @Route("/")
     */
    public function index(ParameterBagInterface $parameterBag, DriveApiService $driveApiService)
    {
        $view = 'customer/themes/vatri_org/index.html.twig';
        $fileId = '110NBuFvqlUEk11OOhuUDLEfSn3RllSuv';
        $loginUrl = $this->generateUrl($driveApiService->getAuthRouteName());
        $isTokenExpired = $driveApiService->isTokenExpired();

        if(!$isTokenExpired) {
            $files = $driveApiService->listFiles();
            var_dump(count($files));
        } else {
            echo "Token expired";
        }
        return $this->render($view, [
            'loginUrl' => $loginUrl,
            'isTokenExpired' => $isTokenExpired
        ]);

    }



}
