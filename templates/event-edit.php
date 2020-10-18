<?php include 'include/header.php'; ?><br>


<div class="container">
    <h4 class="page-header text-muted">Edit Event Listing</h4><br>
    <form method="post" action="edit.php?id=<?php echo $event->id; ?>">
        <div class="form-group">
            <h5><label for="org">Organization</label>
            </h5>
            <input type="text" class="form-control" name="organization" id="org" value="<?php echo $event->organization; ?>">
        </div>
        <div class="form-group">
            <h5><label for="cat">Category</label>
            </h5>
            <select class="form-control" name="category" id="cat">
                <option value="0">Choose Category</option>
                <?php foreach ($categories as $category) : ?>
                    <?php if ($event->category_id==$category->id) : ?>
                        <option value="<?php echo $category->id; ?>" selected><?php echo $category->name; ?></option>
                    <?php else : ?>
                        <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
                    <?php endif; ?>
                    
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <h5><label for="et">Event Title</label>
            </h5>
            <input type="text" class="form-control" name="event_title" id="et" value="<?php echo $event->event_title; ?>">
        </div>
        <div class="form-group">
            <h5><label for="ig">Event Image</label>
            </h5>
            <input type="text" class="form-control" name="event_title" id="ig" value="<?php echo $event->imageUrl; ?>">
        </div>
        <div class="form-group">
            <h5><label for="des">Description</label>
            </h5>
            <textarea rows="10" type="text" class="form-control" name="description" id="des" value="<?php echo $event->description; ?>"></textarea>
        </div>
        <div class="form-group">
            <h5><label for="loc">Location</label>
            </h5>
            <input type="text" class="form-control" name="location" id="loc" value="<?php echo $event->location; ?>">
        </div>
        <div class="form-group">
            <h5><label for="d">Date</label>
            </h5>
            <input type="text" class="form-control" name="date" id="d" value="<?php echo $event->date; ?>">
        </div>
        <div class="form-group">
            <h5><label for="cu">Contact User</label>
            </h5>
            <input type="text" class="form-control" name="contact_user" id="cu" value="<?php echo $event->contact_user; ?>">
        </div>
        <div class="form-group">
            <h5><label for="org">Contact Email</label>
            </h5>
            <input type="email" class="form-control" name="contact_email" id="ce" value="<?php echo $event->contact_email; ?>">
            <br>
        </div>
        <input type="submit" class="btn btn-success" value="Submit" name="save">
    </form>
</div>
<?php include 'include/footer.php'; ?>