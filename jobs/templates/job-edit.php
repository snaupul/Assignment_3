<!-- JOBS Web Design & Development Project
    -->
<?php include 'inc/header.php' ?>
    <div class="container">
    <h2 class="page-header">Edit House Listing</h2>
    <form method="post" action="edit.php?id=<?php echo $job->id; ?>">
        <div class="form-group">
            <label>House Agent Company</label>
            <input type="text" class="form-control" name="company" value="<?php echo $job->company; ?>">
        </div>
        <div class="form-group">
            <label>House Category</label>
            <select class="form-control" name="category_id">
                <option value="0">Choose House Category</option>
                <?php foreach($categories as $category): ?>
                <?php if($job->category_id == $category->id) : ?>
                    <option value="<?php echo $category->id; ?>" selected><?php echo $category->name; ?></option>
                <?php else : ?>
                    <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
                <?php endif; ?>

                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label>House Type</label>
            <input type="text" class="form-control" name="job_title" value="<?php echo $job->job_title; ?>">
        </div>
        <div class="form-group">
            <label>House Description</label>
            <textarea type="text" class="form-control" rows="5" cols="25" name="description"><?php echo $job->description; ?></textarea>
        </div>
        <div class="form-group">
            <label>House Location</label>
            <input type="text" class="form-control" name="location" value="<?php echo $job->location; ?>">
        </div>
        <div class="form-group">
            <label>House Price</label>
            <input type="text" class="form-control" name="salary" value="<?php echo $job->salary; ?>">
        </div>
        <div class="form-group">
            <label>Contact Person</label>
            <input type="text" class="form-control" name="contact_user" value="<?php echo $job->contact_user; ?>">
        </div>
        <div class="form-group">
            <label>Contact Person Email Address</label>
            <input type="text" class="form-control" name="contact_email" value="<?php echo $job->contact_email; ?>">
        </div>
        <input type="submit" class="btn btn-default" value="Submit" name="submit">
        <a href="index.php" class="btn btn-primary">Cancel</a>
    </form>
</div>
<div class="container">
<?php include 'inc/footer.php'; ?>
