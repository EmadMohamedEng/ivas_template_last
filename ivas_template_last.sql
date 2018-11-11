/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50626
Source Host           : localhost:3306
Source Database       : ivas_template_last

Target Server Type    : MYSQL
Target Server Version : 50626
File Encoding         : 65001

Date: 2018-04-29 20:40:00
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `delete_all_flags`
-- ----------------------------
DROP TABLE IF EXISTS `delete_all_flags`;
CREATE TABLE `delete_all_flags` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `route_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `delete_all_flags_route_id_foreign` (`route_id`),
  CONSTRAINT `delete_all_flags_route_id_foreign` FOREIGN KEY (`route_id`) REFERENCES `routes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of delete_all_flags
-- ----------------------------

-- ----------------------------
-- Table structure for `languages`
-- ----------------------------
DROP TABLE IF EXISTS `languages`;
CREATE TABLE `languages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `short_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rtl` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of languages
-- ----------------------------

-- ----------------------------
-- Table structure for `migrations`
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('2014_10_12_100000_create_password_resets_table', '1');
INSERT INTO `migrations` VALUES ('2015_10_31_162633_scaffoldinterfaces', '1');
INSERT INTO `migrations` VALUES ('2017_08_01_141233_create_permission_tables', '1');
INSERT INTO `migrations` VALUES ('2017_09_20_131500_create_first_user', '1');
INSERT INTO `migrations` VALUES ('2017_10_16_084836_create_settings_table', '1');
INSERT INTO `migrations` VALUES ('2017_10_25_094626_create_translatable_table', '1');
INSERT INTO `migrations` VALUES ('2017_10_25_095102_create_language_table', '1');
INSERT INTO `migrations` VALUES ('2017_10_25_095200_create_translate_body', '1');
INSERT INTO `migrations` VALUES ('2017_10_25_113637_add_short_code_and_rtl_to_language', '1');
INSERT INTO `migrations` VALUES ('2017_10_31_091358_create_static_translations_table', '1');
INSERT INTO `migrations` VALUES ('2017_10_31_091835_create_static_body_table', '1');
INSERT INTO `migrations` VALUES ('2017_11_09_081714_create_role_route_table', '1');
INSERT INTO `migrations` VALUES ('2017_11_09_081714_create_routes_table', '1');
INSERT INTO `migrations` VALUES ('2017_11_09_081715_add_foreign_keys_to_role_route_table', '1');
INSERT INTO `migrations` VALUES ('2017_11_14_115606_isolate_controller_from_method', '1');
INSERT INTO `migrations` VALUES ('2017_11_15_092424_adding_standards_routes', '1');
INSERT INTO `migrations` VALUES ('2017_12_19_092552_add_type_field_to_settings', '1');
INSERT INTO `migrations` VALUES ('2018_01_04_081336_adding_priorty_field_to_role_table', '1');
INSERT INTO `migrations` VALUES ('2018_01_08_074915_phone_col_null', '1');
INSERT INTO `migrations` VALUES ('2018_01_28_075912_add_type_table_to_template', '2');
INSERT INTO `migrations` VALUES ('2018_01_28_080917_rename_type_coloumn_in_settings', '2');
INSERT INTO `migrations` VALUES ('2018_01_28_081429_add_foriegn_keys_to_settings_table', '3');
INSERT INTO `migrations` VALUES ('2018_01_28_090855_add_order_coloumn_to_settings_table', '3');
INSERT INTO `migrations` VALUES ('2018_02_04_080901_create_delete_all_table', '4');

-- ----------------------------
-- Table structure for `password_resets`
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for `permissions`
-- ----------------------------
DROP TABLE IF EXISTS `permissions`;
CREATE TABLE `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_unique` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of permissions
-- ----------------------------

-- ----------------------------
-- Table structure for `relations`
-- ----------------------------
DROP TABLE IF EXISTS `relations`;
CREATE TABLE `relations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `scaffoldinterface_id` int(10) unsigned NOT NULL,
  `to` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `having` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `relations_scaffoldinterface_id_foreign` (`scaffoldinterface_id`),
  CONSTRAINT `relations_scaffoldinterface_id_foreign` FOREIGN KEY (`scaffoldinterface_id`) REFERENCES `scaffoldinterfaces` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of relations
