<?php

namespace app\controllers;
use app\core\Application;

function printContent($var){
    echo "<pre>";
    var_dump($var);
    echo "</pre>";
}

class SiteController extends RootController{

    public function __construct(Application &$app)
    {
        parent::__construct($app);
    }


    private function getContact(){
        $this->get('/contact', function () {
            $params = [
                'header' => 'Welcome Ahmed',
            ];
            return $this->render('contact.php', $params);
        });
    }
    
    private function GET_landing(){
        $this->get('/', function(){
            return $this->render('Landing.php');
        });
    }

    private function GET_login(){
        $this->get('/login', function(){
            
            return $this->render('login.php');
        });
    }

    private function GET_register(){
        $this->get('/register', function(){
            return $this->render('signup.php');
        });
    }


    private function POST_login(){
        $this->post('/login', function(){
            
            $params = $this->getRequestBody();

            return $this->render('Landing.php');
        });
    }

    private function POST_register(){
        $this->post('/register', function(){
            
            $params = $this->getRequestBody();
            
            printContent($params);
        });
    }

    private function GET_home(){
        $this->get('/home', function(){

            return $this->render('Home.php');
        });
    }

    // @TODO add get uri id
    private function GET_memberDetails(){
        $this->get('/member', function(){

            return $this->render('MemberDetails.php');
        });
    }

    // @TODO get URI id
    private function GET_MovieDetails(){
        $this->get("/movie", function(){

            return $this->render('MovieDetails.php');
        });
    }

    private function GET_AllMembers(){
        $this->get("/member/all", function(){

            return $this->render('AllMembers.php');
        });
    }


    public function publishRoutes(){
        $this->GET_landing();
        $this->GET_register();
        $this->GET_login();
        $this->POST_login();
        $this->POST_register();
        $this->GET_home();
        $this->GET_AllMembers();
        $this->GET_MovieDetails();
        $this->GET_memberDetails();
    }

}