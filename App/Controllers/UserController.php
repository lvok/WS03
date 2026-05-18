<?php 
namespace App\Controllers;

use Framework\Database;
use Framework\Validation;
use Framework\Session;


class UserController
{
    protected $db;

    public function __construct()
    {
        $config = require basePath('config/db.php');
        $this->db = new Database($config);
    }

    public function create()
    {
        loadView('users/create');

    }

    public function login()
    {
        loadView('users/login');
    }

    public function store()
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $password = $_POST['password'];
        $passwordConfirmation = $_POST['password_confirmation'];

        $errors = [];

       if(!Validation::email($email)) {
           $errors['email'] = 'Enter a valid email adress';
       }
       if(!Validation::string($name, 2, 50)) {
           $errors['name'] = 'Enter a valid name';
       }
      
       if(!Validation::string($password, 6)) {
           $errors['password'] = 'Password must be at least 6 characters';
       }
       if(!Validation::match($password, $passwordConfirmation)) {
           $errors['password_confirmation'] = 'Passwords don\'t match';
       }
       if(!empty($errors)) {
        loadView('users/create', [
            'errors' => $errors,
            'user' => [
                'name' => $name,
                'email' => $email,
                'city' => $city,
                'state' => $state,
            ]
        ]);
        exit;
       }
       
       $params = [
            
            'email' => $email,
            
       ];
      $user = $this->db->Query('SELECT email FROM users WHERE email = :email', $params)->fetch();

      if($user){
        $errors['email'] = 'Email already registered';
        loadView('users/create', [
            'errors' => $errors
            ]);
        exit;
      }
      $params = [
        'name' => $name,
        'email' => $email,
        'city' => $city,
        'state' => $state,
        'password' => password_hash($password, PASSWORD_DEFAULT)
      ];

      $this->db->Query('INSERT INTO users (name, email, city, state, password) VALUES (:name, :email, :city, :state, :password)', $params);
    
      $userId = $this->db->conn->lastInsertId();

      Session::set('user', [
        'id' => $userId,
        'name' => $name,
        'email' => $email,
        'city' => $city,
        'state' => $state
       
      ]);
      
      redirect('/WS03/Public/');
    }

    /**
     * Authenticate a user with email and password
     * 
     * @return void
     */
    public function authenticate()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $errors = [];

        // Validation
        if (!Validation::email($email)) {
            $errors['email'] = 'Please enter a valid email address';
        }
        if(!Validation::string($password, 6)) {
           $errors['password'] = 'Password does not match';
        }

        if (!empty($errors)) {
            loadView('users/login', [
                'errors' => $errors
            ]);
            exit;
        }

        // Check for email
        $params = [
            'email' => $email
        ];

        $user = $this->db->Query('SELECT * FROM users WHERE email = :email', $params)->fetch();

        if (!$user) {
            $errors['email'] = 'No user found with this email';
            loadView('users/login', [
                'errors' => $errors
            ]);
            exit;
        }

        // Verify password
        if (!password_verify($password, $user->password)) {
            $errors['email'] = 'Invalid credentials';
            loadView('users/login', [
                'errors' => $errors
            ]);
            exit;
        }

        // Set session
        Session::set('user', [
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
            'city' => $user->city,
            'state' => $user->state
        ]);

        redirect('/WS03/Public/');
    }

    /**
     * Logout user and clear session
     * 
     * @return void
     */
    public function logout()
    {
        Session::clearAll('user');

        $params = session_get_cookie_params();
        setcookie('PHPSESSID', '', time() - 86400, $params['path'], $params['domain']);

        redirect('/WS03/Public/');
    }
}