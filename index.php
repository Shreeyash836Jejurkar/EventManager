<?php include_once 'config/init.php'; ?>
<?php 
$event =new Events;

$template=new Template('templates/frontpage.php');

$category=isset($_GET['category']) ? $_GET['category']:null;

if($category){
        $template->events =$event->getByCategory($category);
        $template->title ="Events In ".$event->getCategory($category)->name;
}else{
    $template->title='Events NearBy';
    
     $template->events=$event->getALLEvents();
}

$template->categories=$event->getCategories();
echo $template;