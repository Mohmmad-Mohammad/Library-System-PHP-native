<?php
include 'layout/include/header.php';


?>
<!--    End navbar    -->

<div class="books">
    <div class="container">
        <div class="author-info bg-secondary text-white p-2 mb-3">
            <span>جميع كتب</span>
            <span></span>
        </div>
        <div class="row">

            <div class="col-md-6 col-lg-4">
                <div class="card text-center">
                    <div class="img-cover">
                        <img src="uploads\bookCovers/<?php echo $row['bookCover']; ?>" alt="Book Cover"
                            class="card-img-top">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="book.php"> </a>
                        </h4>
                        <p class=" card-text"> </p>
                        <a href="book.php">
                            <button class=" custom-btn">تحميل الكتاب</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Start Footer -->
<?php
include 'layout/include/footer.php';
?>