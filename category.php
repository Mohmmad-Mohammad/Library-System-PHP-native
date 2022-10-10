<?php
include 'dashboard/include/connection.php';
include 'layout/include/header.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
?>
<!-- Start banar  -->
<div class="banar">
    <div class="overlay"></div>
    <div class="lib-info text-center">
        <h4>حمّل عشرات الكتب مجاناً </h4>
        <p>من أجل نشر المعرفة والثقافة، وغرس حب القراءة بين المتحدثين باللغة العربية</p>
    </div>
</div>
<!-- End banar -->


<!-- Start Books -->
<div class="books">
    <div class="container">
        <div class="row">
            <?php
            $query = "SELECT * FROM books  WHERE category ='$id' ";
            $result = mysqli_query($con, $query);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <div class="col-md-6 col-lg-4">
                <div class="card text-center">
                    <div class="img-cover">
                        <img src="uploads/BookCovers/<?php echo $row['cover']; ?>" alt="Book Cover"
                            class="card-img-top">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a
                                href="book.php?id=<?php echo $row['id']; ?>&&category=<?php echo $row['category']; ?>"><?php echo $row['title']; ?></a>
                        </h4>
                        <p class="card-text"><?php echo mb_substr($row['content'], 0, 150, "UTF-8"); ?></p>
                        <a href="book.php?id=<?php echo $row['id']; ?>&&category=<?php echo $row['category']; ?>">
                            <button class="custom-btn">تحميل الكتاب</button>
                        </a>
                    </div>
                </div>
            </div>
            <?php
                }
            } else {
                ?>
            <div class="author-info custom-btn text-white p-2 mb-3 text-center">لاتوجد أي كتب</div>
            <?php
            }
            ?>
        </div>
    </div>
</div>

<!-- Start Footer -->
<?php
include 'layout/include/footer.php';
?>