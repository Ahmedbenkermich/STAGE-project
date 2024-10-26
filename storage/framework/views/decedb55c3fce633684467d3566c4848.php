<?php if (isset($component)) { $__componentOriginal8ba3a82b2d48b2b8dd21d427df332dce = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8ba3a82b2d48b2b8dd21d427df332dce = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout-ca','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout-ca'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>



    <div class="bg-full p-6">
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

        <form method="GET" action="<?php echo e(route('caissier.dashboard')); ?>" class="mb-6 bg-white p-6 rounded-lg shadow-md">
            <div class="flex flex-col md:flex-row justify-center items-center space-y-4 md:space-y-0 md:space-x-4">
                <input type="text" name="num" placeholder="Numéro" value="<?php echo e(request('num')); ?>" class="p-2 border border-gray-300 rounded w-full md:w-1/6 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <input type="text" name="montant" placeholder="Montant" value="<?php echo e(request('montant')); ?>" class="p-2 border border-gray-300 rounded w-full md:w-1/6 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <input type="text" name="benefication" placeholder="Benefication" value="<?php echo e(request('benefication')); ?>" class="p-2 border border-gray-300 rounded w-full md:w-1/6 focus:outline-none focus:ring-2 focus:ring-blue-500">

                <input type="text" name="type_cheque" placeholder="Type de Chèque" value="<?php echo e(request('type_cheque')); ?>" class="p-2 border border-gray-300 rounded w-full md:w-1/6 focus:outline-none focus:ring-2 focus:ring-blue-500">

                <select name="emission" class="p-2 border border-gray-300 rounded w-full md:w-1/6 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="">-- Emission --</option>
                    <option value="emis" <?php echo e(request('emission') == 'emis' ? 'selected' : ''); ?>>Emis</option>
                    <option value="non_emis" <?php echo e(request('emission') == 'non_emis' ? 'selected' : ''); ?>>Non Emis</option>
                </select>
                <input type="date" name="date" value="<?php echo e(request('date')); ?>" class="p-2 border border-gray-300 rounded w-full md:w-1/6 focus:outline-none focus:ring-2 focus:ring-blue-500">

            </div>

            <div class="flex justify-center mt-4">
                <button type="submit" class="px-6 py-2 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition duration-200">Rechercher</button>
                <a href="<?php echo e(route('caissier.dashboard')); ?>" class="ml-4 px-6 py-2 bg-red-500 text-white font-semibold rounded-lg hover:bg-red-600 transition duration-200">Reset</a>
                <a href="<?php echo e(route('caissier.generatePdf', request()->query())); ?>" class="ml-4 px-6 py-2 bg-green-600 text-white font-semibold rounded-lg hover:bg-green-700 transition duration-200">Export PDF</a>
            </div>
        </form>

        <div class="overflow-x-auto bg-white p-4 rounded-lg shadow-md">
            <table class="min-w-full bg-white border border-gray-200">
                <thead class="bg-gray-100">
                <tr>
                    <th class="py-3 px-4 border-b border-gray-200 text-left text-gray-700 font-medium">Numéro</th>
                    <th class="py-3 px-4 border-b border-gray-200 text-left text-gray-700 font-medium">Montant</th>
                    <th class="py-3 px-4 border-b border-gray-200 text-left text-gray-700 font-medium">Benefication</th>
                    <th class="py-3 px-4 border-b border-gray-200 text-left text-gray-700 font-medium">Type De Chèque</th>
                    <th class="py-3 px-4 border-b border-gray-200 text-left text-gray-700 font-medium">Emis/NonEmis</th>
                    <th class="py-3 px-4 border-b border-gray-200 text-left text-gray-700 font-medium"></th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $cheques; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cheque): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="hover:bg-gray-50 transition duration-150">
                        <td class="py-3 px-4 border-b border-gray-200"><?php echo e($cheque['num']); ?></td>
                        <td class="py-3 px-4 border-b border-gray-200"><?php echo e($cheque['montant']); ?></td>
                        <td class="py-3 px-4 border-b border-gray-200"><?php echo e($cheque['benefication']); ?></td>
                        <td class="py-3 px-4 border-b border-gray-200"><?php echo e($cheque['type_cheque']); ?></td>
                        <td class="py-3 px-4 border-b border-gray-200"><?php echo e($cheque['emission']); ?></td>
                        <td class="py-3 px-4 border-b border-gray-200">
                            <a href="/caissier/<?php echo e($cheque->id); ?>/emis" class="text-blue-600 hover:text-blue-800">Editer</a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8ba3a82b2d48b2b8dd21d427df332dce)): ?>
<?php $attributes = $__attributesOriginal8ba3a82b2d48b2b8dd21d427df332dce; ?>
<?php unset($__attributesOriginal8ba3a82b2d48b2b8dd21d427df332dce); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8ba3a82b2d48b2b8dd21d427df332dce)): ?>
<?php $component = $__componentOriginal8ba3a82b2d48b2b8dd21d427df332dce; ?>
<?php unset($__componentOriginal8ba3a82b2d48b2b8dd21d427df332dce); ?>
<?php endif; ?>
<?php /**PATH C:\Users\a7med\Desktop\Stage_Project\resources\views/caissier_pages/caissier.blade.php ENDPATH**/ ?>