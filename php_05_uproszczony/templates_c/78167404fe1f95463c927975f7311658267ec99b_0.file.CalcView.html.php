<?php
/* Smarty version 4.2.1, created on 2022-10-26 19:22:46
  from 'C:\xampp\htdocs\AplikacjeSieciowe\php_05_uproszczony\app\CalcView.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63596ce6c847c3_21093639',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '78167404fe1f95463c927975f7311658267ec99b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AplikacjeSieciowe\\php_05_uproszczony\\app\\CalcView.html',
      1 => 1666804966,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63596ce6c847c3_21093639 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_62139160463596ce6b92cf4_91555108', 'header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_186131700863596ce6b9b608_43301448', 'nav');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_98309448863596ce6b9c8d8_76341237', 'content');
?>


	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_27640775363596ce6c7d9c6_53045154', 'footer');
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
class Block_62139160463596ce6b92cf4_91555108 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_62139160463596ce6b92cf4_91555108',
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
class Block_186131700863596ce6b9b608_43301448 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'nav' => 
  array (
    0 => 'Block_186131700863596ce6b9b608_43301448',
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
class Block_98309448863596ce6b9c8d8_76341237 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_98309448863596ce6b9c8d8_76341237',
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
class Block_27640775363596ce6c7d9c6_53045154 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_27640775363596ce6c7d9c6_53045154',
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
