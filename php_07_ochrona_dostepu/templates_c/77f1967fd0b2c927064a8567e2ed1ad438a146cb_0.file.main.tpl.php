<?php
/* Smarty version 3.1.30, created on 2022-10-27 22:35:03
  from "C:\xampp\htdocs\AplikacjeSieciowe\php_07_ochrona_dostepu\app\views\tpl\main.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_635aeb774691a7_01275045',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77f1967fd0b2c927064a8567e2ed1ad438a146cb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AplikacjeSieciowe\\php_07_ochrona_dostepu\\app\\views\\tpl\\main.tpl',
      1 => 1666899162,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_635aeb774691a7_01275045 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_477450766635aeb77465b59_91567776', 'header');
?>

		</header>
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_526468074635aeb77466539_58237315', 'nav');
?>

		<main>
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_148106530635aeb774681f6_20196628', 'content');
?>

		</main>
		<footer>
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1551074461635aeb77468c85_66564716', 'footer');
?>

		</footer>
	</body>

</html><?php }
/* {block 'header'} */
class Block_477450766635aeb77465b59_91567776 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść nagłówek ... <?php
}
}
/* {/block 'header'} */
/* {block 'nav'} */
class Block_526468074635aeb77466539_58237315 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'nav'} */
/* {block 'content'} */
class Block_148106530635aeb774681f6_20196628 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości ... <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_1551074461635aeb77468c85_66564716 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
}