-- ----------------------------

-- ----------------------------
-- Table structure for `roles`
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `role_priority` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO `roles` VALUES ('1', 'super_admin', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '3');
INSERT INTO `roles` VALUES ('6', 'admin', '2018-01-08 14:40:19', '2018-01-08 14:40:19', '2');

-- ----------------------------
-- Table structure for `role_has_permissions`
-- ----------------------------
DROP TABLE IF EXISTS `role_has_permissions`;
CREATE TABLE `role_has_permissions` (
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of role_has_permissions
-- ----------------------------

-- ----------------------------
-- Table structure for `role_route`
-- ----------------------------
DROP TABLE IF EXISTS `role_route`;
CREATE TABLE `role_route` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(10) unsigned NOT NULL,
  `route_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `role_id_2` (`role_id`),
  KEY `route_id_2` (`route_id`),
  CONSTRAINT `role_route_ibfk_1` FOREIGN KEY (`route_id`) REFERENCES `routes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `role_route_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=243 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of role_route
-- ----------------------------
INSERT INTO `role_route` VALUES ('1', '1', '59', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `role_route` VALUES ('2', '1', '60', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `role_route` VALUES ('3', '1', '61', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `role_route` VALUES ('4', '1', '62', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `role_route` VALUES ('5', '1', '63', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `role_route` VALUES ('6', '1', '64', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `role_route` VALUES ('7', '1', '15', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `role_route` VALUES ('8', '1', '16', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `role_route` VALUES ('9', '1', '20', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `role_route` VALUES ('10', '1', '18', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `role_route` VALUES ('11', '1', '19', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `role_route` VALUES ('12', '1', '17', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `role_route` VALUES ('13', '1', '65', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `role_route` VALUES ('32', '1', '44', '2018-01-28 09:25:26', '2018-01-28 09:25:26');
INSERT INTO `role_route` VALUES ('33', '1', '43', '2018-01-28 09:25:29', '2018-01-28 09:25:29');
INSERT INTO `role_route` VALUES ('34', '1', '36', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `role_route` VALUES ('35', '1', '37', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `role_route` VALUES ('36', '1', '38', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `role_route` VALUES ('37', '1', '39', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `role_route` VALUES ('38', '1', '29', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `role_route` VALUES ('39', '1', '28', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `role_route` VALUES ('72', '1', '30', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `role_route` VALUES ('73', '1', '31', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `role_route` VALUES ('74', '1', '32', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `role_route` VALUES ('75', '1', '34', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `role_route` VALUES ('76', '1', '35', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `role_route` VALUES ('77', '1', '33', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `role_route` VALUES ('78', '1', '58', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `role_route` VALUES ('79', '1', '14', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `role_route` VALUES ('80', '1', '26', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `role_route` VALUES ('81', '1', '27', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `role_route` VALUES ('82', '1', '40', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `role_route` VALUES ('83', '1', '66', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `role_route` VALUES ('84', '1', '45', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `role_route` VALUES ('85', '1', '41', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `role_route` VALUES ('86', '1', '57', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `role_route` VALUES ('87', '1', '42', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `role_route` VALUES ('210', '1', '1', '2018-02-05 15:04:04', '2018-02-05 15:04:04');
INSERT INTO `role_route` VALUES ('211', '6', '1', '2018-02-05 15:04:04', '2018-02-05 15:04:04');
INSERT INTO `role_route` VALUES ('212', '1', '2', '2018-02-05 15:04:04', '2018-02-05 15:04:04');
INSERT INTO `role_route` VALUES ('213', '6', '2', '2018-02-05 15:04:04', '2018-02-05 15:04:04');
INSERT INTO `role_route` VALUES ('214', '1', '3', '2018-02-05 15:04:04', '2018-02-05 15:04:04');
INSERT INTO `role_route` VALUES ('215', '6', '3', '2018-02-05 15:04:04', '2018-02-05 15:04:04');
INSERT INTO `role_route` VALUES ('216', '1', '11', '2018-02-05 15:04:04', '2018-02-05 15:04:04');
INSERT INTO `role_route` VALUES ('217', '1', '12', '2018-02-05 15:04:04', '2018-02-05 15:04:04');
INSERT INTO `role_route` VALUES ('218', '1', '10', '2018-02-05 15:04:04', '2018-02-05 15:04:04');
INSERT INTO `role_route` VALUES ('219', '1', '6', '2018-02-05 15:04:04', '2018-02-05 15:04:04');
INSERT INTO `role_route` VALUES ('220', '1', '7', '2018-02-05 15:04:04', '2018-02-05 15:04:04');
INSERT INTO `role_route` VALUES ('221', '1', '8', '2018-02-05 15:04:04', '2018-02-05 15:04:04');
INSERT INTO `role_route` VALUES ('222', '1', '9', '2018-02-05 15:04:05', '2018-02-05 15:04:05');
INSERT INTO `role_route` VALUES ('233', '1', '5', '2018-04-23 12:25:52', '2018-04-23 12:25:52');
INSERT INTO `role_route` VALUES ('234', '1', '21', '2018-04-23 12:25:52', '2018-04-23 12:25:52');
INSERT INTO `role_route` VALUES ('235', '1', '22', '2018-04-23 12:25:52', '2018-04-23 12:25:52');
INSERT INTO `role_route` VALUES ('236', '1', '23', '2018-04-23 12:25:52', '2018-04-23 12:25:52');
INSERT INTO `role_route` VALUES ('237', '1', '24', '2018-04-23 12:25:53', '2018-04-23 12:25:53');
INSERT INTO `role_route` VALUES ('238', '1', '25', '2018-04-23 12:25:53', '2018-04-23 12:25:53');
INSERT INTO `role_route` VALUES ('239', '1', '69', '2018-04-23 12:25:53', '2018-04-23 12:25:53');
INSERT INTO `role_route` VALUES ('240', '6', '69', '2018-04-23 12:25:53', '2018-04-23 12:25:53');
INSERT INTO `role_route` VALUES ('241', '1', '70', '2018-04-23 12:25:53', '2018-04-23 12:25:53');
INSERT INTO `role_route` VALUES ('242', '6', '70', '2018-04-23 12:25:53', '2018-04-23 12:25:53');

-- ----------------------------
-- Table structure for `routes`
-- ----------------------------
DROP TABLE IF EXISTS `routes`;
CREATE TABLE `routes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `method` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `route` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `controller_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `function_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of routes
-- ----------------------------
INSERT INTO `routes` VALUES ('1', 'get', 'users', 'UserController', '2017-11-09 06:13:14', '2017-11-09 06:13:14', 'index');
INSERT INTO `routes` VALUES ('2', 'get', 'users/new', 'UserController', '0000-00-00 00:00:00', '2018-01-28 09:27:15', 'create');
INSERT INTO `routes` VALUES ('3', 'post', 'users', 'UserController', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'store');
INSERT INTO `routes` VALUES ('4', 'get', 'dashboard', 'DashboardController', '0000-00-00 00:00:00', '2017-11-15 08:28:55', ' index');
INSERT INTO `routes` VALUES ('5', 'get', '/', 'DashboardController', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'index');
INSERT INTO `routes` VALUES ('6', 'get', 'user_profile', 'UserController', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'profile');
INSERT INTO `routes` VALUES ('7', 'post', 'user_profile/updatepassword', 'UserController', '0000-00-00 00:00:00', '2017-11-14 12:29:01', 'UpdatePassword');
INSERT INTO `routes` VALUES ('8', 'post', 'user_profile/updateprofilepic', 'UserController', '0000-00-00 00:00:00', '2017-11-14 12:29:08', 'UpdateProfilePicture');
INSERT INTO `routes` VALUES ('9', 'post', 'user_profile/updateuserdata', 'UserController', '0000-00-00 00:00:00', '2017-11-14 12:29:19', 'UpdateNameAndEmail');
INSERT INTO `routes` VALUES ('10', 'get', 'users/{id}/delete', 'UserController', '0000-00-00 00:00:00', '2017-11-15 08:34:32', 'destroy');
INSERT INTO `routes` VALUES ('11', 'get', 'users/{id}/edit', 'UserController', '0000-00-00 00:00:00', '2017-11-14 12:29:40', 'edit');
INSERT INTO `routes` VALUES ('12', 'post', 'users/{id}/update', 'UserController', '0000-00-00 00:00:00', '2017-11-14 12:29:49', 'update');
INSERT INTO `routes` VALUES ('14', 'get', 'static_translation', 'StaticTranslationController', '0000-00-00 00:00:00', '2017-11-14 12:29:57', 'index');
INSERT INTO `routes` VALUES ('15', 'get', 'setting', 'SettingController', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'index');
INSERT INTO `routes` VALUES ('16', 'get', 'setting/new', 'SettingController', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'create');
INSERT INTO `routes` VALUES ('17', 'get', 'setting/{id}/delete', 'SettingController', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'destroy');
INSERT INTO `routes` VALUES ('18', 'get', 'setting/{id}/edit', 'SettingController', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'edit');
INSERT INTO `routes` VALUES ('19', 'post', 'setting/{id}/update', 'SettingController', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'update');
INSERT INTO `routes` VALUES ('20', 'post', 'setting', 'SettingController', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'store');
INSERT INTO `routes` VALUES ('21', 'get', 'file_manager', 'DashboardController', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'file_manager');
INSERT INTO `routes` VALUES ('22', 'get', 'upload_items', 'DashboardController', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'multi_upload');
INSERT INTO `routes` VALUES ('23', 'post', 'save_items', 'DashboardController', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'save_uploaded');
INSERT INTO `routes` VALUES ('24', 'get', 'upload_resize', 'DashboardController', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'upload_resize');
INSERT INTO `routes` VALUES ('25', 'post', 'save_image', 'DashboardController', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'save_image');
INSERT INTO `routes` VALUES ('26', 'post', 'static_translation/{id}/update', 'StaticTranslationController', '0000-00-00 00:00:00', '2017-11-12 12:19:46', 'update');
INSERT INTO `routes` VALUES ('27', 'get', 'static_translation/{id}/delete', 'StaticTranslationController', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'destroy');
INSERT INTO `routes` VALUES ('28', 'get', 'language/{id}/delete', 'LanguageController', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'destroy');
INSERT INTO `routes` VALUES ('29', 'post', 'language/{id}/update', 'LanguageController', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'update');
INSERT INTO `routes` VALUES ('30', 'get', 'roles', 'RoleController', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'index');
INSERT INTO `routes` VALUES ('31', 'get', 'roles/new', 'RoleController', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'create');
INSERT INTO `routes` VALUES ('32', 'post', 'roles', 'RoleController', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'store');
INSERT INTO `routes` VALUES ('33', 'get', 'roles/{id}/delete', 'RoleController', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'destroy');
INSERT INTO `routes` VALUES ('34', 'get', 'roles/{id}/edit', 'RoleController', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'edit');
INSERT INTO `routes` VALUES ('35', 'post', 'roles/{id}/update', 'RoleController', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'update');
INSERT INTO `routes` VALUES ('36', 'get', 'language', 'LanguageController', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'index');
INSERT INTO `routes` VALUES ('37', 'get', 'language/create', 'LanguageController', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'create');
INSERT INTO `routes` VALUES ('38', 'post', 'language', 'LanguageController', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'store');
INSERT INTO `routes` VALUES ('39', 'get', 'language/{id}/edit', 'LanguageController', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'edit');
INSERT INTO `routes` VALUES ('40', 'get', 'routes', 'RouteController', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'index');
INSERT INTO `routes` VALUES ('41', 'post', 'routes', 'RouteController', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'store');
INSERT INTO `routes` VALUES ('42', 'get', 'routes/{id}/edit', 'RouteController', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'edit');
INSERT INTO `routes` VALUES ('43', 'get', 'routes/{id}/update', 'RouteController', '0000-00-00 00:00:00', '2018-01-28 09:25:29', 'update');
INSERT INTO `routes` VALUES ('44', 'get', 'routes/{id}/delete', 'RouteController', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'destroy');
INSERT INTO `routes` VALUES ('45', 'get', 'routes/create', 'RouteController', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'create');
INSERT INTO `routes` VALUES ('57', 'get', 'routes/index_v2', 'RouteController', '2017-11-12 13:45:15', '2017-11-12 14:04:53', 'index_v2');
INSERT INTO `routes` VALUES ('58', 'get', 'roles/{id}/view_access', 'RoleController', '2017-11-14 10:56:14', '2017-11-15 08:14:14', 'view_access');
INSERT INTO `routes` VALUES ('59', 'get', 'types/index', 'TypeController', '2018-01-28 08:25:37', '2018-01-28 08:25:37', 'index');
INSERT INTO `routes` VALUES ('60', 'get', 'types/create', 'TypeController', '2018-01-28 08:25:37', '2018-01-28 08:25:37', 'create');
INSERT INTO `routes` VALUES ('61', 'post', 'types', 'TypeController', '2018-01-28 08:25:38', '2018-01-28 08:25:38', 'store');
INSERT INTO `routes` VALUES ('62', 'get', 'types/{id}/edit', 'TypeController', '2018-01-28 08:25:38', '2018-01-28 08:25:38', 'edit');
INSERT INTO `routes` VALUES ('63', 'patch', 'types/{id}', 'TypeController', '2018-01-28 08:25:38', '2018-01-28 08:25:38', 'update');
INSERT INTO `routes` VALUES ('64', 'get', 'types/{id}/delete', 'TypeController', '2018-01-28 08:25:38', '2018-01-28 08:25:38', 'destroy');
INSERT INTO `routes` VALUES ('65', 'post', 'sortabledatatable', 'SettingController', '2018-01-28 09:22:00', '2018-01-28 09:22:00', 'updateOrder');
INSERT INTO `routes` VALUES ('66', 'get', 'buildroutes', 'RouteController', '2018-01-28 09:23:55', '2018-01-28 09:23:55', 'buildroutes');
INSERT INTO `routes` VALUES ('69', 'get', 'delete_all', 'DashboardController', '2018-02-04 12:01:23', '2018-02-04 12:01:23', 'delete_all_index');
INSERT INTO `routes` VALUES ('70', 'post', 'delete_all', 'DashboardController', '2018-02-04 12:01:23', '2018-02-04 12:01:23', 'delete_all_store');
INSERT INTO `routes` VALUES ('71', 'get', 'upload_resize_v2', 'DashboardController', '2018-02-04 13:02:56', '2018-02-04 13:02:56', 'upload_resize_v2');

-- ----------------------------
-- Table structure for `scaffoldinterfaces`
-- ----------------------------
DROP TABLE IF EXISTS `scaffoldinterfaces`;
CREATE TABLE `scaffoldinterfaces` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `package` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `model` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `controller` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `views` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tablename` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of scaffoldinterfaces
-- ----------------------------

-- ----------------------------
-- Table structure for `settings`
-- ----------------------------
DROP TABLE IF EXISTS `settings`;
CREATE TABLE `settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `type_id` int(11) NOT NULL,
  `order` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `type_ibfk_1` (`type_id`),
  CONSTRAINT `type_ibfk_1` FOREIGN KEY (`type_id`) REFERENCES `types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of settings
-- ----------------------------
INSERT INTO `settings` VALUES ('25', 'uploadAllow', 'all', '2018-02-04 12:04:09', '2018-02-04 12:04:09', '6', '0');

-- ----------------------------
-- Table structure for `static_bodies`
-- ----------------------------
DROP TABLE IF EXISTS `static_bodies`;
CREATE TABLE `static_bodies` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `language_id` int(10) unsigned NOT NULL,
  `static_translation_id` int(10) unsigned NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `static_bodies_language_id_foreign` (`language_id`),
  KEY `static_bodies_static_translation_id_foreign` (`static_translation_id`),
  CONSTRAINT `static_bodies_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE,
  CONSTRAINT `static_bodies_static_translation_id_foreign` FOREIGN KEY (`static_translation_id`) REFERENCES `static_translations` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of static_bodies
-- ----------------------------

-- ----------------------------
-- Table structure for `static_translations`
-- ----------------------------
DROP TABLE IF EXISTS `static_translations`;
CREATE TABLE `static_translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `key_word` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of static_translations
-- ----------------------------

-- ----------------------------
-- Table structure for `tans_bodies`
-- ----------------------------
DROP TABLE IF EXISTS `tans_bodies`;
CREATE TABLE `tans_bodies` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `language_id` int(10) unsigned NOT NULL,
  `translatable_id` int(10) unsigned NOT NULL,
  `body` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `tans_bodies_language_id_foreign` (`language_id`),
  KEY `tans_bodies_translatable_id_foreign` (`translatable_id`),
  CONSTRAINT `tans_bodies_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE,
  CONSTRAINT `tans_bodies_translatable_id_foreign` FOREIGN KEY (`translatable_id`) REFERENCES `translatables` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tans_bodies
-- ----------------------------

-- ----------------------------
-- Table structure for `translatables`
-- ----------------------------
DROP TABLE IF EXISTS `translatables`;
CREATE TABLE `translatables` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `table_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `record_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `column_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of translatables
-- ----------------------------

-- ----------------------------
-- Table structure for `types`
-- ----------------------------
DROP TABLE IF EXISTS `types`;
CREATE TABLE `types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of types
-- ----------------------------
INSERT INTO `types` VALUES ('1', 'Advanced Editor', '2018-01-28 08:30:05', '2018-01-28 08:30:05');
INSERT INTO `types` VALUES ('2', 'Normal Editor', '2018-01-28 08:30:14', '2018-01-28 08:30:14');
INSERT INTO `types` VALUES ('3', 'Image', '2018-01-28 08:30:29', '2018-01-28 08:30:29');
INSERT INTO `types` VALUES ('4', 'Video', '2018-01-28 08:30:39', '2018-01-28 08:30:39');
INSERT INTO `types` VALUES ('5', 'Audio', '2018-01-28 08:30:47', '2018-01-28 08:30:47');
INSERT INTO `types` VALUES ('6', 'File Manager Uploads Extensions', '2018-01-28 08:30:57', '2018-01-28 08:30:57');

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_phone_unique` (`phone`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'super admin', 'super_admin@ivas.com', '$2y$10$u2evAW530miwgUb2jcXkTuqIGswxnSQ3DSmX1Ji5rtO3Tx.MtVcX2', '', '01234567890', null, '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `users` VALUES ('2', 'test', 'test@yahoo.com', '$2y$10$yxbIH/pG9gXlMn4N3CegF.OgpaD20pJLeYOqU8ij7rGHsnJs0l6ZK', '', null, null, '2018-04-23 12:25:38', '2018-04-23 12:25:38');

-- ----------------------------
-- Table structure for `user_has_permissions`
-- ----------------------------
DROP TABLE IF EXISTS `user_has_permissions`;
CREATE TABLE `user_has_permissions` (
  `user_id` int(10) unsigned NOT NULL,
  `permission_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`permission_id`),
  KEY `user_has_permissions_permission_id_foreign` (`permission_id`),
  CONSTRAINT `user_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `user_has_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of user_has_permissions
-- ----------------------------

-- ----------------------------
-- Table structure for `user_has_roles`
-- ----------------------------
DROP TABLE IF EXISTS `user_has_roles`;
CREATE TABLE `user_has_roles` (
  `role_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`user_id`),
  KEY `user_has_roles_user_id_foreign` (`user_id`),
  CONSTRAINT `user_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  CONSTRAINT `user_has_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of user_has_roles
-- ----------------------------
INSERT INTO `user_has_roles` VALUES ('1', '1');
INSERT INTO `user_has_roles` VALUES ('1', '2');
