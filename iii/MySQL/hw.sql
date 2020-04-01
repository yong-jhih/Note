--創建資料庫 iii
create database iii default character set utf8;
use iii;

-- 建表 1.Customers   id(p,a),姓名,電話(uni),email,address
CREATE TABLE IF NOT EXISTS `Customers` (
  `cId` int primary key auto_increment unsigned NOT NULL,
  `cName` varchar(20) collate utf8_unicode_ci NOT NULL,
  `cEmail` varchar(100) collate utf8_unicode_ci default NULL,
  `cTel` varchar(50) collate utf8_unicode_ci NOT NULL,
  `cAddr` varchar(255) collate utf8_unicode_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;
-- 新增數據至 Customers
INSERT INTO `Customers` (`cId`, `cName`, `cEmail`, `cTel`, `cAddr`) VALUES
(1, 'Customers1', 'elven@superstar.com', '0922988876', '台北市濟洲北路12號'),
(2, 'Customers2', 'jinglun@superstar.com', '0918181111', '台北市敦化南路93號5樓'),
(3, 'Customers3', 'sugie@superstar.com', '0914530768', '台北市中央路201號7樓'),


-- 建表 2.Suppliers  id(...),名稱,電話(uni),地址
CREATE TABLE IF NOT EXISTS `Suppliers` (
  `sId` int primary key auto_increment unsigned NOT NULL,
  `sName` varchar(20) collate utf8_unicode_ci NOT NULL,
  `sTel` varchar(50) unique key collate utf8_unicode_ci default NULL,
  `sAddr` varchar(255) collate utf8_unicode_ci default NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;
-- 新增數據至 Suppliers
INSERT INTO `Suppliers` (`sId`, `sName`, `sTel`, `sAddr`) VALUES
(01, 'Suppliers1','0922988876', '台北市濟洲北路12號'),
(02, 'Suppliers2','0918181111', '台北市敦化南路93號5樓'),
(03, 'Suppliers3','0914530768', '台北市中央路201號7樓'),


-- 建表 3.Products  id(...),名稱,建議售價,供應商(f)
CREATE TABLE IF NOT EXISTS `Products` (
  `pId` int primary key auto_increment unsigned zerofill NOT NULL,
  `pName` varchar(20) collate utf8_unicode_ci NOT NULL,
  `pSugPrice` int default NULL,
  `pSupplier` varchar(255) collate utf8_unicode_ci default NULL,
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;
-- 新增數據至 Products
INSERT INTO `Products` (`pId`, `pName`, `pSugPrice`, `pSupplier`) VALUES
(1, 'Products1', 10, 'pSupplier1'),
(2, 'Products2', 20, 'pSupplier2'),
(3, 'Products3', 30, 'pSupplier3'),


-- 建表 4.Orders  id(...),編號(uni),客戶(f)
CREATE TABLE IF NOT EXISTS `Orders` (
  `oId` int primary key auto_increment unsigned zerofill NOT NULL,
  `oNo` varchar(20) collate utf8_unicode_ci NOT NULL,
  `oCust` varchar(100) collate utf8_unicode_ci default NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;
-- 新增數據至 Orders
INSERT INTO `Orders` (`oId`, `oNo`, `oCust`) VALUES
(1, 'oNo1', 'oCust1'),
(2, 'oNo2', 'oCust2'),
(3, 'oNo3', 'oCust3'),


-- 建表 5.OrderDetails   id(...),編號(f),商品(f),實際單價,數量
CREATE TABLE IF NOT EXISTS `Customers` (
  `odId` int primary key auto_increment unsigned zerofill NOT NULL,
  `odNo` varchar(20) collate utf8_unicode_ci NOT NULL,
  `product` varchar(100) collate utf8_unicode_ci default NULL,
  `relPrice` varchar(50) collate utf8_unicode_ci default NULL,
  `odQuantity` varchar(255) collate utf8_unicode_ci default NULL,
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;
-- 新增數據至 OrderDetails
INSERT INTO `students` (`odId`, `odNo`, `cEmail`, `relPrice`, `odQuantity`) VALUES
(01, '簡奉君', 'elven@superstar.com', '0922988876', '台北市濟洲北路12號'),
(02, '黃靖輪', 'jinglun@superstar.com', '0918181111', '台北市敦化南路93號5樓'),
(03, '潘四敬', 'sugie@superstar.com', '0914530768', '台北市中央路201號7樓'),
