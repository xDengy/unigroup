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
    <?php if(!empty($blocks['about'])): ?>
        <section class="about">
            <div class="container">
                <div class="about-wrapper">
                    <div class="about-wrapper-top">
                        <div class="ladder">
                            <h2 class="ladder-title-background"><?php echo e($blocks['about']['second_name']); ?></h2>
                            <h1 class="ladder-title"><?php echo e($blocks['about']['name']); ?></h1>
                        </div>
                    </div>
                    <div class="about-wrapper-bottom">
                        <?php $__currentLoopData = $blocks['about']['attachment']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attachment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="about-image">
                                <img src="<?php echo e($attachment['url']); ?>" alt="">
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="about-wrapper-text">
                        <?php echo html_entity_decode($blocks['about']['text']) ?>
                    </div>
                </div>
            </div>
            <div class="banner-strokes">
                <img src="<?php echo e(asset('imgs/bannerStrokes.svg')); ?>" alt="">
            </div>
        </section>
    <?php endif; ?>
    <?php if( !empty($blocks['company-marquee']) ): ?>
        <section class="about-marquee">
            <div class="marquee-wrapper">
                <div class="marquee-line">
                    <?php for($i = 0; $i < 4; $i++): ?>
                        <div class="about-marquee-text">
                            <?php echo html_entity_decode($blocks['company-marquee']['text']) ?>
                        </div>
                    <?php endfor; ?>
                </div>

                <div aria-hidden="true" class="marquee-line">
                    <?php for($i = 0; $i < 4; $i++): ?>
                        <div class="about-marquee-text">
                            <?php echo html_entity_decode($blocks['company-marquee']['text']) ?>
                        </div>
                    <?php endfor; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>
    <?php if(!empty($director)): ?>
        <section class="director">
            <div class="container">
                <div class="director-wrapper">
                    <div class="director-image">
                        <img src="<?php echo e($director['picture']); ?>" alt="">
                    </div>
                    <div class="director-info">
                        <div class="director-post">
                            <?php echo e($director['post']); ?>

                        </div>
                        <div class="director-name">
                            <?php echo e($director['name']); ?>

                        </div>
                        <div class="director-description">
                            <?php echo e($director['text']); ?>

                        </div>
                        <div class="director-quote">
                            <div class="quote quote-left"></div>
                            <div class="director-quote-text">
                                <?php echo htmlspecialchars_decode($director['quote']) ?>
                            </div>
                            <div class="quote quote-right"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
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
    <section class="rent">
        <div class="container">
            <div class="rent-top">
                <div class="ladder">
                    <h2 class="ladder-title-background"><?php echo e($blocks['our-partners']['second_name']); ?></h2>
                    <h2 class="ladder-title"><?php echo e($blocks['our-partners']['name']); ?></h2>
                </div>
            </div>
            <div class="rent-bottom">
                <div class="rent-text">
                    <?php echo html_entity_decode($blocks['our-partners']['text']) ?>
                </div>
            </div>
        </div>
        <?php if(count($partners) > 0): ?>
            <section class="partners">
                <div class="partners-line partners-line-left"></div>
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
                <div class="partners-line partners-line-right"></div>
            </section>
        <?php endif; ?>
    </section>
    <?php if(!empty($blocks['certificates'])): ?>
        <section class="about-marquee">
            <div class="marquee-wrapper">
                <div class="marquee-line">
                    <div class="about-marquee-text"><?php echo e($blocks['certificates']['second_name']); ?></div>
                    <div class="about-marquee-text"><?php echo e($blocks['certificates']['second_name']); ?></div>
                    <div class="about-marquee-text"><?php echo e($blocks['certificates']['second_name']); ?></div>
                    <div class="about-marquee-text"><?php echo e($blocks['certificates']['second_name']); ?></div>
                </div>

                <div aria-hidden="true" class="marquee-line">
                    <div class="about-marquee-text"><?php echo e($blocks['certificates']['second_name']); ?></div>
                    <div class="about-marquee-text"><?php echo e($blocks['certificates']['second_name']); ?></div>
                    <div class="about-marquee-text"><?php echo e($blocks['certificates']['second_name']); ?></div>
                    <div class="about-marquee-text"><?php echo e($blocks['certificates']['second_name']); ?></div>
                </div>
            </div>
        </section>
        <section class="certificates">
            <div class="container">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <?php $__currentLoopData = $blocks['certificates']['attachment']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attachment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="swiper-slide">
                                <div class="certificate">
                                    <img src="<?php echo e($attachment['url']); ?>" alt="">
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </section>
        <section class="about-marquee">
            <div class="marquee-wrapper">
                <div class="marquee-line">
                    <div class="about-marquee-text"><?php echo e($blocks['certificates']['second_name']); ?></div>
                    <div class="about-marquee-text"><?php echo e($blocks['certificates']['second_name']); ?></div>
                    <div class="about-marquee-text"><?php echo e($blocks['certificates']['second_name']); ?></div>
                    <div class="about-marquee-text"><?php echo e($blocks['certificates']['second_name']); ?></div>
                </div>

                <div aria-hidden="true" class="marquee-line">
                    <div class="about-marquee-text"><?php echo e($blocks['certificates']['second_name']); ?></div>
                    <div class="about-marquee-text"><?php echo e($blocks['certificates']['second_name']); ?></div>
                    <div class="about-marquee-text"><?php echo e($blocks['certificates']['second_name']); ?></div>
                    <div class="about-marquee-text"><?php echo e($blocks['certificates']['second_name']); ?></div>
                </div>
            </div>
        </section>
    <?php endif; ?>
    <?php if(!empty($blocks['faq'])): ?>
        <section class="faq">
            <div class="container">
                <div class="faq-top">
                    <div class="ladder">
                        <h2 class="ladder-title-background"><?php echo e($blocks['faq']['second_name']); ?></h2>
                        <h2 class="ladder-title"><?php echo e($blocks['faq']['name']); ?></h2>
                    </div>
                </div>
                <div class="faq-bottom">
                    <?php $__currentLoopData = $faq; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faqItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="faq-item">
                            <div class="faq-title-block">
                                <div class="faq-title">
                                    <?php echo e($faqItem['name']); ?>

                                </div>
                                <div class="dropdown-button">
                                    <svg width="23" height="24" viewBox="0 0 23 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <line x1="-0.00170898" y1="10.868" x2="23" y2="10.868" stroke="#3A3C35" stroke-width="1.53344"/>
                                        <line x1="12.2659" y1="0.133789" x2="12.2659" y2="23.1355" stroke="#3A3C35" stroke-width="1.53344"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="faq-description-block">
                                <div class="faq-description">
                                    <?php echo e($faqItem['text']); ?>

                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </section>
    <?php endif; ?>
    <?php if(!empty($blocks['literacy'])): ?>
        <section class="about-marquee">
            <div class="marquee-wrapper">
                <div class="marquee-line">
                    <div class="about-marquee-text"><?php echo e($blocks['literacy']['second_name']); ?></div>
                    <div class="about-marquee-text"><?php echo e($blocks['literacy']['second_name']); ?></div>
                    <div class="about-marquee-text"><?php echo e($blocks['literacy']['second_name']); ?></div>
                    <div class="about-marquee-text"><?php echo e($blocks['literacy']['second_name']); ?></div>
                </div>

                <div aria-hidden="true" class="marquee-line">
                    <div class="about-marquee-text"><?php echo e($blocks['literacy']['second_name']); ?></div>
                    <div class="about-marquee-text"><?php echo e($blocks['literacy']['second_name']); ?></div>
                    <div class="about-marquee-text"><?php echo e($blocks['literacy']['second_name']); ?></div>
                    <div class="about-marquee-text"><?php echo e($blocks['literacy']['second_name']); ?></div>
                </div>
            </div>
        </section>
        <section class="literacy">
            <div class="container">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <?php $__currentLoopData = $blocks['literacy']['attachment']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attachment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="swiper-slide">
                                <div class="literacy-items">
                                    <img src="<?php echo e($attachment['url']); ?>" alt="">
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </section>
        <section class="about-marquee">
            <div class="marquee-wrapper">
                <div class="marquee-line">
                    <div class="about-marquee-text"><?php echo e($blocks['literacy']['second_name']); ?></div>
                    <div class="about-marquee-text"><?php echo e($blocks['literacy']['second_name']); ?></div>
                    <div class="about-marquee-text"><?php echo e($blocks['literacy']['second_name']); ?></div>
                    <div class="about-marquee-text"><?php echo e($blocks['literacy']['second_name']); ?></div>
                </div>

                <div aria-hidden="true" class="marquee-line">
                    <div class="about-marquee-text"><?php echo e($blocks['literacy']['second_name']); ?></div>
                    <div class="about-marquee-text"><?php echo e($blocks['literacy']['second_name']); ?></div>
                    <div class="about-marquee-text"><?php echo e($blocks['literacy']['second_name']); ?></div>
                    <div class="about-marquee-text"><?php echo e($blocks['literacy']['second_name']); ?></div>
                </div>
            </div>
        </section>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/d/unigroup/resources/views/about.blade.php ENDPATH**/ ?>