<?php
    include 'navbar.php';
    require '../Database/DBhandler.php';
    
    if (isset($_REQUEST['submit'])) {
        $title = $_POST['title'];
        $content = $_POST['content'];
        $url = $_POST['url'];
        $publish = $_POST['publish'];
        $pcat = $_POST['pcat'];
        $cat = $_POST['category'];
        date_default_timezone_set('Asia/Kolkata');
        $created = date("Y-m-d H:i:s");
    
        function checkurl()
        {
            global $url, $con;
            $qry = "select * from category where Url='$url'";
            $sql = mysqli_query($con, $qry);
    
            if (mysqli_num_rows($sql) == 0) {
                return true;
            }
    
            return false;
        }
    
        if (checkurl($_POST['url'])) {
            $sql = "insert into category values ('0','$Uid','$title','$url','$content','$img','$publish','$created','$created')";
    
            if (mysqli_query($con, $sql)) {
                echo '<script>alert("Blog Created Successfull.")</script>';
                echo '<script>window.location.href = "category_list.php";</script>';
            } else {
                echo '<script>alert("Not Inserted.")</script>';
            }
        } else {
            echo '<script>alert("Entered URL already exists.")</script>';
        }
    }
?>
<!doctype html>
<html lang="en">

<head>
    <title>Category</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="table-responsive">
    <h2>Category List</h2>
        <div class="col-sm-4">
            <a href="category.php" class="btn btn-info add-new"> Add new Category</a>
        </div>
        <table class="table" style="margin: 10px;">
            <thead class="thead-light">
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Meta Title</th>
                    <th>Url</th>
                    <th>Content</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                global $con;
                $sql="Select * from category";
                $result = mysqli_query($con,$sql);
                while ($row = mysqli_fetch_array($result)) {

                ?>
                    <tr>
                        <td scope="row"><?php echo $row['P_Id']; ?></td>
                        <td><?php echo $row['Title']; ?></td>
                        <td><?php echo $row['M_Title']; ?></td>
                        <td><?php echo $row['Url']; ?></td>
                        <td><?php echo $row['Content']; ?></td>
                        <td><?php echo $row['Created_at']; ?></td>
                        <td><?php echo $row['Updated_at']; ?></td>
                        <td>
                            <a href="./update.php?id=<?php echo $row['id']; ?>" name="update" class="btn btn-warning">Update</a>

                            <button type="submit" name="delete" class="btn btn-danger" onclick="deleteUser(<?php echo $row['id']; ?>)">Delete</button>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>