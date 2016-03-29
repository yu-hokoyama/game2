CREATE TABLE user_game_data (
  user_id bigint PRIMARY KEY,
  lv integer,
  exp bigint,
  ap integer,
  insert_time timestamp,
  update_time timestamp,
  delet_flg integer,
  INDEX idx_uid(user_id)
);
  
  