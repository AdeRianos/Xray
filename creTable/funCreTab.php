<?php
function cre_tab_personal_info(){
    try {
        $sql='create table IF NOT EXISTS tbl_inf_personal(id int(9) NOT NULL AUTO_INCREMENT,
                                        PRIMARY KEY (id),
                                        nameUser varchar(200),
                                        family varchar (200),
                                        idCategory int(9) ,
                                        TypOfOprat int(2),
                                        natNumUser varchar (10),
                                        generic varchar (3),
                                        tell varchar (11),
                                        email varchar(50),
                                        userName varchar(50),
                                        password varchar (12),
                                        dateRegister datetime default CURRENT_TIMESTAMP,
                                        datEditUser datetime
                                        )ENGINE=INNODB DEFAULT CHARSET=utf8';
        $sql=$GLOBALS['appConection']->prepare($sql);
        $sql->execute();
        $sql="ALTER TABLE tbl_inf_personal CONVERT TO CHARACTER SET utf8 COLLATE utf8_persian_ci";
        $sql=$GLOBALS['appConection']->prepare($sql);
        $sql->execute();
    }catch (PDOException $e){
        echo $e->getMessage();
    }
}