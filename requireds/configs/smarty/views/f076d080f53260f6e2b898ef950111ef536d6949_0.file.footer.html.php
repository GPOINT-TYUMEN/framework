<?php
/* Smarty version 3.1.30, created on 2018-02-11 13:15:54
  from "C:\wamp64\www\back\app\admin\views\footer.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a80420ab92569_62707088',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f076d080f53260f6e2b898ef950111ef536d6949' => 
    array (
      0 => 'C:\\wamp64\\www\\back\\app\\admin\\views\\footer.html',
      1 => 1518354843,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a80420ab92569_62707088 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <!-- jQuery 2.1.4 -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['admin']->value;?>
views/cms/cms.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['admin']->value;?>
views/cms/profile.js"><?php echo '</script'; ?>
>
    <!-- jQuery UI 1.11.4 -->
    <?php echo '<script'; ?>
 src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"><?php echo '</script'; ?>
>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <?php echo '<script'; ?>
>
      $.widget.bridge('uibutton', $.ui.button);
    <?php echo '</script'; ?>
>
    <!-- Bootstrap 3.3.5 -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['admin']->value;?>
views/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <!-- Morris.js charts -->
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['admin']->value;?>
views/plugins/morris/morris.min.js"><?php echo '</script'; ?>
>
    <!-- Sparkline -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['admin']->value;?>
views/plugins/sparkline/jquery.sparkline.min.js"><?php echo '</script'; ?>
>
    <!-- jvectormap -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['admin']->value;?>
views/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['admin']->value;?>
views/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"><?php echo '</script'; ?>
>
    <!-- jQuery Knob Chart -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['admin']->value;?>
views/plugins/knob/jquery.knob.js"><?php echo '</script'; ?>
>
    <!-- daterangepicker -->
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['admin']->value;?>
views/plugins/daterangepicker/daterangepicker.js"><?php echo '</script'; ?>
>
    <!-- datepicker -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['admin']->value;?>
views/plugins/datepicker/bootstrap-datepicker.js"><?php echo '</script'; ?>
>
    <!-- Bootstrap WYSIHTML5 -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['admin']->value;?>
views/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"><?php echo '</script'; ?>
>
    <!-- Slimscroll -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['admin']->value;?>
views/plugins/slimScroll/jquery.slimscroll.min.js"><?php echo '</script'; ?>
>
    <!-- FastClick -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['admin']->value;?>
views/plugins/fastclick/fastclick.min.js"><?php echo '</script'; ?>
>
    <!-- AdminLTE App -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['admin']->value;?>
views/dist/js/app.min.js"><?php echo '</script'; ?>
>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['admin']->value;?>
views/dist/js/pages/dashboard.js"><?php echo '</script'; ?>
>
    <!-- AdminLTE for demo purposes -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['admin']->value;?>
views/dist/js/demo.js"><?php echo '</script'; ?>
>

 </body>
</html>
<?php }
}
