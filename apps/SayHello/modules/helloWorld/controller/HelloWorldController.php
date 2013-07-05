<?php
namespace SayHello\modules\helloWorld\controller;

use \HomeFramework\controller\BackController;

class HelloWorldController extends BackController {

    /**
     *
     */
    public function onIndex() {
        $this->addVar("title", "Hello world!!!");

        if ($this->vars['format'] == 'json') {
            $response = $this->container->get("JSONResponse");
            $response->setBody($this->vars);
            $response->send();
            return;
        }

        $this->renderView();
    }
}