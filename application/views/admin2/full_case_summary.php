
            <!-- /.Navbar  Static Side -->
            <div class="control-sidebar-bg"></div>
            <!-- Page Content -->
            <div id="page-wrapper">
                <!-- main content -->
                <div class="content">
                    <!-- Content Header (Page header) -->
                    <div class="content-header">
                        <div class="header-icon">
                            <i class="pe-7s-box1"></i>
                        </div>
                        <div class="header-title">
                            <h1>Case Summary</h1>
                            <small> </small>
                            <ol class="breadcrumb">
                                <li><a href="index.html"><i class="pe-7s-home"></i> Home</a></li>
                                <li class="active">Assign Team</li>
                                <li class="active">Case Summary</li>
                            </ol>
                        </div>
                    </div> <!-- /. Content Header (Page header) -->

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-bd">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>Case Detail </h4>
                                    </div>
                                </div>
                                <div class="panel-body">

                                    <div class="table-responsive">
                                        <table id="" class="table table-bordered table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Client Ref#</th>
                                                    <th>Start Date</th>
                                                    <th>Due Date</th>
                                                </tr>
                                            </thead>
                                           <tbody>
                                             <tr>
                                                <td><?php echo $case['client_reference']; ?> </td>
                                                <td><?php echo $case['case_date']; ?> </td>
                                                <td><?php echo $case['case_due_date']; ?> </td>
                                            </tr>
                                           </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="panel panel-bd">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>Case Subject Details </h4>
                                    </div>
                                </div>
                                <div class="panel-body">

                                    <div class="table-responsive">
                                        <table id="" class="table table-bordered table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Subject Name</th>
                                                    <th>Subject Type</th>
                                                    <th>Details</th>
                                                    <th>Due Date</th>
                                                    <th>Attachement</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                           <tbody>
                                                   <?php foreach ($subjects as $key): ?>
                                             <tr>
                                                <td><?php echo $key['subject_name']; ?> </td>
                                                <td><?php echo $key['subject_type']; ?> </td>
                                                <td><?php echo $key['other_details']; ?> </td>
                                                <td><?php echo $case['case_due_date']; ?> </td>
                                                <td><?php echo $key['subject_attachement']; ?> </td>
                                                <td>
                                                 <a onclick="view_full_summary(<?php echo $key['id'] ?>,<?php echo $case['id'];?>)">View Full Summary</a>
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
                    <div class="row" id="summary_data">
                       
                    </div>
                    <div style="height: 450px;"></div>
                </div> <!-- /.main content -->
            </div><!-- /#page-wrapper -->
        </div><!-- /#wrapper -->
        <!-- START CORE PLUGINS -->
        
        
        

<div class="modal fade" id="assign_activity">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Assign Activity User</h4>
			</div>
			<div class="modal-body">
				
				<form id="activity_form" method="post" enctype="multipart/form-data" action="<?php echo base_url() ?>/admin/assign_team_member">
				    <input type="hidden" name="case_id" value="<?php  echo $case['id'] ?>">
				    <input type="hidden" id="team_member_id" name="team_member_id">
				    <input type="hidden" id="subject_id" name="subject_id">
				    
				    <div class="form-group" >
				        <label>Select Activity</label>
				        <div id="activity_check">
				            
				        </div>
				    </div>
				   
				    
				    <div>
				    <button type="submit" id="" class="btn btn-info pull-right">Submit</button>    
				    </div>
				    <div class="clearfix"></div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

			</div>
		</div>
	</div>
</div>


