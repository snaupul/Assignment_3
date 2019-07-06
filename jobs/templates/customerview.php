<!-- JOBS Web Design & Development Project
    -->
<?php include 'inc/header.php' ?>
    <div class="container">
        <h1 class="title">Find a House</h1>
    <h2><?php echo $title; ?></h2>
    <?php foreach($jobs as $job): ?>
      <div class="row marketing border">
      <div class="col-md-10">
          <h4><?php echo $job->job_title . " - " . $job->location; ?></h4>
          <p><?php echo $job->description; ?></p>
        </div>
        <div class="col-md-2 margin">
            <button><a class="btn btn-dark" href="customer.php?id=<?php echo $job->id; ?>">House Details</a></button>        </div>
        </div>
    <?php endforeach; ?>

<?php include 'inc/footer.php'; ?>
