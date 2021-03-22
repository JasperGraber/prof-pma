<?php
include("./connect_db.php");

$sql = "SELECT * FROM `courses`";
$result = mysqli_query($conn, $sql);

$tbl_rows = "";
while ($record = mysqli_fetch_assoc($result)) {
    $tbl_rows .= "<tr>
                    <th scope='row'>{$record['id']}</th>
                        <td>{$record['field']}</td>
                        <td>{$record['course']}</td>
                        <td>{$record['education']}</td>
                        <td>{$record['semester']}</td>
                        <td>{$record['period']}</td>
                        <td>{$record['cohort']}</td>
                        <td><a href='#'><img src='../img/pencil-fill.svg'></a></td>
                        <td><a href='#'><img src='../img/trash-fill.svg'></a></td>
                </tr>";
}
?>

<div class="container" style="background-color:white;">
    <div class="row">
        <div class="col-12" style="margin-top:10px;"><a href="index.php?page=courses/create_course" type="button" class="btn btn-warning">Cursus toevoegen</a></div>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Vak</th>
                        <th scope="col">Cursus</th>
                        <th scope="col">Opleiding</th>
                        <th scope="col">Semester</th>
                        <th scope="col">Periode</th>
                        <th scope="col">Cohort</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php echo $tbl_rows; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>