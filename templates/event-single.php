<?php include 'include/header.php' ?><br>
<div class="container">
    <h2 class="page-header"><?php echo $event->event_title; ?></h2>
    <small>Posted By  <strong><?php echo $event->contact_user; ?></strong> on <strong><?php echo $event->post_date; ?></strong></small>
    <hr>
    
    <div class="text-center"><img class="rounded img-fluid" src="<?php echo $event->imageUrl;?>" alt=""></div><br>
    <p class="lead" style="overflow-wrap: break-word;"><?php echo $event->description; ?></p><br>

    <ul class="list-group">
        <li class="list-group-item"><strong>Organization : </strong><?php echo $event->organization; ?></li>
        <li class="list-group-item"><strong>Date : </strong><?php echo $event->date; ?></li>
        <li class="list-group-item"><strong>Location : </strong><?php echo $event->location; ?></li>
        <li class="list-group-item"><strong>User Contact : </strong><?php echo $event->contact_user; ?></li>
        <li class="list-group-item"><strong>User Email : </strong><?php echo $event->contact_email; ?></li>
    </ul><br><br>

    <a class="btn btn-primary" href="index.php">Go Back</a>    
    <div style="display: inline; float: right;">
    <a  class="btn btn-primary" href="edit.php>id=<?php echo $event->id; ?>">Edit</a>
    <form action="event.php" method="post" style="display: inline;">&nbsp
        <input type="hidden" name="del_id" value="<?php echo $event->id;?>">
        <input type="submit" class="btn btn-danger" value="Completed">
    </form>
    </div>
</div><br>


<?php include 'include/footer.php' ?>