<?php 

foreach($task_notifications as $noti){

?>




<?php //print_r($noti); ?>

 <li>
    <a class="rad-content not-id-task" data-id="<?php echo $noti['id'] ?>" href="">
        <div class="pull-left"><i class="fa fa-bell  fa-2x color-green"></i></div>
        <div class="rad-notification-body">
            <div class="lg-text"><?php echo $noti['subject'] ?></div>
            <div class="sm-text"><?php echo $noti['description'] ?></div> 
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

.class_li_background{
    background-color: #dcf1ce;
    border-bottom: 1px solid #fff;

}
</style>