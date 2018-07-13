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
                <h1>Edit Case Report</h1>
                <small></small>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url() ?>admin/client_index"><i class="pe-7s-home"></i> Home</a></li>
                    <li><a href="<?php echo base_url() ?>admin/case_dashboard">Case Dashboard</a></li>
                    <li class="active">Edit Case Report</li>
                </ol>
            </div>
        </div> <!-- /. Content Header (Page header) -->


        <div class="row">
            <div class="col-sm-12">
        <form method="post" action="<?php echo base_url() ?>admin/update_report" enctype="multipart/form-data">
                <div class="panel panel-bd ">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Case Report</h4>
                        </div>
                    </div>
                <div class="panel-body">

                      <div class="multi-field-wrapper">
                          <div class="multi-fields">
                              <div class="multi-field">





<?php
$k=1;
 foreach ($subjects as $subject):

  ?>
  <input type="hidden" name="subject_id[]" value="<?php echo $subject['id'] ?>">
  <h2>Subject <?php echo $k; ?></h2>
  <hr>
  <div class="form-group row">
  <label for="example-text-input" class="col-sm-3 col-form-label">Client Reference No<span class="required">*</span></label>
                       <div class="col-sm-3">
                           <input class="form-control" type="text" name="reference_number[]" value="<?php echo $subject['reference_number'] ?>" readonly id="example-text-input" placeholder="">
                       </div>
                        <input type="hidden" name="case_id" value="<?php echo $subject['case_id'] ?>">
                         <label for="example-text-input" class="col-sm-2 col-form-label">Date Requested<span class="required">*</span></label>
                        <div class="col-sm-4">
                            <input class="form-control" type="text" name="request_date[]" value="<?php echo $subject['request_date'] ?>" id="example-text-input" placeholder="">
                        </div>
    </div>
    <div class="form-group row">
       <label for="example-text-input" class="col-sm-3 col-form-label">Reporting Date<span class="required">*</span></label>
                        <div class="col-sm-3">
                            <input class="form-control" type="text" name="report_date[]" value="<?php echo $subject['report_date'] ?>" id="example-text-input" placeholder="">
                        </div>
                         <label for="example-text-input" class="col-sm-2 col-form-label">Name<span class="required">*</span></label>
                        <div class="col-sm-4">
                            <input class="form-control" type="text" name="name[]" value="<?php echo $subject['name'] ?>" id="example-text-input" placeholder="">
                        </div>
    </div>
     <div class="form-group row">
       <label for="example-text-input" class="col-sm-3 col-form-label">Address<span class="required">*</span></label>
                        <div class="col-sm-3">
                            <input class="form-control" type="text" name="address[]" value="<?php echo $subject['address'] ?>" id="example-text-input" placeholder="">
                        </div>

                         <label for="example-text-input" class="col-sm-2 col-form-label">Father/Husabnd Name<span class="required">*</span></label>
                        <div class="col-sm-4">
                            <input class="form-control" type="text" name="father_husband_name[]" value="<?php echo $subject['father_husband_name'] ?>" id="example-text-input" placeholder="">
                        </div>
    </div>

    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-3 col-form-label">Mother Name<span class="required">*</span></label>
                        <div class="col-sm-3">
                            <input class="form-control" type="text" name="mother_name[]" value="<?php echo $subject['mother_name'] ?>" id="example-text-input" placeholder="">
                        </div>

                         <label for="example-text-input" class="col-sm-2 col-form-label">Date of Birth<span class="required">*</span></label>
                        <div class="col-sm-4">
                            <input class="form-control" type="text" name="date_of_birth[]" value="<?php echo $subject['date_of_birth'] ?>" id="example-text-input" placeholder="">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-3 col-form-label">Place of Birth<span class="required">*</span></label>
                        <div class="col-sm-3">
                            <input class="form-control" type="text" name="place_of_birth[]" value="<?php echo $subject['place_of_birth'] ?>" id="example-text-input" placeholder="">
                        </div>

                         <label for="example-text-input" class="col-sm-2 col-form-label">Passport Number<span class="required">*</span></label>
                        <div class="col-sm-4">
                            <input class="form-control" type="text" name="passport_number[]" value="<?php echo $subject['passport_number'] ?>" id="example-text-input" placeholder="">
                        </div>
                    </div>


                     <div class="form-group row">
                        <label for="example-text-input" class="col-sm-3 col-form-label">National ID Number (CNIC)<span class="required">*</span></label>
                        <div class="col-sm-3">
                            <input class="form-control" type="text" name="cnic[]" value="<?php echo $subject['cnic'] ?>" id="example-text-input" placeholder="">
                        </div>

                         <label for="example-text-input" class="col-sm-2 col-form-label">National Tax Number (NTN)<span class="required">*</span></label>
                        <div class="col-sm-4">
                            <input class="form-control" type="text" name="ntn[]" value="<?php echo $subject['ntn'] ?>" id="example-text-input" placeholder="">
                        </div>
                    </div>



        <br>
<?php $k++;
 endforeach ?>

<!-- <a class='btn btn-danger remove-field'><i class='fa fa-trash-o' aria-hidden='true'></i> </a>
   -->                  </div>
                          </div>
                      </div>



                    <div class="form-group row">

                        <div class="col-sm-11">

                        </div>
                        <div class="col-sm-1">
                        <button type="submit" class="btn btn-primary pull-right">Update</button>
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
<!-- START CORE PLUGINS -->
<script type="text/javascript">
 $(document).ready(function() {
    $("body").on("click",".add-mor",function(){
        var html = $(".after-add-mor").first().clone();
        //  $(html).find(".change").prepend("<label for=''>&nbsp;</label><br/><a class='btn btn-danger remove'>- Remove</a>");
          $(html).find(".chang").html("<a class='btn btn-danger remove'><i class='fa fa-trash-o' aria-hidden='true'></i> </a> "+' <a class="btn btn-success add-mor"><strong> + </strong> </a>');
        $(".after-add-mor").last().after(html);
    });
    $("body").on("click",".remove",function(){
        $(this).parents(".after-add-mor").remove();
    });
});
</script>
<script type="text/javascript">
 $(document).ready(function() {
    $("body").on("click",".add-mo",function(){
        var html = $(".after-add-mo").first().clone();
        //  $(html).find(".change").prepend("<label for=''>&nbsp;</label><br/><a class='btn btn-danger remove'>- Remove</a>");
          $(html).find(".chan").html("<a class='btn btn-danger remove'><i class='fa fa-trash-o' aria-hidden='true'></i> </a> "+' <a class="btn btn-success add-mo"><strong> + </strong> </a>');
        $(".after-add-mo").last().after(html);
    });
    $("body").on("click",".remove",function(){
        $(this).parents(".after-add-mo").remove();
    });
});





 $('.multi-field-wrapper').each(function() {
    var $wrapper = $('.multi-fields', this);
    $(".add-field", $(this)).click(function(e) {
      <?php $count++;?>
        $('.multi-field:first-child', $wrapper).clone(true).appendTo($wrapper).find('input').val('').focus();
    });
    $('.multi-field .remove-field', $wrapper).click(function() {
        if ($('.multi-field', $wrapper).length > 1)
            $(this).parent('.multi-field').remove();
    });
});

</script>
<script type="text/javascript">
$(document).ready(function() {
    $("input[name$='due_date_type']").click(function() {
        var test = $(this).val();

        $("div.desc").hide();
        $("#Cars" + test).show();
    });
});
</script>
