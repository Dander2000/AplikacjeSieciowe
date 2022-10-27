<?php
/* Smarty version 4.2.1, created on 2022-10-27 06:18:59
  from 'C:\xampp\htdocs\AplikacjeSieciowe\php_05_obiektowosc\app\CalcView.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_635a06b30fe534_72145535',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4879e579f8a1baee651ab47d63e434ddeda6567b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AplikacjeSieciowe\\php_05_obiektowosc\\app\\CalcView.html',
      1 => 1666804966,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_635a06b30fe534_72145535 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1009725167635a06b2e26af4_11309751', 'header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2116407350635a06b2e96d31_54186093', 'nav');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_140104723635a06b2e97cf0_68100932', 'content');
?>


	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_611388320635a06b30f97c5_73800180', 'footer');
?>

<!-- 
<div class="messages">
	
		<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
	<h4>Wystąpiły błędy: </h4>
	<ol class="err">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
$_smarty_tpl->tpl_vars['err']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->do_else = false;
?>
		<li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ol>
	<?php }?>
	
		<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
	<h4>Informacje: </h4>
	<ol class="inf">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfos(), 'inf');
$_smarty_tpl->tpl_vars['inf']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
$_smarty_tpl->tpl_vars['inf']->do_else = false;
?>
	<li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ol>
<?php }?>

<?php if ((isset($_smarty_tpl->tpl_vars['res']->value->result))) {?>
<h4>Wynik</h4>
<p class="res">
	<?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>

</p>
<?php }?>

</div> -->
<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../tpl/main.html");
}
/* {block 'header'} */
class Block_1009725167635a06b2e26af4_11309751 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_1009725167635a06b2e26af4_11309751',
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
class Block_2116407350635a06b2e96d31_54186093 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'nav' => 
  array (
    0 => 'Block_2116407350635a06b2e96d31_54186093',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<nav>
	<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
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
class Block_140104723635a06b2e97cf0_68100932 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_140104723635a06b2e97cf0_68100932',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/calc.php" method="post">
	<label>Kwota kredytu:
		<input min="0" type="number" name="sum" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['form']->value->s ?? null)===null||$tmp==='' ? 0 ?? null : $tmp);?>
" style="width: 9em" />PLN
	</label><br />
	<label>Liczba lat kredytu:
		<input id="id_y" min="0" type="number" name="years" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['form']->value->y ?? null)===null||$tmp==='' ? 0 ?? null : $tmp);?>
" style="width: 6em" />
	</label><br />
	<label>Oprocentowanie:
		<input id="id_i" min="0" type="number" name="interest" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['form']->value->i ?? null)===null||$tmp==='' ? 0 ?? null : $tmp);?>
" style="width: 6em" />%
	</label><br />
	<input type="submit" value="Oblicz" style="width: 10em" />
</form>

<?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {
if (count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?>
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
class Block_611388320635a06b30f97c5_73800180 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_611388320635a06b30f97c5_73800180',
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
