<!doctype html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?php echo $__env->yieldContent('title'); ?></title>
        <link rel="stylesheet" href="<?php echo e(asset('css/global.css')); ?>">
        <?php echo $__env->yieldContent('styles'); ?>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
        <script src="https://cdn.jsdelivr.net/jquery.marquee/1.3.1/jquery.marquee.min.js"></script>
    </head>
    <body>
        <header>
            <div class="container">
                <div class="logo">
                    <img src="<?php echo e(asset('imgs/logo.svg')); ?>" alt="">
                </div>
                <nav class="menu">
                    <li>
                        <a href="">
                            главная
                        </a>
                    </li>
                    <li>
                        <a href="">
                            о компании
                        </a>
                    </li>
                    <li>
                        <a href="">
                            наши работы
                        </a>
                    </li>
                    <li>
                        <a href="">
                            контакты
                        </a>
                    </li>
                    <li>
                        <a href="">
                            аренда спецтехники
                        </a>
                    </li>
                </nav>
                <div class="socials">
                    <div class="social">
                        <a href="">
                            <img src="<?php echo e(asset('imgs/vk.svg')); ?>" alt="">
                        </a>
                    </div>
                    <div class="social">
                        <a href="">
                            <img src="<?php echo e(asset('imgs/whatsapp.svg')); ?>" alt="">
                        </a>
                    </div>
                    <div class="social phone">
                        <a href="tel:+7(499) 340-08-99">
                            +7(499) 340-08-99
                        </a>
                    </div>
                </div>
                <div class="burger">
                    <img src="<?php echo e(asset('imgs/burger.svg')); ?>" alt="" class="burger-open">
                    <img src="<?php echo e(asset('imgs/burgerClose.svg')); ?>" alt="" class="burger-close">
                </div>
            </div>
        </header>
        <div class="mobile">
            <div class="container">
                <nav class="mobile-menu">
                    <li>главная</li>
                    <li>о компании</li>
                    <li>наши работы</li>
                    <li>контакты</li>
                    <li>аренда спецтехники</li>
                </nav>
                <div class="mobile-socials">
                    <div class="social phone">
                        <a href="tel:+7(499) 340-08-99">
                            +7(499) 340-08-99
                        </a>
                    </div>
                    <div class="social email">
                        <a href="mailto:uni3400899@yandex.ru">
                            uni3400899@yandex.ru
                        </a>
                    </div>
                    <div class="social-wrapper">
                        <div class="social">
                            <a href="">
                                <img src="<?php echo e(asset('imgs/vk.svg')); ?>" alt="">
                            </a>
                        </div>
                        <div class="social">
                            <a href="">
                                <img src="<?php echo e(asset('imgs/whatsapp.svg')); ?>" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="mobile-image">
                    <img src="<?php echo e(asset('imgs/mobileImage.png')); ?>" alt="">
                </div>
            </div>
        </div>
        <?php echo $__env->yieldContent('body'); ?>
        <section class="quote">
            <div class="quote-text">
                Мы всегда требуем от себя больше, чем требует заказчик
            </div>
            <div class="quote-image">
                <img src="<?php echo e(asset('imgs/quote.png')); ?>" alt="">
            </div>
        </section>
        <footer>
            <div class="container">
                <div class="logo">
                    <img src="<?php echo e(asset('imgs/footerLogo.svg')); ?>" alt="">
                </div>
                <nav class="footer-menu">
                    <li>главная</li>
                    <li>о компании</li>
                    <li>наши работы</li>
                    <li>контакты</li>
                    <li>аренда спецтехники</li>
                </nav>
                <div class="socials">
                    <div class="social">
                        <a href="">
                            <img src="<?php echo e(asset('imgs/vkWhite.svg')); ?>" alt="">
                        </a>
                    </div>
                    <div class="social">
                        <a href="">
                            <img src="<?php echo e(asset('imgs/whatsappWhite.svg')); ?>" alt="">
                        </a>
                    </div>
                    <div class="social phone">
                        <a href="tel:+7(499) 340-08-99">
                            +7(499) 340-08-99
                        </a>
                    </div>
                    <div class="social email">
                        <a href="mailto:uni3400899@yandex.ru">
                            uni3400899@yandex.ru
                        </a>
                    </div>
                </div>
                <div class="copyright">
                    ООО «Универсал-Групп» <?php echo e(date('Y')); ?>. Все права защищены
                </div>
            </div>
        </footer>
        <script src="<?php echo e(asset('js/app.js')); ?>"></script>
    </body>
</html>
<?php /**PATH /home/d/unigroup/resources/views/header.blade.php ENDPATH**/ ?>