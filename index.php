<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Page</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">
    <h1 class="mt-5">รายงานการวิเคราะห์พื้นที่</h1>
    <a href="insert.php" class="btn btn-success">รายงาน</a>
    <hr>
    <table id="mytable" class="table table-bordered table-striped">
        <thead>
            <th>#</th>
            <th>การวิเคราะห์พื้นที่เป้าหมาย</th>
            <th>ชื่อ</th>
            <th>View</th>
            <th>Delete</th>
        </thead>

        <tbody>
            <?php 

                include_once('functions.php');
                $fetchdata = new DB_con();
                $sql = $fetchdata->fetchdata();
                while($row = mysqli_fetch_array($sql)) {

            ?>

                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['area']; ?></td>
                    <td><?php echo $row['strength']; ?></td>
                    <td><?php echo $row['weakness']; ?></td>
                    <td><?php echo $row['chance']; ?></td>
                    <td><?php echo $row['obstacle']; ?></td>
                    <td><?php echo $row['tourist']; ?></td>
                    <td><?php echo $row['plant']; ?></td>
                    <td><?php echo $row['creature']; ?></td>
                    <td><?php echo $row['community']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><a href="view.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Viwe</a></td>
                    <td><a href="delete.php?del=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
                </tr>

            <?php 

                }
            ?>
        </tbody>
    </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>