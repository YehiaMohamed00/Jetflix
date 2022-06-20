<?php

namespace app\controllers;
use app\core\Application;
use app\models\AdminModel;
use app\models\FavoriteModel;
use app\models\UserModel;
use app\models\MovieModel;
use app\models\WatchlistModel;

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
            $userModel = new UserModel($this->app);
            $email = $this->app->cookie->getCookie('login');
            $userid = $userModel->getIDByEmail($email)[0];

            // favorites
            $favModel = new FavoriteModel($this->app);
            $favs = $favModel->getAllByUserId($userid);
            printContent($email);
            printContent($favs);
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
            $result = strval($model->getPasswordByEmail($email)['Password']);

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

    private function GET_logout(){
        $this->get('/logout', function(){
            if($this->checkIfLoggedIn()){
                $this->logout();
                return $this->redirect('/');
            }

            return $this->redirect('/login');
        });
    }

    private function GET_home(){
        $this->get('/home', function(){
            if($this->checkIfLoggedIn()){
                $userModel = new UserModel($this->app);
                $email = $this->app->cookie->getCookie('login');
                $userid = $userModel->getIDByEmail($email)[0];

                // favorites
                $favModel = new FavoriteModel($this->app);
                $favs = $favModel->getAllByUserId($userid);

                // watchlist
                $watchlistModel = new WatchlistModel($this->app);
                $watchlist = $watchlistModel->getAllByUserId($userid);

                // movies (most popular)
                $model = new MovieModel($this->app);
                $mostpop = $model->getAll();

                // params
                $param = [
                    'favs'=>$favs,
                    'watchlist'=>$watchlist,
                    'mostpop'=>$mostpop
                ];
                
                return $this->render('Home.php', $param);
            }

            return $this->redirect('/login');
        });
    }

    private function GET_memberDetails(){
        $this->get('/member', function(){
            
            if ($this->checkIfLoggedIn()){
                // get query parameters
                $id = intval($this->getRequestQuery()['id']);

                // get member from the database by id
                $model = new UserModel($this->app);
                $result = $model->getById($id);

                $username = $result['Username'];
                $email = $result['Email'];

                // build the params array
                $param = [
                    'result'=>[
                        'username'=>$username,
                        'email'=>$email,
                        'id'=>$id
                    ]
                ];

                return $this->render('MemberDetails.php', $param);
            }

            return $this->redirect('/login');
        });
    }

    private function GET_MovieDetails(){
        $this->get("/movie", function(){
            if ($this->checkIfLoggedIn()){

                $id = intval($this->getRequestQuery()['id']);

                // get member from the database by id
                $model = new MovieModel($this->app);
                $result = $model->getById($id);

                $param = [
                    'result'=>$result
                ];

                return $this->render('MovieDetails.php', $param);
            }

            return $this->redirect('/login');
        });
    }

    private function GET_AllMembers(){
        $this->get("/member/all", function(){
            if ($this->checkIfLoggedIn())
            {
                $model = new UserModel($this->app);
                $result = $model->getAll();
                $params = [
                    'result'=>$result
                ];
                return $this->render('AllMembers.php', $params);
            }

            return $this->redirect('/login');
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
        $this->GET_logout();
        $this->getTest();
    }

}