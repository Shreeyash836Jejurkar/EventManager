<?php include_once 'config/init.php'; ?>
<?php
$event = new Events;

$event_id = isset($_GET['id']) ? $_GET['id'] : null;

if (isset($_POST['submit'])) {
   


    $data = array();
    $data['event_title'] = $_POST['event_title'];
    $data['imageUrl'] = $_POST['imageUrl'];
    $data['organization'] = $_POST['organization'];
    $data['category_id'] = $_POST['category'];
    $data['description'] = $_POST['description'];
    $data['location'] = $_POST['location'];
    $data['date'] = $_POST['date'];
    $data['contact_user'] = $_POST['contact_user'];
    $data['contact_email'] = $_POST['contact_email'];



    if ($event->update($event_id,$data)) {
        redirect('index.php', 'Your Event has been Updated', 'success');
    } else {
        redirect('index.php', 'Something went Wrong , Try again', 'error');
    }
}

$template = new Template('templates/event-edit.php');
$template->event=$event->getEvent($event_id);

$template->categories = $event->getCategories();
echo $template;
