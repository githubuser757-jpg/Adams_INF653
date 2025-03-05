<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<section class="course-updater">
    <h2>Update Courses</h2>
    <ul>
        <?php foreach ($courses as $course) { ?>
            <form action="." method="post" id="update__form" class="update_course_form">
                <input type="hidden" name="action" value="update_course">
                <input type="hidden" name="course_id" value="<?php echo htmlspecialchars($course['courseID']); ?>">
                <label for="course_name">Course Name:</label>
                <input type="text" id="course_name" name="course_name"
                value="<?php echo htmlspecialchars($course['courseName']); ?>" required>
                <br><br>

                <button type="submit">Update</button>
            </form>
        <?php } ?>
    </ul>
</section>