<div class="form-group <?php echo e($errors->has('nama') ? 'has-error' : ''); ?>">
    <label for="nama" class="control-label"><?php echo e('Nama'); ?></label>
    <input class="form-control" name="nama" type="text" id="nama" value="<?php echo e(isset($wisata->nama) ? $wisata->nama : ''); ?>" >
    <?php echo $errors->first('nama', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group <?php echo e($errors->has('foto') ? 'has-error' : ''); ?>">
    <label for="foto" class="control-label"><?php echo e('Foto'); ?></label>
    <input class="form-control" name="foto" type="file" id="foto" value="<?php echo e(isset($wisata->foto) ? $wisata->foto : ''); ?>" >
    <?php echo $errors->first('foto', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group <?php echo e($errors->has('alamat') ? 'has-error' : ''); ?>">
    <label for="alamat" class="control-label"><?php echo e('Alamat'); ?></label>
    <input class="form-control" name="alamat" type="text" id="alamat" value="<?php echo e(isset($wisata->alamat) ? $wisata->alamat : ''); ?>" >
    <?php echo $errors->first('alamat', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group <?php echo e($errors->has('keterangan') ? 'has-error' : ''); ?>">
    <label for="keterangan" class="control-label"><?php echo e('Keterangan'); ?></label>
    <textarea class="form-control" rows="5" name="keterangan" type="textarea" id="keterangan" ><?php echo e(isset($wisata->keterangan) ? $wisata->keterangan : ''); ?></textarea>
    <?php echo $errors->first('keterangan', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group">
<div class="map-embed" id="map-get-location">
</div>
<strong id="l"></strong>
</div>
<div class="form-group <?php echo e($errors->has('ltd') ? 'has-error' : ''); ?>">
    <label for="ltd" class="control-label"><?php echo e('Ltd'); ?></label>
    <input class="form-control" name="ltd" type="text" id="ltd" value="<?php echo e(isset($wisata->ltd) ? $wisata->ltd : ''); ?>">
    <?php echo $errors->first('ltd', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group <?php echo e($errors->has('lngtd') ? 'has-error' : ''); ?>">
    <label for="lngtd" class="control-label"><?php echo e('Lngtd'); ?></label>
    <input class="form-control" name="lngtd" type="text" id="lngtd" value="<?php echo e(isset($wisata->lngtd) ? $wisata->lngtd : ''); ?>" >
    <?php echo $errors->first('lngtd', '<p class="help-block">:message</p>'); ?>

</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="<?php echo e($formMode === 'edit' ? 'Update' : 'Create'); ?>">
</div>
<?php /**PATH C:\xampp\htdocs\bismillah\resources\views/admin/wisatas/form.blade.php ENDPATH**/ ?>