
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyA_3kKhjo-vW7Qx8U_I9JoWM9q90oLkmJ8&libraries=places"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-locationpicker/0.1.12/locationpicker.jquery.min.js"></script>




  <div class="modal fade" id="show_modal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Update/View Meeting</h4>
        </div>
        <div class="modal-body">
 <form method="post" action="<?php echo base_url()?>admin/update_modal_meeting" enctype="multipart/form-data">

                        <div class="row">
                        <div class="col-sm-12">
                        <div class="panel panel-bd ">

                        <div class="panel-body">
        <div class="form-group row">

          <label for="example-text-input" class="col-sm-4 col-form-label">Title<span class="required">*</span></label>
           <div class="col-sm-8">
                <input class="form-control title" type="text"  disabled="" name="title" id="title" placeholder="">
            </div>

            <input type="hidden" name="meetingID" class="meetingID">
        </div>
       <div class="form-group row">

            <label for="example-text-input" class="col-sm-4 col-form-label">Meeting Time<span class="required">*</span></label>
           <div class="col-sm-8">
                <input class="form-control meeting_time" type="time" readonly=""   name="meeting_time" id="meeting_time" placeholder="">
            </div>
        </div>
        <div class="form-group row">

          <label for="example-text-input" class="col-sm-4 col-form-label">Venue<span class="required">*</span></label>
           <div class="col-sm-8">
                <input class="form-control " type="text" readonly=""  name="venue" id="venue" placeholder="">
            </div>
        </div>
        <div class="form-group row">

          <label for="example-text-input" class="col-sm-4 col-form-label">Notes<span class="required">*</span></label>
           <div class="col-sm-8">
                <input class="form-control" type="text" readonly=""  name="notes" id="notes" placeholder="">
            </div>
        </div>
        <div class="form-group row">

          <label for="example-text-input" class="col-sm-4 col-form-label">Location<span class="required">*</span></label>
           <div class="col-sm-8">
                <input class="form-control " type="text" readonly=""  name="tag_other_employee" id="tag_other_employee" placeholder="">
            </div>
        </div>
        <div class="form-group row">

           <div class="col-sm-4">
            <label>Lat:</label>
                <input class="form-control " type="text" readonly=""  id="lat" placeholder="">
              
               
            </div>
           <div class="col-sm-4">
            <label>Lon:</label>
                <input class="form-control " type="text" readonly=""  id="lon" placeholder="">
              
               
            </div>
        </div>

        <div class="form-group row">

           <div class="col-sm-8">
               <div id="map" style="height: 300px; width: 535px; background-color: black;"></div>


            </div>
        </div>


       </div>
                                </div>
                            </div>
                        </div>
                       </form>

        </div>
      </div>

    </div>
  </div>

<!-- 
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
 -->
      <!-- Modal content-->
