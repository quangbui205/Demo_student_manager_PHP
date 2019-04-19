<?php
$student = new StudentDB();
$students = $student->getAll();

?>
<div class="col-12 list-student pt-2">
    <h2>Danh sách học viên</h2>
</div>
<div class="col-12">
    <a href="index.php?page=add" class="btn btn-primary">Create</a>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Address</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($students as $item): ?>
            <tr>
                <th scope="row">1</th>
                <td><?php echo $item['name'] ?></td>
                <td><?php echo $item['email'] ?></td>
                <td><?php echo $item['address'] ?></td>
                <td>
                    <a href="" class="btn btn-danger">Delete</a>
                    <a href="index.php?page=edit&id=<?php echo $item['id'] ?>" class="btn btn-danger">Update</a>
                </td>
            </tr>
        <?php endforeach; ?>

        </tbody>
    </table>
</div>
