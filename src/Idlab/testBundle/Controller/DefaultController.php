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
            'restaurantname' => 'Khanh',
            'phone' => '+62 82828 4343',
            'address' => '656th Vovankiet, HCMC',
            'email' => 'hello@idlab.ch',
             'fax' => '+62 843 8492',
            'opendaily1' => 'Mon-Fri: 6am - 6pm',
             'opendaily2' => 'Sat-Sun: 9am - 11pm',
                );
        return array('content' => $content);
    }
}