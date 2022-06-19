<?php

namespace app\controllers;
use app\core\Application;
use app\models\AdminModel;
use app\models\UserModel;
use app\models\MovieModel;

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


    private function getTest(){
        $this->get('/test', function () {
            
            $model = new UserModel($this->app);
            $result = $model->getByEmail('emad@gmail.com');
            
            return 'ok';
        });
    }
    
    private function GET_landing(){
        $this->get('/', function(){
            $model = new MovieModel($this->app);
            $result = $model->getAll();
            $params = [
                'result'=>$result
            ];
            return $this->render('Landing.php', $params);
        });
    }

    private function GET_login(){
        $this->get('/login', function(){
            if(!$this->checkIfLoggedIn()){
                var_dump($this->checkIfLoggedIn());
                // return 'ok';
                return $this->render('login.php');
            }

            return $this->redirect('/home');
        });
    }

    private function GET_register(){
        $this->get('/register', function(){
            var_dump($this->app->session->session);
            return $this->render('signup.php');
        });
    }


    private function POST_login(){
        $this->post('/login', function(){
            $params = $this->getRequestBody();
            $email = $params['email'];
            $password = $params['password'];

            // db query
            $model = new UserModel($this->app);
            $result = strval($model->getByEmail($email)['Password']);

            // compare with the values in the database
            if($result === $password){
                $this->setLoginStatusInSession($email,10);
                return $this->redirect('/home');
                // return 'ok';
            }
            
            return $this->redirect('/login');
        });
    }

    private function POST_register(){
        $this->post('/register', function(){
            $model = new UserModel($this->app);

            $params = $this->getRequestBody();
            $id = $model->generateRandomID();
            $name = $params['name'];
            $email = $params['email'];
            $password = $params['password'];
            $vals = [
                'id'=>$id,
                'name'=>$name,
                'email'=>$email,
                'password'=>$password
            ];
            
            $model->insert($vals);

            return $this->render('login.php');
        });
    }

    private function GET_home(){
        $this->get('/home', function(){

            return $this->render('Home.html');
        });
    }

    // @TODO add get uri id
    private function GET_memberDetails(){
        $this->get('/member', function(){
            if (!$this->checkIfLoggedIn())
                return $this->render('MemberDetails.php');
            else{
                return $this->redirect('/login');
            }
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
            $model = new UserModel($this->app);
            $result = $model->getAll();
            $params = [
                'result'=>$result
            ];
            return $this->render('AllMembers.php', $params);
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
        $this->getTest();
    }

}