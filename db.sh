
#!/bin/bash

//データベースを削除
mysql -uroot -proot -e "drop datebase todolist;"

//データベースtodolistの作成
mysql -uroot -proot -e "create datebase todolist character set UTF8;"

//テーブルlistの作成
mysql -uroot -proot todolist-e "create tablelist id MEDIUMINT NOT NULL AUTO_INCREMENT , chk(1) NOT NULL DEFAULT '0' , item varchar(256) , PRIMARY KEY(id));"
