<?php
/* Smarty version 3.1.30, created on 2018-02-15 17:43:26
  from "C:\wamp64\www\back\app\admin\views\content.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a85c6be49af89_04504718',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97f9289ff30dd714963e8f723bfcd7671ece21dc' => 
    array (
      0 => 'C:\\wamp64\\www\\back\\app\\admin\\views\\content.html',
      1 => 1518716466,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/views/header.html' => 1,
    'file:admin/views/footer.html' => 1,
  ),
),false)) {
function content_5a85c6be49af89_04504718 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:admin/views/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Настройки контента
            <small><?php echo $_smarty_tpl->tpl_vars['user']->value['user_nick'];?>
</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="/"><i class="fa fa-dashboard"></i> Главная </a></li>
            <li class="active">Профиль</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Данные</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <div role="form" class="content-1">
                  <div class="box-body">
                    <div class="form-group">
                      <label>Переменная</label>
                      <input type="nickname" class="form-control" id="nickname" placeholder="<?php echo $_smarty_tpl->tpl_vars['user']->value['user_nick'];?>
">
                    </div>
                    <!-- select -->
                    <div class="form-group">
                      <label>Тип</label>
                      <select class="form-control type">
                        <option format="input">Строка</option>
                        <option format="textarea">Текст</option>
                        <option format="html">html</option>
                        <option format="section">Блок</option>
                        <option format="img">Изображение</option>
                      </select>
                    </div>
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button class="btn btn-primary">Создать</button>
                  </div>
                </div>
              </div><!-- /.box -->

              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Данные</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <div role="form" class="content-2">
                  <div class="box-body dynamic">
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button class="btn btn-primary">Создать</button>
                  </div>
                </div>
              </div><!-- /.box -->

              <!-- Form Element sizes -->
              <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">Different Height</h3>
                </div>
                <div class="box-body">
                  <input class="form-control input-lg" type="text" placeholder=".input-lg">
                  <br>
                  <input class="form-control" type="text" placeholder="Default input">
                  <br>
                  <input class="form-control input-sm" type="text" placeholder=".input-sm">
                </div><!-- /.box-body -->
              </div><!-- /.box -->

              <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">Different Width</h3>
                </div>
                <div class="box-body">
                  <div class="row">
                    <div class="col-xs-3">
                      <input type="text" class="form-control" placeholder=".col-xs-3">
                    </div>
                    <div class="col-xs-4">
                      <input type="text" class="form-control" placeholder=".col-xs-4">
                    </div>
                    <div class="col-xs-5">
                      <input type="text" class="form-control" placeholder=".col-xs-5">
                    </div>
                  </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

              <!-- Input addon -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Input Addon</h3>
                </div>
                <div class="box-body">
                  <div class="input-group">
                    <span class="input-group-addon">@</span>
                    <input type="text" class="form-control" placeholder="Username">
                  </div>
                  <br>
                  <div class="input-group">
                    <input type="text" class="form-control">
                    <span class="input-group-addon">.00</span>
                  </div>
                  <br>
                  <div class="input-group">
                    <span class="input-group-addon">$</span>
                    <input type="text" class="form-control">
                    <span class="input-group-addon">.00</span>
                  </div>

                  <h4>With icons</h4>
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                    <input type="email" class="form-control" placeholder="Email">
                  </div>
                  <br>
                  <div class="input-group">
                    <input type="text" class="form-control">
                    <span class="input-group-addon"><i class="fa fa-check"></i></span>
                  </div>
                  <br>
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                    <input type="text" class="form-control">
                    <span class="input-group-addon"><i class="fa fa-ambulance"></i></span>
                  </div>

                  <h4>With checkbox and radio inputs</h4>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <input type="checkbox">
                        </span>
                        <input type="text" class="form-control">
                      </div><!-- /input-group -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <input type="radio">
                        </span>
                        <input type="text" class="form-control">
                      </div><!-- /input-group -->
                    </div><!-- /.col-lg-6 -->
                  </div><!-- /.row -->

                  <h4>With buttons</h4>
                  <p class="margin">Large: <code>.input-group.input-group-lg</code></p>
                  <div class="input-group input-group-lg">
                    <div class="input-group-btn">
                      <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">Action <span class="fa fa-caret-down"></span></button>
                      <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                      </ul>
                    </div><!-- /btn-group -->
                    <input type="text" class="form-control">
                  </div><!-- /input-group -->
                  <p class="margin">Normal</p>
                  <div class="input-group">
                    <div class="input-group-btn">
                      <button type="button" class="btn btn-danger">Action</button>
                    </div><!-- /btn-group -->
                    <input type="text" class="form-control">
                  </div><!-- /input-group -->
                  <p class="margin">Small <code>.input-group.input-group-sm</code></p>
                  <div class="input-group input-group-sm">
                    <input type="text" class="form-control">
                    <span class="input-group-btn">
                      <button class="btn btn-info btn-flat" type="button">Go!</button>
                    </span>
                  </div><!-- /input-group -->
                </div><!-- /.box-body -->
              </div><!-- /.box -->

            </div><!--/.col (left) -->
            <!-- right column -->
            <div class="col-md-6">
              <!-- Horizontal Form -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Horizontal Form</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                      <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                      <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox"> Remember me
                          </label>
                        </div>
                      </div>
                    </div>
                  </div><!-- /.box-body -->
                  <div class="box-footer">
                    <button type="submit" class="btn btn-default">Cancel</button>
                    <button type="submit" class="btn btn-info pull-right">Sign in</button>
                  </div><!-- /.box-footer -->
                </form>
              </div><!-- /.box -->
              <!-- general form elements disabled -->
              <div class="box box-warning">
                <div class="box-header with-border">
                  <h3 class="box-title">General Elements</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <form role="form">
                    <!-- text input -->
                    <div class="form-group">
                      <label>Text</label>
                      <input type="text" class="form-control" placeholder="Enter ...">
                    </div>
                    <div class="form-group">
                      <label>Text Disabled</label>
                      <input type="text" class="form-control" placeholder="Enter ..." disabled>
                    </div>

                    <!-- textarea -->
                    <div class="form-group">
                      <label>Textarea</label>
                      <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                    </div>
                    <div class="form-group">
                      <label>Textarea Disabled</label>
                      <textarea class="form-control" rows="3" placeholder="Enter ..." disabled></textarea>
                    </div>

                    <!-- input states -->
                    <div class="form-group has-success">
                      <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Input with success</label>
                      <input type="text" class="form-control" id="inputSuccess" placeholder="Enter ...">
                    </div>
                    <div class="form-group has-warning">
                      <label class="control-label" for="inputWarning"><i class="fa fa-bell-o"></i> Input with warning</label>
                      <input type="text" class="form-control" id="inputWarning" placeholder="Enter ...">
                    </div>
                    <div class="form-group has-error">
                      <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> Input with error</label>
                      <input type="text" class="form-control" id="inputError" placeholder="Enter ...">
                    </div>

                    <!-- checkbox -->
                    <div class="form-group">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox">
                          Checkbox 1
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox">
                          Checkbox 2
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" disabled>
                          Checkbox disabled
                        </label>
                      </div>
                    </div>

                    <!-- radio -->
                    <div class="form-group">
                      <div class="radio">
                        <label>
                          <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                          Option one is this and that&mdash;be sure to include why it's great
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                          Option two can be something else and selecting it will deselect option one
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled>
                          Option three is disabled
                        </label>
                      </div>
                    </div>

                    <!-- select -->
                    <div class="form-group">
                      <label>Select</label>
                      <select class="form-control">
                        <option>option 1</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                        <option>option 5</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label>Select Disabled</label>
                      <select class="form-control" disabled>
                        <option>option 1</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                        <option>option 5</option>
                      </select>
                    </div>

                    <!-- Select multiple-->
                    <div class="form-group">
                      <label>Select Multiple</label>
                      <select multiple class="form-control">
                        <option>option 1</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                        <option>option 5</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Select Multiple Disabled</label>
                      <select multiple class="form-control" disabled>
                        <option>option 1</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                        <option>option 5</option>
                      </select>
                    </div>

                  </form>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!--/.col (right) -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.3.0
        </div>
        <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved.
      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
          <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
          <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
          <!-- Home tab content -->
          <div class="tab-pane" id="control-sidebar-home-tab">
            <h3 class="control-sidebar-heading">Recent Activity</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-birthday-cake bg-red"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
                    <p>Will be 23 on April 24th</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-user bg-yellow"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>
                    <p>New phone +1(800)555-1234</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>
                    <p>nora@example.com</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-file-code-o bg-green"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>
                    <p>Execution time 5 seconds</p>
                  </div>
                </a>
              </li>
            </ul><!-- /.control-sidebar-menu -->

            <h3 class="control-sidebar-heading">Tasks Progress</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Custom Template Design
                    <span class="label label-danger pull-right">70%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Update Resume
                    <span class="label label-success pull-right">95%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Laravel Integration
                    <span class="label label-warning pull-right">50%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Back End Framework
                    <span class="label label-primary pull-right">68%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                  </div>
                </a>
              </li>
            </ul><!-- /.control-sidebar-menu -->

          </div><!-- /.tab-pane -->
          <!-- Stats tab content -->
          <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div><!-- /.tab-pane -->
          <!-- Settings tab content -->
          <div class="tab-pane" id="control-sidebar-settings-tab">
            <form method="post">
              <h3 class="control-sidebar-heading">General Settings</h3>
              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Report panel usage
                  <input type="checkbox" class="pull-right" checked>
                </label>
                <p>
                  Some information about this general settings option
                </p>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Allow mail redirect
                  <input type="checkbox" class="pull-right" checked>
                </label>
                <p>
                  Other sets of options are available
                </p>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Expose author name in posts
                  <input type="checkbox" class="pull-right" checked>
                </label>
                <p>
                  Allow the user to show his name in blog posts
                </p>
              </div><!-- /.form-group -->

              <h3 class="control-sidebar-heading">Chat Settings</h3>

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Show me as online
                  <input type="checkbox" class="pull-right" checked>
                </label>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Turn off notifications
                  <input type="checkbox" class="pull-right">
                </label>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Delete chat history
                  <a href="javascript::;" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                </label>
              </div><!-- /.form-group -->
            </form>
          </div><!-- /.tab-pane -->
        </div>
      </aside><!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->



    <!-- jQuery 2.1.4 -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['admin']->value;?>
views/cms/cms.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['admin']->value;?>
views/cms/content.js"><?php echo '</script'; ?>
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

<?php $_smarty_tpl->_subTemplateRender("file:admin/views/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
