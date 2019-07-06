<!-- JOBS Web Design & Development Project
    -->
<?php include 'inc/header.php' ?>
<div class="container">
    <?php echo $job->job_title; ?>
    <h2 class="page-header"><?php echo $job->job_title . " "; ?>(<?php echo $job->location; ?>)</h2>
    <small>Posted By<?php echo $job->contact_user; ?></small>
    <hr>
    <p class="lead"><?php echo $job->description; ?></p>
    <ul class="list-group">
        <li class="list-group-item"><strong>Company: </strong><?php echo $job->company; ?></li>
        <li class="list-group-item"><strong>Salary: </strong><?php echo $job->salary; ?></li>
        <li class="list-group-item"><strong>Email: </strong><a href="mailto:<?php echo $job->contact_email;?>"><?php echo $job->contact_email; ?></a></li>
    </ul>
    <br><br>
    <button class="btn btn-dark"><a href="../index.php">Go Back</a></button>
    <br><br>
<?php include 'inc/footer.php'; ?>
