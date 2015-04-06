<?php

namespace Puli\DemoPackage;

use Twig_Environment;

class DemoController
{
    /**
     * @var Twig_Environment
     */
    private $twig;

    public function __construct(Twig_Environment $twig)
    {
        $this->twig = $twig;
    }

    public function indexAction()
    {
        return $this->twig->render('/puli/demo-package/views/index.html.twig');
    }
}
