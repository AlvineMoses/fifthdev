<?php
/* Smarty version 3.1.39, created on 2021-08-22 17:36:30
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/contract.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6122c35e025a09_08249948',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df3b270b29e5e7498f189e761adeacca0e1b571a' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/contract.tpl',
      1 => 1629668187,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6122c35e025a09_08249948 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14998255296122c35e0213b2_14732467', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18478241356122c35e0253e3_69716378', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_14998255296122c35e0213b2_14732467 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_14998255296122c35e0213b2_14732467',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="container">
        <div class="card">
            <div class="card-body">
                <h3><?php echo $_smarty_tpl->tpl_vars['_L']->value['New Contract'];?>
</h3>
                <div class="hr-line-dashed"></div>

                <form>
                    <div class="mb-3">
                        <label for="input_title">Title</label>
                        <input type="text" class="form-control" name="title" id="input_title" <?php if (!empty($_smarty_tpl->tpl_vars['xx']->value)) {?> value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['xx']->value->title;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
" <?php }?>>
                    </div>
                </form>

            </div>
        </div>
    </div>

<?php
}
}
/* {/block "content"} */
/* {block 'script'} */
class Block_18478241356122c35e0253e3_69716378 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_18478241356122c35e0253e3_69716378',
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
