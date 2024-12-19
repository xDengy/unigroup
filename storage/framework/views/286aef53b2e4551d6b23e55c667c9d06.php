<!doctype html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?php echo $__env->yieldContent('title'); ?></title>
        <meta name="description" content="<?php echo $__env->yieldContent('description'); ?>">
        <meta name="keywords" content="<?php echo $__env->yieldContent('keywords'); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('css/global.css')); ?>">
        <?php echo $__env->yieldContent('styles'); ?>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
        <script src="https://cdn.jsdelivr.net/jquery.marquee/1.3.1/jquery.marquee.min.js"></script>
    </head>
    <body class="page-<?php echo e($page['code']); ?>">
        <header>
            <div class="container">
                <a href="/" class="logo">
                    <img src="<?php echo e($settings['logo']); ?>" alt="">
                </a>
                <nav class="menu">
                    <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                            <a href="<?php echo e($menu['url']); ?>">
                                <?php echo e($menu['name']); ?>

                            </a>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </nav>
                <div class="socials">
                    <div class="social">
                        <a href="<?php echo e($settings['vk']); ?>">
                            <img src="<?php echo e(asset('imgs/vk.svg')); ?>" alt="">
                        </a>
                    </div>
                    <div class="social">
                        <a href="<?php echo e($settings['whatsapp']); ?>">
                            <img src="<?php echo e(asset('imgs/whatsapp.svg')); ?>" alt="">
                        </a>
                    </div>
                    <div class="social phone">
                        <a href="tel:<?php echo e($settings['phone']); ?>">
                            <?php echo e($settings['phone']); ?>

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
                    <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                            <a href="<?php echo e($menu['url']); ?>">
                                <?php echo e($menu['name']); ?>

                            </a>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </nav>
                <div class="mobile-socials">
                    <div class="social phone">
                        <a href="tel:<?php echo e($settings['phone']); ?>">
                            <?php echo e($settings['phone']); ?>

                        </a>
                    </div>
                    <div class="social email">
                        <a href="mailto:<?php echo e($settings['email']); ?>">
                            <?php echo e($settings['email']); ?>

                        </a>
                    </div>
                    <div class="social-wrapper">
                        <div class="social">
                            <a href="<?php echo e($settings['vk']); ?>">
                                <img src="<?php echo e(asset('imgs/vk.svg')); ?>" alt="">
                            </a>
                        </div>
                        <div class="social">
                            <a href="<?php echo e($settings['whatsapp']); ?>">
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
                <?php echo e($settings['quote']); ?>

            </div>
            <div class="quote-image">
                <img src="<?php echo e($settings['quotePicture']); ?>" alt="">
            </div>
        </section>
        <footer>
            <div class="container">
                <div class="logo">
                    <img src="<?php echo e($settings['logoFooter']); ?>" alt="">
                </div>
                <nav class="footer-menu">
                    <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                            <a href="<?php echo e($menu['url']); ?>">
                                <?php echo e($menu['name']); ?>

                            </a>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </nav>
                <div class="socials">
                    <div class="social">
                        <a href="<?php echo e($settings['vk']); ?>">
                            <img src="<?php echo e(asset('imgs/vkWhite.svg')); ?>" alt="">
                        </a>
                    </div>
                    <div class="social">
                        <a href="<?php echo e($settings['whatsapp']); ?>">
                            <img src="<?php echo e(asset('imgs/whatsappWhite.svg')); ?>" alt="">
                        </a>
                    </div>
                    <div class="social phone">
                        <a href="tel:<?php echo e($settings['phone']); ?>">
                            <?php echo e($settings['phone']); ?>

                        </a>
                    </div>
                    <div class="social email">
                        <a href="mailto:<?php echo e($settings['email']); ?>">
                            <?php echo e($settings['email']); ?>

                        </a>
                    </div>
                </div>
                <div class="copyright">
                    ООО «Универсал-Групп» <?php echo e(date('Y')); ?>. Все права защищены
                </div>
            </div>
            <div class="footer-strokes">
                <img src="<?php echo e(asset('imgs/footerStrokes.svg')); ?>" alt="">
            </div>
        </footer>
        <script src="<?php echo e(asset('js/app.js')); ?>"></script>
    </body>
</html>
<?php /**PATH /home/d/unigroup/resources/views/layout.blade.php ENDPATH**/ ?>