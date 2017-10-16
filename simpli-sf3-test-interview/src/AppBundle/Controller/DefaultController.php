<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Service\InputDataService;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(InputDataService $inputData)
    {
        $result = $inputData->process($this->getParameter('inputData'));

        return $this->render('AppBundle:Default:index.html.twig', array(
            'result' => $result
        ));
    }
}
