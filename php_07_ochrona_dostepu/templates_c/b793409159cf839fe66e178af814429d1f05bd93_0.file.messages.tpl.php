<?php
/* Smarty version 3.1.30, created on 2022-10-27 21:40:05
  from "C:\xampp\htdocs\AplikacjeSieciowe\php_07_kontroler_glowny\app\views\tpl\messages.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_635ade95bcc485_98944297',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b793409159cf839fe66e178af814429d1f05bd93' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AplikacjeSieciowe\\php_07_kontroler_glowny\\app\\views\\tpl\\messages.tpl',
      1 => 1666897939,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_635ade95bcc485_98944297 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
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
    </div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
    <div class="result">
        <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfos(), 'inf');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
?>
                <li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </ul>
    </div>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['res']->value->result)) {?>

    <div class="result">
        Rata kredytu: <?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>
 PLN
    </div>

<?php }
}
}
