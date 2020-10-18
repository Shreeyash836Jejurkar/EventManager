<?php include 'include/header.php' ?>


<main role="main">
  <section class="jumbotron text-center text-white jumbotron-image shadow" style="background : url(https://images.unsplash.com/photo-1470229722913-7c0e2dbbafd3?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80) fixed;">
    <div class="container" style="padding-left: 4rem; padding-right:4rem">
      <h1>Check Events</h1><br>
      <p class="text-white">Find yourself events to detox from your daily stress.</p>
      <p>
        <form method="GET" action="index.php">
          <select name="category" class="form-control" id="">
            <option value="0">Choose Category</option>
            <?php foreach ($categories as $category) : ?>
              <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
            <?php endforeach; ?>
          </select>
          <br>
          <input type="submit" class="btn btn-primary my-2" value="Filter">&nbsp
          <input type="reset" class="btn btn-secondary my-2" value="Reset">
        </form><br>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">
      <h4 class="text-muted"><?php if($events==null){ echo "No Events Around You"; }else{ echo $title; } ?></h4><br>

      <div class="row">
        <?php foreach ($events as $event) : ?>
          <div class="col-md-4">
            <div class="card mb-4 shadow-lg">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="225" preserveAspectRatio="xMidYMid slice" role="img" aria-label="Placeholder: Thumbnail">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#55595c" />
                <image href="<?php echo $event->imageUrl; ?>" width="100%"></image><text x="50%" y="50%" fill="#eceeef" dy=".3em"><?php echo $event->event_title; ?></text>
              </svg>
              <div class="card-body">
                <p class="card-text" style="color: grey;"><?php if (strlen($event->description) > 25) {
                                                            $trimDescription = substr($event->description, 0, 100) . '...';
                                                          } else {
                                                            $trimDescription = $event->description;
                                                          }
                                                          echo $trimDescription; ?></p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <a class="btn btn-primary btn-sm" href="event.php?id=<?php echo $event->id; ?>">View</a>
                  </div>
                  <small class="text-muted"><?php echo $event->post_date; ?></small>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</main>


<?php include 'include/footer.php' ?>