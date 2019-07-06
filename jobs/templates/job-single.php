<!-- JOBS Web Design & Development Project
    -->
<?php include 'inc/header.php' ?>
<div class="container">
    <?php echo $job->job_title; ?>
    <h2 class="page-header"><?php echo $job->job_title . " "; ?>(<?php echo $job->location; ?>)</h2>
    <small>Posted By<?php echo " " .$job->contact_user; ?></small>
    <hr>
    <p class="lead"><?php echo $job->description; ?></p>
    <ul class="list-group">
        <li class="list-group-item"><strong>Company:</strong><?php echo $job->company; ?></li>
        <li class="list-group-item"><strong>Salary:</strong><?php echo $job->salary; ?></li>
        <li class="list-group-item"><strong>Email:</strong><?php echo $job->contact_email; ?></li>
    </ul>
        <form style="display:inline;">
       <a href="index.php" class="goback">Go Back</a>
        </form>
        <form style="display:inline;">
        <a onclick="return confirm('Are you sure you want to EDIT this item?');" href="edit.php?id=<?php echo $job->id;?>" class="btn btn-primary">Edit</a>
        </form>
        <form style="display:inline;" method="post" action="job.php">
            <input type="hidden" name="del_id" value="<?php echo $job->id; ?>">
            <a href="url_to_delete" onclick="return confirm('Are you sure you want to DELETE this item?');"><input type="submit" class="btn btn-danger" value="Delete"></a>
        </form>
</div>
<div class="container">
<?php include 'inc/footer.php'; ?>
