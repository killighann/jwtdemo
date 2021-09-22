<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home_index")
     */
    public function index(): Response
    {
        $token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImN0eSI6IkpXVCJ9.eyJpYXQiOjE2MzIyMjg4MjcsImV4cCI6MTYzMjIzMjQyNywicm9sZXMiOlsiUk9MRV9VU0VSIl0sInVzZXJuYW1lIjoibGF1cmVudCIsImlwIjoiMTI3LjAuMC4xIn0.nrr_tWzLCfUYhOE1dRbvXxZD3qad6tjTR644LlbxgiCEzaKP4RqbF3YJYM6w-_QfTgJptmk-FOrFpKofWyxRMYggdIG9LDzz8AzhzoxKlmWnlb40hlYaKLW9h5CL0_NH4JEoTivQqrtorGmoH2epJvAFlrueL38ribVJ0JpAJd8B5vZ03drADkDpW0cS-6CuTaE85EOI-Gii0Z2OuTsV9MdfpBKQuJq_UDD1Ii13e7T-Z7DimTwUV5T-7u3CsTolh44X46_WSogs83AEzGG6UbjYhcsXLqDaor2-Ozfaq1qt0WBECwWf_tl0iKuZ5eO2CRZrGZ7gAU9c6foVsntOibTjtZ4vS_Wr4ZR6OjKjNasic708Hs3HC04dEX33V35-nEkgkqeDOoZ0VvgBAPEEa5PBA_Ag6FnIfbMuykWTQhyIWlWAIg_P2JGx2y8F9rdWQJNf8t6A07tzFrcpFXR5-TiQE4goKuWscYvUZJGcyGxASE5vyg4f78jbwX-Jw609Frcxym7EeDFZoLwqK1b8DdO84PHPqp84X0roGLpUkgqbMjAl9yZWhkdo9un8Q6V1J3ZRsBerww-D2GBXlqiXN0TPCGu5DLfz0Xeb326Krq_sj5am19iIpW2I3tg8FCkStHE_w_RIc3mgU5Xdq9HMi43iJJriF4Ii8UwwTT6Okb8";

        dump($this->urlSafeB64Decode($token));

        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    public function urlSafeB64Decode($b64)
    {

        $b64 = str_replace(array('-', '_'),
            array('+', '/'),
            $b64);

        return base64_decode($b64);
    }


}