<!--       <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Create Meeting</h4>
        </div>
        <div class="modal-body">



        </div>
      </div>

    </div>
  </div> -->
            <!-- /.Navbar  Static Side -->
            <div class="containter">

            <div class="control-sidebar-bg"></div>
            <!-- Page Content -->
            <div id="page-wrapper">
                <!-- main content -->
                <div class="content">
                    <!-- Content Header (Page header) -->
                    <div class="content-header">
                        <div class="header-icon"><i class="pe-7s-back-2"></i></div>
                        <div class="header-title">
                            <h1>Calender</h1>
                            <small></small>
                            <ol class="breadcrumb">
                                <li><a href="<?php echo base_url() ?>admin/client_index"><i class="pe-7s-home"></i> Home</a></li>
                                <li class="active">Calender</li>
                            </ol>
                        </div>
                    </div> <!-- /. Content Header (Page header) -->
                    <div class="row">
                        <div class="col-sm-12 col-md-3">
                            <div class="panel panel-bd">
                                <div class="panel-body">
                                    <div id='external-events'>
                                        <h4><a class="btn" href="<?php echo base_url() ?>admin/new_meeting">Create Meeting</a></h4>

                                              <?php 
                                         foreach ($assigned as $key ) {
                                             $array[]=$key['meetingID'];
                                         }      
                                         ?>
                            <?php foreach ($meetings as $meeting): ?>
                                <?php if (!in_array($meeting['meetingID'], $array)): ?>
                                        <div class='fc-event' data-id="<?php echo $meeting['meetingID'] ?>" data-userID="11"><?php echo $meeting['title'] ?></div>
                                                
                                            <?php endif ?>
                                                   
                                            

                                            
                                        <?php endforeach ?>
                                       <!--  <p>
                                            <input type='checkbox' id='drop-remove' />
                                            <label for='drop-remove'>remove after drop</label>
                                        </p> -->
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-12 col-md-9">
                            <div class="panel panel-bd">
                                <div class="panel-body">
                                    <!-- calender -->
                                    <div id='calendar'></div>
                                </div>
                            </div>
                        </div>
                    </div>

                     <!-- <input type="text" class="form-control" id="us3-address" /> -->

                        <div style="height: 450px;" ></div>
              <!--        <div class="m-t-small">
                            <label class="p-r-small col-sm-1 control-label">Lat.:</label>

                            <div class="col-sm-3">
                                <input type="text" class="form-control" style="width: 110px" id="us3-lat" />
                            </div>
                            <label class="p-r-small col-sm-2 control-label">Long.:</label>

                            <div class="col-sm-3">
                                <input type="text" class="form-control" style="width: 110px" id="us3-lon" />
                            </div>
                        </div> -->
                </div> <!-- /.main content -->
            </div><!-- /#page-wrapper -->
        </div><!-- /#wrapper -->
        <!-- START CORE PLUGINS -->

        <script>
            $(document).ready(function () {
                

                "use strict"; // Start of use strict

                /* initialize the external events
                 -----------------------------------------------------------------*/

                $('#external-events .fc-event').each(function () {

                    // store data so the calendar knows to render an event upon drop
                    $(this).data('event', {
                        title: $.trim($(this).text()), // use the element's text as the event title
                        stick: true // maintain when user navigates (see docs on the renderEvent method)
                    });
                    var eventID=$(this).data('id');
                    $(this).click(function(){
                     
//                      alertify.prompt("Press 1 for Delete , 2 for View/Update Meeting","",
//                      function(a,b){
//                          if(b==1){
//                              alertify.confirm("Do you want to delete it Permanently ?"
//                         ,function(){
//               $.ajax({
//                 url:"<?php echo base_url() ?>admin/delete_event_permanent",
//                 type:"post",
//                 data:{meetingID:eventID},
//                 success:function(argument) {
//                      alertify.alert(argument);

//                     window.location.href='<?php echo base_url() ?>admin/calender';
//                                     }
//                                 })
                 
//                         },function(){
// alertify.error("Cancelled");
//                         });  
//                          }else if(b==2){
                           window.location.href='<?php echo base_url() ?>admin/edit_meeting/'+eventID;   
//                          }
                      
                         
//                      },function(){});

                    });

                   
                    // make the event draggable using jQuery UI
                    $(this).draggable({
                        zIndex: 999,
                        revert: true, // will cause the event to go back to its
                        revertDuration: 0  //  original position after the drag

                    });


                });

  
                /* initialize the calendar
                 -----------------------------------------------------------------*/

                $('#calendar').fullCalendar({
                    header: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'month,agendaWeek,agendaDay'
                    },
                    defaultDate: '<?php echo date("Y-m-d") ?>',
                    navLinks: true, // can click day/week names to navigate views
                    businessHours: true, // display business hours
                    editable: true,
                    droppable: true, // this allows things to be dropped onto the calendar
                    drop: function (date, allDay) {

          var defaultDuration = moment.duration($('#calendar').fullCalendar('option', 'defaultTimedEventDuration'));
          var end = date.clone().add(defaultDuration); // on drop we only have date given to us
          // console.log('end is ' + end.format());

        // retrieve the dropped element's stored Event Object
        var originalEventObject = $(this).data('eventObject');

      
          $(this).remove();
        // }
        var jsonResp="";

      $.ajax({
                        url:"<?php echo base_url() ?>admin/assign_meeting",
                        data:{title:$.trim($(this).text()),meeting_date:date.format(),meetingID:$(this).data('id'),end:end.format()},
                        type:"post",
                        success:function(resp){
                          resp=JSON.parse(resp);
                          alertify.success(resp.message+", Redirecting..");

                    setTimeout(function(){
                      window.location.href='<?php echo base_url() ?>admin/calender';
                    },1000);

                        }
                    });

      },    selectable: true,
    select: function(start, end, jsEvent, view) {


    
         var allDay = !start.hasTime() && !end.hasTime();
         alertify.alert(["Event Start date: " + moment(start).format(),
                "Event End date: " + moment(end).format(),
                "AllDay: " + allDay].join("\n"));
       
    },eventClick: function(calEvent, jsEvent, view) {
            
      

               var sessionID='<?php echo $_SESSION['login_id']; ?>';
           var clientID=calEvent.clientID;
                
                if (sessionID==clientID) {

      alertify.prompt("Press 1 for Delete , 2 For View/Edit Details","",function(a,b){
         if (b==1) {
         $.ajax({
                url:"<?php echo base_url() ?>admin/delete_event",
                type:"post",
                data:{meetingID:calEvent.id,    
                },
                success:function(argument) {
                     $('#calendar').fullCalendar('removeEvents',calEvent.id);
                     alertify.error(argument+", Redirecting..");
                      setTimeout(function(){
                      window.location.href='<?php echo base_url() ?>admin/calender';
                    },1000);

                }
            });

     }else if(b==2){

     window.location.href='<?php echo base_url() ?>admin/edit_meeting/'+calEvent.id;
     }
     },function(){
                     alertify.error("Cancel");

     });

  } else{

     window.location.href='<?php echo base_url() ?>admin/view_meeting/'+calEvent.id;


  }

     
  // },
  // function(){
  //   alertify.error('Cancel');
  // });
           

        // change the border color just for fun
        $(this).css('border-color', 'red');

    }, eventDrop: function(event, delta, revertFunc) {
            

               var sessionID='<?php echo $_SESSION['login_id']; ?>';
           var clientID=event.clientID;
                if (sessionID==clientID) {

            $.ajax({
                url:"<?php echo base_url() ?>admin/update_event",
                type:"post",
                data:{meetingID:event.id,
                    meeting_date:event.start.format(),end:event.start.format()
                },
                success:function(argument) {
                     alertify.success("Updated Successfully");
                   
                }
            });
                }else{
                alertify.alert("You are not Authorised to Update Meeting..",function(){
                    window.location.href='<?php echo base_url() ?>admin/calender';
                });
                }



    }              
   
                });

var obj={};
   var final;
                $.ajax({
        url:"<?php echo base_url() ?>admin/get_meetings",
        success:function(meetings) {
             // final=meetings;
             var final=JSON.parse(meetings);

for(var i = 0; i < final.length; i++) {
    var obj = final[i];

$('#calendar').fullCalendar( 'renderEvent', obj, true);

}

            
        }
    });


            });
        </script>
