<style class="cp-pen-styles">
.messages ul {
    padding-bottom:  30px;
    float:  left;
    width:  100%;
    clear:  both;
}
#frame .content .messages {
  height: 600px;
  min-height: calc(100% - 93px);
  max-height: calc(100% - 93px);
  overflow-y: scroll;
  overflow-x: hidden;
}
@media screen and (max-width: 735px) {
  #frame .content .messages {
    max-height: calc(100% - 105px);
  }
}
#frame .content .messages::-webkit-scrollbar {
  width: 8px;
  background: transparent;
}
#frame .content .messages::-webkit-scrollbar-thumb {
  background-color: rgba(0, 0, 0, 0.3);
}
#frame .content .messages ul li {
  display: inline-block;
  clear: both;
  float: left;
  margin: 15px 15px 5px 15px;
  width: calc(100% - 25px);
  font-size: 0.9em;
}
#frame .content .messages ul li:nth-last-child(1) {
  margin-bottom: 20px;
}
#frame .content .messages ul li.sent img {
  margin: 6px 8px 0 0;
}
#frame .content .messages ul li.sent p {
  background: #435f7a;
  color: #f5f5f5;
}
#frame .content .messages ul li.replies img {
  float: right;
  margin: 6px 0 0 8px;
}
#frame .content .messages ul li.replies p {
  background: #f5f5f5;
  float: right;
}
#frame .content .messages ul li img {
  width: 22px;
  border-radius: 50%;
  float: left;
}
#frame .content .messages ul li p {
  display: inline-block;
  padding: 10px 15px;
  border-radius: 20px;
  max-width: 205px;
  line-height: 130%;
}
@media screen and (min-width: 735px) {
  #frame .content .messages ul li p {
    max-width: 300px;
  }
}
#frame .content .message-input {
  position: absolute;
  bottom: 0;
  width: 100%;
  z-index: 99;
}
#frame .content .message-input .wrap {
  position: relative;
}
#frame .content .message-input .wrap input {
  font-family: "proxima-nova",  "Source Sans Pro", sans-serif;
  float: left;
  border: none;
  width: calc(100% - 90px);
  padding: 11px 32px 10px 8px;
  font-size: 0.8em;
  color: #32465a;
}
@media screen and (max-width: 735px) {
  #frame .content .message-input .wrap input {
    padding: 15px 32px 16px 8px;
  }
}
#frame .content .message-input .wrap input:focus {
  outline: none;
}
#frame .content .message-input .wrap .attachment {
  position: absolute;
  right: 60px;
  z-index: 4;
  margin-top: 10px;
  font-size: 1.1em;
  color: #435f7a;
  opacity: .5;
  cursor: pointer;
}
@media screen and (max-width: 735px) {
  #frame .content .message-input .wrap .attachment {
    margin-top: 17px;
    right: 65px;
  }
}
#frame .content .message-input .wrap .attachment:hover {
  opacity: 1;
}
#frame .content .message-input .wrap button {
  float: right;
  border: none;
  width: 50px;
  padding: 12px 0;
  cursor: pointer;
  background: #32465a;
  color: #f5f5f5;
}
@media screen and (max-width: 735px) {
  #frame .content .message-input .wrap button {
    padding: 16px 0;
  }
}
#frame .content .message-input .wrap button:hover {
  background: #435f7a;
}
#frame .content .message-input .wrap button:focus {
  outline: none;
}
#frame .content .message-input .wrap .attachment:hover {
  opacity: 1;
}
#frame .content .message-input .wrap button {
  float: right;
  border: none;
  width: 50px;
  padding: 12px 0;
  cursor: pointer;
  background: #32465a;
  color: #f5f5f5;
}
@media screen and (max-width: 735px) {
  #frame .content .message-input .wrap button {
    padding: 16px 0;
  }
}
#frame .content .message-input .wrap button:hover {
  background: #435f7a;
}
#frame .content .message-input .wrap button:focus {
  outline: none;
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
                <h1>Discussion Board</h1>
                <small></small>
                <ol class="breadcrumb">
                    <li><i class="pe-7s-home"></i> Home</li>
                    <li class="active">Discussion Board</li>
                </ol>
            </div>
        </div>
        <!-- /. Content Header (Page header) -->

            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-bd ">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4>Discussion Board</h4>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="row " id="frame">
                                <div class="col-lg-12 content">
                                    <div class="messages" style="margin-left: -39px;">
                                        <ul style="">
                                          <?php 
                                            foreach ($chat as $c) {
                                          ?>
                                          <?php 
                                            $login_id = $this->session->userdata('login_id');
                                            $id = $this->session->userdata('id');
                                            if ($login_id && $login_id == $c['sender_id'] && $c['sender_type'] == 'login') {
                                              echo '<li class="replies"><img src="'.base_url().'admin_assets/assets/dist/img/avatar4.png" alt="" /><p><strong>'.$c['sender_name'].'</strong><br>'.$c['message'].'</p></li>';
                                            }
                                            elseif ($id && $id == $c['sender_id'] && $c['sender_type'] == 'employee') {
                                              echo '<li class="replies"><img src="'.base_url().'admin_assets/assets/dist/img/avatar4.png" alt="" /><p><strong>'.$c['sender_name'].'</strong><br>'.$c['message'].'</p></li>';
                                            }
                                            else{
                                              echo '<li class="sent"><img src="'.base_url().'admin_assets/assets/dist/img/avatar4.png" alt="" /><p><strong>'.$c['sender_name'].'</strong><br>'.$c['message'].'</p></li>';
                                            }
                                          ?>
                                           <!--  <li class="sent">
                                                <img src="<?php echo base_url() ?>admin_assets/assets/dist/img/avatar4.png" alt="" />
                                                <p><?php echo $c['message'] ?></p>
                                            </li>
                                            <li class="replies">
                                                <img src="<?php echo base_url() ?>admin_assets/assets/dist/img/avatar4.png" alt="" />
                                                <p><?php echo $c['message'] ?></p>
                                            </li> -->
                                          <?php } ?>
                                        </ul>
                                    </div>
                                    <div class="message-input">
                                        <div class="wrap">
                                        <input type="text" placeholder="Write your message..." style="background-color: #f5f5f5" />
                                        
                                        <button class="submit" style="margin-right: 33px;margin-top: -4px;"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
    </div>
