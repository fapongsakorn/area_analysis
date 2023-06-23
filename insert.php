<?php 

    include_once('functions.php');

    $insertdata = new DB_con();

    if (isset($_POST['insert'])) {
        $area = $_POST['area'];
        $strength = $_POST['strength'];
        $weakness = $_POST['weakness'];
        $chance = $_POST['chance'];
        $obstacle = $_POST['obstacle'];
        $tourist = $_POST['tourist'];
        $plant = $_POST['plant'];
        $creature = $_POST['creature'];
        $community = $_POST['community'];
        $name = $_POST['name'];

        
        $sql = $insertdata->insert($area,$strength,$weakness,$chance,$obstacle,$tourist,$plant,$creature,$community,$name,$time);

        if ($sql) {
            echo "<script>alert('Record Inserted Successfully!');</script>";
            echo "<script>window.location.href='index.php'</script>";
        } else {
            echo "<script>alert('Something went wrong! Please try again!');</script>";
            echo "<script>window.location.href='insert.php'</script>";
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Page</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">
        <a href="index.php" class="btn btn-primary mt-3">Go Back</a>
        <hr>
        <h1 class="mt-5">Insert Page</h1>
        <hr>
        <form action="" method="post">
            <div class="mb-3">
                <label for="firstname" class="form-label">การวิเคราะห์พื้นที่เป้าหมาย</label>
                <input type="text" class="form-control" name="area" required>
            </div>
            <div class="mb-3">
                <label for="lastname" class="form-label">จุดแข็งของพื้นที่</label>
                <input type="text" class="form-control" name="strength" required>
            </div>
            <div class="mb-3">
                <label for="email">จุดอ่อนของพื้นที่</label>
                <input type="email" class="form-control" name="weakness" required>
            </div>
            <div class="mb-3">
                <label for="phonenumber">โอกาสและความท้าทายในพื้นที่</label>
                <input type="text" class="form-control" name="chance" required>
            </div>
            <div class="mb-3">
                <label for="phonenumber">อุปสรรคและปัจจัยคุกคามในพื้นที่</label>
                <input type="text" class="form-control" name="obstacle" required>
            </div>
            <div class="mb-3">
                <label for="phonenumber">สถานที่ท่องเที่ยว/สถานที่สำคัญที่พื้นที่</label>
                <input type="text" class="form-control" name="tourist" required>
            </div>
            <div class="mb-3">
                <label for="phonenumber">พืชเศษฐกิจในพื้นที่</label>
                <input type="text" class="form-control" name="plant" required>
            </div>
            <div class="mb-3">
                <label for="phonenumber">สิ่งที่มีมากในพื้นที่</label>
                <input type="text" class="form-control" name="creature" required>
            </div>
            <div class="mb-3">
                <label for="phonenumber">กลุ่มชมชน/วิสาหกิจชุมชน</label>
                <input type="text" class="form-control" name="community" required>
            </div>
            <div class="mb-3">
                <label for="phonenumber">ชื่อผู้รายงาน</label>
                <input type="text" class="form-control" name="name" required>
            </div>
            <div class="mb-3">
                <label for="address">บันทึกข้อมูล]</label>
                <textarea name="address"cols="30" rows="10" class="form-control" required></textarea>
            </div>
            <button type="submit" name="insert" class="btn btn-success">บันทึกข้อมูล</button>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>