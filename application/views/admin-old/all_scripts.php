
		 <script type="text/javascript">

// $(document).ready(function(){
//          alert();

// });

$('#clientID').change(function() {
	 var categoryID=$(this).val();

	 if(categoryID!=""){
			$('[name=client_name]').prop("required",false);
			$('[name=client_email]').prop("required",false);
			$('[name=company_name]').prop("required",false);
			$('[name=client_phone]').prop("required",false);
			$('[name=no_of_employees]').prop("required",false);
			$('[name=company_address]').prop("required",false);
	 }

	 if(categoryID!=""){
			$('#client_name').hide();
			$('#client_email').hide();
			$('#company_name').hide();
			$('#client_phone').hide();
			$('#no_of_employees').hide();
			$('#client_address').hide();
	 }else{
			$('#client_name').show();
			$('#client_email').show();
			$('#company_name').show();
			$('#client_phone').show();
			$('#no_of_employees').show();
			$('#client_address').hide();
	 }
	 // alert(categoryID);
});

$(document).ready(function() {
	 var categoryID=$('.categoryID').val();
	 $.ajax({
		url:"<?php echo base_url(); ?>admin/get_categories",
		type:"post",
		data:{categoryID:categoryID},
		success:function(resp){
			 $('#subCategoryID').html(resp);
		}

	 });

	 // alert(categoryID);
});

 $('[name=company_name]').keyup(function(){

			 var company_name=$(this).val();
			 $.ajax({
				url:"<?php echo base_url() ?>admin/check_client",
				data:{company_name:company_name},
				type:"post",
				success:function(resp){
					if(resp==1){
						 $('#company_error').html("<p class='label label-danger'>Company is Already Assigned</p>");
						 $('.btn_submit').prop("disabled","disabled");
					}else{
						 $('#company_error').html("");
						 $('.btn_submit').prop("disabled",false);
					}
				}
			 });
 });

		 </script>


		 <script>
		$(document).ready(function() {
		$("body").on("click",".add-more",function(){
				var html = $(".after-add-more").first().clone();

				//  $(html).find(".change").prepend("<label for=''>&nbsp;</label><br/><a class='btn btn-danger remove'>- Remove</a>");

					$(html).find(".change").html("<a class='btn btn-danger remove'>-  </a> "+' <a class="btn btn-success add-more ">+ </a>');
				$(".after-add-more").last().after(html);
		});
		$("body").on("click",".remove",function(){
				$(this).parents(".after-add-more").remove();
		});
});
</script>
