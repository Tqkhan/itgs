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

input[type="checkbox"]:checked + label::after {
   content: '';
   position: absolute;
   width: 1.2ex;
   height: 0.4ex;
   background: rgba(0, 0, 0, 0);
   top: 0.9ex;
   left: 0.4ex;
   border: 3px solid blue;
   border-top: none;
   border-right: none;
   -webkit-transform: rotate(-45deg);
   -moz-transform: rotate(-45deg);
   -o-transform: rotate(-45deg);
   -ms-transform: rotate(-45deg);
   transform: rotate(-45deg);
}



input[type="checkbox"] + label {
    position: relative;
    overflow: hidden;
    cursor: pointer;
}

input[type="checkbox"] + label::before {
   content: "";
   display: inline-block;
   vertical-align: -25%;
   height: 2ex;
   width: 2ex;
   background-color: white;
   border: 1px solid rgb(166, 166, 166);
   border-radius: 4px;
   box-shadow: inset 0 2px 5px rgba(0,0,0,0.25);
   margin-right: 0.5em;
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
<div class="header-icon" style="margin-top: -9px;">
<i class="pe-7s-calculator"></i>
</div>
<div class="header-title">
<h1>Price Calculator</h1>
<small></small>
<ol class="breadcrumb">
<li><a href="<?php echo base_url() ?>admin/client_index"><i class="pe-7s-home"></i> Home</a></li>
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
<form>
    <table id="example2" class="footable table table-hover footable-loaded">
         <thead>
              <tr>

                  <th class="footable-sortable">Select&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Product Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Quantity<span class="footable-sort-indicator"></span></th>
                  <th class="footable-sortable">Price<span class="footable-sort-indicator"></span></th>

              </tr>
          </thead>
          <tbody>
          <?php
           $scopecount=1;
          foreach ($scopes as $scope): ?>
            <tr class="footable-even" style="display: table-row;">
              <td class="footable-toggle">
              <input type="checkbox" name="drink[]" class="drink new" value="DrinkName<?php echo $scopecount?>" data-price="<?php echo $scope['price'] ?>" style="width: 128px; margin-left: -48px;" />

               <?php echo $scope['scope_name'] ?>
               <input min="1" max="100" type="number" class="quantity pull-right" name="quantity" value="1" style=""  />
             </td class="footable-toggle">
                <td><?php echo $scope['price'] ?></td>
            </tr>
            <?php

                                        $scopecount++;
                                       endforeach ?>
         <tr>
            <td style="display: none;">
            Quantity of Orders
                <input min="0" max="5" type="number" class="totalquant" name="quantity" value="1" />
            </td>
        </tr>

<tr class="footable-odd" style="display: table-row; background-color: #c7e1f7;">
<td><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Total</strong></td>

  <td style="background-color: #b6bbce;">
<strong><div id="totalDiv" >0.00</div></strong>

  </td>
</tr>
</tbody>
</table>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div> <!-- /.main content -->
</div><!-- /#page-wrapper -->
</div><!-- /#wrapper -->
</form>
</div>
</div>
<script>
var $form = $('form'); //on a real app it would be better to have a class or ID
var $totalQuant = $('.totalquant', $form);
var totalDiv = $('#totalDiv');
$('.quantity, .drink, .totalquant', $form).change(calculateTotal);

function calculateTotal() {
  var total = 0;
  $form.find('.drink:checked').each(function() {
    total += $(this).data('price') * parseInt($(this).next('.quantity').val() || 0, 10);
  });
  var totalQuant = total * parseInt( $totalQuant.val() || 0, 10);
  totalDiv.text(totalQuant);
}
</script>

<!-- START CORE PLUGINS -->

