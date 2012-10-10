<?php

namespace Sensio\Bundle\TrainingBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\TrainingBundle\Converter\CelsiusConverter;

class ConverterController extends Controller
{
    /**
     * @Route("/convert/{celsius}/fahrenheit.{_format}",
     *  requirements = {
     *      "celsius" = "\d+",
     *      "_format" = "xml|json"
     *  }
     * )
     * @Template()
     */
    public function celsiusAction(Request $request, $celsius)
    {
        $celsiusConverter = new CelsiusConverter($celsius);
        
        return  array(
            'celsius'       => $celsiusConverter->getValue(),
            'fahrenheit'    => $celsiusConverter->toFahrenheit()
        );
    }
}
