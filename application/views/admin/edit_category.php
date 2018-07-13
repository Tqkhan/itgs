
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2></h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a>Categories</a>
                        </li>
                        <li class="active">
                            <strong>Create Category</strong>
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
                            <h5>Create Product</h5>
                          
                        </div>
                        <div class="ibox-content">
                            <form method="post" enctype="multipart/form-data" action="<?php echo base_url() ?>admin/update_category" class="form-horizontal">
                                <div class="form-group"><label class="col-sm-2 control-label">Category Name</label>

<input type="hidden" name="categoryID" value="<?php echo $category['categoryID'] ?>">
                        <div class="col-sm-10"><input type="text" name="categoryName" value="<?php echo $category['categoryName'] 
                                    ?>" class="form-control"></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Category Description</label>

                                    <div class="col-sm-10">
<textarea name="categoryDesc" id="" cols="30" rows="10" class="form-control"><?php echo $category['categoryDesc'] 
                                    ?></textarea>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                           
                  
                                <div class="form-group"><label class="col-sm-2 control-label">Image</label>

                                    <div class="col-sm-10">
<?php if ($category['categoryImage']!=""): ?>
    <img src="<?php echo base_url() ?>uploads/category/<?php echo $category['categoryImage'] ?>"  width="150">
<?php endif ?>
                                    <input type="file" name="categoryImage" class="form-control">
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>

                       
                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-primary" type="submit">Save changes</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     