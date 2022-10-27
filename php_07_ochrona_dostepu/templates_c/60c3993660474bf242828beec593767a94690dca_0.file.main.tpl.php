<?php
/* Smarty version 3.1.30, created on 2022-10-27 21:40:05
  from "C:\xampp\htdocs\AplikacjeSieciowe\php_07_kontroler_glowny\app\views\tpl\main.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_635ade95a7e756_51137591',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '60c3993660474bf242828beec593767a94690dca' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AplikacjeSieciowe\\php_07_kontroler_glowny\\app\\views\\tpl\\main.tpl',
      1 => 1666899162,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_635ade95a7e756_51137591 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_739802847635ade95a7c859_86300146', 'header');
?>

		</header>
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_612446181635ade95a7d1f9_16542364', 'nav');
?>

		<main>
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_849023419635ade95a7db24_27630699', 'content');
?>

		</main>
		<footer>
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_498929450635ade95a7e2e8_20361069', 'footer');
?>

		</footer>
	</body>

</html><?php }
/* {block 'header'} */
class Block_739802847635ade95a7c859_86300146 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść nagłówek ... <?php
}
}
/* {/block 'header'} */
/* {block 'nav'} */
class Block_612446181635ade95a7d1f9_16542364 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'nav'} */
/* {block 'content'} */
class Block_849023419635ade95a7db24_27630699 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości ... <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_498929450635ade95a7e2e8_20361069 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
}
