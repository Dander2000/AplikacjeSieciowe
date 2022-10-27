<?php
/* Smarty version 3.1.30, created on 2022-10-27 16:37:07
  from "C:\xampp\htdocs\AplikacjeSieciowe\php_06_kontroler_glowny\app\views\CalcView.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_635a9793a30f49_55100370',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3a339074a43bb89587f815708cebe50b2fca7f9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AplikacjeSieciowe\\php_06_kontroler_glowny\\app\\views\\CalcView.html',
      1 => 1666881426,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./tpl/main.html' => 1,
  ),
),false)) {
function content_635a9793a30f49_55100370 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1206132413635a9793a02429_19219237', 'header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_547203009635a9793a03684_01479845', 'nav');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2143945389635a9793a16633_78330938', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2143416868635a9793a30600_91203965', 'footer');
?>


<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:./tpl/main.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'header'} */
class Block_1206132413635a9793a02429_19219237 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


	<h1><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
</h1>

<?php
}
}
/* {/block 'header'} */
/* {block 'nav'} */
class Block_547203009635a9793a03684_01479845 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


	<nav>
		<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/ctrl.php">
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
class Block_2143945389635a9793a16633_78330938 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


	<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcCompute" method="post">
		<label>Kwota kredytu:
			<input min="0" type="number" name="sum" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['form']->value->s)===null||$tmp==='' ? 0 : $tmp);?>
" style="width: 9em" />PLN
		</label><br />
		<label>Liczba lat kredytu:
			<input id="id_y" min="0" type="number" name="years" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['form']->value->y)===null||$tmp==='' ? 0 : $tmp);?>
" style="width: 6em" />
		</label><br />
		<label>Oprocentowanie:
			<input id="id_i" min="0" type="number" name="interest" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['form']->value->i)===null||$tmp==='' ? 0 : $tmp);?>
" style="width: 6em" />%
		</label><br />
		<input type="submit" value="Oblicz" style="width: 10em" />
	</form>

	
	<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>

	<div class="result err">
		<h4>Ponownie wypełnij formularz</h4>
		<img src="https://i.kym-cdn.com/photos/images/facebook/002/122/044/045.jpg" width="220px" />
		<ul>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
?>
			<li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		</ul>

	<?php }?>

	<?php if (isset($_smarty_tpl->tpl_vars['res']->value->result)) {?>

	<div class="result">
		Rata kredytu: <?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>
 PLN

	<?php }?>

	</div>

<?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_2143416868635a9793a30600_91203965 extends Smarty_Internal_Block
{
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
