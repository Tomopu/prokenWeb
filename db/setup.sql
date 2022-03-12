ALTER USER 'admin'@'%' IDENTIFIED WITH mysql_native_password BY 'hogehoge'; 

SELECT user, host, plugin FROM mysql.user WHERE user = 'admin';

USE members;

CREATE TABLE members_table(
    userid VARCHAR(255) NOT NULL,
    passwd VARCHAR(255) NOT NULL,
    permit TINYINT NOT NULL,   /* 0:admin, 1:user, 2:guest */
    PRIMARY KEY (userid)
);

INSERT INTO members_table (userid, passwd, permit) VALUES ('admin', 'admin', 0);