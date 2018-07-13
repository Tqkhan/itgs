
 <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Create Training</h4>
        </div>
        <div class="modal-body">
            <form method="post" action="<?php echo base_url() ?>admin/insert_employee" enctype="multipart/form-data">

                        <div class="row">
                        <div class="col-sm-12">
                                <div class="panel panel-bd ">
                                    
                                    <div class="panel-body">

                                        <div class="form-group row">
            <label for="example-text-input" class="col-sm-4 col-form-label">Client Name<span class="required">*</span></label>
            <div class="col-sm-8">
                <input class="form-control" type="text" value="" id="example-text-input" placeholder="">
            </div>
           
        </div> 
        <div class="form-group row">
            <label for="example-text-input" class="col-sm-4 col-form-label">Training Date<span class="required">*</span></label>
            <div class="col-sm-8">
                <input class="form-control" type="date" value="" id="example-text-input" placeholder="">
            </div>
           
        </div>
        
        <div class="form-group row">
           
            <label for="example-text-input" class="col-sm-4 col-form-label">Training Time<span class="required">*</span></label>
           <div class="col-sm-8">
                <input class="form-control" type="time" value="" id="example-text-input" placeholder="">
            </div>
             
        </div>
        <div class="form-group row">
           
          <label for="example-text-input" class="col-sm-4 col-form-label">Venue<span class="required">*</span></label>
           <div class="col-sm-8">
                <input class="form-control" type="text" value="" id="example-text-input" placeholder="">
            </div>
             
        </div>
        <div class="form-group row">
           
            <label for="example-text-input" class="col-sm-4 col-form-label">Training Participant<span class="required">*</span></label>
           <div class="col-sm-8">
                <input class="form-control" type="text" value="" id="example-text-input" placeholder="">
            </div>
             
        </div>
         <div class="form-group row">
          <label for="example-text-input" class="col-sm-4 col-form-label">Tag Other Employee<span class="required">*</span></label>
           <div class="col-sm-8">
                <input class="form-control" type="text" value="" id="example-text-input" placeholder="">
            </div>
        </div>
       <!--  <div class="form-group row">
          
           <div class="col-sm-8">
               <div id="map" style="height: 300px; width: 535px; background-color: black;"></div>
            </div>
        </div> -->
     
         
         <div class="form-group row">
            
             
            <div class="col-sm-12">
                <button type="submit" class="btn btn-primary pull-right">Submit</button>
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
                        <div class="col-sm-12 col-md-12">
                            <div class="panel panel-bd">
                                <div class="panel-body">
                                    <!-- calender -->
                                    <div id='calendar'></div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                        right: 'month,agendaWeek,agendaDay,listMonth'
                    },
                    defaultDate: '<?php echo date("Y-m-d") ?>',
                    navLinks: true, // can click day/week names to navigate views
                    businessHours: true, // display business hours
                    editable: true,
                    droppable: true, // this allows things to be dropped onto the calendar
                    drop: function () {
                        // is the "remove after drop" checkbox checked?
                        if ($('#drop-remove').is(':checked')) {
                            // if so, remove the element from the "Draggable Events" list
                            $(this).remove();
                        }
                    },
                    events: [
                        <?php 
                            foreach ($records as $record) {
                                //if ($record['start_date'] != null && $record['start_date'] != '' && $record['end_date'] != null && $record['end_date'] != '') {
                        ?>
                        {
                            id: 'event-<?php echo $record['id'] ?>',
                            title: '<?php echo $record['type'] ?>',
                            start: '<?php echo $record['date'] ?>T<?php echo $record['time'] ?>',
                            url: "<?php echo base_url('admin/interview_step_1/') ?>"
                            //end: '<?php echo $record['end_date'] ?>T<?php echo $record['end_timings'] ?>'
                        },
                        <?php  } ?>
                    ]
                });

            });
        </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWpkEfFdt3PoR3FkhmDzCwopf4pixFvcI"></script>
    <script>
      // In this example, we center the map, and add a marker, using a LatLng object
      // literal instead of a google.maps.LatLng object. LatLng object literals are
      // a convenient way to add a LatLng coordinate and, in most cases, can be used
      // in place of a google.maps.LatLng object.

      var map;
      function initialize() {
        var mapOptions = {
          zoom: 8,
          center: {lat: -34.397, lng: 150.644}
        };
        map = new google.maps.Map(document.getElementById('map'),
            mapOptions);

        var marker = new google.maps.Marker({
          // The below line is equivalent to writing:
          // position: new google.maps.LatLng(-34.397, 150.644)
          position: {lat: -34.397, lng: 150.644},
          map: map
        });

        // You can use a LatLng literal in place of a google.maps.LatLng object when
        // creating the Marker object. Once the Marker object is instantiated, its
        // position will be available as a google.maps.LatLng object. In this case,
        // we retrieve the marker's position using the
        // google.maps.LatLng.getPosition() method.
        var infowindow = new google.maps.InfoWindow({
          content: '<p>Marker Location:' + marker.getPosition() + '</p>'
        });

        google.maps.event.addListener(marker, 'click', function() {
          infowindow.open(map, marker);
        });
      }

      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
