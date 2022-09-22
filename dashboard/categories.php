<?php
include 'include/connection.php';
include 'include/header.php';

?>

<!-- /#sidebar-wrapper -->

<!-- Page Content -->

<!-- Start Delete category -->

<!-- End Delete category -->



<div class="container-fluid">
    <!-- Start categories section -->
    <div class="categories">

        <div class="add-cat">
            <form action="" method="POST">
                <div class="form-group">
                    <label for="cat">إضافة تصنيف :</label>
                    <input type="text" id="cat" class="form-control" name="category">
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
                    <!-- Fetch categories from database -->
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <a href="edit-cat.php" class="custom-btn">تعديل</a>
                            <a href="categories.php" class="custom-btn confirm">حذف</a>
                        </td>
                    </tr>

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