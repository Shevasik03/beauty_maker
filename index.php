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
            <div class="bestsellers__content">

                <div class="card">
                    <img src="./img/catalog/model_A1.jpg" alt="" class="card__image">
                    <h4 class="card__title">органайзер <span></span></h4>
                    <p class="card__size">Розмір: <span></span></p>
                    <p class="card__price"><span></span> ₴</p>
                </div>

            </div>
        </div>
    </section>

    <section class="catalog">
        <div class="wrapper">
            <div class="catalog__content">
                <div class="catolog__section">
                    <div class="card">
                        <img src="./img/catalog/model_A1.jpg" alt="" class="card__image">
                        <h4 class="card__title">органайзер <span></span></h4>
                        <p class="card__size">Розмір: <span></span></p>
                        <p class="card__price"><span></span> ₴</p>
                    </div>
                    <div class="card">
                        <img src="./img/catalog/model_A1.jpg" alt="" class="card__image">
                        <h4 class="card__title">органайзер <span></span></h4>
                        <p class="card__size">Розмір: <span></span></p>
                        <p class="card__price"><span></span> ₴</p>
                    </div>
                    <div class="card">
                        <img src="./img/catalog/model_A1.jpg" alt="" class="card__image">
                        <h4 class="card__title">органайзер <span></span></h4>
                        <p class="card__size">Розмір: <span></span></p>
                        <p class="card__price"><span></span> ₴</p>
                    </div>
                </div>
            </div>    
        </div>
    </section>

</maim>

<?php require_once "blocks/footer.php"; ?>