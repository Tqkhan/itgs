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
                <h1>Edit Case Request</h1>
                <small></small>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url() ?>admin/client_index"><i class="pe-7s-home"></i> Home</a></li>
                    <li><a href="<?php echo base_url() ?>admin/case_dashboard">Case Dashboard</a></li>
                    <li class="active">Edit Case Request</li>
                </ol>
            </div>
        </div> <!-- /. Content Header (Page header) -->


        <div class="row">
            <div class="col-sm-12">
        <form method="post" action="<?php echo base_url() ?>admin/update_case" enctype="multipart/form-data">
                <div class="panel panel-bd ">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Case Request</h4>
                        </div>
                    </div>
                <div class="panel-body">
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-3 col-form-label">Client Reference No<span class="required">*</span></label>
                        <div class="col-sm-3">
                            <input class="form-control" type="text" name="client_reference" value="<?php echo $client_details['client_reference'] ?>" id="example-text-input" placeholder="">
                        </div>

                        <input type="hidden" name="case_id" value="<?php echo $client_details['id'] ?>">

                         <label for="example-text-input" class="col-sm-2 col-form-label">Current Date<span class="required">*</span></label>
                        <div class="col-sm-4">
                            <input class="form-control" type="text" name="case_date" value="<?php echo $client_details['case_date'] ?>" id="example-text-input" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-3 col-form-label">ITGS Reference No<span class="required">*</span></label>
                        <div class="col-sm-3">
                            <input class="form-control" type="text" name="" value="<?php echo $_SESSION['reference_code'] ?>" id="example-text-input" placeholder="">
                        </div>
                         <label for="example-text-input" class="col-sm-2 col-form-label">Due Date<span class="required">*</span></label>
                        <div class="col-sm-4">
                            <label class="rad inline"> 
                                  <input type="radio" name="due_date_type" value="2" checked>
                                  <span> Component Wise </span> 
                               </label>
                              <label class="rad inline margen"> 
                                  <input type="radio" name="due_date_type" value="3">
                                  <span> Combined</span> 
                              </label>
                        </div>
                    </div>
                     <div id="Cars3" class="form-group row desc" style="display: none;">
                        <label for="example-text-input" class="col-sm-3 col-form-label">Current Date<span class="required">*</span></label>
                        <div class="col-sm-3">
                            <input class="form-control" type="date" name="case_due_date" value="" id="example-text-input" placeholder="">
                        </div>
                    </div>
                  
                                 
                    
                      <div class="multi-field-wrapper">
                      <div class="form-group row">
                
                      <!-- <div class="col-lg-12 pull-right">
                       <button type="button" class="btn btn-success pull-right add-field">+ Add Subject</button>
                      </div> -->
                      </div>
                          <div class="multi-fields">
                              <div class="multi-field">
                              

  
 

<?php
$k=1;
 foreach ($subjects as $subject): 

 $activities=$this->db->query("select subject_activities.*,scope_of_work.scope_name,scope_of_work.id as scope_id,assign_client_services.price from subject_activities inner JOIN scope_of_work on (subject_activities.activity_id=scope_of_work.id) inner join assign_client_services on (assign_client_services.scope_id=scope_of_work.id) where subject_activities.subject_id='".$subject['id']."' GROUP BY scope_name")->result_array();

  ?>
  
  <input type="hidden" name="subject_id[]" value="<?php echo $subject['id'] ?>">
  <h2>Subject <?php echo $k; ?> </h2>
  <hr>
                        <div class="form-group row">
        <label for="example-text-input" class="col-sm-3 col-form-label">Subject Name<span class="required">*</span></label>
        <div class="col-sm-3">
            <input class="form-control" type="text" name="subject_name[]" id="example-text-input" value="<?php echo $subject['subject_name'] ?>">
        </div>
         <label for="example-text-input" class="col-sm-2 col-form-label">Type <span class="required">*</span></label>
        <div class="col-sm-4">
          <label class="rad inline"> 
                  <input type="radio" name="subject_type[]" value="individual" <?php if($subject['subject_type']=="individual") echo "checked" ?>>
                  <span> Indivioual </span> 
               </label>
              <label class="rad inline margen"> 
                  <input type="radio" name="subject_type[]" value="corporate" <?php if($subject['subject_type']=="corporate") echo "checked" ?>>
                  <span> Corporate </span> 
              </label>
            
        </div>
    </div>
    <div class="form-group row">
        <label for="example-text-input" class="col-sm-3 col-form-label">Other Detail<span class="required">*</span></label>
        <div class="col-sm-9">
           <textarea class="form-control" id="exampleTextarea" name="other_details[]" rows="2"><?php echo $subject['other_details'] ?></textarea>
        </div>
    </div>
     <div class="form-group row">
        <label for="example-text-input" class="col-sm-3 col-form-label">Subject Attachement<span class="required">*</span></label>
        <div class="col-sm-9">
          <?php if ($subject['subject_attachement']!=""): ?>
            <a href="<?php echo base_url() ?>uploads/attachment/<?php echo $subject['subject_attachement'] ?>" target="_blank">View Attachment</a>
          <?php endif ?>
          
         <input class="form-control" name="subject_attachement[]" type="file" id="example-text-input">
        </div>
    </div>
    <div class="form-group row">
      <div class="after-add-mor">
        <label for="example-text-input" class="col-sm-3 col-form-label">Scope Of Work<span class="required">*</span></label>
        <div class="col-sm-9 table-responsive">
            <table class="table table-hover ">
              <thead>
                  <tr>
                  <th class="footable-sortable">Check<span class="footable-sort-indicator"></span></th>
                      <th class="footable-sortable">Product Name<span class="footable-sort-indicator"></span></th>
                      <th class="footable-sortable">Price<span class="footable-sort-indicator"></span></th>
                      <th class="footable-sortable">Tat<span class="footable-sort-indicator"></span></th>
                      
                      
                     
                  </tr>
                                            </thead>
              <tbody>
                                       <?php 
                                        $scopecount=1;
                                       foreach ($activities as $scope): 
                                        
                                        ?>
                            <input type="hidden" name="a_id[]" value="<?php echo $scope['id']?>">

                                  <tr class="footable-even" style="display: table-row;">
                <td>
                    <input id="scopecheck<?php echo $scopecount?>" type="checkbox" name="scope_id[]" value="<?php echo $scope['scope_id'] ?>" <?php echo "checked" ?>>
                    </td>
                                  <td><span class="footable-toggle"></span><?php echo $scope['scope_name'] ?> </td>
                                  <td><span class="footable-toggle"></span><?php echo $scope['price'] ?> </td>
                                  
                                  <td>
                                    <input type="file" name="activity_attachement[]" style="width: 195px;"></td>
                                  <td><input type="date"  name="due_date[]" style="width: 140px;" value="<?php echo $scope['due_date'] ?>"></td>
                                              
                                                </tr>  
                                       <?php 

                                        $scopecount++;
                                       endforeach ?>
                                                
                                            
                                            </tbody>
            </table>
            
</div>
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
