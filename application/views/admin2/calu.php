<style type="text/css">
/* male femail radio*/
.inline{
display: inline-block;
}

.rad{
color:#999;
font-size:13px;
position:relative;
}
.rad span{
position:relative;
padding-left:20px;
}
.rad span:after{
content:'';
width:15px;
height:15px;
border:3px solid;
position:absolute;
left:0;
top:1px;
border-radius:100%;
-ms-border-radius:100%;
-moz-border-radius:100%;
-webkit-border-radius:100%;
box-sizing:border-box;
-ms-box-sizing:border-box;
-moz-box-sizing:border-box;
-webkit-box-sizing:border-box;
}
.rad input[type="radio"]{
cursor: pointer;
position:absolute;
width:100%;
height:100%;
z-index: 1;
opacity: 0;
filter: alpha(opacity=0);
-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)"
}
.rad input[type="radio"]:checked + span{
color:#0B8;
}
.rad input[type="radio"]:checked + span:before{
content:'';
width:5px;
height:5px;
position:absolute;
background:#0B8;
left:5px;
top:6px;
border-radius:100%;
-ms-border-radius:100%;
-moz-border-radius:100%;
-webkit-border-radius:100%;
}
.margen{
margin-left: 10px;
}
.s{
margin-left: 8px;
}
.r{
margin-left: 60px;
}
</style>
<!-- /.Navbar  Static Side -->
<div class="control-sidebar-bg"></div>
<!-- Page Content -->
<div id="page-wrapper">
<!-- main content -->
<div class="content">
<!-- Content Header (Page header) -->
<div class="content-header">
<div class="header-icon">
<i class="pe-7s-note2"></i>
</div>
<div class="header-title">
<h1>Price Calculator</h1>
<small></small>
<ol class="breadcrumb">
<li><a href="index.html"><i class="pe-7s-home"></i> Home</a></li>
<li class="active">Price Calculator</li>
</ol>
</div>
</div> <!-- /. Content Header (Page header) -->

<form method="post" action="<?php echo base_url() ?>admin/insert_training_hr" enctype="multipart/form-data">

<div class="row">
<div class="col-sm-12">
<div class="panel panel-bd ">
<div class="panel-heading">
<div class="panel-title">
<h4>Price Calculator</h4>
</div>
</div>
<div class="panel-body">

<div class="col-sm-12 lobipanel-parent-sortable ui-sortable" >
<div class="panel-body">
<div class="table-responsive">
		<table id="example2" class="footable table table-hover footable-loaded">
				 <thead>
                                                <tr>
                                                <th class="footable-sortable">Check<span class="footable-sort-indicator"></span></th>
                                                    <th class="footable-sortable">Product Name<span class="footable-sort-indicator"></span></th>
                                                    <th class="footable-sortable">Price<span class="footable-sort-indicator"></span></th>
                                                    <th class="footable-sortable">Que<span class="footable-sort-indicator"></span></th>
                                                    <th class="footable-sortable">Total<span class="footable-sort-indicator"></span></th>
                                                   
                                                    
                                                    
                                                   
                                                </tr>
                                            </thead>
                                            <tbody>
                                       <?php 
                                        $scopecount=1;
                                       foreach ($scopes as $scope): ?>
                                              <tr class="footable-even" style="display: table-row;">
                <td>
                	<span class="checkbox checkbox-primary">
                		 <input name="product" value="<?php echo $scope['price'] ?>" type="checkbox" class="checkbox checkbox-primary" id="p<?php echo $scopecount?>" onclick="totalIt()"/>
               <label for="p<?php echo $scopecount?>"></label>
                    
                </span>

            </td>

                                  <td><span class="footable-toggle"></span><?php echo $scope['scope_name'] ?> </td>
                                  <td><span class="footable-toggle"></span><?php echo $scope['price'] ?> </td>
                                  <td><span class="footable-toggle"></span><input type="number" value="" name="" id="que" />
                                    <td><span class="footable-toggle"></span>  <input type="text" name="" id="price" value="" />
 </td>
                                  
                                              
                                                </tr>  
                                       <?php 

                                        $scopecount++;
                                       endforeach ?>
                                         <tr class="footable-odd" style="display: table-row; background-color: #c7e1f7;">
              <td></td>
              <td><span class="footable-toggle"></span> <strong>Total</strong></td>

              <td>


               <input value="0.00 USD" readonly="readonly" type="text" id="total"/></td>

            </tr>
                                                
                                            
                                            </tbody>
		</table>
</div>

</div>
</div>

</div>






</div>
</div>
</div>
</div>
</form>
</div>
</div>


</div> <!-- /.main content -->
</div><!-- /#page-wrapper -->
</div><!-- /#wrapper -->

<script type="text/javascript">
 function totalIt() {
  var input = document.getElementsByName("product");
  var total = 0;
  for (var i = 0; i < input.length; i++) {
    if (input[i].checked) {
      total += parseFloat(input[i].value);
    }
  }
  document.getElementById("total").value = total.toFixed(2)  +  " USD ";
}
</script>
<script type="text/javascript">
  function multiply()
{
    // Get the input values
    a = Number(document.getElementById('que').value);
    b = Number(document.getElementById('price').value);

    // Do the multiplication
    c = a*b;

    // Set the value of the total
    document.getElementById('TOTAL').value=c;
}
</script>
<!-- START CORE PLUGINS -->

