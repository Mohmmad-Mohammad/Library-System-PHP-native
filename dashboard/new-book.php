<?php
session_start();
include 'include/connection.php';
include 'include/header.php';
if (!isset($_SESSION['adminInfo'])) {
    header('Location:index.php');
} else {

?>

<!-- /#sidebar-wrapper -->

<!-- Page Content -->

<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $bookTitle = $_POST['title'];
        $bookAuthor = $_POST['name'];
        $bookCat = $_POST['category'];
        $bookContent = $_POST['content'];
        // Book Cover
        $imageName = $_FILES['cover']['name'];
        $imageTmp = $_FILES['cover']['tmp_name'];
        // Book file
        $bookName = $_FILES['book']['name'];
        $bookTmp = $_FILES['book']['tmp_name'];

        if (empty($bookTitle) ||  empty($bookCat) ) {
            $error = "<div class='alert alert-danger'>" . "الرجاء ملء الحقول أدناه" . "</div>";
        } elseif (empty($imageName)) {
            $error = "<div class='alert alert-danger'>" . "الرجاء إختيار صورة مناسبة" . "</div>";
        } elseif (empty($bookName)) {
            $error = "<div class='alert alert-danger'>" . "الرجاء إختيار ملف الكتاب" . "</div>";
        } else {
            // Book cover
            $cover = rand(0, 1000) . "_" . $imageName;
            move_uploaded_file($imageTmp, "../uploads/bookCovers/" . $cover);
            // Book cover
            $book = rand(0, 1000) . "_" . $bookName;
            move_uploaded_file($bookTmp, "../uploads/books/" . $book);
            $query = "INSERT INTO books(title,author,category,cover,book,content)
            VALUES('$bookTitle','$bookAuthor','$bookCat','$cover','$book','$bookContent')";
            $res = mysqli_query($con, $query);
            if (isset($res)) {
                $success = "<div class='alert alert-success'>" . "تم إضافة الكتاب بنجاح" . "</div>";
            }
        }
    }
    ?>

<div class="container-fluid">
    <!-- Start new book -->
    <div class="new-book">
        <?php
            if (isset($error)) {
                echo $error;
            } elseif (isset($success)) {
                echo $success;
            }
            ?>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="title">عنوان الكتاب</label>
                <input type="text" id="title" class="form-control" name="title"
                    value="<?php if (isset($bookTitle)) {                                                   } ?>">
            </div>
            <div class="form-group">
                <label for="author">إسم الكاتب</label>
                <input type="text" id="author" class="form-control" name="name" value="<?php if (isset($bookAuthor)) {
                                                                                                        echo $bookAuthor;
                                                                                                    } ?>">
            </div>
            <div class="form-group">
                <label for="title">التصنيف</label>
                <select class="form-control" name="category">
                    <option></option>
                    <?php
                        $query = "SELECT name FROM categories";
                        $result = mysqli_query($con, $query);
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                    <option><?php echo $row['name']; ?></option>
                    <?php
                        }
                        ?>
                </select>
            </div>
            <div class="form-group">
                <label for="img">غلاف الكتاب</label>
                <input type="file" class="form-control" name="cover">
            </div>
            <div class="form-group">
                <label for="img">ملف الكتاب</label>
                <input type="file" class="form-control" name="book">
            </div>
            <div class="form-group">
                <label for="img">نبذة عن الكتاب</label>
                <textarea name="c
                ontent" id="" cols="30" rows="10"
                    class="form-control"><?php if (isset($bookContent)) {                                             } ?></textarea>
            </div>
            <button class="custom-btn">نشر الكتاب</button>
        </form>
    </div>
    <!-- End new book -->
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