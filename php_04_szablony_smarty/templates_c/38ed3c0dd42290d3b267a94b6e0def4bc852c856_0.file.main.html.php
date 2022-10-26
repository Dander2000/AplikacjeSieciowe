<?php
/* Smarty version 4.2.1, created on 2022-10-26 19:18:17
  from 'C:\xampp\htdocs\AplikacjeSieciowe\php_04_szablony_smarty\tpl\main.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63596bd92047e7_49135844',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '38ed3c0dd42290d3b267a94b6e0def4bc852c856' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AplikacjeSieciowe\\php_04_szablony_smarty\\tpl\\main.html',
      1 => 1666800457,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63596bd92047e7_49135844 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="pl">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php echo (($tmp = $_smarty_tpl->tpl_vars['page_description']->value ?? null)===null||$tmp==='' ? 'Opis domyślny' ?? null : $tmp);?>
">
	<title><?php echo (($tmp = $_smarty_tpl->tpl_vars['title']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</title>
	<link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/pure-min.css" integrity="sha384-UQiGfs9ICog+LwheBSRCt1o5cbyKIHbwjWscjemyBMT9YCUMZffs6UqUTd0hObXD" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/css/style.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/../css/style.css">	
</head>
<body>
	<header>
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_79531590063596bd9202264_70327859', 'header');
?>

	</header>
	<nav>
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6675555063596bd9203333_78610059', 'nav');
?>

	</nav>
	<main>
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_129778563163596bd9203b37_02667299', 'content');
?>

	</main>
	<footer>
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_49094104763596bd9204151_81210153', 'footer');
?>

	</footer>

</body>
</html><?php }
/* {block 'header'} */
class Block_79531590063596bd9202264_70327859 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_79531590063596bd9202264_70327859',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść nagółwka ... <?php
}
}
/* {/block 'header'} */
/* {block 'nav'} */
class Block_6675555063596bd9203333_78610059 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'nav' => 
  array (
    0 => 'Block_6675555063596bd9203333_78610059',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść poola nawigacji ... <?php
}
}
/* {/block 'nav'} */
/* {block 'content'} */
class Block_129778563163596bd9203b37_02667299 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_129778563163596bd9203b37_02667299',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości ... <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_49094104763596bd9204151_81210153 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_49094104763596bd9204151_81210153',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść stopki ... <?php
}
}
/* {/block 'footer'} */
}
