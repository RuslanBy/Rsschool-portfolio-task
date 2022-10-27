<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\Pagination;
use application\models\Main;

class AdminController extends Controller
{

    public function __construct($route)
    {
        parent::__construct($route);
        $this->view->layout = 'admin';
    }

    public function loginAction()
    {
        if (isset($_SESSION['admin'])) {
            $this->view->redirect('admin/add');
        }
        if (!empty($_POST)) {
            if (!$this->model->loginValidate($_POST)) {
                $this->view->message('error', $this->model->error);
            }
            $_SESSION['admin'] = true;
            $this->view->location('admin/add');
        }
        $this->view->render('Вход');
    }

    public function addAction()
    {
        if (!empty($_POST)) {
            if (!$this->model->messageValidate($_POST, 'add')) {
                $this->view->message('error', $this->model->error);
            }
            $id = $this->model->messageAdd($_POST);
            if (!$id) {
                $this->view->message('success', 'Ошибка обработки запроса');
            }
            $this->view->message('success', 'Сообщение добавлено');
        }
        $this->view->render('Добавить сообщение');
    }

    public function editAction()
    {
        if (!$this->model->isMessageExists($this->route['id'])) {
            $this->view->errorCode(404);
        }
        if (!empty($_POST)) {
            if (!$this->model->messageValidate($_POST, 'edit')) {
                $this->view->message('error', $this->model->error);
            }
            $this->model->messageEdit($_POST, $this->route['id']);
            $this->view->message('success', 'Сохранено');
        }
        $vars = [
            'data' => $this->model->messageData($this->route['id'])[0],
        ];
        $this->view->render('Редактировать сообщение', $vars);
    }

    public function deleteAction()
    {
        if (!$this->model->isMessageExists($this->route['id'])) {
            $this->view->errorCode(404);
        }
        $this->model->messageDelete($this->route['id']);
        $this->view->redirect('admin/message');
    }

    public function logoutAction()
    {
        unset($_SESSION['admin']);
        $this->view->redirect('admin/login');
    }

    public function messagesAction()
    {
        $mainModel = new Main;
        $pagination = new Pagination($this->route, $mainModel->messageCount());
        $vars = [
            'pagination' => $pagination->get(),
            'list' => $mainModel->messageList($this->route),
        ];
        $this->view->render('Сообщения', $vars);
    }

    public function messageAction()
    {
        $mainModel = new Main;
        $pagination = new Pagination($this->route, $mainModel->messageCount());
        $vars = [
            'pagination' => $pagination->get(),
            'list' => $mainModel->messageList($this->route),
        ];
        $this->view->render('Сообщения', $vars);
    }
}