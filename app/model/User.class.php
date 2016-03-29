<?php
require_once('app/model/db/UserBaseData.class.php');
require_once('app/model/db/UserGameData.class.php');

class User{
	public function insertUserData($id,$pass,$name){
		$userBaseData = new UserBaseData();
		$userBaseData->insert($id,$pass,$name);
		
	}

    public function getUserData($uid){
        $userBaseData = new UserBaseData();
        $userData = $userBaseData->getPassFromUid($uid);
        return 0;
    }

    /**
     * user_game_dataにレコード追加
     *
     * @param $uid - ユーザーID
     *
     **/
    public function insertGameData($uid){
        $userGameData = new userGameData();
        $userGameData->insert($uid);
    }
}