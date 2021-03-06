CREATE DATABASE  IF NOT EXISTS `iweibo` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `iweibo`;
-- MySQL dump 10.13  Distrib 5.5.16, for Win32 (x86)
--
-- Host: localhost    Database: iweibo
-- ------------------------------------------------------
-- Server version	5.0.51a-community-nt

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Not dumping tablespaces as no INFORMATION_SCHEMA.FILES table on this server
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2012-06-29 17:08:40
CREATE DATABASE  IF NOT EXISTS `mxgn` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `mxgn`;
-- MySQL dump 10.13  Distrib 5.5.16, for Win32 (x86)
--
-- Host: localhost    Database: mxgn
-- ------------------------------------------------------
-- Server version	5.0.51a-community-nt

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Not dumping tablespaces as no INFORMATION_SCHEMA.FILES table on this server
--

--
-- Table structure for table `notices`
--

DROP TABLE IF EXISTS `notices`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notices` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(100) default NULL,
  `content` text,
  `posttime` datetime default NULL,
  `author` varchar(45) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notices`
--

LOCK TABLES `notices` WRITE;
/*!40000 ALTER TABLE `notices` DISABLE KEYS */;
INSERT INTO `notices` VALUES (3,'2012年中国蒙自“鑫泰杯”米线姑娘形象代表选拔大赛公告','<p>\r\n 2012 “中国过桥米线之乡”——蒙自米线姑娘形象代表选拔大赛开始啦！\r\n</p>\r\n<p>\r\n 无论你在何方，无论你是谁，只要你的年龄在16至28岁之间，身高160cm以上，你的青春靓丽就可获得展示的舞台。让你的倩影映照红河，用你最美的容颜，见证“一根米线连四方” 的美丽传说。勇于开始，精彩舞台，汇聚美丽，梦想成真，10万元大奖等你们拿，还hold得住吗？ 赶快来报名参赛吧！\r\n</p>\r\n<p>\r\n 畅游过桥米线之乡，感受魅力蒙自。2012年中国蒙自第四届过桥米线美食文化旅游节，“鑫泰杯”米线姑娘形象代表选拔大赛绚丽启动，蒙自电视台等媒体，倾情演绎，敬请关注。\r\n</p>\r\n<p>\r\n 本次大奖赛，分别设冠军、亚军、季军各1名，可分别获得3万元，2万元，1万元现金大奖；共设7个单项奖项（最佳上镜、最佳表演、最佳气质、最佳形体、最佳人气、最佳才艺、最佳口才奖）奖金3千元。\r\n</p>\r\n<p align=\"left\" 0%;?=\"\">\r\n  <span< p=\"\"></span<><p align=\"left\" 0%;?=\"\">\r\n  &nbsp;电话、网络报名（6.25.15）→海选（8.15-8.31）→半决赛（9.1-9.25）→决赛（9.26-27），整个大奖赛的赛事蒙自电视台将在黄金时段播出。\r\n </p>\r\n <p>\r\n  <span< p=\"\"></span<>\r\n  <p>\r\n   身材比例匀称，身体健康。年龄16岁—28岁，身高160cm以上。\r\n  </p>\r\n  <p>\r\n   <span< p=\"\"></span<><p p=\"\" 6月25日—8月15日<=\"\">\r\n   <p>\r\n    <span< p=\"\"></span<>\r\n    <p align=\"left\">\r\n     网站报名: <a href=\"http://www.flyxg.com/mxgn/\"> http://www.flyxg.com/mxgn/</a> 或登陆新广网点击相关图标\r\n    </p>\r\n<p p=\"\" 详情请咨询：蒙自市文化体育和广播电视局办公室<=\"\">\r\n    <p>\r\n     咨询电话：0873-3799260\r\n    </p>\r\n    <p>\r\n     联系人：施老师\r\n    </p>','2012-06-24 09:44:23','大赛组委会'),(4,'米线姑娘形象代表选拔大赛25日起开放网络报名','<p> \r  根据比赛进程，目前大赛进入报名阶段（2012年6月25日至8月15日）。\r </p>\r <p>\r  在此期间大赛组委会将通过网络、电视、电台、报刊、杂志等多种宣传方式，在全国范围内征集“米线姑娘”形象代表。\r </p>\r <p>\r  1、报名方式：设置网络报名，网友登录本次比赛官网<a href=\"http://www.flyxg.com/mxgn\">http://www.flyxg.com/mxgn</a> 或进入新广网参加报名。\r </p>\r <p>\r  2、奖项设置：大赛设冠军1名，奖金30000元；亚军1名，奖金20000元；季军1名，奖金10000元。其他奖项7名（最佳上镜奖、最佳表演奖、最佳气质奖、最佳形体奖、最佳人气奖、最佳才艺奖、最佳口才奖），奖金3000元。（另赠送皇冠、绶带、奖杯一套）\r </p>','2012-06-24 09:55:29','大赛组委会'),(6,'2012年蒙自“鑫泰杯”米线姑娘形象大使选拔大赛详细安排','<p>\r\n 活动从2012年6月开始启动，预计至2012年9月结束，共分为五个阶段进行，分别是宣传报名阶段、海选阶段、复赛阶段、决赛阶段。<br />\r\n（一）宣传报名阶段（2012年6月25日至8月15日）。<br />\r\n通过网络、电视、电台、报刊、杂志等多种宣传方式，在全国范围内宣传蒙自举办“米线姑娘”形象代表选拔大赛事宜。并通过多种传媒手段，将形象代表选拔大赛报名、设奖、海选标准等事项告知公众。<br />\r\n1、报名方式：设置网络报名。<br />\r\n2、奖项设置：大赛设冠军1名，奖金30000元；亚军1名，奖金20000元；季军1名，奖金10000元。其他奖项7名（最佳上镜奖、最佳表演奖、最佳气质奖、最佳形体奖、最佳人气奖、最佳才艺奖、最佳口才奖），奖金3000元。（另赠送皇冠、绶带、奖杯一套）<br />\r\n（二）、海选阶段（2012年8月1日至8月31日）<br />\r\n通过报名，对参加报名人员进行海选，选出50人进入半决赛。<br />\r\n1、海选标准<br />\r\n（1）身材比例匀称，身体健康。<br />\r\n（2）年龄16岁——28岁。<br />\r\n（3）身高160cm以上。<br />\r\n2、海选评委组成：红河州、蒙自市相关人员5人（待定）<br />\r\n3、海选地点：设昆明和蒙自两处<br />\r\n（三）半决赛阶段（2012年9月1日至2012年9月25日）<br />\r\n2012年9月10日前，完成进入半决赛选手的通知工作，要求进入半决赛选手在2012年9月15日前回执，如无回执，视为自动弃权。9月24日，半决赛选手入住蒙自报到。9月25日，进行半决赛。通过半决赛，决出24名选手进入决赛。半决赛选手赴蒙自往返车费自理，食宿由组委会统一安排。凡进入半决赛的选手，将获得大赛组委会颁发的证书一本、精美纪念品一份。没有进入决赛的选手，9月26日早离开蒙自。<br />\r\n1、半决赛地点：蒙自红河体育馆。<br />\r\n2、半决赛评委：州、市相关专家5人担任。<br />\r\n3、半决赛比赛项目：时装、泳装、礼服、自我介绍＋才艺展示（3分钟以内）<br />\r\n4、半决赛评判标准：<br />\r\n（1）身体健康情况<br />\r\n（2）表现力<br />\r\n（3）身材、体形<br />\r\n（4）肢体协调性<br />\r\n（5）团队精神<br />\r\n（6）口才及应对能力<br />\r\n（7）服装搭配<br />\r\n（8）学习能力<br />\r\n（9）知识运用能力<br />\r\n（四）决赛阶段（2012年9月26日至2012年9月27日）<br />\r\n1、决赛培训：2012年9月26日，对进入决赛的24名选手进行培训，2012年9月27日白天，决赛筹备、节目连排、彩排，9月27日晚，决赛暨颁奖晚会。进入决赛的选手，组委会负责承担食宿费、培训费，往返蒙自车费由个人解决。<br />\r\n2、决赛地点：蒙自红河体育馆<br />\r\n3、决赛评委：邀请云南省相关专业知名专家2人及红河州、蒙自市相关专业知名专家5人共同担任。<br />\r\n4、决赛比赛项目：米线姑娘旗袍、民族风格泳装、即兴问答＋才艺展示、礼服。<br />\r\n5、决赛评判标准：<br />\r\n<p align=\"right\">\r\n <br />\r\n蒙自市文化体育和广播电视局\r\n</p>\r\n<p align=\"right\">\r\n 2012年5月20日<span  id=\"__kindeditor_bookmark_end_9__\"></span>\r\n</p>','2012-06-26 01:55:12','大赛组委会'),(8,'2012年蒙自“鑫泰杯”米线姑娘形象大使选拔大赛奖项安排','<p>\r\n 本次大赛设冠军1名，奖金30000元；\r\n</p>\r\n<p>\r\n 亚军1名，奖金20000元；\r\n</p>\r\n<p>\r\n 季军1名，奖金10000元。\r\n</p>\r\n<p>\r\n 其他奖项7名，包括：最佳上镜奖、最佳表演奖、最佳气质奖、最佳形体奖、最佳人气奖、最佳才艺奖、最佳口才奖，奖金各3000元。（另赠送皇冠、绶带、奖杯一套）\r\n</p>','2012-06-26 02:04:10','大赛组委会'),(7,'2012年蒙自“鑫泰杯”米线姑娘形象大使选拔大赛的评选项目','<p>\r\n 海选条件<br />\r\n（1）身材比例匀称，身体健康。<br />\r\n（2）年龄16岁——28岁。<br />\r\n（3）身高160cm以上。\r\n</p>\r\n<p>\r\n 不限地域，全国范围甄选\r\n</p>\r\n<p>\r\n  \r\n</p>\r\n<p>\r\n 半决赛比赛项目：<br />\r\n（1）身体健康情况<br />\r\n（2）表现力<br />\r\n（3）身材、体形<br />\r\n（4）肢体协调性<br />\r\n（5）团队精神<br />\r\n（6）口才及应对能力<br />\r\n（7）服装搭配<br />\r\n（8）学习能力<br />\r\n（9）知识运用能力\r\n</p>\r\n<p>\r\n  \r\n</p>\r\n<p>\r\n 决赛比赛项目：\r\n</p>\r\n<p>\r\n 米线姑娘旗袍、民族风格泳装、即兴问答＋才艺展示、礼服。\r\n</p>\r\n<p>\r\n  \r\n</p>\r\n<p>\r\n （以上内容如有更改将通过网站发布，敬请留意网站信息。）\r\n</p>','2012-06-26 02:00:41','大赛组委会');
/*!40000 ALTER TABLE `notices` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `players`
--

DROP TABLE IF EXISTS `players`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `players` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(45) default NULL COMMENT '姓名',
  `reg_date` date default NULL COMMENT '报名日期',
  `birthday` date default NULL COMMENT '生日',
  `height` int(11) default NULL COMMENT '身高',
  `edu` int(11) default NULL COMMENT '学历',
  `hometown` varchar(45) default NULL COMMENT '家乡',
  `career` varchar(45) default NULL COMMENT '职业',
  `bust` int(11) default NULL COMMENT '胸围',
  `waistline` int(11) default NULL COMMENT '腰围',
  `hip` int(11) default NULL COMMENT '臀围',
  `identity_no` varchar(18) default NULL COMMENT '身份证号码',
  `mobile` varchar(20) default NULL COMMENT '手机',
  `org` varchar(45) default NULL COMMENT '工作单位（学校）',
  `qq` int(20) default NULL,
  `addr` varchar(100) default NULL COMMENT '家庭地址',
  `detail` text COMMENT '个人简历及专长',
  `image` text,
  `location` int(11) default NULL COMMENT '海选地点',
  `verify` tinyint(4) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `identity_no` (`identity_no`)
) ENGINE=MyISAM AUTO_INCREMENT=10038 DEFAULT CHARSET=utf8 COMMENT='网上报名选手信息';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `players`
--

LOCK TABLES `players` WRITE;
/*!40000 ALTER TABLE `players` DISABLE KEYS */;
INSERT INTO `players` VALUES (10005,'赵洁','2012-06-25','1982-04-01',164,14,'楚雄','导购',85,63,87,'532522199204012145','2147483647','服装店',1023940463,'桂林街桂林苑8幢201室','   我今年20岁，从小喜欢音乐及舞蹈，都是自学自排也不专业，可是从小都很努力也希望能够有一个舞台能够展示自己。\r\n我虽然不够好看，身材也不够好，可是我会用我的特长给别人带来快乐的。','pub/upload/players/94dd9ab9ec394f0f316abe0f90f6dfd9.jpg',0,0),(10006,'高兰','2012-06-25','1992-12-28',160,15,'云南省红河州元阳县','学生',88,70,93,'532528199212280922','18213939298','云南交通职业技术学院',1057037787,'云南省红河州元阳县新街镇二小路东侧','  我也有璀璨的梦想，虽然我不完美。\r\n  我是一个活泼开朗的哈尼姑娘，山羊坐，今年19岁！我酷爱唱歌跳舞，曾多次参加过学校的各类文艺活动，得到过很多老师和同学们的好评！曾在学校有幸获得过两次校园歌手大赛第一名，公关礼仪大赛二等奖等，有幸在州上、县里以及学校荣获过“优秀共青团”称号，也曾代表学校参加过2009年云南省第八次学联大会等。虽然我是本分老实的山羊座，但也有着白羊座想做就做的冲动，有着处女座追求完美的性格！乐观积极是我对生活的态度，因为我相信：笑口常开，好彩自然来！踩到生活中的地雷算什么，能勇敢的面对才是好汉！我相信，为了梦想而努力，无论结果是怎样的，最后都是胜利者！\r\n  我没有特别的专长，但希望我可以拥有一个专长：用我的努力和表演带给所有的观众们快乐！','pub/upload/players/6e7dfeaaa8ec54033f25908bda725ce0.jpg',0,1),(10007,'任海兰','2012-06-25','1992-10-08',164,14,'四川','自由',80,70,90,'532281992100834x','13887576088','个体',601908868,'蒙自市世纪花园','在老家四川小学时书法比赛获第一名,歌唱比赛第三名.参加美术队.排球队.舞蹈队.\r\n中专学的是涉外护理,一年后在学期间因个人以及家庭原因选择了退校.\r\n2007年个人开店卖女装.参加工作销售过手机.和红河州川渝商会的助理工作.\r\n\r\n我的专长有:唱歌,表演.搭配衣物以及饰品.开导朋友的感情思想,能豁然开朗.','pub/upload/players/d75f5e735d61dd9c76d7777d8933acf5.jpg',0,0),(10008,'吴葳','2012-06-25','1990-12-25',168,15,'云南省','学生',86,55,86,'532526199012250224','18760715275','昆明扬帆职业技术学院',597010714,'云南省弥勒县弥阳镇菜花村委会干冲村','2012年6月-2009年9月就读于-昆明扬帆职业技术学院-艺术系\r\n2009年7月-2006年9月就读于-弥勒一中-文科189班\r\n2006年7月-2002年9月就读于-弥东中学\r\n2002年7月-1999年9月就读于-菜花小学-示范（1）班\r\n1999年7月-1996年9月就读于-干冲小学\r\n我是一个非常喜欢唱歌的人，听适合自己心情的歌，唱适合自己的歌。\r\n我会做饭，可以做很多可口的菜（比如：炸土豆片、炸牛肉、麻辣鸡、、、、、、）\r\n我最擅长做手工（比如：自制笔筒、自制礼品盒、插花、、、、、、）\r\n我还会化妆。','pub/upload/players/5ebba94b248a93ab3f85d93066a880c9.jpg',0,1),(10009,'王靖慈','2012-06-25','1993-02-06',168,16,'黑龙江省佳木斯市','学生',80,65,94,'230805199302060420','15969467018','云南民族大学',253193356,'黑龙江省佳木斯市向阳区','曾参加过《我们的家》MV拍摄，云南民族大学校庆纪录片拍摄。专长民族舞，唱歌。','pub/upload/players/e4feb81e25418ff0f431a01aaa638d5e.jpg',1,1),(10010,'刘星','2012-06-25','1987-08-09',160,16,'屏边','个体户',89,67,88,'532523198708090042','15126445550','无',654960248,'蒙自市昭忠路紫苑小区九单元601','本人专长毕业于四川师范大学 主修音乐舞蹈\r\n专业擅长流行音乐演唱以及各种民族舞以及现代舞表演','pub/upload/players/75d536d92f106c266534a9e12f9ac7ec.jpg',0,1),(10011,'蔡红梅','2012-06-25','1985-04-20',160,15,'个旧','个体户',92,69,93,'532501198504201267','18687377675','无',380405401,'蒙自市文萃路63号','唱歌','pub/upload/players/551a54c068e2a46c15dbe1dbcbad017d.jpg',0,1),(10012,'伊丽莎','2012-06-25','1986-12-26',168,12,'个旧','市场代表',84,65,88,'532501198612261240','15987142544','云南滇美餐厅有限公司',99161680,'昆明市人民中路吹箫巷12号1栋702','大家好！我是2004年毕业的，2006年就一个人开始在昆明打拼了，六年以来一直云南滇美餐饮有限公司工作，也就是大家熟知的麦当劳。同样的，这份执着也关联着我们家乡的米线，不管是小锅、大碗，还是过桥米线，都是我的最爱。在餐厅里面我主要是负责市场品牌的推广工作，以及相关家庭亲子活动的组织，虽然辛苦，但是每次放假我都会回到我的家乡——红河州，早点、午饭、夜宵，都是甩米线，哈哈。','pub/upload/players/062a66fe88d6e16d4833810f0ec87f1c.jpg',1,1),(10013,'王婷婷','2012-06-26','1991-05-24',160,10,'云南省红河洲蒙自市','自由职业',34,35,40,'532522199105212125','15126320216','自由职业',690948907,'蒙自市','喜欢微笑','pub/upload/players/97a54d7adbde4d844f2c53bcd200b00f.jpg',0,1),(10014,'周圆圆','2012-06-26','1992-08-16',160,16,'汉','学生',80,65,75,'321284199208161044','15126197268','红河学院',2147483647,'江苏省姜堰市经济开发区东查村','红河学院2010级财务管理专业学生，擅长写作，从江苏来云南初始不习惯这边的食物，偏辣，然而不久之后对米线情有独钟，因为很方便很美味','pub/upload/players/3f3bd6d5fc5bad763c3a01359f628072.jpg',0,1),(10015,'席淑霞','2012-06-26','1992-04-29',165,16,'云南德宏','学生',87,64,93,'522124199204293321','15287323271','云南蒙自红河学院',347005506,'云南德宏陇川','   我 是一名来自云南蒙自红河学院的学生，今年就读大二，学的是美术专业，身高165mm，体重52KG。\r\n   在2012年参加过蒙自第四届过桥米线美食文化旅游节的节目演出，在节目中表演的是餐具总动员和跳舞。平时在大学生活生活兼职参加一定的外出活动（列如礼仪之类)比如奥星时尚休闲餐厅的开幕，得胜家具的活动礼仪，云铜地产的业主入住仪式和第一次参加的活动是早2010石屏的长绿宴···等礼仪活动。\r\n   要说我的专长呢，虽然是美术专业，但从小比较喜欢唱歌，周围人都觉得唱得还不错。\r\n   我呢性格比较开朗，随和，喜欢研究化妆和护肤，穿衣搭配等。个人比较喜欢欧美风，既喜欢有气质，古典的，也喜欢时尚元素的事物。','pub/upload/players/4181eb506ddf3faa79ba2edbfe1365a3.jpg',0,1),(10016,'杨韶琪','2012-06-26','1993-02-23',163,12,'中国云南','自由撰稿人',65,60,78,'532528199302233126','18214355463','红大酒店',550287273,'中央大街','本人杨韶琪原名杨金梅，今年19岁，性格开朗，活泼，爱说爱笑，喜爱表演，音乐，在校时是学校的主持人，毕业后北漂一年，曾在北京做了一年的演员，现回家乡开始自由撰稿。      加QQ时问题的答案是“老爸”。\r\n（我的照片是冬天拍的，穿的多可能显得臃肿，本人不是很上相，希望大赛组给我机会！）','pub/upload/players/9b9337f468a1ffb902bbeeb5b5c92861.jpg',0,1),(10017,'孙艺萌','2012-06-26','1991-10-10',175,16,'建水','学生',84,60,89,'532524199110100040','13669722774','云南艺术学院',237538487,'建水','姓名   孙艺萌   \r\n \r\n身高   175CM\r\n \r\n体重    50         三围    84     60      88           鞋码  38\r\n \r\n手机     13669722774\r\n \r\n\r\n\r\n曾参赛经历；\r\n                 \r\n                 2011世界模特小姐大赛中国赛区---晚礼服最佳演绎奖，十佳小姐\r\n\r\n\r\n                  2011宝安大浪杯中国新丝路大学生模特大赛---全国十佳  最佳上镜奖\r\n         \r\n                     \r\n                   2011环球时尚超级模特大赛-安徽赛区总决赛---冠军\r\n                     \r\n                 \r\n                    第十一届CCTV模特大赛  西南赛区前三   --- 进入北京总决赛\r\n\r\n                 \r\n                  2010上海世博会，第一批云南馆形象大使\r\n\r\n                 \r\n                     < 出水芙蓉>演员选拔云南冠军，全国五强\r\n\r\n                         \r\n                       城市封面选拔---云南冠军\r\n                   \r\n                     \r\n                      2008全国摩托车宝贝---全国冠军\r\n\r\n\r\n                    2005年全国越野车拉力赛---红河拉力宝贝\r\n\r\n 特长;   舞蹈   表演     模特T台      \r\n     \r\n                    \r\n 趁年轻，做自己喜欢做的事   ·追求自己想做的梦· ，尝试不同的感觉 超越不一样的自我！','pub/upload/players/3245a0c203eb2d9309325e4c933ab74d.jpg',1,1),(10018,'张黎','2012-06-26','1988-07-06',168,15,'云南玉溪','幼教',84,73,86,'530402198807061547','13408947022','云南省红河州蒙自市第四小学幼儿园',604411586,'蒙自市双河小区泰和街24号','2008-2012年，在蒙自读书到参加工作至今\r\n\r\n\r\n2010年曾多次参加婚纱封面拍摄，','pub/upload/players/9111c05ca28031656f536ce53624071d.jpg',0,1),(10019,'董佳欣','2012-06-26','1991-01-21',167,16,'云南大理','在校大学生',76,58,62,'532929199193210026','15198943905','云南民族大学',414520873,'云南省大理州云龙县人民武装部','       一个爱舞蹈和唱歌的白族女孩，参加过云南省第九届少数民族运动会表演项目会两金三银和全国第九届少数民族运动会获三金的成绩，云南僰银女一号24强选手。生活中是个活泼开朗的女孩','pub/upload/players/e15998bcc3e571f1acc736da31697e87.jpg',0,1),(10020,'朱宁','2012-06-26','1987-08-08',165,14,'云南泸西','行业记者',90,68,85,'532527198708090822','15025202219','滇南晨报',303736752,'蒙自','从事过各类传媒、广告、销售、以及兼职演员、礼仪模特等等，爱好摄影','pub/upload/players/9f84349ffd42633b81448d1fba8528dc.jpg',0,1),(10021,'吴琳','2012-06-27','1992-03-30',163,14,'开远','护士',81,62,89,'532502199203300641','15887710821','暂无',961078154,'开远市人民北路226号一幢二单元302','我是一个热情，开朗，大方的女孩。我的职业，是一名护士，护理和照顾好每一位病患是我的职责。看着每一个病患健康康复，心里满是开心与骄傲，我热爱并享受着做人民的\"白衣天使\"。工作之余，我喜欢文艺，从小爱唱歌，爱跳舞，爱表演，会笛子，会巴乌和葫芦丝；曾在学校获得二级乙等普通话证书，；参加过红河卫生职业学院50周年校庆庆典。穿着华丽的服装，站在镁光灯下，让那一刻的舞台只属于我一个人，尽情的展现自我，这是我的梦想。我喜欢展示自己真实的一面，喜欢自己快乐，也喜欢带给别人快乐，这是我的信念。我相信，机会是留给有准备的人!','pub/upload/players/27ff6d07d3489802a037a48a9b73d5d8.jpg',0,1),(10022,'邹晓潞','2012-06-27','1989-10-31',168,12,'云南建水','自由职业',90,60,90,'532524198910310922','18213613695','私营小店',504094945,'云南建水永祯路','喜欢一个人旅行，爬山。QQ答案：两相惜','pub/upload/players/832b6e3a09fc02471ca82a89c2dfb137.jpg',0,1),(10023,'冯伦','2012-06-27','1993-09-14',161,14,'云南红河州蒙自市','在外实习生',88,18,90,'532522199309142421','15974744465','蒙自职中；实习地点；红河会堂',958814163,'蒙自银河路银橡小区','  本人在蒙自职中就读，学习的专业是电子商务。在校期间多次参加校内外的文艺表演与比赛，获奖大大小小多次（获奖的奖项都有舞蹈，唱歌，演讲之类）。所以有着一定的文艺基础。所以性格开朗，待人随和。从小在学校里总是担任班长或文艺委员，所以有着一定的组织能力与领导能力以及强烈的集体荣誉感。在职校就读的一年多，我还参加了计算机等级考试和普通话等级考试，也获得了相关证书。在学习方面我还会更加努力，报考有关大学。','pub/upload/players/690f91c1d963914c25d702b4414c1f58.jpg',0,1),(10024,'武丹','2012-06-27','1991-01-23',176,16,'山东','学生',85,60,90,'3700219910123334x','15969452085','云南艺术学院',747189036,'云南艺术学院戏剧学院09级模特班','现就读于云南艺术学院，曾参加过cctv模特电视大赛，中国模特之星，世界小姐。\r\n特长：朗诵，跳舞。','pub/upload/players/f896b4b3dea48d8997fe262b114ab9df.jpg',1,0),(10025,'高海娇','2012-06-28','1988-02-26',170,15,'云南蒙自','业余模特 、演员',82,68,93,'5325221988022618','15334378613','就读上海交大护理学院',787584375,'蒙自市缅桂路21号','工作经历：                                                                                                      2011年3月至5月苏宁电器负责总台一职\r\n\r\n2011年5月至7月拍摄《镁光灯下》担任现场制片一职\r\n\r\n2011年8月至10月蒙自团市委负责办公室工作\r\n\r\n2011年11月至2012年6月档案馆负责档案录入工作                                                                                                             \r\n \r\n教育培训：\r\n\r\n2009年《普通话证书》\r\n\r\n2010年9月  红河州首届汽车模特大赛获得了优秀奖资格证书。\r\n\r\n2011年5月至7月 参加《镁光灯下》电视剧拍摄。\r\n\r\n2012年5月参加蒙自《名族服装大赛》\r\n\r\n2012年5月参加《世界环球小姐》中国赛区云南总赛区海选\r\n \r\n专长：打篮球、唱歌、跳舞、T台秀、MTV拍摄等。\r\n \r\n\r\n','pub/upload/players/0e0f4a876fc331d02c447899190d9b58.jpg',0,0),(10026,'罗晓雨','2012-06-28','1990-01-08',163,12,'中国','私营主业',32,24,34,'532532198808092025','15126333005','蒙自文萃路207号',525827111,'红河州河口县坝洒农场南屏','之前是在影楼上班，由于自己很喜欢唱歌所以晚上在一家酒吧兼职主唱，朋友们都非常支持我去参加比赛，但就是因为自己的不自信错过了很多参加比赛的机会，这次我想通过这个米线姑娘的节目好好的展现自己，勇敢的去追求自己的梦想。','pub/upload/players/893899ec2dd5aab8dbb6ee037ea9123e.jpg',0,1),(10027,'张芸','2012-06-28','1993-06-24',175,16,'云南蒙自','学生',85,66,92,'532522199306240325','15925345604','昆明医学院海源学院',635196154,'云南省红河州蒙自市世发街','  本人今年19岁，为蒙自人，现在昆明医学院就读，在校为礼仪队队长，按时参加学校礼仪培训，参加过云南模特大赛。本人性格活泼开朗，特长为礼仪，走秀，话剧。','pub/upload/players/020d70b2385d307f1133c70a690697b4.jpg',0,1),(10028,'马蓓蓓','2012-06-28','1991-03-14',2,12,'昆明寻甸','无',70,24,35,'53012919910314253X','13669718182','无',344310464,'昆明市宝海公园','您好 我之前没做过什么工作 也没有什么专长 只是觉得这节目挺有意思 很想参加 希望能给次机会','pub/upload/players/ffbfb280816295554af5190f60d142de.jpg',1,1),(10029,'何梦娇','2012-06-28','1991-11-07',162,15,'石屏','学生',83,74,90,'532501199111071240','15126237381','云锡技校',120239337,'蒙自创泰锦绣湾','小学就读于甲界山小学\r\n初中就读于个旧十八中\r\n高一就读于个旧二中\r\n高二高三就读于石屏一中\r\n大学就读于云锡技校\r\n\r\n专长：唱歌，朗诵\r\n热爱文学，被称为文艺青年；热爱各种文艺活动，从初中起，便在学校担任主持人\r\n喜欢尝试，喜欢挑战自己','pub/upload/players/cf745e09dda35eb43e6e7dc67a63948f.jpg',0,1),(10030,'张敏','2012-06-28','1988-11-18',173,14,'广西','无',88,68,94,'532532198811180528','13649644900','在家里',56283629,'河口县南溪镇','唱歌','pub/upload/players/1326fc4d551c0b3d1e5107833faa59f5.jpg',0,1),(10036,'李雨静','2012-06-29','1987-10-13',163,16,'云南昆明','国企',93,61,92,'532301198710131326','15912753863','烟草公司',652403901,'昆明美丽新世界','专长：英语（专业八级） 海菜腔及祝酒歌  主持 古典舞 SEXY JAZZ 肚皮舞\r\n个人简历：武汉冰蜥足球俱乐部首席足球宝贝\r\n          腾讯网大楚足球宝贝\r\n          武汉面粉网驻站平面模特\r\n          第六届城市运动会武汉赛区篮球宝贝\r\n          《加油97》合作平面模特\r\n          《高尔夫》合作平面模特\r\n          2011全国烟草行业企业管理现场会分会场 讲解\r\n          易门县庆祝建党90周年激情广场大家唱 主持人\r\n          某市烟草公司迎春晚会、运动会  主持人\r\n          米莱视觉、YOKO摄影馆、MONDAY STADIO合作平面模特\r\n          昆明左岸印画合作平面模特\r\n          多家舞蹈俱乐部 SEXY JAZZ老师','pub/upload/players/c650b21853d00bf3da681586f9f7610b.jpg',1,0),(10031,'杨加平','2012-06-29','1991-01-11',2,15,'云南','舞蹈演员',70,55,84,'533001199111247529','18787393553','蒙自',277458908,'云南省保山市隆阳区','姓名：杨加平\r\n年龄：20\r\n出生日期1991年11月24日\r\n血型：O\r\nQQ：277458908 拒绝任何人加好友\r\n爱好及特长：喜欢有创意的东西，喜欢观看独特东西，特长应该说是舞蹈吧！ \r\n\r\n人生格言：人生是靠自己走出来的，只要努力就一定能够撑起一片属于自己的天空！ \r\n','pub/upload/players/f26b604e51361641bd42723fd99a8736.jpg',0,1),(10032,'余红','2012-06-29','1993-01-12',160,14,'云南','舞蹈演员',75,55,86,'532724199312270022','15877922618','蒙自',1322437414,'云南省普洱市','喜欢说说笑话，喜欢学习很多舞蹈动作，','pub/upload/players/8f0f5746729c7f894fa95d418659b1d3.jpg',0,1),(10033,'付美萍','2012-06-29','1994-01-26',160,14,'云南','舞蹈演员',76,55,87,'532724199409260920','15825262804','蒙自',1374052253,'云南省普洱市','席春光唱歌跳舞，上网','pub/upload/players/9ff8b807dc4b80be3ee6e31cef8d9161.jpg',0,1),(10034,'白晓芬','2012-06-29','1992-01-07',160,14,'云南','舞蹈演员',76,55,87,'530822199207273628','15912143304','蒙自',1042426329,'云南省西双版纳','爱好舞蹈，听听音乐，','pub/upload/players/0d45ecf970422f3ba81eb7630926023b.jpg',0,1),(10035,'杨媛','2012-06-29','1992-07-04',165,16,'湖南省邵阳市','学生',83,64,83,'430502199207040028','15887219264','云南民族大学',610555784,'湖南省邵阳市','参加过桃李杯，荷花杯等舞蹈大赛','pub/upload/players/a1bd3b01f4240a7c02561d32e6406300.jpg',1,1),(10037,'张倩','2012-06-29','1991-09-11',164,14,'云南建水','出纳',86,67,90,'532524199109110022','15096893911','云南慈怀文化传媒有限公司',381166467,'云南建水县临安路','我是一个喜欢阳光喜欢向日葵喜欢笑的一个女孩。性格开朗。容易与人相处。\r\n专长：摄影、唱歌。','pub/upload/players/bf5175b181260d144f9dc4de1fc657c8.jpg',0,0);
/*!40000 ALTER TABLE `players` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admins` (
  `id` int(11) NOT NULL auto_increment,
  `username` varchar(45) default NULL,
  `password` varchar(45) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admins`
--

LOCK TABLES `admins` WRITE;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` VALUES (1,'admin','ef678cdb413357a7ad6a72455da86747'),(2,'franke','Franke85418#'),(3,'duanjie','myshow1987930');
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `edus`
--

DROP TABLE IF EXISTS `edus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `edus` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(45) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `edus`
--

LOCK TABLES `edus` WRITE;
/*!40000 ALTER TABLE `edus` DISABLE KEYS */;
INSERT INTO `edus` VALUES (10,'小学'),(11,'初中'),(12,'高中'),(13,'技校'),(14,'中专'),(15,'大专'),(16,'本科'),(17,'硕士'),(18,'博士');
/*!40000 ALTER TABLE `edus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `settings` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(100) default NULL,
  `keywords` text,
  `description` text,
  `can_reg` tinyint(4) default NULL,
  `can_log` tinyint(4) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='站点设置信息';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (1,'2012年中国蒙自“鑫泰杯”米线姑娘形象代表选拔大赛','米线姑娘,蒙自米线姑娘,米线姑娘选拔,米线姑娘大赛,米线姑娘报名,米线姑娘选拔大赛,米线姑娘投票,蒙自,蒙自市,蒙自米线节,米线姑娘动态,米线姑娘新闻,过桥米线,蒙自过桥米线,红河,红河州,红河新闻,新广网','2012年中国蒙自“鑫泰杯”米线姑娘形象代表选拔大赛官方网站，提供最新蒙自米线姑娘选拔大赛的最新进展、选手展示以及相关信息和网友互动。',1,0);
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2012-06-29 17:08:40
