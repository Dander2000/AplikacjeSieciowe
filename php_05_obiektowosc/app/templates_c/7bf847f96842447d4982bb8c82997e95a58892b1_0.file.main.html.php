<?php
/* Smarty version 4.2.1, created on 2022-10-27 06:34:53
  from 'C:\xampp\htdocs\AplikacjeSieciowe\php_05_obiektowosc\tpl\main.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_635a0a6d46f573_44731146',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7bf847f96842447d4982bb8c82997e95a58892b1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AplikacjeSieciowe\\php_05_obiektowosc\\tpl\\main.html',
      1 => 1666805499,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_635a0a6d46f573_44731146 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="pl">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php echo (($tmp = $_smarty_tpl->tpl_vars['page_description']->value ?? null)===null||$tmp==='' ? 'Opis domyślny' ?? null : $tmp);?>
">
	<title><?php echo (($tmp = $_smarty_tpl->tpl_vars['title']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</title>
	<link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/pure-min.css" integrity="sha384-UQiGfs9ICog+LwheBSRCt1o5cbyKIHbwjWscjemyBMT9YCUMZffs6UqUTd0hObXD" crossorigin="anonymous">
	<!-- <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/style.css"> -->
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/../css/style.css">	
</head>
<body>
	<header>
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_84536728635a0a6d46e1c3_44339039', 'header');
?>

	</header>
	<main>
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_86839659635a0a6d46e9c4_15977371', 'content');
?>

	</main>
	<footer>
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_846698923635a0a6d46efb1_06009030', 'footer');
?>

	</footer>
</body>
</html><?php }
/* {block 'header'} */
class Block_84536728635a0a6d46e1c3_44339039 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_84536728635a0a6d46e1c3_44339039',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść nagłówek ... <?php
}
}
/* {/block 'header'} */
/* {block 'content'} */
class Block_86839659635a0a6d46e9c4_15977371 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_86839659635a0a6d46e9c4_15977371',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości ... <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_846698923635a0a6d46efb1_06009030 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_846698923635a0a6d46efb1_06009030',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść stopki ... <?php
}
}
/* {/block 'footer'} */
}
