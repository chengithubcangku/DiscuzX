<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_admincp_login.php 27449 2012-02-01 05:32:35Z zhangguosheng $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'admincp_title' => '<span>Discuz!</span>管理中心',
	'login_title' => '登录管理中心',
	'login_username' => '用户名',
	'login_password' => '密码',
	'login_dk_light_mode' => '亮色模式',
	'login_dk_by_system' => '跟随系统',
	'login_dk_normal_mode' => '正常模式',
	'login_dk_dark_mode' => '夜间模式',

	'submit' => '提交',
	'forcesecques' => '必填项',
	'security_question' => '安全提问',
	'security_answer' => '回答',
	'security_question_0' => '无安全提问',
	'security_question_1' => '母亲的名字',
	'security_question_2' => '爷爷的名字',
	'security_question_3' => '父亲出生的城市',
	'security_question_4' => '您其中一位老师的名字',
	'security_question_5' => '您个人计算机的型号',
	'security_question_6' => '您最喜欢的餐馆名称',
	'security_question_7' => '驾驶执照最后四位数字',

	'login_tips' => 'Discuz! 是一款以社区为基础的专业建站平台，帮助网站实现一站式服务。',
	'login_nosecques' => '您还没有使用安全登录，请在个人中心设置您的安全提问后，再访问管理中心。您可以 <a href="forum.php?mod=memcp&action=profile&typeid=1" target="_blank">点击这里</a> 进入安全提问的设置。',
	'copyright' => '&copy; 2001-'.date('Y').' <a href="https://code.dismall.com/" target="_blank" rel="noreferrer">Discuz! Team</a>.',

	'login_cp_guest' => '<h1>您尚未登录网站</h1><a href="member.php?mod=logging&action=login" class="btn">登录</a><p>站长需要强制登录时，修改 config/config_global.php 可关闭此功能。</p>',
	'login_cplock' => '您的管理面板已经锁定！<br>请在<b> {ltime} </b>秒以后重新访问管理中心。',
	'login_user_lock' => '由于您的登录密码错误次数过多，本次登录请求已经被拒绝。请 15 分钟后重新尝试。',
	'login_cp_noaccess' => '<b>管理中心(或此项操作)尚未对您开放</b><br><br>您的此次操作已经记录，请勿非法尝试',
	'login_ip_noaccess' => '<a href="https://www.dismall.com/thread-17514-1-1.html" target="_blank" rel="noreferrer">IP变动可能导致登录失败，查看解决办法</a>',
	'noaccess' => '后台管理权限(或此项操作)尚未对您开放，请联系站点管理员',


);

?>