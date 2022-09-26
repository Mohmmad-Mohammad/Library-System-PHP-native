<?php
include 'include/connection.php';
include 'include/header.php';

?>

<!-- /#sidebar-wrapper -->

<!-- Page Content -->

<!-- Start Delete category -->

<!-- End Delete category -->
<?php
if($_SERVER["REQUEST_METHOD"]=='POST'){
    $categoryName = $_POST['categoryName'];
    if(empty($categoryName)){
        $error =  "<div class='alert alert-danger'>"."الرجاء ملء الحقل ادناه"."</div>";
    }else{
        $query = "INSERT INTO categories(name) VALUES('$categoryName')";
        $result = mysqli_query($con,$query);
        if(isset($result)){
            $success =  "<div class='alert alert-success'>"." تم اضافة التصنيف بنجاح "."</div>";
        }
    }
}

?>
<div class="container-fluid">
    <!-- Start categories section -->
    <div class="categories">
        <?php
        if(isset($error)){
        echo $error;
        }
        if(isset($success)){
            echo $success;
            }
        ?>
        <div class="add-cat">
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                <div class="form-group">
                    <label for="cat">إضافة تصنيف :</label>
                    <input type="text" id="cat" class="form-control" name="categoryName">
                </div>
                <button class="custom-btn">إضافة</button>
            </form>
        </div>
        <div class="show-cat">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">الرقم</th>
                        <th scope="col">عنوان التصنيف</th>
                        <th scope="col">تاريخ الإضافة</th>
                        <th scope="col">الإجراء</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM categories ORDER BY id DESC";
                    $res = mysqli_query($con,$query);
                    $sNo = 0;
                    while($row = mysqli_fetch_assoc($res)){
                    $sNo ++;
                    ?>
                    <tr>
                        <td><?php echo $sNo; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td> <?php echo $row['date']; ?></td>
                        <td>

                            <a href="edit-cat.php" class="custom-btn">تعديل</a>
                            <a href="categories.php" class="custom-btn confirm">حذف</a>
                        </td>
                    </tr>

                    <?php }?>
                </tbody>
            </table>
            <!-- Start pagination -->

            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="categories.php">
                </ul>
            </nav>
            <!-- End pagination -->
        </div>
    </div>
    <!-- End categories section -->
</div>
<!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->
<?php
  include 'include/footer.php';
  ?>