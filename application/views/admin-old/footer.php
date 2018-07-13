 
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="<?php echo base_url() ?>assets/js/jquery-2.1.1.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?php echo base_url() ?>assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Flot -->
    <script src="<?php echo base_url() ?>assets/js/plugins/flot/jquery.flot.js"></script>
    <script src="<?php echo base_url() ?>assets/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="<?php echo base_url() ?>assets/js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="<?php echo base_url() ?>assets/js/plugins/flot/jquery.flot.pie.js"></script>
    <script src="<?php echo base_url() ?>assets/js/plugins/flot/jquery.flot.symbol.js"></script>
    <script src="<?php echo base_url() ?>assets/js/plugins/flot/jquery.flot.time.js"></script>

    <!-- Peity -->
    <script src="<?php echo base_url() ?>assets/js/plugins/peity/jquery.peity.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/demo/peity-demo.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="<?php echo base_url() ?>assets/js/inspinia.js"></script>
    <script src="<?php echo base_url() ?>assets/js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="<?php echo base_url() ?>assets/js/plugins/jquery-ui/jquery-ui.min.js"></script>

  <script src="<?php echo base_url() ?>assets/js/plugins/jeditable/jquery.jeditable.js"></script>

    <!-- Data Tables -->
    <script src="<?php echo base_url() ?>assets/js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url() ?>assets/js/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script src="<?php echo base_url() ?>assets/js/plugins/dataTables/dataTables.responsive.js"></script>
    <script src="<?php echo base_url() ?>assets/js/plugins/dataTables/dataTables.tableTools.min.js"></script>
 <!-- Sparkline -->
    <script src="<?php echo base_url() ?>assets/js/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- Sparkline demo data  -->
    <script src="<?php echo base_url() ?>assets/js/demo/sparkline-demo.js"></script>

    <!-- ChartJS-->
    <script src="<?php echo base_url() ?>assets/js/plugins/chartJs/Chart.min.js"></script>
  <script>
        $(document).ready(function() {
            $('.dataTables-example').dataTable({
                responsive: true,
                "dom": 'T<"clear">lfrtip',
                "tableTools": {
                    "sSwfPath": "<?php echo base_url() ?>assets/js/plugins/dataTables/swf/copy_csv_xls_pdf.swf"
                }
            });

            /* Init DataTables */
            var oTable = $('#editable').dataTable();

            /* Apply the jEditable handlers to the table */
            // oTable.$('td').editable( '../example_ajax.php', {
            //     "callback": function( sValue, y ) {
            //         var aPos = oTable.fnGetPosition( this );
            //         oTable.fnUpdate( sValue, aPos[0], aPos[1] );
            //     },
            //     "submitdata": function ( value, settings ) {
            //         return {
            //             "row_id": this.parentNode.getAttribute('id'),
            //             "column": oTable.fnGetPosition( this )[2]
            //         };
            //     },

            //     "width": "90%",
            //     "height": "100%"
            // } );


        });

        function fnClickAddRow() {
            $('#editable').dataTable().fnAddData( [
                "Custom row",
                "New row",
                "New row",
                "New row",
                "New row" ] );

        }
    </script>
<style>
    body.DTTT_Print {
        background: #fff;

    }
    .DTTT_Print #page-wrapper {
        margin: 0;
        background:#fff;
    }

    button.DTTT_button, div.DTTT_button, a.DTTT_button {
        border: 1px solid #e7eaec;
        background: #fff;
        color: #676a6c;
        box-shadow: none;
        padding: 6px 8px;
    }
    button.DTTT_button:hover, div.DTTT_button:hover, a.DTTT_button:hover {
        border: 1px solid #d2d2d2;
        background: #fff;
        color: #676a6c;
        box-shadow: none;
        padding: 6px 8px;
    }

    .dataTables_filter label {
        margin-right: 5px;

    }
</style>
</body>
</html>

