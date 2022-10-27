<?php

namespace application\models;

use application\core\Model;

class Main extends Model {

	public $error;

	public function contactValidate($post) {
		$numberLen = iconv_strlen($post['number']);
		$textLen = iconv_strlen($post['message']);
		if ($numberLen < 3 or $numberLen > 40) {
			$this->error = 'Номер должно содержать от 3 до 40 символов';
			return false;
		} elseif (!filter_var($post['email'], FILTER_VALIDATE_EMAIL)) {
			$this->error = 'E-mail указан неверно';
			return false;
		} elseif ($textLen < 10 or $textLen > 500) {
			$this->error = 'Сообщение должно содержать от 10 до 500 символов';
			return false;
		}
		return true;
	}

	public function messageCount() {
		return $this->db->column('SELECT COUNT(id) FROM posts');
	}

	public function messageList($route) {
		$max = 10;
		$params = [
			'max' => $max,
			'start' => ((($route['page'] ?? 1) - 1) * $max),
		];
		return $this->db->row('SELECT * FROM posts ORDER BY id DESC LIMIT :start, :max', $params);
	}
    public function contactAdd($post) {
        $params = [
            'id' => $this->db->lastInsertId(),
            'email' => $post['email'],
            'number' => $post['number'],
            'message' => $post['message'],
        ];
        $this->db->query('INSERT INTO posts VALUES (:id, :email, :number, :message)', $params);
        return $this->db->lastInsertId();
    }
}