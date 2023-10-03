CREATE TABLE `theloai` (
	`ma_tloai` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
	`ten_tloai` VARCHAR(50) NOT NULL COLLATE ,
	PRIMARY KEY (`ma_tloai`) 
)

ENGINE=InnoDB
AUTO_INCREMENT=128
;
CREATE TABLE `tacgia` (
	`ma_tgia` INT(10) UNSIGNED NOT NULL,
	`ten_tgia` VARCHAR(100) NOT NULL COLLATE 'utf8mb4_general_ci',
	`hinh_tgia` VARCHAR(100) NULL DEFAULT NULL COLLATE 'utf8mb4_general_ci',
	PRIMARY KEY (`ma_tgia`) USING BTREE
)
COLLATE='utf8mb4_general_ci'
ENGINE=InnoDB
;
CREATE TABLE `baiviet` (
	`ma_bviet` INT(10) UNSIGNED NOT NULL,
	`tieude` VARCHAR(200) NOT NULL DEFAULT '' COLLATE 'utf8mb4_general_ci',
	`ten_bhat` VARCHAR(100) NOT NULL DEFAULT '0' COLLATE 'utf8mb4_general_ci',
	`ma_tloai` INT(10) UNSIGNED NOT NULL,
	`tomtat` TEXT NOT NULL COLLATE 'utf8mb4_general_ci',
	`noidung` TEXT NULL DEFAULT NULL COLLATE 'utf8mb4_general_ci',
	`ma_tgia` INT(10) UNSIGNED NOT NULL,
	`ngayviet` DATETIME NOT NULL,
	`hinhanh` VARCHAR(200) NULL DEFAULT NULL COLLATE 'utf8mb4_general_ci',
	PRIMARY KEY (`ma_bviet`) USING BTREE,
	INDEX `FK2_tacgia` (`ma_tgia`) USING BTREE,
	INDEX `FK2_theloai` (`ma_tloai`) USING BTREE,
	CONSTRAINT `FK2_tacgia` FOREIGN KEY (`ma_tgia`) REFERENCES `tacgia` (`ma_tgia`) ON UPDATE CASCADE ON DELETE CASCADE,
	CONSTRAINT `FK2_theloai` FOREIGN KEY (`ma_tloai`) REFERENCES `theloai` (`ma_tloai`) ON UPDATE CASCADE ON DELETE CASCADE
)
COLLATE='utf8mb4_general_ci'
ENGINE=InnoDB
;
CREATE TABLE `nguoidung` (
	`ma_nd` INT(3) UNSIGNED NOT NULL AUTO_INCREMENT,
	`emai` VARCHAR(100) NOT NULL COLLATE 'utf8mb4_general_ci',
	`username` VARCHAR(50) NOT NULL COLLATE 'utf8mb4_general_ci',
	`pass` VARCHAR(50) NOT NULL COLLATE 'utf8mb4_general_ci',
	`state` ENUM('inactive','active') NULL DEFAULT 'inactive' COLLATE 'utf8mb4_general_ci',
	`created_at` DATETIME NULL DEFAULT current_timestamp(),
	PRIMARY KEY (`ma_nd`) USING BTREE,
	UNIQUE INDEX `emai` (`emai`) USING BTREE,
	UNIQUE INDEX `username` (`username`) USING BTREE
)
COLLATE='utf8mb4_general_ci'
ENGINE=InnoDB
AUTO_INCREMENT=2
;

INSERT INTO theloai(ma_tloai,ten_tloai) VALUES
(1,'vpop'),
(2,'usuk'),
(3,'latin'),
(4,'tru tinh');
INSERT INTO tacgia(ma_tgia, ten_tgia, hinh_tgia) VALUES
(1,'Nhacvietplus'),
(2,'def'),
(3,'bcd');
INSERT INTO baiviet(ma_bviet,tieude,ten_bhat,ma_tloai,tomtat,noidung,ma_tgia,ngayviet,hinhanh) VALUES
(1,'nhac','lòng mẹ',1,'nhạc về mẹ','',1,'2023-09-25'),
(2,'top','Nơi tình yêu bắt đầu',1,'nhạc về tình yêu','',3,'2023-09-25'),
(3,'hay','cuộc sống mến thương',2,'nhạc hay','',2,'2023-09-25');
insert into nguoidung (ma_nd, emai, username, pass, created_at) values (1, 'tie@gmail.com', 'tie', '123', '2023-10-03');
insert into nguoidung (ma_nd, emai, username, pass, created_at) VALUES (11, 'lgayforth0@mit.edu', 'jvinden0', 'pK4\ZqfIKP=n', '2023-05-09');
insert into nguoidung (ma_nd, emai, username, pass, created_at) values (2, 'jquilter1@hibu.com', 'scalbreath1', 'fE6.th.o2eB.?', '2023-07-16');
insert into nguoidung (ma_nd, emai, username, pass, created_at) values (3, 'ssiddens2@cornell.edu', 'tlorenc2', 'hK8&BvGipf', '2023-05-12');
insert into nguoidung (ma_nd, emai, username, pass, created_at) values (4, 'mengeham3@surveymonkey.com', 'dscardifield3', 'rE4=oCyYX', '2023-07-28');
insert into nguoidung (ma_nd, emai, username, pass, created_at) values (5, 'ctitmuss4@mit.edu', 'shayhurst4', 'uF6''FPsz', '2023-08-16');
insert into nguoidung (ma_nd, emai, username, pass, created_at) values (6, 'tblaasch5@netscape.com', 'gbocken5', 'bT9,xj|wd{jh,', '2022-12-07');
insert into nguoidung (ma_nd, emai, username, pass, created_at) values (7, 'cgraves6@twitter.com', 'dfern6', 'jY1$DW9e', '2023-07-06');
insert into nguoidung (ma_nd, emai, username, pass, created_at) values (8, 'daickin7@huffingtonpost.com', 'ctaylorson7', 'hE7}h%oGNr@cQ', '2022-10-08');
insert into nguoidung (ma_nd, emai, username, pass, created_at) values (9, 'cbutter8@usgs.gov', 'jgawkes8', 'qZ8~+TS|JR7<''f+M', '2022-12-27');
insert into nguoidung (ma_nd, emai, username, pass, created_at) values (10, 'hormond9@google.co.uk', 'kelcom9', 'bM4|citUhvxO"', '2023-02-20');