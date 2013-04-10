<?php

namespace Idlab\testBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
/** 
* @Route("/restaurant/", name="restaurant")
* @Template()
*/
    public function indexAction()
    {
        $content = array(
                'logo' => 'logo.png',
                );
        return array('content' => $content);
    }
}


