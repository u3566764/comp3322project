CREATE TABLE `User` (
  `uid` char(50) NOT NULL,
  `name` char(50) NOT NULL,
  `email` char(50) NOT NULL,
  `password` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



CREATE TABLE `Questions` (
  `qid` varchar(50) NOT NULL,
  `space` varchar(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` varchar(5000) NOT NULL,
  `answer` varchar(5000) NOT NULL,
  `up` varchar(5000) NOT NULL,
  `time` varchar(50) NOT NULL,
  `creatorid` varchar(50) NOT NULL,
  `creatorName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `nhlam`.`Answer` ( 
  `aid` VARCHAR(50) NOT NULL ,
  `qid` VARCHAR(50) NOT NULL ,
 `content` VARCHAR(5000) NOT NULL ,
 `uid` VARCHAR(50) NOT NULL ,
 `uname` VARCHAR(50) NOT NULL ,
 PRIMARY KEY (`aid`)) ENGINE = InnoDB;


INSERT INTO `Questions`(`qid`, `space`, `title`, `content`, `answer`, `up`, `time`, `creatorid`, `creatorName`) VALUES ("qid1","Javascript",
"What is the difference between Java and Javascript","I am a newbie in programming, and I would liketo know what is the difference between Java andJavascript","[aid1,aid2]","uid2,uid3","11-10-2020","uid1","Andy")


INSERT INTO `User`(`uid`, `name`, `email`, `password`) VALUES ("uid1","Andy","andy@test.hk","pwd")
INSERT INTO `User`(`uid`, `name`, `email`, `password`) VALUES ("uid2","Bob","bob@test.hk","pwd")
INSERT INTO `User`(`uid`, `name`, `email`, `password`) VALUES ("uid3","Cindy","cindy@test.hk","pwd")