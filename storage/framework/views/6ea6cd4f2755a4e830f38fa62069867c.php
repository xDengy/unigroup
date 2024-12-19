<td class="text-<?php echo e($align); ?> <?php if(!$width): ?> text-truncate <?php endif; ?>"
    data-column="<?php echo e($slug); ?>" colspan="<?php echo e($colspan); ?>"
    <?php if(empty(!$width)): ?>style="min-width:<?php echo e(is_numeric($width) ? $width . 'px' : $width); ?>;"<?php endif; ?>
>
    <div>
        <?php if(isset($render)): ?>
            <?php echo $value; ?>

        <?php else: ?>
            <?php echo e($value); ?>

        <?php endif; ?>
    </div>
</td>
<?php /**PATH /home/d/unigroup/vendor/orchid/platform/resources/views/partials/layouts/td.blade.php ENDPATH**/ ?>