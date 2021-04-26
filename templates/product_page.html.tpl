<div class="order">
    <div class="rating">
        <a href="#">Актуальное</a>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
    </div>
    <a class="title" href="#">{{title}}</a>
    <a class="colors" href="#">Серебристый / Черный / Жёлтый</a>
    <a class="price" href="#">{{price}}</a>
    <div class="buttons">
        <div class="buy">
            <div class="bg"></div>
            <div class="front"></div>
            <p>ДОБАВИТЬ В КОРЗИНУ</p>
            <i class="fas fa-arrow-right"></i>
        </div>
        <div class="like">
            <div class="front"></div>
            <div class="bg"></div>
            <i class="fas fa-heart"></i>
        </div>
    </div>
</div>

<div class="content-content">

    <div class="container">
        <div class="slider">
            <div class="slider__wrapper">
                <div class="slider__item">
                    <div class="slider__content">
                        <div class="slider__content_header">
                            <img class="slider__content_img" src="img/product.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="slider__item">
                    <div class="slider__content">
                        <div class="slider__content_header">
                            <img class="slider__content_img" src="img/product.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="slider__item">
                    <div class="slider__content">
                        <div class="slider__content_header">
                            <img class="slider__content_img" src="img/product.jpg" alt="">
                        </div>
                    </div>
                </div>

            </div>
            <a class="slider__control slider__control_left" href="#" role="button"></a>
            <a class="slider__control slider__control_right" href="#" role="button"></a>
        </div>
    </div>

    <div class="description">
        <p class="title">
            Описание:
        </p>
        <p class="text">{{text}}</p>
        <p class="title">
            Характеристики:
        </p>
        <p class="text">
        <ul>
            {{characteristics}}
            <!--                <li>Точность до 0,01 люкса</li>-->
            <!--                <li>Масса 10 граммов</li>-->
            <!--                <li>Габариты 3 х 2 х 0,2 см</li>-->
        </ul>
        </p>
        <p class="title">
            Рейтинг:
        </p>
        <div class="feedback">
            <div class="rating">
                <p class="num">{{rating}}</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p class="review">{{reviews}}</p>
            </div>
            <div class="latest">
                <div class="bg"></div>
                <div class="front"></div>
                <p>ПОСЛЕДНИЕ</p>
            </div>
            <div class="useful">
                <div class="bg"></div>
                <div class="front"></div>
                <p>ПОЛЕЗНЫЕ</p>
            </div>
            <div class="popular">
                <div class="bg"></div>
                <div class="front"></div>
                <p>ПОПУЛЯРНЫЕ</p>
            </div>
        </div>
    </div>