<?php
require_once('app/model/CommonDB.class.php');

const FIRST_LV = 1;
const FIRST_AP = 10;
const FIRST_EXP = 0;

class UserGameData{

    /**
     * user_game_dataにレコードを追加
     *
     * @param $uid - ユーザーID
     **/
    public function insert($uid){
        $db = CommonDB::connectDB();

        $sql = "
            INSERT INTO 
                user_game_data(user_id,lv,exp,ap,insert_time,update_time,delet_flg)
            VALUES
                (:uid,:lv,:exp,:ap,now(),now(),0)
            ;
        ";

        $stml = $db -> prepare($sql);

        $lv = FIRST_LV;
        $exp = FIRST_EXP;
        $ap = FIRST_AP;

        $stml->bindParam(':uid', $uid);
        $stml->bindParam(':lv', $lv);
        $stml->bindParam(':exp', $exp);
        $stml->bindParam(':ap', $ap);

        $stml->execute();
    }
}