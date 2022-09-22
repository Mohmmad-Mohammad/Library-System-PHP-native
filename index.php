<?php
include 'layout/include/header.php';
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
            <div class="col-md-6 col-lg-4">
                <div class="card text-center">
                    <div class="img-cover">
                        <img src="uploads\bookCovers/" alt="Book Cover" class="card-img-top">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="book.php" </a>
                        </h4>
                        <p class="card-text"></p>
                        <a href="book.php">
                            <button class=" custom-btn">تحميل الكتاب</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="text-center">لاتوجد أي كتب</div>
        </div>
    </div>
</div>
<!-- End Books -->

<!-- Start Footer -->
<?php
include 'layout/include/footer.php';
?>