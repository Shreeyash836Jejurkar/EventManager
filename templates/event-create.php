<?php include 'include/header.php'; ?><br>


<div class="container">
    <h4 class="page-header text-muted">Create Event Listing</h4><br>
    <form method="post" action="create.php">
        <div class="form-group">
            <h5><label for="org">Organization</label>
            </h5>
            <input type="text" class="form-control" name="organization" id="org">
        </div>
        <div class="form-group">
            <h5><label for="cat">Category</label>
            </h5>
            <select class="form-control" name="category" id="cat">
                <option value="0">Choose Category</option>
                <?php foreach ($categories as $category) : ?>
                    <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <h5><label for="et">Event Title</label>
            </h5>
            <input type="text" class="form-control" name="event_title" id="et">
        </div>
        <div class="form-group">
            <h5><label for="ig">Event Image</label>
            </h5>
            <input type="text" class="form-control" name="imageUrl" id="ig">
        </div>
        <div class="form-group">
            <h5><label for="des">Description</label>
            </h5>
            <textarea rows="10" type="text" class="form-control" name="description" id="des"></textarea>
        </div>
        <div class="form-group">
            <h5><label for="loc">Location</label>
            </h5>
            <input type="text" class="form-control" name="location" id="loc">
        </div>
        <div class="form-group">
            <h5><label for="d">Date</label>
            </h5>
            <input type="text" class="form-control" name="date" id="d">
        </div>
        <div class="form-group">
            <h5><label for="cu">Contact User</label>
            </h5>
            <input type="text" class="form-control" name="contact_user" id="cu">
        </div>
        <div class="form-group">
            <h5><label for="org">Contact Email</label>
            </h5>
            <input type="email" class="form-control" name="contact_email" id="ce">
            <br>
        </div>
        <input type="submit" class="btn btn-success" value="Submit" name="submit">
    </form>
    <br>
</div>
<?php include 'include/footer.php'; ?>