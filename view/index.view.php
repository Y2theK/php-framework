<?php require "view/partial/heading.php"; ?>

<h1>User Names</h1>
   <?php foreach($users as $user): ?>
    <ul>
    <li><?= $user->name; ?></li>
    </ul>

   <?php endforeach; ?>
    <h1>Submit Your Name</h1>
    <form action="\names" method="POST">
    <input type="text" name="name">
    <input type="submit" name="submit" value="Submit">
    </form>
<?php require "view/partial/footer.php"; ?>