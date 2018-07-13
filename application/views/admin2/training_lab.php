
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
                            <h1>Traning Lab</h1>
                            <small> </small>
                            <ol class="breadcrumb">
                                <li><a href="<?php echo base_url() ?>admin/dashboard"><i class="pe-7s-home"></i> Home</a></li>
                                
                                <li >Course Management</li>
                                <li class="active">Traning Lab</li>
                            </ol>
                        </div>
                    </div> <!-- /. Content Header (Page header) -->
                  
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-bd">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>Traning Lab</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                     
                                        <div class="col-md-12">
                                            
                                            <ul id="tree2">
                                                <?php 
                                                    foreach ($courses as $course) {
                                                        echo '<li><a href="#">'.$course['title'].'</a>';
                                                        echo '<ul>';
                                                        foreach ($chapters as $chapter) {
                                                            if ($course['id'] == $chapter['course_id']) {
                                                                echo '<li><a href="#">'.$chapter['chapter'].'</a>';
                                                                echo '<ul>';
                                                                foreach ($sections as $section) {
                                                                    if ($course['id'] == $section['course_id'] && $chapter['id'] == $section['chapter_id']) {
                                                                        echo '<li><a href="#">'.$section['section'].'</a>';
                                                                        echo '<ul>';
                                                                        foreach ($course_contents as $content) {
                                                                            if ($course['id'] == $content['course_id'] && $chapter['id'] == $content['chapter_id'] && $section['id'] == $content['section_id']) {
                                                                                if ($content['type'] == 0) {
                                                                                    echo '<li>'.$content['question'].'</li>';
                                                                                }
                                                                                elseif ($content['type'] == 1) { 
                                                                                    echo '<li>Image<ul><div class="row">';
                                                                                    $images = explode(',', $content['image']);
                                                                                    foreach ($images as $image) {
                                                                                        echo '<div class="col-lg-4"><img src="'.base_url().'/uploads/course_content/'.$image.'" style="max-width:100%"></div>';
                                                                                    }
                                                                                    echo '</div></ul></li>';
                                                                                }
                                                                                elseif ($content['type'] == 2) {
                                                                                    echo '<li>Video<ul><div class="row">';
                                                                                    $images = explode(',', $content['video']);
                                                                                    foreach ($images as $image) {
                                                                                        echo '<div class="col-lg-6"><video width="320" height="240" controls><source src="'.base_url().'/uploads/course_content/'.$image.'" type="video/mp4"></video></div>';
                                                                                    }
                                                                                    echo '</div></ul></li>';
                                                                                }
                                                                                elseif ($content['type'] == 3) {
                                                                                     echo '<li>Attechment<ul><div class="row">';
                                                                                    $images = explode(',', $content['file']);
                                                                                    foreach ($images as $image) {
                                                                                        echo '<li><a download href="'.base_url().'/uploads/course_content/'.$image.'">View Attechment</a></li>';
                                                                                    }
                                                                                    echo '</div></ul></li>';
                                                                                }
                                                                            }
                                                                        }
                                                                        echo '</ul>';
                                                                        echo '</li>';
                                                                    }
                                                                }
                                                                echo '</ul>';
                                                                echo '</li>';
                                                            }
                                                        }
                                                        echo '</ul>';
                                                        echo '</li>';
                                                    }
                                                ?>
                                                <!-- <li><a href="#">Science</a>
                                                    <ul>
                                                        <li>Chapter #1
                                                        <ul>
                                                                <li>Section One<ul>
                                                                        <li>Question 1</li>
                                                                        <li>Question 2</li>
                                                                        <li>Question 3</li>
                                                                    </ul>
                                                                <li>Section Two</li>
                                                                <li>Section Three</li>
                                                                
                                                            </ul>
                                                        </li>
                                                        <li>Chapter #2                                   <ul>
                                                                <li>Image<ul>
                                                                    <div class="row">
                                                                    <div class="col-lg-4">
                                                                        <img src="http://blog.exitotravel.com/wp-content/uploads/2013/08/sleep-questions-man.jpg">
                                                                    </div>
                                                                    <div class="col-lg-4"><img src="http://blog.exitotravel.com/wp-content/uploads/2013/08/sleep-questions-man.jpg"></div>
                                                                    <div class="col-lg-4"><img src="http://blog.exitotravel.com/wp-content/uploads/2013/08/sleep-questions-man.jpg"></div>
                                                                </div>
                                                                </ul></li>
                                                                <li>Video<ul>
                                                                    <div class="row">
                                                                    <div class="col-lg-6">
                                                                       <video width="320" height="240" controls>
                                                                         <source src="movie.mp4" type="video/mp4">
                                                                         <source src="movie.ogg" type="video/ogg">
                                                                         Your browser does not support the video tag.
                                                                       </video></div>
                                                                </div>
                                                                </ul>
                                                                </li>
                                                                
                                                    </ul>
                                                </li> -->

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
