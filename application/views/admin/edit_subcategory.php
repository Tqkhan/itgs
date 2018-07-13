
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Basic Form</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a>Sub Categories</a>
                        </li>
                        <li class="active">
                            <strong>Create Sub Categories</strong>
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
                            <form method="post" enctype="multipart/form-data" action="<?php echo base_url() ?>admin/update_subcategory" class="form-horizontal">
                                <div class="form-group"><label class="col-sm-2 control-label">Subcategory Name</label>
<input type="hidden" name="subCategoryID" value="<?php echo $subcategory['subCategoryID'] ?>">
                                    <div class="col-sm-10"><input type="text" name="subCategoryName" class="form-control" value="<?php echo $subcategory['subCategoryName'] ?>"></div>
                                </div>

                                
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Category Name</label>

                                    <div class="col-sm-10"><select name="categoryID" id="" class="form-control">
                                        <option value="">Select Category</option>

                                        <?php foreach ($categories as $category): ?>
<option value="<?php echo $category['categoryID'] ?>"  
<?php if($category['categoryID']==$subcategory['categoryID']) echo "selected"; ?>><?php echo $category['categoryName'] ?></option>
                                        <?php endforeach ?>
                                    </select></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                
                                <div class="form-group"><label class="col-sm-2 control-label">Category Description</label>

                                    <div class="col-sm-10">
<textarea name="subCategoryDesc" id="" cols="30" rows="10" class="form-control">
    
    <?php echo $subcategory['subCategoryDesc'] ?>
</textarea>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                           
                  
                                <div class="form-group"><label class="col-sm-2 control-label">Image</label>
 
                                    <div class="col-sm-10">

<?php if ($subcategory['subCategoryImage']!=""): ?>
    <img src="<?php echo base_url() ?>uploads/subcategory/<?php echo $subcategory['subCategoryImage'] ?>"  width="150">
<?php endif ?>
                                    <input type="file" name="subCategoryImage" class="form-control"></div>
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
     