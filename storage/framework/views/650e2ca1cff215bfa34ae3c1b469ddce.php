<?php $__env->startSection('title'); ?>
    <?php echo e($page['title']); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?>
    <?php echo e($page['description']); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('keywords'); ?>
    <?php echo e($page['keywords']); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/main.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
    <section class="banner">
        <div class="container">
            <div class="banner-wrapper">
                <?php
                    $pageTitle = str_replace('-', '<span class="slash"></span>', $page['h1'])
                ?>
                <h1>
                    <?php echo $pageTitle; ?>
                </h1>
            </div>
        </div>
        <div class="banner-textarea container">
            <div class="banner-text">
                <?php echo html_entity_decode($blocks['banner']['text']); ?>
            </div>
            <div class="banner-image">
                <img src="<?php echo e($blocks['banner']['attachment'][0]['url']); ?>" alt="">
                <div class="banner-square"></div>
            </div>
            <a href="<?php echo e($blocks['banner']['link']); ?>" class="banner-button">
                <?php echo e($blocks['banner']['link_text']); ?>

            </a>
        </div>
        <div class="banner-strokes">
            <img src="<?php echo e(asset('imgs/bannerStrokes.svg')); ?>" alt="">
        </div>
    </section>
    <?php if(count($advantages) > 0): ?>
        <section class="trophies">
            <div class="container">
                <div class="trophies-wrapper">
                    <?php $__currentLoopData = $advantages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $advantage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="trophy">
                            <div class="trophy-big">
                                <?php echo e($advantage['name']); ?>

                            </div>
                            <div class="trophy-small">
                                <?php echo e($advantage['description']); ?>

                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </section>
    <?php endif; ?>
    <section class="projects">
        <div class="container">
            <div class="projects-wrapper">
                <div class="projects-wrapper-top">
                    <div class="ladder">
                        <h2 class="ladder-title-background"><?php echo e($blocks['projects']['second_name']); ?></h2>
                        <h2 class="ladder-title"><?php echo e($blocks['projects']['name']); ?></h2>
                    </div>
                    <a href="<?php echo e($blocks['projects']['link']); ?>" class="more-button">
                        <?php echo e($blocks['projects']['link_text']); ?> <img src="<?php echo e(asset('imgs/arrow.svg')); ?>" alt="">
                    </a>
                </div>
                <div class="projects-wrapper-bottom">
                    <div class="project">
                        <div class="project-image">
                            <img src="<?php echo e(asset('imgs/project.png')); ?>" alt="">
                        </div>
                        <div class="project-name">
                            Жилые комплексы
                        </div>
                        <div class="project-description">
                            Lorem ipsum dolor sit amet consectetur. Suspendisse venenatis lectus elit auctor aenean malesuada lectus in.
                        </div>
                        <div class="project-delimiter"></div>
                        <a href="" class="project-detail">
                            <img src="<?php echo e(asset('imgs/projectDetail.svg')); ?>" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php if( count($marquees) > 0 ): ?>
        <section class="marquee">
            <div class="marquee-wrapper">
                <div class="marquee-line">
                    <?php $__currentLoopData = $marquees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $marquee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="marquee-text"><?php echo e($marquee['name']); ?></div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

                <div aria-hidden="true" class="marquee-line">
                    <?php $__currentLoopData = $marquees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $marquee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="marquee-text"><?php echo e($marquee['name']); ?></div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </section>
   <?php endif; ?>
    <section class="rent">
        <div class="container">
            <div class="rent-top">
                <div class="ladder">
                    <h2 class="ladder-title-background"><?php echo e($blocks['rent']['second_name']); ?></h2>
                    <h2 class="ladder-title"><?php echo e($blocks['rent']['name']); ?></h2>
                </div>
                <a href="<?php echo e($blocks['projects']['link']); ?>" class="more-button">
                    <?php echo e($blocks['projects']['link_text']); ?> <img src="<?php echo e(asset('imgs/arrow.svg')); ?>" alt="">
                </a>
            </div>
            <div class="rent-bottom">
                <div class="rent-text">
                    <?php echo html_entity_decode($blocks['rent']['text']) ?>
                </div>
            </div>
        </div>
        <?php if(count($blocks['rent']['attachment']) > 0): ?>
            <div class="rent-image-wrapper">
                <div class="rent-image-border"></div>
                <div class="container">
                    <div class="rent-image">
                        <img src="<?php echo e($blocks['rent']['attachment'][0]['url']); ?>" alt="">
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </section>
    <?php if( count($blocks['gallery-1']['attachment']) > 0 ): ?>
        <?php
            $first = array_shift($blocks['gallery-1']['attachment']);
            $seconds = array_chunk($blocks['gallery-1']['attachment'], 2);
        ?>
        <section class="gallery">
            <div class="gallery-col">
                <div class="gallery-image">
                    <img src="<?php echo e($first['url']); ?>" alt="">
                </div>
            </div>
            <div class="gallery-col">
                <?php
                    $class = [];
                    if (count($seconds) == 1) {
                        $class[0] = 'h-50';
                        $class[1] = 'h-50';
                    } else {
                        $class[0] = 'h-33';
                        $class[1] = 'h-66 w-50';
                    }
                ?>
                <?php $__currentLoopData = $seconds[0]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $second): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="gallery-image <?php echo e($class[$index]); ?>">
                        <img src="<?php echo e($second['url']); ?>" alt="">
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php if( count($seconds) > 1 ): ?>
                    <?php
                        $class = '';
                        if (count($seconds[1]) > 1) {
                            $class = 'h-50';
                        }
                    ?>
                    <div class="gallery-col h-66">
                        <?php $__currentLoopData = $seconds[1]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $second): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="gallery-image <?php echo e($class); ?>">
                                <img src="<?php echo e($second['url']); ?>" alt="">
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                <?php endif; ?>
            </div>
        </section>
    <?php endif; ?>
    <section class="map">
        <div class="container">
            <div class="map-text">
                <?php echo html_entity_decode($blocks['map']['text']) ?>
            </div>
        </div>
        <?php if(count($blocks['map']['attachment']) > 0): ?>
            <div class="map-image">
                <img src="<?php echo e($blocks['map']['attachment'][0]['url']); ?>" alt="">
            </div>
        <?php endif; ?>
        <div class="container">
            <div class="map-title">
                <?php echo e($blocks['map']['name']); ?>

            </div>
        </div>
    </section>
    <section class="form">
        <div class="container">
            <?php if(count($blocks['form']['attachment']) > 0): ?>
                <div class="form-image">
                    <img src="<?php echo e($blocks['form']['attachment'][0]['url']); ?>" alt="">
                </div>
            <?php endif; ?>
            <form method="post" action="" class="form-form">
                <?php echo csrf_field(); ?>
                <div class="form-title">
                    <?php echo e($blocks['form']['name']); ?>

                </div>
                <div class="form-description">
                    <?php echo html_entity_decode($blocks['form']['text']) ?>
                </div>
                <div class="form-fields">
                    <div class="field">
                        <input type="text" name="NAME" placeholder="Ваше имя">
                    </div>
                    <div class="field">
                        <input type="tel" name="PHONE" placeholder="+7....">
                    </div>
                </div>
                <div class="form-button">
                    <input type="submit" name="submit" value="<?php echo e($blocks['form']['link_text']); ?>">
                </div>
            </form>
        </div>
    </section>
    <?php if(count($partners) > 0): ?>
        <section class="partners">
            <div class="container">
                <div class="partners-wrapper">
                    <?php $__currentLoopData = $partners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $partner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="partner"><?php echo e($partner['name']); ?></div>
                        <?php if($index = count($partners) - 1): ?>
                            <div class="delimiter"></div>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </section>
    <?php endif; ?>
    <?php if( count($blocks['gallery-2']['attachment']) > 0 ): ?>
        <?php
            $gallery = array_chunk($blocks['gallery-2']['attachment'], 2);
        ?>
        <section class="gallery-2">
            <div class="gallery-2-wrapper">
                <?php
                    $class = [
                        [
                            'gallery-2-row-2',
                            'gallery-2-row-2'
                        ],
                        [
                            'gallery-2-row-3',
                            'gallery-2-row-1'
                        ],
                        [
                            'gallery-2-row-1',
                            'gallery-2-row-3'
                        ],
                    ];
                ?>
                <?php $__currentLoopData = $gallery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $gal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="gallery-2-col">
                        <?php $__currentLoopData = $gal; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $pic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="gallery-2-row <?php echo e($class[$index][$i]); ?>">
                                <img src="<?php echo e($pic['url']); ?>" alt="">
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </section>
    <?php endif; ?>
    <?php if(count($reviews) > 0): ?>
        <section class="reviews">
            <div class="container">
                <div class="review-top">
                    <div class="ladder">
                        <h2 class="ladder-title-background"><?php echo e($blocks['reviews']['second_name']); ?></h2>
                        <h2 class="ladder-title"><?php echo e($blocks['reviews']['name']); ?></h2>
                    </div>
                </div>
                <div class="review-bottom">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="swiper-slide">
                                    <div class="review">
                                        <div class="review-title">
                                            <?php echo e($review['name']); ?>

                                        </div>
                                        <div class="review-text">
                                            <?php echo html_entity_decode($review['text']) ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    <div class="swiper-navigation">
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/d/unigroup/resources/views/welcome.blade.php ENDPATH**/ ?>