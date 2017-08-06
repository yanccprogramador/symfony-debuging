<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Profiler\Profiler;
use GuzzleHttp\Client;


class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/debugar",name="debugando")
     * @param Request $request
     * @return null
     */
    public function retriveData(Request $request){
        $client= new Client();
        $res=$client->get($this->getParameter('url'));
        $profiler= new Profiler();
        $profiler->loadProfileFromResponse($res);
        return null;
    }
}