<?php include 'all_scripts.php'; ?>

    <script>
        $(document).ready(function(){
            $('.contact-box').each(function() {
                animationHover(this, 'pulse');
            });
        });
    </script>


    <script>
        $(document).ready(function(){

            $('#loading-example-btn').click(function () {
                btn = $(this);
                simpleLoad(btn, true)

                // Ajax example
//                $.ajax().always(function () {
//                    simpleLoad($(this), false)
//                });

                simpleLoad(btn, false)
            });
        });

        function simpleLoad(btn, state) {
            if (state) {
                btn.children().addClass('fa-spin');
                btn.contents().last().replaceWith(" Loading");
            } else {
                setTimeout(function () {
                    btn.children().removeClass('fa-spin');
                    btn.contents().last().replaceWith(" Refresh");
                }, 2000);
            }
        }
    </script>


          <?php 
          $months=["January", "February", "March", "April", "May", "June", "July","August","September","October","November","December"];

          $response=[];

         foreach ($months as $month) {
            $response_pending[]=$this->db->get_where('lead',['month'=>$month,'status'=>'pending'])->num_rows();
            $response_completed[]=$this->db->get_where('lead',['month'=>$month,'status'=>'completed'])->num_rows();
                 }
         
           ?>
     <script>
        $(document).ready(function() {

            var lineData = {
                labels: ["January", "February", "March", "April", "May", "June", "July","August","September","October","November","December"],
                datasets: [
                    {
                        label: "Example dataset",
                        fillColor: "rgba(220,220,220,0.5)",
                        strokeColor: "rgba(220,220,220,1)",
                        pointColor: "rgba(220,220,220,1)",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(220,220,220,1)",
                        data: <?php  echo json_encode($response_pending); ?>
                    },
                    {
                        label: "Example dataset",
                        fillColor: "rgba(26,179,148,0.5)",
                        strokeColor: "rgba(26,179,148,0.7)",
                        pointColor: "rgba(26,179,148,1)",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(26,179,148,1)",
                        data: <?php  echo json_encode($response_completed); ?>
                    }
                ]
            };

            var lineOptions = {
                scaleShowGridLines: true,
                scaleGridLineColor: "rgba(0,0,0,.02)",
                scaleGridLineWidth: 1,
                bezierCurve: true,
                bezierCurveTension: 0.4,
                pointDot: true,
                pointDotRadius: 4,
                pointDotStrokeWidth: 1,
                pointHitDetectionRadius: 20,
                datasetStroke: true,
                datasetStrokeWidth: 2,
                datasetFill: true,
                responsive: true,
            };


            var ctx = document.getElementById("lineChart").getContext("2d");
            var myNewChart = new Chart(ctx).Line(lineData, lineOptions);

        });

        
$(function() {

    Morris.Bar({
        element: 'morris-bar-chart',
        data: [{ y: '2006', a: 60, b: 50 },
            { y: '2007', a: 75, b: 65 },
            { y: '2008', a: 50, b: 40 },
            { y: '2009', a: 75, b: 65 },
            { y: '2010', a: 50, b: 40 },
            { y: '2011', a: 75, b: 65 },
            { y: '2012', a: 100, b: 90 } ],
        xkey: 'y',
        ykeys: ['a', 'b'],
        labels: ['Series A', 'Series B'],
        hideHover: 'auto',
        resize: true,
        barColors: ['#1ab394', '#cacaca'],
    });

 

});

    


    $('#insert_lead').click(function(){


        var formData = new FormData( $("#lead_form")[0] );
        $.ajax({
            url: '<?php echo base_url(); ?>admin/insert_request',
            type : 'POST',
            data : formData,
            async : false,
            cache : false,
            contentType : false,
            processData : false,
            success : function(data) {
               var final=JSON.parse(data);
              
               if(final.status==true){
             swal({
  title: "Success",
  text: "Lead Has Been Successfully Created..",
  html: true
},
    function(){
          window.location.href='<?php echo base_url() ?>admin/view_lead';
    });
               }else if(final.status==false){
       
          swal({
  title: "Error",
  text: final.message,
  html: true
},
    function(){
    });

               }

            }
        });

    });

    </script>


