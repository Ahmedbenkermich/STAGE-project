<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cheque Report</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
        }
        th {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>
    <h1>Cheque Report</h1>
    <table>
        <thead>
        <tr>
            <th>Numéro</th>
            <th>Montant</th>
            <th>Benefication</th>
            <th>Type de Chèque</th>
            <th>Emis/NonEmis</th>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $cheques; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cheque): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($cheque->num); ?></td>
                <td><?php echo e($cheque->montant); ?></td>
                <td><?php echo e($cheque->benefication); ?></td>
                <td><?php echo e($cheque->type_cheque); ?></td>
                <td><?php echo e($cheque->emission); ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</body>
</html>
<?php /**PATH C:\Users\a7med\Desktop\testapp\resources\views/pdf/cheque_report.blade.php ENDPATH**/ ?>