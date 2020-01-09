<?php


namespace Source\Controllers;


class Web extends Controller
{
    public function __construct($router)
    {
        parent::__construct($router);
        if (!empty($_SESSION["user"])){
            $this->router->redirect("app.home");
        }
    }

    public function login() : void
    {
       $head = $this->seo->optimize(
           "Faça Login no ". site("name"),
           site("desc"),
           $this->router->route("web.login"),
           routeImage("Login")
       )->render();

       echo $this->view->render("theme/login",[
           "head" => $head
       ]);
    }

    public function register():void
    {
        $head = $this->seo->optimize(
            "Crie sua conta no ". site("name"),
            site("desc"),
            $this->router->route("web.register"),
            routeImage("Register")
        )->render();

        $form_user = new \stdClass();
        $form_user->first_name = null;
        $form_user->last_name = null;
        $form_user->email = null;


        echo $this->view->render("theme/dashboard2",[
            "head" => $head,
            "user" => $form_user
        ]);
    }

    public function forget():void
    {

    }

    public function reset():void
    {

    }

    public function error():void
    {

    }
}
