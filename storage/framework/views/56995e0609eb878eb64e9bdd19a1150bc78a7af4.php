<?php $__env->startSection('content'); ?>
<div class="col-lg-12">
        <div class="panel panel-primary">
                <div class="panel-heading">
                    Data Tempat Wisata
                </div>
                <div class="panel-body">
                    <a href="<?php echo e(url('/admin/wisatas/create')); ?> "class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> input data</a>
                    <div>
                    <br>
                    </div>

                    <div class="table-responsive">
                     <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead class="sorting_asc">
                            <tr>
                            <th>No</th>
                            <th>Nama Tempat Wisata</th>
                            <th>Alamat</th>
                            <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $wisatas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                         
                            <tr>
                                <td><?php echo e($loop->iteration); ?></td>
                                <td><?php echo e($item->nama); ?></td>
                                <td><?php echo e($item->alamat); ?></td>
                                <td>
                                    <a href="<?php echo e(url('/admin/wisatas/' . $item->id_wisatas . '/edit')); ?>"class="btn btn-success btn-sm ">Edit</a>
                                    <form method="POST" action="<?php echo e(url('/admin/wisatas' . '/' . $item->id_wisatas)); ?>" accept-charset="UTF-8" style="display:inline">
                                                <?php echo e(method_field('DELETE')); ?>

                                                <?php echo e(csrf_field()); ?>

                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete wisata" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                     </table>
                     </div>
                </div>
        </div>
</div>                        
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bismillah\resources\views/admin/wisatas/index.blade.php ENDPATH**/ ?>