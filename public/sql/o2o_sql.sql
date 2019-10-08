#生活服务分类表
CREATE TABLE 'o2o_category'(
  `id` int(11) unsigned NOT NULL auto_increment,
  `name` VARCHAR(50) NOT NULL DEFAULT '',
  `parent_id` int(10) unsigned NOT NULL default 0,
  `listorder` int(8) unsigned NOT NULL default 0,
  `status` tinyint(1) NOT NULL default 0,
  `create_time` int(11) unsigned NOT NULL default 0,
  `update_time` int(11) unsigned NOT NULL default 0,
  PRIMARY KEY('id'),
  KEY parent_id('parent_id')
)ENGINE=InnoDB AUTO_INCREMENT=1 default CHARSET=utf8;

#城市表
CREATE TABLE 'o2o_city'(
  'id' int(11) unsigned NOT NULL auto_increment,
  'name' VARCHAR(50) NOT NULL DEFAULT '',
  'uname' VARCHAR(50) NOT NULL DEFAULT '',
  'parent_id' int(10) unsigned NOT NULL default 0,
  'listorder' int(8) unsigned NOT NULL default 0,
  'status' tinyint(1) NOT NULL default 0,
  'create_time' int(11) unsigned NOT NULL default 0,
  'update_time' int(11) unsigned NOT NULL default 0,
  PRIMARY KEY('id'),
  KEY parent_id('parent_id'),
  UNIQUE KEY uname('uname')
)ENGINE=InnoDB AUTO_INCREMENT=1 default CHARSET=utf8;

#商圈表
CREATE TABLE 'o2o_area'(
  'id' int(11) unsigned NOT NULL auto_increment,
  'name' VARCHAR(50) NOT NULL DEFAULT '',
  'city_id' int(11) unsigned NOT NULL default 0,
  'parent_id' int(10) unsigned NOT NULL default 0,
  'listorder' int(8) unsigned NOT NULL default 0,
  'status' tinyint(1) NOT NULL default 0,
  'create_time' int(11) unsigned NOT NULL default 0,
  'update_time' int(11) unsigned NOT NULL default 0,
  PRIMARY KEY('id'),
  KEY parent_id('parent_id'),
  UNIQUE KEY city_id('city_id')
)ENGINE=InnoDB AUTO_INCREMENT=1 default CHARSET=utf8;

#商户表
CREATE TABLE 'o2o_bis'(
  'id' int(11) unsigned NOT NULL auto_increment,
  'name' VARCHAR(50) NOT NULL DEFAULT '',
  'email' VARCHAR(50) NOT NULL DEFAULT '',
  'logo' VARCHAR(255) NOT NULL DEFAULT '',
  'licence_logo' VARCHAR(50) NOT NULL DEFAULT '',
  'description' text NOT NULL,
  'city_id' int(11) unsigned NOT NULL default 0,
  'city_path' VARCHAR(50) NOT NULL default '',
  'bank_info' VARCHAR(50) NOT NULL default '',
  'money' decimal(20,2) NOT NULL default '0.00',
  'bank_name' VARCHAR(50) NOT NULL default '',
  'bank_user' VARCHAR(50) NOT NULL default '',
  'faren' VARCHAR(20) NOT NULL default '',
  'faren_tel' VARCHAR(20) NOT NULL default '',
  'listorder' int(8) unsigned NOT NULL default 0,
  'status' tinyint(1) NOT NULL default 0,
  'create_time' int(11) unsigned NOT NULL default 0,
  'update_time' int(11) unsigned NOT NULL default 0,
  PRIMARY KEY('id'),
  KEY city_id('city_id'),
  UNIQUE KEY name('name')
)ENGINE=InnoDB AUTO_INCREMENT=1 default CHARSET=utf8;

#商户帐号表
CREATE TABLE 'o2o_bis_account'(
  'id' int(11) unsigned NOT NULL auto_increment,
  'username' VARCHAR(50) NOT NULL DEFAULT '',
  'password' char(32) NOT NULL DEFAULT '',
  'code' VARCHAR(10) NOT NULL DEFAULT '',
  'bis_id' int(11) unsigned NOT NULL DEFAULT 0,
  'last_login_ip' VARCHAR(20) NOT NULL default '',
  'last_login_time' int(11) unsigned NOT NULL default 0,
  'is_main' tinyint(1) unsigned NOT NULL default 0,
  'listorder' int(8) unsigned NOT NULL default 0,
  'status' tinyint(1) NOT NULL default 0,
  'create_time' int(11) unsigned NOT NULL default 0,
  'update_time' int(11) unsigned NOT NULL default 0,
  PRIMARY KEY('id'),
  KEY bis_id('bis_id'),
  UNIQUE KEY username('username')
)ENGINE=InnoDB AUTO_INCREMENT=1 default CHARSET=utf8;

