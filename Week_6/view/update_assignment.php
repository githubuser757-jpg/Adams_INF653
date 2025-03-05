<section class="assignment-updater">
    <h2>Update Assignment</h2>
    <ul>
        <?php foreach ($assignments as $assignment) { ?>
            <form action="." method="POST" class="update">
                <input type="hidden" name="action" value="update">
                <input type="hidden" name="assignment_id" value="<?php echo htmlspecialchars($assignment['ID']); ?>">
                <label for="description">Assignment Description:</label>
                <input type="text" id="description" name="description"
                    value="<?php echo htmlspecialchars($assignment['Description']); ?>" required>
                <br><br>

                <label for="course">Select Course:</label>
                <select name="course_id">
                    <?php foreach ($courses as $course) : ?>
                        <option value="<?= $course['courseID'] ?>" <?= $course_id == $course['courseID'] ? 'selected' : '' ?>>
                            <?= htmlspecialchars($course['courseName']) ?>
                        </option>
                    <?php endforeach; ?>
                </select>

                <button type="submit" name="action" value="update_assignment">Update</button>
            </form>
        <?php } ?>
    </ul>
</section>