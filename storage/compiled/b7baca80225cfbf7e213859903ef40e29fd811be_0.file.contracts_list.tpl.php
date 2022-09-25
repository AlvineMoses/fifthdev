<?php
/* Smarty version 3.1.39, created on 2021-08-22 17:25:26
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/contracts_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6122c0c629d594_30606905',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7baca80225cfbf7e213859903ef40e29fd811be' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/contracts_list.tpl',
      1 => 1629667469,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6122c0c629d594_30606905 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10763185666122c0c629bcc5_31873671', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10033410056122c0c629ce91_84143193', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_10763185666122c0c629bcc5_31873671 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_10763185666122c0c629bcc5_31873671',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>




<?php
}
}
/* {/block "content"} */
/* {block 'script'} */
class Block_10033410056122c0c629ce91_84143193 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_10033410056122c0c629ce91_84143193',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
>

    <?php echo '</script'; ?>
>


<?php
}
}
/* {/block 'script'} */
}
