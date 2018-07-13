
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>SME- ERP</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a>Employees</a>
                        </li>
                        <li class="active">
                            <strong>View Employee</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>All Employees</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#">Config option 1</a>
                                </li>
                                <li><a href="#">Config option 2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">

                    <table class="table table-striped table-bordered table-hover"  id="editable">
                                     <thead>
                                            <tr>
                                                <th id="name">Name</th>
                                                <th id="email">Email</th>
                                                <th id="address">Password</th>
                                                <th id="address">Role</th>
                                                <th id="address">Image</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                    

                                    <?php foreach ($records as $show): ?>
                                                <tr>
                                                <td><?php echo $show['login_name'] ?></td>
                                                <td><?php echo $show['login'] ?></td>
                                                <td><?php echo $show['pass'] ?></td>
                                                <td><?php echo $show['role'] ?></td>
                                                <td>
                                                <img src="<?php echo base_url() ?>uploads/profile/<?php echo $show['profile_img'] ?>" width="80"></td>
                                               <!--  <td><a href="<?php echo base_url() ?>admin/edit_request/<?php echo $show['id'] ?>">View Request</a><br>
                                                </tr> -->
                                        
                                    <?php endforeach ?>

                                        </tbody>
                    </table>

                    </div>
                </div>
            </div>
            </div>
       
        </div>
     