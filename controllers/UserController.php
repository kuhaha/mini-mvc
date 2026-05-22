<?php
class Controller
{
   protected $model;
   protected $view;
   function __construct($model, $view)
   {
      $this->model = $model;
      $this->view = $view;
   }
}
class UserController extends Controller
{
   public function listAction()
   {
      $users = $this->model->getAll();
      $this->view->render('user_list', ['users' => $users]);
   }

   public function addAction()
   {
      $user = $this->model->getUser();
      $user['uid'] = 'user01';
      $user['uname'] = 'ユーザ01';
      $this->model->add($user);
      $this->listAction();
   }
}
