<?php /* Smarty version 3.1.27, created on 2016-03-16 21:57:22
         compiled from "C:\xampp\htdocs\game\view\templates\top\top.htm" */ ?>
<?php
/*%%SmartyHeaderCode:1448956e95832426e32_87690617%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '431589c13894c66665e18ec5be87bc1a9be8b7ee' => 
    array (
      0 => 'C:\\xampp\\htdocs\\game\\view\\templates\\top\\top.htm',
      1 => 1458132557,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1448956e95832426e32_87690617',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56e9583249d748_53035985',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56e9583249d748_53035985')) {
function content_56e9583249d748_53035985 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1448956e95832426e32_87690617';
?>
<html>
<title>Topページ</title>
<body>
	<h1>ゲームタイトル</h1>

	<form method="POST" action='/game/'　>
		ID:<input type="text" name="id"><br>
		PASS:<input type="password" name="pass"><br>
		<input type='hidden' name='mode' value='mypage'>
		<input type='hidden' name='action' value='mypage'>
		<input type="submit" value="login">
	</form>

	<a href = '?mode=top&action=newEntry'>新規登録</a>
</body>
</html><?php }
}
?>