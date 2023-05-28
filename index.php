<?php
    $title = "Головна сторінка";
    require_once "blocks/header.php";
?>

<maim class="main">
    
    <section class="intro">
        <div class="wrapper">
            <div class="intro__content flex__sb">
                
                <div class="intro__title">
                    <h2>Український бренд органайзерів </h2>
                    <p>подаруй незабутні емоції та здійсни маленьку мрію</p>
                    <button>до каталогу</button>
                </div>
                
                <div class="intro__image">
                    <img src="./img/intro/intro_img1.jpg" alt="">
                    <img src="./img/intro/intro_img2.jpg" alt="">
                    <img src="./img/intro/intro_img3.jpg" alt="">
                    <img src="./img/intro/intro_img4.jpg" alt="">
                </div>
                
            </div> 
        </div>
    </section>
    
    
    <?php require "blocks/service.php"; ?>

    <section class="bestsellers">
        <div class="wrapper">
        </div>
    </section>

    </maim>

<?php require_once "blocks/footer.php"; ?>