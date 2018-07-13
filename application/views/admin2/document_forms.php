
            <!-- /.Navbar  Static Side -->
            <div class="control-sidebar-bg"></div>
            <!-- Page Content -->
            <div id="page-wrapper">
                <!-- main content -->
                <div class="content">
                    <!-- Content Header (Page header) -->
                    <div class="content-header">
                        <div class="header-icon">
                            <i class="pe-7s-way"></i>
                        </div>
                          <div class="header-title">
                            <h1>Document & Forms</h1>
                            <small> </small>
                            <ol class="breadcrumb">
                                <li><a href="<?php echo base_url() ?>admin/dashboard"><i class="pe-7s-home"></i> Home</a></li>
                                
                                <li >Course Management</li>
                                <li class="active">Document & Forms</li>
                            </ol>
                        </div>
                    </div> <!-- /. Content Header (Page header) -->
                  
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-bd">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>Document & Forms</h4>
                                        <?php if($_SESSION['role'] == 'Hr'){ ?>
                                        <a href="<?php echo base_url('admin/create_forms') ?>"><button class="btn btn-primary pull-right">Create</button></a>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                     
                                        <div class="col-md-12">
                                            
                                            <ul id="tree2">
                                                <?php 
                                                    foreach ($record as $r) {
                                                        echo '<li>';
                                                        echo '<a href="#">'.$r['name'].'</a>';
                                                        if ($r['titles']) {
                                                            $titles = explode(':', $r['titles']);
                                                            $attechments = explode(':', $r['attechments']);
                                                            echo '<ul>';
                                                            for ($i=0; $i < sizeof($titles); $i++) { 
                                                                echo '<li>';
                                                                echo '<a href="#">'.$titles[$i].'</a>';
                                                                if ($attechments[$i]) {
                                                                    echo '<ul>';
                                                                    $files = explode(',', $attechments[$i]);
                                                                    for ($p=0; $p < sizeof($files); $p++) { 
                                                                        echo '<li>';
                                                                        echo '<a target="_blank" href="'.base_url('uploads/attachment/'.$files[$p]).'">view attechments</a>';
                                                                        echo '</li>';
                                                                    }
                                                                    echo '</ul>';
                                                                }
                                                                echo '</li>';
                                                            }
                                                            echo '</ul>';
                                                        }
                                                        echo '</li>';
                                                    }
                                                ?>
                                            </ul>
                                        </div>

                                        
                                    </div>
                                </div>
                                  </div>
                        </div>
                         <div style="height:350px;"></div>
                        </div>
                        </div>
                        </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- /.main content -->
            </div><!-- /#page-wrapper -->
        </div><!-- /#wrapper -->
        <!-- START CORE PLUGINS -->
        <script>
            $(document).ready(function () {
                "use strict"; // Start of use strict

                $.fn.extend({
                    treed: function (o) {

                        var openedClass = 'fa-folder-open-o';
                        var closedClass = 'fa-folder-o';

                        if (typeof o !== 'undefined') {
                            if (typeof o.openedClass !== 'undefined') {
                                openedClass = o.openedClass;
                            }
                            if (typeof o.closedClass !== 'undefined') {
                                closedClass = o.closedClass;
                            }
                        }
                        ;

                        //initialize each of the top levels
                        var tree = $(this);
                        tree.addClass("tree");
                        tree.find('li').has("ul").each(function () {
                            var branch = $(this); //li with children ul
                            branch.prepend("<i class='indicator fa " + closedClass + "'></i>");
                            branch.addClass('branch');
                            branch.on('click', function (e) {
                                if (this === e.target) {
                                    var icon = $(this).children('i:first');
                                    icon.toggleClass(openedClass + " " + closedClass);
                                    $(this).children().children().toggle();
                                }
                            });
                            branch.children().children().toggle();
                        });
                        //fire event from the dynamically added icon
                        tree.find('.branch .indicator').each(function () {
                            $(this).on('click', function () {
                                $(this).closest('li').click();
                            });
                        });
                        //fire event to open branch if the li contains an anchor instead of text
                        tree.find('.branch>a').each(function () {
                            $(this).on('click', function (e) {
                                $(this).closest('li').click();
                                e.preventDefault();
                            });
                        });
                        //fire event to open branch if the li contains a button instead of text
                        tree.find('.branch>button').each(function () {
                            $(this).on('click', function (e) {
                                $(this).closest('li').click();
                                e.preventDefault();
                            });
                        });
                    }
                });

                //Initialization of treeviews
                $('#tree1').treed();
                $('#tree2').treed({openedClass: 'fa-folder-open', closedClass: 'fa-folder'});
                $('#tree3').treed({openedClass: 'fa-minus', closedClass: 'fa-plus'});

            });
        </script>
