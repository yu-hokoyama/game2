<?php
require_once('app/model/User.class.php');

class Top{

	/**
	 * TOPページ
	 */
	public function TopAction(){
		
	}

	/**
	 * 新規登録ページ
	 */
	public function newEntryAction()
	{

	}

	/**
	 *　登録本処理
	 *
	 * 1.ビューから受け取ったデータをもとにuser_base_dataを更新
	 *
	 * 2.上記のユーザー情報でuser_game_dataを初期値で更新
	 */
	public function EntryAction()
	{
		// 1.ビューから受け取ったデータをもとにuser_base_dataを更新
		//-----------------------------------------------
		//ID
		if(isset($_REQUEST['id'])){
			$id = $_REQUEST['id'];
		}
		//pass
		if(isset($_REQUEST['pass'])){
			$pass = $_REQUEST['pass'];
		}
		//name
		if(isset($_REQUEST['name'])){
			$name = $_REQUEST['name'];
		}

		//DB更新
		$user = new User();
		$user->insertUserData($id,$pass,$name);

		//-----------------------------------------------

		// 2.上記のユーザー情報でuser_game_dataを初期値で更新
		//-----------------------------------------------
		Log::pp($id);
		if(isset($id)){
			Log::pp('ねこ');
			$user->insertGameData($id);
		}
		//-----------------------------------------------
	}

}
