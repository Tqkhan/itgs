
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Data Tables</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a>Tables</a>
                        </li>
                        <li class="active">
                            <strong>Data Tables</strong>
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
                        <h5>Basic Data Tables example with responsive plugin</h5>
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

              
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
                        <th>Category ID </th>
                        <th>Category Name</th>
                        <th>Category Description</th>
                        <th>Category Image</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php foreach ($categories as $category): ?>
                        <tr class="gradeX">
                        <td><?php echo $category['categoryID'] ?></td>
                        <td><?php echo $category['categoryName'] ?></td>
                        <td><?php echo $category['categoryDesc'] ?></td>
                        <td>
<?php if ($category['categoryImage']!=""): ?>
<img src="<?php echo base_url()?>uploads/category/<?php echo $category['categoryImage'] ?>" width="120">    
<?php endif ?>
</td>
                        <td>
<a href="<?php echo base_url() ?>admin/edit_category/<?php echo $category['categoryID'] ?>" class="fa fa-edit"></a>
<a href="<?php echo base_url() ?>admin/delete/category/categoryID/<?php echo $category['categoryID'] ?>" class="fa fa-trash-o" onclick="return confirm('Are you sure?')"></a>
                        
                        </td>
                        
                        
                    </tr>
                    <?php endforeach ?>
                    
                    </tbody>
                 
                    </table>


                    </div>
                </div>
            </div>
            </div>
       
        </div>
     