#商户门店表
CREATE TABLE 'o2o_bis_location'(
  'id' int(11) unsigned NOT NULL auto_increment,
  'name' VARCHAR(50) NOT NULL DEFAULT '',
  'logo' VARCHAR(255) NOT NULL DEFAULT '',
  'address' VARCHAR(255) NOT NULL DEFAULT '',
  'tel' VARCHAR(20) NOT NULL DEFAULT '',
  'contact' VARCHAR(20) NOT NULL DEFAULT '',
  'xpoint' VARCHAR(20) NOT NULL DEFAULT '',
  'ypoint' VARCHAR(20) NOT NULL DEFAULT '',
  'bis_id' int(11) unsigned NOT NULL default 0,
  'open_time' int(11) unsigned NOT NULL default 0,
  'content' text NOT NULL,
  'is_main' tinyint(1) unsigned NOT NULL default 0,
  'api_address' VARCHAR(255) NOT NULL DEFAULT '',
  'city_id' int(11) unsigned NOT NULL default 0,
  'city_path' VARCHAR(50) NOT NULL default '',
  'category_id' int(11) unsigned NOT NULL default 0,
  'category_path' VARCHAR(50) NOT NULL default '',
  'bank_info' VARCHAR(50) NOT NULL default '',
  'listorder' int(8) unsigned NOT NULL default 0,
  'status' tinyint(1) NOT NULL default 0,
  'create_time' int(11) unsigned NOT NULL default 0,
  'update_time' int(11) unsigned NOT NULL default 0,
  PRIMARY KEY('id'),
  KEY city_id('city_id'),
  KEY bis_id('bis_id'),
  KEY category_id('category_id'),
  UNIQUE KEY name('name')
)ENGINE=InnoDB AUTO_INCREMENT=1 default CHARSET=utf8;

#团购商品表

CREATE TABLE 'o2o_deal'(
  'id' int(11) unsigned NOT NULL auto_increment,
  'name' varchar(100) not null default '',
  'category_id' int(11) not null DEFAULT 0,
  'se_category_id' int(11) not null DEFAULT 0,
  'bis_id' int(11) not null DEFAULT 0,
  'location_ids' varchar(100) not null default '',
  'image' varchar(200) not null default '',
  'description' text not null,
  'start_time' int(11) not null DEFAULT 0,
  'end_time' int(11) not null DEFAULT 0,
  'origin_price' decimal(20,2) not null DEFAULT '0.00',
  'current_price' decimal(20,2) not null DEFAULT '0.00',
  'city_id' int(11) not null DEFAULT 0,
  'buy_count' int(11) not null DEFAULT 0,
  'total_count' int(11) not null DEFAULT 0,
  'coupons_begin_time' int(11) not null DEFAULT 0,
  'coupons_end_time' int(11) not null DEFAULT 0,
  'xpoint' VARCHAR(20) NOT NULL DEFAULT '',
  'ypoint' VARCHAR(20) NOT NULL DEFAULT '',
  'bis_account_id' int(10) NOT NULL DEFAULT 0,
  'balance_price' decimal(20,2) not null DEFAULT '0.00',
  'notes' text not NULL ,
  'listorder' int(8) unsigned NOT NULL default 0,
  'status' tinyint(1) NOT NULL default 0,
  'create_time' int(11) unsigned NOT NULL default 0,
  'update_time' int(11) unsigned NOT NULL default 0,
  PRIMARY KEY('id'),
  KEY category_id('category_id'),
  KEY se_category_id('se_category_id'),
  KEY city_id('city_id'),
  KEY start_time('start_time'),
  KEY end_time('end_time')
)ENGINE=InnoDB AUTO_INCREMENT=1 default CHARSET=utf8;

#用户表
CREATE TABLE 'o2o_user'(
  'id' int(11) unsigned NOT NULL auto_increment,
  'username' VARCHAR(50) NOT NULL DEFAULT '',
  'password' char(32) NOT NULL DEFAULT '',
  'code' VARCHAR(10) NOT NULL DEFAULT '',
  'last_login_ip' VARCHAR(20) NOT NULL default '',
  'last_login_time' int(11) unsigned NOT NULL default 0,
  'email' VARCHAR(20) unsigned NOT NULL default '',
  'mobile' VARCHAR(20) unsigned NOT NULL default '',
  'listorder' int(8) unsigned NOT NULL default 0,
  'status' tinyint(1) NOT NULL default 0,
  'create_time' int(11) unsigned NOT NULL default 0,
  'update_time' int(11) unsigned NOT NULL default 0,
  PRIMARY KEY('id'),
  UNIQUE KEY username('username'),
  UNIQUE KEY email('email')
)ENGINE=InnoDB AUTO_INCREMENT=1 default CHARSET=utf8;

#推荐位表
CREATE TABLE 'o2o_featured'(
  'id' int(11) unsigned NOT NULL auto_increment,
  'type' tinyint(1) NOT NULL DEFAULT 0,
  'title' VARCHAR(30) NOT NULL DEFAULT '',
  'image' VARCHAR(255) NOT NULL DEFAULT '',
  'url' VARCHAR(255) NOT NULL DEFAULT '',
  'description' VARCHAR(255) NOT NULL DEFAULT '',
  'listorder' int(8) unsigned NOT NULL default 0,
  'status' tinyint(1) NOT NULL default 0,
  'create_time' int(11) unsigned NOT NULL default 0,
  'update_time' int(11) unsigned NOT NULL default 0,
  PRIMARY KEY('id')
)ENGINE=InnoDB AUTO_INCREMENT=1 default CHARSET=utf8;
