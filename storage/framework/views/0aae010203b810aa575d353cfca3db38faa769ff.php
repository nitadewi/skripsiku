<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">wisata <?php echo e($wisata->id); ?></div>
                    <div class="card-body">

                        <a href="<?php echo e(url('/admin/wisatas')); ?>" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="<?php echo e(url('/admin/wisatas/' . $wisata->id . '/edit')); ?>" title="Edit wisata"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="<?php echo e(url('admin/wisatas' . '/' . $wisata->id)); ?>" accept-charset="UTF-8" style="display:inline">
                            <?php echo e(method_field('DELETE')); ?>

                            <?php echo e(csrf_field()); ?>

                            <button type="submit" class="btn btn-danger btn-sm" title="Delete wisata" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td><?php echo e($wisata->id); ?></td>
                                    </tr>
                                    <tr>
                                    <th> Nama </th><td> <?php echo e($wisata->nama); ?> </td>
                                    </tr>
                                    <tr><th> Foto </th><td>  <img src="<?php echo e(url('/images/'.$wisata->foto)); ?>" class="img-thumbnail" /> </td>
                                    </tr>
                                    <tr><th> Alamat </th><td> <?php echo e($wisata->alamat); ?> </td>
                                    </tr>
                                    </tr>
                                    <tr>
                                    <th> Keterangan </th>
                                    <td> <?php echo e($wisata->keterangan); ?> </td>
                                    </tr>
                                    <tr><th> latitude </th><td> <?php echo e($wisata->ltd); ?> </td>
                                    </tr>
                                    <tr>
                                    <th> longtitude </th><td> <?php echo e($wisata->lngtd); ?> </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bismillah\resources\views/admin/wisatas/show.blade.php ENDPATH**/ ?>