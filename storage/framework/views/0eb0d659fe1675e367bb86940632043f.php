<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Record Clinic Visit
        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg p-6">

                <form method="POST" action="<?php echo e(route('customers.store')); ?>">
                    <?php echo csrf_field(); ?>

                    <div class="mb-4">
                        <label>Student ID</label>
                        <input type="text" name="student_id" class="w-full border p-2 rounded">
                    </div>

                    <div class="mb-4">
                        <label>Name</label>
                        <input type="text" name="name" class="w-full border p-2 rounded">
                    </div>

                    <div class="mb-4">
                        <label>Gender</label>
                        <select name="gender" class="w-full border p-2 rounded">
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <label>Department</label>
                        <input type="text" name="department" class="w-full border p-2 rounded">
                    </div>

                    <div class="mb-4">
                        <label>Date of Birth</label>
                        <input type="date" name="dob" class="w-full border p-2 rounded">
                    </div>

                    <div class="mb-4">
                        <label>Reason for Visit</label>
                        <textarea name="reason" class="w-full border p-2 rounded"></textarea>
                    </div>

                    <button type="submit" class="bg-gray-800 text-white px-4 py-2 rounded">
                        Record Visit
                    </button>

                </form>

            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?><?php /**PATH C:\laragon\www\labact2\resources\views/customers/create.blade.php ENDPATH**/ ?>