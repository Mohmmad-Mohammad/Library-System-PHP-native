<?php
include 'dashboard/include/connection.php';
include 'layout/include/header.php';

?>
<!-- Start banar  -->
<div class="banar">
    <div class="overlay"></div>
    <div class="lib-info text-center">
        <h4>أبحث في الاقسام عن كتابك</h4>
        <p>من أجل نشر المعرفة والثقافة، وغرس حب القراءة بين المتحدثين باللغة العربية</p>
    </div>
</div>
<!-- End banar -->
<!--    End navbar    -->

<div class="books">
    <div class="container">
        <div class=" author-info custom-btn text-white p-2 mb-3 text-center">
            <span>جميع الأقسام</span>
            <span></span>
        </div>
        <div class="row">
            <?php
            $query = "SELECT * FROM categories ORDER BY id DESC";
            $result = mysqli_query($con, $query);
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <div class="col-md-6 col-lg-4">
                <div class="card text-center">
                    <div class="card-body">
                        <p class="card-text"><?php echo mb_substr($row['name'], 0, 150, "UTF-8"); ?></p>
                        <a href="category.php?id=<?php echo $row['name']; ?>">
                            <button class="custom-btn">عرض القسم </button>
                        </a>
                    </div>
                </div>
            </div>
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