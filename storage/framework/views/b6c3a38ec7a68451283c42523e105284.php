<?php if (isset($component)) { $__componentOriginal6b95ea52e2cc4d3a2bff08458d4520b5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6b95ea52e2cc4d3a2bff08458d4520b5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout-ag','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout-ag'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

<h1> votre cheque créé avec succès
</h1>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6b95ea52e2cc4d3a2bff08458d4520b5)): ?>
<?php $attributes = $__attributesOriginal6b95ea52e2cc4d3a2bff08458d4520b5; ?>
<?php unset($__attributesOriginal6b95ea52e2cc4d3a2bff08458d4520b5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6b95ea52e2cc4d3a2bff08458d4520b5)): ?>
<?php $component = $__componentOriginal6b95ea52e2cc4d3a2bff08458d4520b5; ?>
<?php unset($__componentOriginal6b95ea52e2cc4d3a2bff08458d4520b5); ?>
<?php endif; ?><?php /**PATH C:\Users\a7med\Desktop\testapp\resources\views\agent_pages\succsess.blade.php ENDPATH**/ ?>