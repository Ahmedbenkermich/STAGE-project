<?php if (isset($component)) { $__componentOriginal23a33f287873b564aaf305a1526eada4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal23a33f287873b564aaf305a1526eada4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>User Table</title>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body>
    <div class="container mx-auto p-4">
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200">
                <thead class="bg-gray-100">
                <tr>
                    <th class="py-2 px-4 border-b border-gray-200 text-left text-gray-600">Numéro</th>
                    <th class="py-2 px-4 border-b border-gray-200 text-left text-gray-600">Montant</th>
                    <th class="py-2 px-4 border-b border-gray-200 text-left text-gray-600">Benefication</th>
                    <th class="py-2 px-4 border-b border-gray-200 text-left text-gray-600">Type De Cheque</th>

                    <th class="py-2 px-4 border-b border-gray-200 text-left text-gray-600"></th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $cheques; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cheque): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="py-2 px-4 border-b border-gray-200"><?php echo e($cheque['num']); ?></td>
                        <td class="py-2 px-4 border-b border-gray-200"><?php echo e($cheque['montant']); ?></td>
                        <td class="py-2 px-4 border-b border-gray-200"><?php echo e($cheque['benefication']); ?></td>
                        <td class="py-2 px-4 border-b border-gray-200"><?php echo e($cheque['type_cheque']); ?></td>

                        <td class="py-2 px-4 border-b border-gray-200 text-blue-600"><a href="/show/<?php echo e($cheque->id); ?>/edit">Editer</a></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
    </body>
    </html>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $attributes = $__attributesOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__attributesOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $component = $__componentOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__componentOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php /**PATH C:\Users\a7med\Desktop\Stage_Project\resources\views/admin_pages/show-cheque.blade.php ENDPATH**/ ?>