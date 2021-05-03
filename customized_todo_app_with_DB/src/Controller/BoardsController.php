<?php
namespace App\Controller;

class BoardsController extends AppController {

	public function index($id = null){
		$data = $this->Boards->find('list')->toArray();
		$this->set('data',$data);
	}
	
	public function addRecord(){
		if ($this->request->is('post')) {
			//エンティティクラス(レコードに入るデータ)のインスタンス作成、代入
			//$this->request->dataにはFormの中のデータが入っている
			$board = $this->Boards->newEntity($this->request->data);
			//ここでDBに保存
			$this->Boards->save($board);
		}
		return $this->redirect(['action' => 'index']);
	}
}