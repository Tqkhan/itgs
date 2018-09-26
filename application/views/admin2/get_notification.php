<?php 



foreach($not as $noti){

 if($_SESSION['client_id'] && $noti['user_type']!="Memo"){
?>



 <li>
    <a class="rad-content not-id" data-id="<?php echo $noti['id'] ?>" href="<?php echo base_url() ?>/<?php echo $noti['url'] ?>">
        <div class="pull-left"><i class="fa fa-bell  fa-2x color-green"></i></div>
        <div class="rad-notification-body">
            
             
             <?php if ($noti['view']==1): ?>
                <div class="sm-text">
                    
                    <?php echo $noti['user_id']==0 && $noti['user_type']=="Memo" ? "Memo ".$noti['title'] : " ". $noti['title'] ?>
                </div>
                <?php else: ?>
                <div class="lg-text">
                    <?php echo $noti['user_id']==0 && $noti['user_type']=="Memo" ? "Memo ".$noti['title'] : " ". $noti['title'] ?>
                </div>
                <?php endif ?>   
            <div class="sm-text"><?php echo $noti['message'] ?></div>
        </div>
    </a>
</li>

<?php
 } 
 if (!$_SESSION['client_id']) {
     ?>
<li>
    <a class="rad-content not-id" data-id="<?php echo $noti['id'] ?>" href="<?php echo base_url() ?>/<?php echo $noti['url'] ?>">
        <div class="pull-left"><i class="fa fa-bell  fa-2x color-green"></i></div>
        <div class="rad-notification-body">
            
             
             <?php if ($noti['view']==1): ?>
                <div class="sm-text">
                    
                    <?php echo $noti['user_id']==0 && $noti['user_type']=="Memo" ? "Memo ".$noti['title'] : " ". $noti['title'] ?>
                </div>
                <?php else: ?>
                <div class="lg-text">
                    <?php echo $noti['user_id']==0 && $noti['user_type']=="Memo" ? "Memo ".$noti['title'] : " ". $noti['title'] ?>
                </div>
                <?php endif ?>   
            <div class="sm-text"><?php echo $noti['message'] ?></div>
        </div>
    </a>
</li>
     <?php
 }
?>


   

<!-- 
 <li>
    <a class="rad-content not-id" data-id="<?php echo $noti['id'] ?>" href="<?php echo base_url() ?>/<?php echo $noti['url'] ?>">
        <div class="pull-left"><i class="fa fa-bell  fa-2x color-green"></i></div>
        <div class="rad-notification-body">
            
             
             <?php if ($noti['view']==1): ?>
                <div class="sm-text">
                    
                    <?php echo $noti['user_id']==0 && $noti['user_type']=="Memo" ? "Memo ".$noti['title'] : " ". $noti['title'] ?>
                </div>
                <?php else: ?>
                <div class="lg-text">
                    <?php echo $noti['user_id']==0 && $noti['user_type']=="Memo" ? "Memo ".$noti['title'] : " ". $noti['title'] ?>
                </div>
                <?php endif ?>   
            <div class="sm-text"><?php echo $noti['message'] ?></div>
        </div>
    </a>
</li> -->

<?php } ?>
<?php 

foreach($notification as $noti){

?>


 <li>
    <a class="rad-content" href="<?php echo base_url() ?>admin/view_meeting/<?php echo $noti['meetingID'] ?>">
        <div class="pull-left"><i class="fa fa-bell  fa-2x color-green"></i></div>
        <div class="rad-notification-body">
            <div class="lg-text"><?php echo $noti['title'] ?></div>
            <div class="sm-text"> 
                <?php echo $noti['login_name'] ?> has added you in a Meeting on <?php echo $noti['start'] ?> at <?php echo $noti['meeting_time'] ?>. Click here to See.
            </div>
        </div>
    </a>
</li>

<?php } ?>


<style type="text/css">
    .dropdown-menu li a {
    float:  left;
    width:  100%;
    clear:  both;
}

.navbar-top-links .dropdown-menu li {
    float:  left;
    width:  100%;
    clear:  both;
}

div#get_notification {
    float:  left;
    width:  100%;
    clear:  both;
}
</style>