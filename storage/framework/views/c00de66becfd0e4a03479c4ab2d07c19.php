<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php echo e(asset('cssfiles/sidebar.css')); ?>">
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />

</head>

<body>

    <section class="overlay">

    </section>
    <nav>
        <div class="logo">
            <i class="bx bx-menu menu-icon"></i>
            <span class="logo-name">Gestion des chèques
            </span>
        </div>
        <div class="sidebar">
            <div class="logo">
                <i class="bx bx-menu menu-icon"></i>
                <span class="logo-name">Gestion des chèques
                </span>
            </div>

            <div class="sidebar-content">
                <ul class="lists">



                    <li class="list">
                        <a href="/admin" class="nav-link">
                            <i class="bx bx-home-alt icon"></i>
                            <span class="link">Accueille</span>
                        </a>
                    </li>
                    
                    <li class="list">
                        <a href="/show" class="nav-link">
                            <i class="bx bx-list-ul icon"></i>
                            <span class="link">List des cheques</span>
                        </a>
                    </li>
                    <li class="list">
                        <a href="/create-user" class="nav-link">
                            <i class="bx bx-user-plus icon"></i>
                            <span class="link">Creation Utilisateur</span>
                        </a>
                    </li>
                    <li class="list">
                        <a href="/show-user" class="nav-link">
                            <i class="bx bx-list-ol icon"></i>
                            <span class="link">List d'utilisateur</span>
                        </a>
                    </li>
                    <li class="list">
                        <a href="/create-banque" class="nav-link">
                            <i class='bx bxs-bank icon'></i>
                            <span class="link">Creation Banque</span>
                        </a>
                    </li>

                </ul>

                <div class="bottom-content">
                    <li class="list">
                        <?php if (isset($component)) { $__componentOriginal68cb1971a2b92c9735f83359058f7108 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal68cb1971a2b92c9735f83359058f7108 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dropdown-link','data' => ['href' => route('profile.edit'),'class' => 'nav-link']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('profile.edit')),'class' => 'nav-link']); ?>
                            <i class="bx bxs-user icon"></i>
                            <span class="link"><?php echo e(__('Profile')); ?></span>

                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal68cb1971a2b92c9735f83359058f7108)): ?>
<?php $attributes = $__attributesOriginal68cb1971a2b92c9735f83359058f7108; ?>
<?php unset($__attributesOriginal68cb1971a2b92c9735f83359058f7108); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal68cb1971a2b92c9735f83359058f7108)): ?>
<?php $component = $__componentOriginal68cb1971a2b92c9735f83359058f7108; ?>
<?php unset($__componentOriginal68cb1971a2b92c9735f83359058f7108); ?>
<?php endif; ?>

                    </li>

                    <form method="POST" action="<?php echo e(route('logout')); ?>">
                        <?php echo csrf_field(); ?>
                        <li class="list">
                            <?php if (isset($component)) { $__componentOriginal68cb1971a2b92c9735f83359058f7108 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal68cb1971a2b92c9735f83359058f7108 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dropdown-link','data' => ['href' => route('logout'),'onclick' => 'event.preventDefault();
                                                this.closest(\'form\').submit();','class' => 'nav-link']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('logout')),'onclick' => 'event.preventDefault();
                                                this.closest(\'form\').submit();','class' => 'nav-link']); ?>
                                <i class="bx bx-log-out icon"></i>
                                <span class="link"><?php echo e(__('Déconnexion')); ?></span>

                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal68cb1971a2b92c9735f83359058f7108)): ?>
<?php $attributes = $__attributesOriginal68cb1971a2b92c9735f83359058f7108; ?>
<?php unset($__attributesOriginal68cb1971a2b92c9735f83359058f7108); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal68cb1971a2b92c9735f83359058f7108)): ?>
<?php $component = $__componentOriginal68cb1971a2b92c9735f83359058f7108; ?>
<?php unset($__componentOriginal68cb1971a2b92c9735f83359058f7108); ?>
<?php endif; ?>
                        </li>
                    </form>

                </div>
            </div>
        </div>
    </nav>


    <!-- Main Content -->
    <div class="main-content">

        <?php echo e($slot); ?>


    </div>
    <script src="<?php echo e(asset('cssfiles/sidebar.js')); ?>"></script>
</body>

</html>
<?php /**PATH C:\Users\a7med\Desktop\Stage_Project\resources\views/components/layout.blade.php ENDPATH**/ ?>