<?php include_once 'config/init.php'; ?>
<?php 
$event =new Events;


if(isset($_POST['submit'])){



    $data=array();
    $data['event_title']=$_POST['event_title'];
    $data['imageUrl']=$_POST['imageUrl'];
    $data['organization']=$_POST['organization'];
    $data['category_id']=$_POST['category'];
    $data['description']=$_POST['description'];
    $data['location']=$_POST['location'];
    $data['date']=$_POST['date'];
    $data['contact_user']=$_POST['contact_user'];
    $data['contact_email']=$_POST['contact_email'];



    if($event->create($data)){
        redirect('index.php','Your Event has been Listed','success');
    }else{
        redirect('index.php','Something went Wrong','error');
    }

}

$template=new Template('templates/event-create.php');

$template->categories=$event->getCategories();
echo $template;