<?php

namespace application\models;

use application\core\Model;
use application\lib\Db;


class Admin extends Model {

	public $error;

	public function loginValidate($post) {
		$config = require 'application/config/admin.php';
		if ($config['login'] != $post['login'] or $config['password'] != $post['password']) {
			$this->error = 'Логин или пароль указан неверно';
			return false;
		}
		return true;
	}

	public function messageValidate($post) {
		$nameLen = iconv_strlen($post['email']);
		$descriptionLen = iconv_strlen($post['number']);
		$textLen = iconv_strlen($post['message']);
		if ($nameLen < 3 or $nameLen > 100) {
			$this->error = 'Email должно содержать от 3 до 100 символов';
			return false;
		} elseif ($descriptionLen < 3 or $descriptionLen > 100) {
			$this->error = 'Номер должен содержать от 3 до 100 символов';
			return false;
		} elseif ($textLen < 10 or $textLen > 5000) {
			$this->error = 'Сообщение должнен содержать от 10 до 5000 символов';
			return false;
		}
		return true;
	}

	public function messageAdd($post) {
		$params = [
		    'id' => $this->db->lastInsertId(),
			'email' => $post['email'],
			'number' => $post['number'],
			'message' => $post['message'],
		];
		$this->db->query('INSERT INTO posts VALUES (:id, :email, :number, :message)', $params);
	}

	public function messageEdit($post, $id) {
		$params = [
			'id' => $id,
			'email' => $post['email'],
			'number' => $post['number'],
			'message' => $post['message'],
		];
		$this->db->query('UPDATE posts SET email = :email, number = :number, message = :message WHERE id = :id', $params);
	}
	public function isMessageExists($id) {
		$params = [
			'id' => $id,
		];
		return $this->db->column('SELECT id FROM posts WHERE id = :id', $params);
	}

	public function messageDelete($id) {
		$params = [
			'id' => $id,
		];
		$this->db->query('DELETE FROM posts WHERE id = :id', $params);
		unlink('public/materials/'.$id.'.jpg');
	}

	public function messageData($id) {
		$params = [
			'id' => $id,
		];
		return $this->db->row('SELECT * FROM posts WHERE id = :id', $params);
	}

}