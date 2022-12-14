
<?php $__env->startSection('content'); ?>
<div class="breadcrumb">
    <div class="container">
        <a class="breadcrumb-item" href="<?php echo e(url('/')); ?>">Home</a>
        <span class="breadcrumb-item active">Welcome <?php echo e(Auth::user()->email); ?></span>
        <span class="breadcrumb-item active">Upload audio</span>
    </div>
    </div>
    <section class="static about-sec">
        <div class="container">
            <h1>Upload audio</h1>
            <div class="form">
                <form class="" action="<?php echo e(route('audio.edit')); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-md-6">
                            <input type="hidden" name="Id_product" value="">
                            <label for="name">Id_product</label>
                            <input type="text" name="name_product" value="" >
                            <label for="name_product">name_product</label>
                            <input type="text" name="author"value="" placeholder="FMW5vLCdPks">
                            <label for="author">author</label>
                            <input type="text" name="amount"value="" placeholder="FMW5vLCdPks">
                            <label for="amount">amount</label>
                            <input type="text" name="link"value="" placeholder="">
                            <label for="link">link</label>
                            <input type="file" name="Image"value="" placeholder="">
                            <label for="link">Image</label>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12">
                      <input type="hidden"name="id" value="<?php echo e($audio->Id_product); ?>">
                        <button type="submit" class="btn black">Upload Video</button>

                    </div>
            </div>
            </form>
        </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Test\resources\views/add.blade.php ENDPATH**/ ?>