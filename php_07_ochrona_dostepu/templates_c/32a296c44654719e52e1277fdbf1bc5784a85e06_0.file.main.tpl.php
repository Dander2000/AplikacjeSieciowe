<?php
/* Smarty version 3.1.30, created on 2022-10-27 18:58:49
  from "C:\xampp\htdocs\AplikacjeSieciowe\php_06_kontroler_glowny\app\views\tpl\main.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_635ab8c972cd31_59942919',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32a296c44654719e52e1277fdbf1bc5784a85e06' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AplikacjeSieciowe\\php_06_kontroler_glowny\\app\\views\\tpl\\main.tpl',
      1 => 1666849301,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_635ab8c972cd31_59942919 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1790575577635ab8c972a386_01648405', 'header');
?>

		</header>
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_525886549635ab8c972adc8_76200399', 'nav');
?>

		<main>
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1200211522635ab8c972b676_65840604', 'content');
?>

		</main>
		<footer>
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_789448694635ab8c972c537_14211211', 'footer');
?>

		</footer>
	</body>

</html><?php }
/* {block 'header'} */
class Block_1790575577635ab8c972a386_01648405 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść nagłówek ... <?php
}
}
/* {/block 'header'} */
/* {block 'nav'} */
class Block_525886549635ab8c972adc8_76200399 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść nawigacji ... <?php
}
}
/* {/block 'nav'} */
/* {block 'content'} */
class Block_1200211522635ab8c972b676_65840604 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości ... <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_789448694635ab8c972c537_14211211 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść stopki ... <?php
}
}
/* {/block 'footer'} */
}
