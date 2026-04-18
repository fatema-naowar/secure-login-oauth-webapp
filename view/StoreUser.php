<?php
require_once 'model/Model.php';
class StoreUser
{
    public $model;

    public function __construct()
    {
        $this->model = new Model();
    }

    public function execute($postData)
    {
        $data = [
            'username' => $postData['username'] ?? null,
            'description' => $postData['description'] ?? null,
            'your_choice' => $postData['your_choice'] ?? null,
            'role' => $postData['role'] ?? 0,
        ];
        if ($postData['password']) {
            $data['salt'] = md5('assignment1');
            $data['password'] = md5($postData['password'] . $data['salt']);
        }
        return $this->model->storeUser($data);
    }
}