<?php
/* Smarty version 4.2.1, created on 2022-10-26 17:26:35
  from 'C:\xampp\htdocs\AplikacjeSieciowe\php_04_szablony_smarty\app\calc.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_635951ab4f0740_19547917',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'afb252b292d32bb13e3d7a8b4ee6948389bd30b9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AplikacjeSieciowe\\php_04_szablony_smarty\\app\\calc.html',
      1 => 1666797993,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_635951ab4f0740_19547917 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1078307096635951ab4d83e5_52989505', 'header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_204917202635951ab4dd7e8_61292104', 'nav');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1827982821635951ab4de210_96039887', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1885365113635951ab4efeb6_20620201', 'footer');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../tpl/main.html");
}
/* {block 'header'} */
class Block_1078307096635951ab4d83e5_52989505 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_1078307096635951ab4d83e5_52989505',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


	<h1><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
</h1>

<?php
}
}
/* {/block 'header'} */
/* {block 'nav'} */
class Block_204917202635951ab4dd7e8_61292104 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'nav' => 
  array (
    0 => 'Block_204917202635951ab4dd7e8_61292104',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


	<nav>
		<a href="<?php echo _APP_ROOT;?>
/app/calc.php">
			<button>
				Kalkulator kredytowy
			</button>
		</a>
	</nav>

<?php
}
}
/* {/block 'nav'} */
/* {block 'content'} */
class Block_1827982821635951ab4de210_96039887 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1827982821635951ab4de210_96039887',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


	<form action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.php" method="post">
		<label>Kwota kredytu:
			<input min="0" type="number" name="sum" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['form']->value['s'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp);?>
" style="width: 9em" />PLN
		</label><br />
		<label>Liczba lat kredytu:
			<input id="id_y" min="0" type="number" name="years" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['form']->value['y'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp);?>
" style="width: 6em" />
		</label><br />
		<label>Oprocentowanie:
			<input id="id_i" min="0" type="number" name="interest" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['form']->value['i'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp);?>
" style="width: 6em" />%
		</label><br />
		<input type="submit" value="Oblicz" style="width: 10em" />
	</form>

		<?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?>
		<?php if (count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?> 
		<div class="result err">
			<h4>Ponownie wypełnij formularz</h4>
			<img src="https://i.kym-cdn.com/photos/images/facebook/002/122/044/045.jpg" width="220px" />
			<ul>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
					<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</ul>
		<?php }?>
	<?php }?>

	<?php if ((isset($_smarty_tpl->tpl_vars['result']->value))) {?>
		<div class="result">
			Rata kredytu: <?php echo $_smarty_tpl->tpl_vars['result']->value;?>
 PLN
	<?php }?>

		</div>

<?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_1885365113635951ab4efeb6_20620201 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1885365113635951ab4efeb6_20620201',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


	<h5>
		<?php echo $_smarty_tpl->tpl_vars['footer']->value;?>

	</h5>

<?php
}
}
/* {/block 'footer'} */
}
