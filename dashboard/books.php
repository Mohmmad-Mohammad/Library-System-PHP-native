<?php

include 'include/connection.php';
include 'include/header.php';

?>

<!-- /#sidebar-wrapper -->

<!-- Page Content -->

<!-- Start Delete Book -->

<!-- End Delete book -->

<div class="container-fluid">
    <div class="show-books">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">الرقم</th>
                    <th scope="col">عنوان الكتاب</th>
                    <th scope="col">المؤلف</th>
                    <th scope="col">التصنيف</th>
                    <th scope="col">تاريخ الإضافة</th>
                    <th scope="col">الإجراء</th>
                </tr>
            </thead>
            <tbody>


                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <a href="edit-book.php" class="custom-btn">تعديل</a>
                        <a href="books.php" class="custom-btn confirm">حذف</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->
<?php
    include 'include/footer.php';
    ?>