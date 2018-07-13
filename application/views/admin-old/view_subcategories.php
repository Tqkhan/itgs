
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
                        <th>Sub Category ID </th>
                        <th>Sub Category Name</th>
                        <th>Category Name</th>
                        <th>Sub Category Description</th>
                        <th>Sub Category Image</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                   
<?php foreach ($subcategories as $subcategory): ?>
    <tr>
        <td><?php echo $subcategory['subCategoryID'] ?></td>
        <td><?php echo $subcategory['subCategoryName'] ?></td>
        <td><?php echo $subcategory['categoryName'] ?></td>
        <td><?php echo $subcategory['subCategoryDesc'] ?></td>
                   <td>
<?php if ($subcategory['subCategoryImage']!=""): ?>
<img src="<?php echo base_url()?>uploads/subcategory/<?php echo $subcategory['subCategoryImage'] ?>" width="120">    
<?php endif ?>
</td>
                        <td>
<a href="<?php echo base_url() ?>admin/edit_subcategory/<?php echo $subcategory['subCategoryID'] ?>" class="fa fa-edit"></a>
<a href="<?php echo base_url() ?>admin/delete/subcategory/subCategoryID/<?php echo $subcategory['subCategoryID'] ?>" class="fa fa-trash-o" onclick="return confirm('Are you sure?')"></a>
                        
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
     