<!--     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA_3kKhjo-vW7Qx8U_I9JoWM9q90oLkmJ8" ></script>

 --> 
 <script>
                            
                              // $('#myModal').on('shown.bs.modal', function () {
                            


                                //  $('#map').locationpicker({
                                // location: {
                                //     latitude: $('#lat').val(),
                                //     longitude: $('#lon').val()
                                // },
                                // inputBinding: {
                                //     latitudeInput: $('#us3-lat'),
                                //     longitudeInput: $('#us3-lon'),
                                //     radiusInput: $('#us3-radius'),
                                //     locationNameInput: $('#us3-address')
                                // }
                                //  });
                       // $('#map2').locationpicker();
                              // });
                        </script>
                        
                        
                        
                        
 <script type='text/javascript'>
    var element = $(this);
    var map;

    function initialize(myCenter) {
        var marker = new google.maps.Marker({
            position: myCenter
        });

      var mapProp = {
            center: myCenter,
            zoom: 10,
            //draggable: false,
            //scrollwheel: false,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };

        map = new google.maps.Map(document.getElementById("map"), mapProp);
        marker.setMap(map);
    };


    $('#myModal').on('shown.bs.modal', function(e) {
       
        
        alert("asdasda");
        // initialize(new google.maps.LatLng($('#lat').val(), $('#lon').val()));
    });

</script>



