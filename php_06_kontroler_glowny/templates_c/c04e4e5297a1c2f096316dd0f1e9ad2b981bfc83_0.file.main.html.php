<?php
/* Smarty version 3.1.30, created on 2022-10-27 17:29:57
  from "C:\xampp\htdocs\AplikacjeSieciowe\php_06_kontroler_glowny\app\views\tpl\main.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_635aa3f55742e2_22694377',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c04e4e5297a1c2f096316dd0f1e9ad2b981bfc83' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AplikacjeSieciowe\\php_06_kontroler_glowny\\app\\views\\tpl\\main.html',
      1 => 1666849301,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_635aa3f55742e2_22694377 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="pl">

	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_description']->value)===null||$tmp==='' ? 'Opis domyślny' : $tmp);?>
">
		<title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['title']->value)===null||$tmp==='' ? "Tytuł domyślny" : $tmp);?>
</title>
		<link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/pure-min.css"
			integrity="sha384-UQiGfs9ICog+LwheBSRCt1o5cbyKIHbwjWscjemyBMT9YCUMZffs6UqUTd0hObXD" crossorigin="anonymous">
		<!-- <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/style.css"> -->
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/../css/style.css">
	</head>

	<body>
		<header>
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_974886129635aa3f5550449_96537356', 'header');
?>

		</header>
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1747162343635aa3f55514a6_87380324', 'nav');
?>

		<main>
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1712049553635aa3f5573214_56733103', 'content');
?>

		</main>
		<footer>
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1597362759635aa3f5573d66_88980465', 'footer');
?>

		</footer>
	</body>

</html><?php }
/* {block 'header'} */
class Block_974886129635aa3f5550449_96537356 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść nagłówek ... <?php
}
}
/* {/block 'header'} */
/* {block 'nav'} */
class Block_1747162343635aa3f55514a6_87380324 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść nawigacji ... <?php
}
}
/* {/block 'nav'} */
/* {block 'content'} */
class Block_1712049553635aa3f5573214_56733103 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości ... <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_1597362759635aa3f5573d66_88980465 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść stopki ... <?php
}
}
/* {/block 'footer'} */
}
