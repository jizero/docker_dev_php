CREATE USER 'jizero2'@'localhost' IDENTIFIED WITH mysql_native_password BY 'password';

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) DEFAULT NULL COMMENT '이메일',
  `gender` char(2) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(20) DEFAULT not NULL COMMENT '이름',
  `nickname` varchar(30) NOT NULL COMMENT '별명 영문 소문자만 허용',
  `phone` varchar(30) NOT NULL COMMENT '휴대폰번호',
  `member_type` varchar(2) NOT NULL COMMENT 'email ,탈퇴',
  `updated_at` datetime DEFAULT NULL COMMENT '수정일',
  `create_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '가입일',
  PRIMARY KEY (`no`),
   KEY `idx_name` (`name`),
   KEY `idx_email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8
