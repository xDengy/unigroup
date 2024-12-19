<?php $__env->startComponent($typeForm, get_defined_vars()); ?>
    <button
            data-controller="button"
            data-turbo="<?php echo e(var_export($turbo)); ?>"
            <?php if(empty(!$confirm)): ?>
                data-action="button#confirm"
                data-button-confirm="<?php echo e($confirm); ?>"
            <?php endif; ?>
        <?php echo e($attributes); ?>>

        <?php if(isset($icon)): ?>
            <?php if (isset($component)) { $__componentOriginal385240e1db507cd70f0facab99c4d015 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal385240e1db507cd70f0facab99c4d015 = $attributes; } ?>
<?php $component = Orchid\Icons\IconComponent::resolve(['path' => $icon,'class' => ''.e(empty($name) ?: 'me-2').''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('orchid-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Orchid\Icons\IconComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal385240e1db507cd70f0facab99c4d015)): ?>
<?php $attributes = $__attributesOriginal385240e1db507cd70f0facab99c4d015; ?>
<?php unset($__attributesOriginal385240e1db507cd70f0facab99c4d015); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal385240e1db507cd70f0facab99c4d015)): ?>
<?php $component = $__componentOriginal385240e1db507cd70f0facab99c4d015; ?>
<?php unset($__componentOriginal385240e1db507cd70f0facab99c4d015); ?>
<?php endif; ?>
        <?php endif; ?>

        <span><?php echo e($name ?? ''); ?></span>
    </button>
<?php echo $__env->renderComponent(); ?>
<?php /**PATH /home/d/unigroup/vendor/orchid/platform/resources/views/actions/button.blade.php ENDPATH**/ ?>