<?php include_once 'config/init.php'; ?>
<?php 
$event =new Events;

if(isset($_POST['del_id'])){
    $del_id=$_POST['del_id'];
    if($event->delete($del_id)){
        redirect('index.php','Event Completed','success');
    }else{
        redirect('index.php','Error, Try again','error');
    }
}

$template=new Template('templates/event-single.php');

$event_id=isset($_GET['id']) ? $_GET['id']:null;

$template->event=$event->getEvent($event_id);

echo $template;