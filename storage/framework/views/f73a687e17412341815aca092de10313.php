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
    <style>
        .container {
            width: 100%;
            max-width: 600px;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .card {
            margin: 0 auto;
        }

        .card-header {
            border-bottom: 1px solid #e0e0e0;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        .card-header h2 {
            margin: 0;
            font-size: 24px;
            color: #333;
        }

        .card-header p {
            margin: 5px 0 0;
            color: #777;
        }



        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #333;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .form-control:focus {
            border-color: #3b82f6;
            outline: none;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            color: #fff;
            background-color: #3b82f6;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #2563eb;
        }


        label {
            font-size: 16px;
            font-weight: bold;
            color: #333;
            margin-bottom: 8px;
            display: block;
        }

        select {
            width: 100%;
            max-width: 300px;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
            margin-top: 5px;
            margin-bottom: 15px;
        }

        select:focus {
            border-color: #007bff;
            outline: none;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }

        .form-error {
            color: #e74c3c;
            font-size: 14px;
            margin-top: 5px;
        }
    </style>

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>Les informations de banques</h2>
                <p>Mettez à jour votre banque :</p>
            </div>
            <div class="card-body">
                <form method="POST" action="/create-banque">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <?php if (isset($component)) { $__componentOriginalf4c8ecf26ef77d4de25edf56eae3a34d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf4c8ecf26ef77d4de25edf56eae3a34d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form-field','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form-field'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                            <?php if (isset($component)) { $__componentOriginalbb5658b317c99c60082c93dd5e2c5835 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbb5658b317c99c60082c93dd5e2c5835 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form-label','data' => ['for' => 'name_banque']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => 'name_banque']); ?>Nom de Banque : <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbb5658b317c99c60082c93dd5e2c5835)): ?>
<?php $attributes = $__attributesOriginalbb5658b317c99c60082c93dd5e2c5835; ?>
<?php unset($__attributesOriginalbb5658b317c99c60082c93dd5e2c5835); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbb5658b317c99c60082c93dd5e2c5835)): ?>
<?php $component = $__componentOriginalbb5658b317c99c60082c93dd5e2c5835; ?>
<?php unset($__componentOriginalbb5658b317c99c60082c93dd5e2c5835); ?>
<?php endif; ?>
                            <?php if (isset($component)) { $__componentOriginal93a7e4fbb8709cb7edbcf616ab99cd14 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal93a7e4fbb8709cb7edbcf616ab99cd14 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form-input','data' => ['name' => 'name_banque','id' => 'name_banque','placeholder' => 'donner le nom de banque','value' => old('name_banque'),'required' => true,'class' => 'form-control']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'name_banque','id' => 'name_banque','placeholder' => 'donner le nom de banque','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(old('name_banque')),'required' => true,'class' => 'form-control']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal93a7e4fbb8709cb7edbcf616ab99cd14)): ?>
<?php $attributes = $__attributesOriginal93a7e4fbb8709cb7edbcf616ab99cd14; ?>
<?php unset($__attributesOriginal93a7e4fbb8709cb7edbcf616ab99cd14); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal93a7e4fbb8709cb7edbcf616ab99cd14)): ?>
<?php $component = $__componentOriginal93a7e4fbb8709cb7edbcf616ab99cd14; ?>
<?php unset($__componentOriginal93a7e4fbb8709cb7edbcf616ab99cd14); ?>
<?php endif; ?>
                            <?php if (isset($component)) { $__componentOriginala0311668b84225c629d80adc067429fd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala0311668b84225c629d80adc067429fd = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form-error','data' => ['name' => 'name_banque']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'name_banque']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala0311668b84225c629d80adc067429fd)): ?>
<?php $attributes = $__attributesOriginala0311668b84225c629d80adc067429fd; ?>
<?php unset($__attributesOriginala0311668b84225c629d80adc067429fd); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala0311668b84225c629d80adc067429fd)): ?>
<?php $component = $__componentOriginala0311668b84225c629d80adc067429fd; ?>
<?php unset($__componentOriginala0311668b84225c629d80adc067429fd); ?>
<?php endif; ?>
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf4c8ecf26ef77d4de25edf56eae3a34d)): ?>
<?php $attributes = $__attributesOriginalf4c8ecf26ef77d4de25edf56eae3a34d; ?>
<?php unset($__attributesOriginalf4c8ecf26ef77d4de25edf56eae3a34d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf4c8ecf26ef77d4de25edf56eae3a34d)): ?>
<?php $component = $__componentOriginalf4c8ecf26ef77d4de25edf56eae3a34d; ?>
<?php unset($__componentOriginalf4c8ecf26ef77d4de25edf56eae3a34d); ?>
<?php endif; ?>
                    </div>
                  



                    <br><br>


                    <button type="submit" class="btn">Enregistrer</button>
                </form>
            </div>

        </div>
    </div>
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
<?php /**PATH C:\Users\a7med\Desktop\testapp\resources\views\admin_pages\create-banque.blade.php ENDPATH**/ ?>