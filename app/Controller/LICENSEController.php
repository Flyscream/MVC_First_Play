<?php

namespace Controller;

use Studoo\EduFramework\Core\Controller\ControllerInterface;
use Studoo\EduFramework\Core\Controller\Request;
use Studoo\EduFramework\Core\View\TwigCore;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

class LICENSEController implements ControllerInterface
{
	public function execute(Request $request): string|null
	{
		return TwigCore::getEnvironment()->render('l_i_c_e_n_s_e/l_i_c_e_n_s_e.html.twig',
		    [
		        "titre"   => 'LICENSEController',
		        "request" => $request
		    ]
		);
	}
}
