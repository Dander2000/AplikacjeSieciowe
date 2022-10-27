<?php
/* Smarty version 3.1.30, created on 2022-10-27 08:01:33
  from "C:\xampp\htdocs\AplikacjeSieciowe\php_06_kontroler_glowny\tpl\main.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_635a1ebdbe7750_91728942',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a2568beb444f2b923726923b545e6664a9d35866' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AplikacjeSieciowe\\php_06_kontroler_glowny\\tpl\\main.html',
      1 => 1666849301,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_635a1ebdbe7750_91728942 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1481227605635a1ebdbe5939_03207153', 'header');
?>

		</header>
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_66336454635a1ebdbe62a6_51432429', 'nav');
?>

		<main>
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2049371148635a1ebdbe6aa7_32300259', 'content');
?>

		</main>
		<footer>
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1760341049635a1ebdbe7274_69985022', 'footer');
?>

		</footer>
	</body>

</html><?php }
/* {block 'header'} */
class Block_1481227605635a1ebdbe5939_03207153 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść nagłówek ... <?php
}
}
/* {/block 'header'} */
/* {block 'nav'} */
class Block_66336454635a1ebdbe62a6_51432429 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść nawigacji ... <?php
}
}
/* {/block 'nav'} */
/* {block 'content'} */
class Block_2049371148635a1ebdbe6aa7_32300259 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości ... <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_1760341049635a1ebdbe7274_69985022 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść stopki ... <?php
}
}
/* {/block 'footer'} */
}