</div>
</div>

</div>
<!-- /.main content -->
</div>
<!-- /#page-wrapper -->
</div>
<script >$(".messages").animate({ scrollTop: $(document).height() }, "fast");
<?php 
if ($this->session->userdata('login_id')) {
?>
var sender_name = '<?php echo $this->session->userdata('login_name') ?>';
<?php      
}
elseif ($this->session->userdata('id')) {
?>
var sender_name = '<?php echo $this->session->userdata('employee_name') ?>';
<?php     
}
?>
$("#profile-img").click(function() {
    $("#status-options").toggleClass("active");
});

$(".expand-button").click(function() {
  $("#profile").toggleClass("expanded");
    $("#contacts").toggleClass("expanded");
});

$("#status-options ul li").click(function() {
    $("#profile-img").removeClass();
    $("#status-online").removeClass("active");
    $("#status-away").removeClass("active");
    $("#status-busy").removeClass("active");
    $("#status-offline").removeClass("active");
    $(this).addClass("active");
    
    if($("#status-online").hasClass("active")) {
        $("#profile-img").addClass("online");
    } else if ($("#status-away").hasClass("active")) {
        $("#profile-img").addClass("away");
    } else if ($("#status-busy").hasClass("active")) {
        $("#profile-img").addClass("busy");
    } else if ($("#status-offline").hasClass("active")) {
        $("#profile-img").addClass("offline");
    } else {
        $("#profile-img").removeClass();
    };
    
    $("#status-options").removeClass("active");
});

function newMessage() {
    message = $(".message-input input").val();
    if($.trim(message) == '') {
        return false;
    }
    var formData = new FormData(); //Array  
    formData.append('message', message);
    jQuery.ajax({
      url: '<?php echo base_url() ?>/admin/chat_board',
      data: formData,
      dataType: 'json',
      cache: false,
      contentType: false,
      processData: false,
      method: 'POST',
      type: 'POST', // For jQuery < 1.9
      success: function(response){}
    })
    $('<li class="replies"><img src="<?php echo base_url() ?>admin_assets/assets/dist/img/avatar4.png" alt="" /><p><strong>'+sender_name+'</strong><br>' + message + '</p></li>').appendTo($('.messages ul'));
    $('.message-input input').val(null);
    $('.contact.active .preview').html('<span>You: </span>' + message);
    $(".messages").animate({ scrollTop: $(document).height() }, "fast");
};

$('.submit').click(function() {
  newMessage();
});

$(window).on('keydown', function(e) {
  if (e.which == 13) {
    newMessage();
    return false;
  }
});
//# sourceURL=pen.js
</script>
<!-- /#wrapper -->
<!-- START CORE PLUGINS -->