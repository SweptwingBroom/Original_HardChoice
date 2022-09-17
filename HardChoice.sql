-- Database: `hardchoice_db`
--
CREATE DATABASE HardChoice;
-- --------------------------------------------------------
--
-- Table structure for table `manager`
--
CREATE TABLE `manager` (
  mId INT(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
  mName TINYTEXT NOT NULL,--INDEX
  managerEmail TINYTEXT NOT NULL,--INDEX
  managerPwd LONGTEXT NOT NULL
);
-- --------------------------------------------------------
--
-- Table structure for table `users`
--
CREATE TABLE users (
  idUsers INT(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
  usersName TINYTEXT NOT NULL,--INDEX
  emailUsers TINYTEXT NOT NULL,--INDEX
  pwdUsers LONGTEXT NOT NULL,
  askForNews BOOLEAN NOT NULL
);
-----------------------------------------------------------
--
-- Table structure for table `products`
--
CREATE TABLE products (
  idProduct INT(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
  KindProduct TINYTEXT NOT NULL,
  CompName TINYTEXT NOT NULL,
  NameProduct TINYTEXT NOT NULL,
  color varchar(256) NOT NULL,
  StoragePro varchar(256) NOT NULL,
  MemorySize TINYTEXT NOT NULL,
  MemoryType TINYTEXT NOT NULL,
  Resistan_toWater TINYTEXT NOT NULL,
  ResistanWater_time TINYTEXT NOT NULL,
  Display_size TINYTEXT NOT NULL,
  Display_px TINYTEXT NOT NULL,
  Display_type TINYTEXT NOT NULL,
  Materials LONGTEXT NOT NULL,
  CPU TINYTEXT NOT NULL,
  Wifi TINYTEXT NOT NULL,
  Bluetooth TINYTEXT NOT NULL,
  GPS BOOLEAN NOT NULL,
  NFC BOOLEAN NOT NULL,
  Radio BOOLEAN NOT NULL,
  fCamera TINYTEXT NOT NULL,
  fWCamera TINYTEXT NOT NULL,
  rWCamera TINYTEXT NOT NULL,
  rZCamera TINYTEXT NOT NULL,
  rCamera TINYTEXT NOT NULL,
  Night_Camera TINYTEXT NOT NULL,
  VRCameraRecording TINYTEXT NOT NULL,
  VFCameraRecording TINYTEXT NOT NULL,
  sLomoStaionCamera TINYTEXT NOT NULL,
  SecurityinPhone TINYTEXT NOT NULL,
  SecurityatPhone TINYTEXT NOT NULL,
  Features TINYTEXT NOT NULL,
  ExtrenalBAC TINYTEXT NOT NULL,
  Battery TINYTEXT NOT NULL,
  FastCharge TINYTEXT NOT NULL,
  TimestayBattery TINYTEXT NOT NULL,
  Sim TINYTEXT NOT NULL,
  SystemPhone TINYTEXT NOT NULL,
  Accessibility TINYTEXT NOT NULL,
  URLPhone TINYTEXT NOT NULL,
  Rating DOUBLE NOT NULL
);
------------------------------------------------------------
--
INSERT INTO products (Radio, NFC, )
-- Table structure for table `search_form`
--
CREATE TABLE search_form (
  Id INT(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
  name_Page varchar(256) NOT NULL,--INDEX
  Text_Page TEXT NOT NULL,--INDEX
  pwdUsers LONGTEXT NOT NULL,
  askForNews BOOLEAN NOT NULL
);
-------------------------------------------------------------
--
-- Insert helpful paremetries to 'product' table
--
INSERT INTO products (KindProduct, CompName, NameProduct) VALUES ('smartphone','Apple', 'iPhone8');
INSERT INTO products (KindProduct, CompName, NameProduct) VALUES ('smartphone','Apple', 'iPhoneXS');
INSERT INTO products (KindProduct, CompName, NameProduct) VALUES ('smartphone','Apple', 'iPhoneXR');
INSERT INTO products (KindProduct, CompName, NameProduct) VALUES ('smartphone','Apple', 'iPhoneX');
INSERT INTO products (KindProduct, CompName, NameProduct) VALUES ('smartphone','Apple', 'iPhone11Pro');
INSERT INTO products (KindProduct, CompName, NameProduct) VALUES ('smartphone','Apple', 'iPhone11');
INSERT INTO products (KindProduct, CompName, NameProduct) VALUES ('smartphone','Samsung', 'galaxyS9');
INSERT INTO products (KindProduct, CompName, NameProduct) VALUES ('smartphone','Samsung', 'galaxyS8');
INSERT INTO products (KindProduct, CompName, NameProduct) VALUES ('smartphone','Samsung', 'galaxyA90');
INSERT INTO products (KindProduct, CompName, NameProduct) VALUES ('smartphone','Samsung', 'galaxyA80');
INSERT INTO products (KindProduct, CompName, NameProduct) VALUES ('smartphone','Samsung', 'galaxyA71');
INSERT INTO products (KindProduct, CompName, NameProduct) VALUES ('smartphone','Samsung', 'galaxyA70');
INSERT INTO products (KindProduct, CompName, NameProduct) VALUES ('smartphone','Samsung', 'galaxyA51');
INSERT INTO products (KindProduct, CompName, NameProduct) VALUES ('smartphone','Samsung', 'galaxyA50');
INSERT INTO products (KindProduct, CompName, NameProduct) VALUES ('smartphone','Samsung', 'galaxyA30');
INSERT INTO products (KindProduct, CompName, NameProduct) VALUES ('smartphone','Samsung', 'galaxyA20');
INSERT INTO products (KindProduct, CompName, NameProduct) VALUES ('smartphone','Samsung', 'galaxyA10');
-------------------------------------------------------------
--