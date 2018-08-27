/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50540
Source Host           : localhost:3306
Source Database       : myframe

Target Server Type    : MYSQL
Target Server Version : 50540
File Encoding         : 65001

Date: 2018-08-27 10:35:19
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for phome_ecms_status_change_log
-- ----------------------------
DROP TABLE IF EXISTS `phome_ecms_status_change_log`;
CREATE TABLE `phome_ecms_status_change_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data_id` int(11) NOT NULL COMMENT '数据id（客户）',
  `operator_uid` int(11) NOT NULL COMMENT '操作人id',
  `operator_name` varchar(20) NOT NULL COMMENT '操作人名称',
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '状态0未通信1暂时无法接通2不在服务区3空号4正常',
  `creattime` int(10) NOT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`),
  KEY `data_id` (`data_id`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='客户联系状态日志表';

-- ----------------------------
-- Records of phome_ecms_status_change_log
-- ----------------------------

-- ----------------------------
-- Table structure for p_access
-- ----------------------------
DROP TABLE IF EXISTS `p_access`;
CREATE TABLE `p_access` (
  `role_id` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '角色id',
  `node_id` smallint(6) unsigned NOT NULL DEFAULT '0' COMMENT '节点id',
  KEY `groupId` (`role_id`),
  KEY `nodeId` (`node_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='权限表-角色节点表(权限组)';

-- ----------------------------
-- Records of p_access
-- ----------------------------
INSERT INTO `p_access` VALUES ('1', '1');
INSERT INTO `p_access` VALUES ('2', '1');
INSERT INTO `p_access` VALUES ('2', '2');
INSERT INTO `p_access` VALUES ('2', '3');
INSERT INTO `p_access` VALUES ('2', '4');

-- ----------------------------
-- Table structure for p_node
-- ----------------------------
DROP TABLE IF EXISTS `p_node`;
CREATE TABLE `p_node` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '节点id',
  `name` varchar(20) NOT NULL DEFAULT '' COMMENT '节点的名称（英文）',
  `title` varchar(15) NOT NULL DEFAULT '' COMMENT '节点的中文名称',
  `type` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '父节点的id',
  `pid` int(11) NOT NULL DEFAULT '0' COMMENT '方法所属控制器 0位控制器',
  `sort` int(11) unsigned NOT NULL DEFAULT '50' COMMENT '排序的权重',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '状态：0禁用，1正常',
  `class` varchar(50) DEFAULT NULL COMMENT '页面的id值',
  PRIMARY KEY (`id`),
  KEY `pid` (`type`),
  KEY `status` (`status`),
  KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COMMENT='节点表';

-- ----------------------------
-- Records of p_node
-- ----------------------------
INSERT INTO `p_node` VALUES ('1', 'Index', '系统管理', '0', '0', '50', '1', 'nav-dashboard');
INSERT INTO `p_node` VALUES ('3', 'index', 'index方法', '1', '2', '50', '1', 'nav-uiKit');
INSERT INTO `p_node` VALUES ('4', 'index', '用户管理', '1', '1', '50', '1', 'nav-dashboard');
INSERT INTO `p_node` VALUES ('2', 'Admin', 'admin控制器', '0', '0', '50', '1', 'nav-uiKit');
INSERT INTO `p_node` VALUES ('11', 'test', 'test方法', '1', '2', '50', '1', 'nav-dashboard');

-- ----------------------------
-- Table structure for p_role
-- ----------------------------
DROP TABLE IF EXISTS `p_role`;
CREATE TABLE `p_role` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT COMMENT '角色id',
  `name` varchar(20) NOT NULL DEFAULT '' COMMENT '角色名称',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '状态：0禁用，1正常',
  `remark` varchar(255) NOT NULL DEFAULT '' COMMENT '备注',
  PRIMARY KEY (`id`),
  KEY `status` (`status`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='角色表（用户组）';

-- ----------------------------
-- Records of p_role
-- ----------------------------
INSERT INTO `p_role` VALUES ('1', '超级管理员', '1', '');
INSERT INTO `p_role` VALUES ('2', '用户组', '1', '');

-- ----------------------------
-- Table structure for p_role_user
-- ----------------------------
DROP TABLE IF EXISTS `p_role_user`;
CREATE TABLE `p_role_user` (
  `role_id` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '角色id',
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0' COMMENT '用户id',
  KEY `group_id` (`role_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='角色用户表（用户组详细数据）';

-- ----------------------------
-- Records of p_role_user
-- ----------------------------
INSERT INTO `p_role_user` VALUES ('2', '4');
INSERT INTO `p_role_user` VALUES ('1', '1');
INSERT INTO `p_role_user` VALUES ('2', '3');
INSERT INTO `p_role_user` VALUES ('2', '2');

-- ----------------------------
-- Table structure for p_user
-- ----------------------------
DROP TABLE IF EXISTS `p_user`;
CREATE TABLE `p_user` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '用户id',
  `username` varchar(20) NOT NULL DEFAULT '' COMMENT '用户名',
  `password` char(32) NOT NULL DEFAULT '' COMMENT '密码',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '状态：0禁用，1正常',
  `login_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '最近一次登录时间',
  `login_ip` int(11) NOT NULL DEFAULT '0' COMMENT '最近一次登录ip',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='用户表';

-- ----------------------------
-- Records of p_user
-- ----------------------------
INSERT INTO `p_user` VALUES ('1', 'admin', 'e10adc3949ba59abbe56e057f20f883e', '1', '0', '0');
INSERT INTO `p_user` VALUES ('2', 'user01', 'e10adc3949ba59abbe56e057f20f883e', '1', '1497234282', '2130706433');
INSERT INTO `p_user` VALUES ('3', 'user02', 'e10adc3949ba59abbe56e057f20f883e', '1', '0', '0');
INSERT INTO `p_user` VALUES ('4', 'user03', 'e10adc3949ba59abbe56e057f20f883e', '1', '1497233938', '2130706433');
