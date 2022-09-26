<?php
    session_start();
    include 'include/connection.php';
    include 'include/header.php';
    if(!isset($_SESSION['adminInfo'])){
        header('Location:index.php');
    }
else{ 

?>

<!-- /#sidebar-wrapper -->

<!-- Page Content -->

<div class="container-fluid">
    <?php 
            $query = "SELECT * FROM admin";
            $result = mysqli_query($con,$query);
            $row = mysqli_fetch_assoc($result);
        ?>

    <?php
            if(isset($_POST['edit']))  {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                
                $query = "UPDATE admin SET
                    name = '$name',
                    email = '$email',
                    password = '$password'
                ";
                $res = mysqli_query($con,$query);
                header("REFRESH:0");
                exit();
            }
        ?>
    <div class="profile">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="form-group">
                <label for="name">الإسم</label>
                <input type="text" class="form-control" id="name" value="<?php  echo $row['name']; ?>" name="name">
            </div>
            <div class="form-group">
                <label for="email">البريد الإلكتروني</label>
                <input type="text" class="form-control" id="email" value="<?php  echo $row['email']; ?>" name="email">
            </div>
            <div class="form-group">
                <label for="pass">كلمة السر</label>
                <input type="text" class="form-control" id="pass" value="<?php  echo $row['password']; ?>"
                    name="password">
            </div>
            <button class="custom-btn" name="edit">تعديل البيانات</button>
        </form>
    </div>
</div>
<!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->
<?php
include 'include/footer.php';
?>


<?php 
    }
?>