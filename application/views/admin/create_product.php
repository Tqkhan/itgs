
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Basic Form</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a>Products</a>
                        </li>
                        <li class="active">
                            <strong>Create Product</strong>
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
                            <form method="post" enctype="multipart/form-data" action="<?php echo base_url() ?>admin/insert_product" class="form-horizontal">
                                <div class="form-group"><label class="col-sm-2 control-label">Product Name</label>

                                    <div class="col-sm-10"><input type="text" name="productName" class="form-control"></div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Category</label>

                                    <div class="col-sm-10">
<select name="categoryID" id="categoryID" class="form-control">
    <option value="">Create Category</option>

                                        <?php foreach ($categories as $category): ?>
                                            <option value="<?php echo $category['categoryID'] ?>"><?php echo $category['categoryName'] ?></option>
                                        <?php endforeach ?>
</select>
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Sub Category</label>

                                    <div class="col-sm-10">
<select name="subCategoryID" id="subCategoryID" class="form-control">
    <option value="">Create Sub Category</option>
</select>

                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Product Description</label>

                                    <div class="col-sm-10">
<textarea name="productDesc" id="" cols="30" rows="10"></textarea>
                                    </div>
                                </div>

                                <div class="form-group"><label class="col-sm-2 control-label">Options</label>

                                    <div class="col-sm-10"><input type="text" name="options" class="form-control"></div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Model</label>

                                    <div class="col-sm-10"><input type="text" name="model" class="form-control"></div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Quantity</label>

                                    <div class="col-sm-10"><input type="text" name="qty" class="form-control"></div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Price</label>

                                    <div class="col-sm-10"><input type="text" name="price" class="form-control"></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                           
                                <div class="form-group"><label class="col-sm-2 control-label">Images</label>

                                    <div class="col-sm-10"><input type="file" name="productImage" class="form-control"></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                           
                  
                       
                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2 pull-right">
                                        <button class="btn btn-primary" type="submit">Save changes</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     