<script>


    
    
 
    
    function view_full_summary(subject_id,case_id){
        
        $.ajax({
            
            url:"<?php echo base_url() ?>admin/view_full_summary",
            type:"post",
            data:{subject_id:subject_id},
            success:function(resp){
                $('#summary_data').html(resp);
            }
        });
        
    }
    
    
       function assign_activity_user(team_member,subject_id){
         
         $('#team_member_id').val(team_member);
         $('#subject_id').val(subject_id);
         $.ajax({
             url:"<?php echo base_url() ?>admin/get_subject_activities",
             type:"post",
             data:{subject_id:subject_id},
             success:function(result){
                 $('#activity_check').html(result);
                 change_file() 
             }
         });
         
             
    }
    
    $('#btn_activity').click(function(){
        var formData=$('#activity_form').serialize();
        $.ajax({
            url:"<?php echo base_url() ?>/admin/assign_team_member",
            type:"post",
            data:formData,
            success:function(response){
                //window.location.href='<?php echo base_url() ?>admin/full_case_summary/'+response;
            }
        });
    });

function delete_file() {
  $('.delete-file').click(function() {
    var th = $(this)
    var id = $(this).attr('data-id');
    jQuery.ajax({
        url: '<?php echo base_url() ?>/admin/delete_subject_file/'+id,
        dataType: 'json',
        cache: false,
        contentType: false,
        processData: false,
        method: 'GET',
        type: 'GET', // For jQuery < 1.9
        complete: function(response){
          th.parent().parent().remove()
        }
    })
  })
}
var subject_file = []
function change_file() {
    $('.subject_file').on("change", function (e) {
      var left = $(this).offset().left
      left = parseInt(left) + parseInt($(this).width() / 2)
      var top = $(this).offset().top
      top = parseInt(top) + parseInt($(this).height() + 15)
      $('.img-loader').css('position', 'absolute')
      $('.img-loader').css('left', left+'px')
      $('.img-loader').css('top', top+'px')
      $('.img-loader').css('z-index', '9999')
      $('.img-loader').show()
      var th = $(this)
      var data = new FormData();
        data.append('type', 'subject');
        var id = $(this).parent().find('[name="activity_id[]"]').val()
        data.append('id', id);
      jQuery.each($(this)[0].files, function(i, file) {
          data.append('file[]', file);
      });
      jQuery.ajax({
          url: '<?php echo base_url() ?>/admin/subject_dummy',
          data: data,
          // dataType: 'json',
          cache: false,
          contentType: false,
          processData: false,
          method: 'POST',
          type: 'POST', // For jQuery < 1.9
          complete: function(response){
            response = response.responseText
            response = response.split('[').join('')
            response = response.split(']').join(',')
            if( id in subject_file ) {
                subject_file[id] += response
            }
            else{
              subject_file[id] = response
            }
            var total = subject_file[id].split(',')
            total = total.filter(function(e){return e});
            var formData = new FormData(); //Array  
            formData.append('id', total);
            jQuery.ajax({
              url: '<?php echo base_url() ?>/admin/get_subject_file',
              data: formData,
              dataType: 'json',
              cache: false,
              contentType: false,
              processData: false,
              method: 'POST',
              type: 'POST', // For jQuery < 1.9
              success: function(response){
                th.parent().find('tbody').parent().show()
                th.parent().find('tbody').empty()
                for (var i = 0; i < response.length; i++) {
                  th.parent().find('tbody').append('<tr>')
                  th.parent().find('tbody').append('</tr>')
                  th.parent().find('tbody tr').last().append('<td style="border: 1px solid #ccc;">'+ (i + 1) +'</td>')
                  th.parent().find('tbody tr').last().append('<td style="border: 1px solid #ccc;">'+ response[i].file +'</td>')
                  th.parent().find('tbody tr').last().append('<td style="border: 1px solid #ccc;"><img src="<?php echo base_url() ?>/admin_assets//img/cancel.png" class="delete-file" data-id="'+ response[i].id +'" title="delete" alt="delete" width="25" height="25"></td>')
                }
                delete_file()
                th.parent().find('[name="file_id[]"]').val(subject_file[id])
                $('.img-loader').hide() 
              }
          })
          }
      });
    });
}
change_file()    
</script>

<div class="img-loader" style="display: none"><img src="<?php echo base_url('admin_assets/img/Ajax-loader.gif') ?>"></div>