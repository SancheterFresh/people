<?php $__env->startSection('content'); ?>

<?php
$birthday = $person->birthdate;
$now = new DateTime('now');
$interval = $now->diff( new DateTime($birthday) );
?>
<div class="contanier">
	<div class="card m-3">
  <div class="card-body">
  	<div class="row">
  		<div class="col-xs-12 col-sm-6 col-md-5 col-lg-4">
  			<img src="<?php echo e($person->imgpath); ?>" class="img-thumbnail">
  		</div>
  		<div class="col-xs-12 col-sm-6 col-md-7 col-lg-8">
  			<table class="table table-bordered">
  <tbody>
    <tr>
      <th width="30%" scope="row"><i class="fa fa-user"></i> ФИО</th>
      <td><?php echo e($person->fullname); ?></td>
    </tr>
    <tr>
      <th scope="row"><i class="fa fa-envelope"></i> E-mail</th>
      <td><?php echo e($person->email); ?></td>
    </tr>
   <tr>
      <th scope="row"><i class="fa fa-phone"></i> Телефон</th>
      <td><?php echo e($person->phone); ?></td>
    </tr>
     <tr>
      <th scope="row"><i class="fa fa-calendar"></i> Возраст</th>
      <td><?php echo e($interval->format('%y')); ?></td>
    </tr>
     <tr>
      <th scope="row"><i class="fas fa-book"></i> Среднее образование</th>
      <td><?php echo e($person->middleeducation); ?></td>
    </tr>
     <tr>
      <th scope="row"><i class="fas fa-graduation-cap"></i> Высшее образование</th>
      <td><?php echo e($person->higheducation); ?></td>
    </tr>
     <tr>
      <th scope="row"><i class="fas fa-home"></i> Город</th>
      <td><?php echo e($person->city); ?></td>
    </tr>
  </tbody>
</table>
<div class="social d-flex justify-content-center">
<ul class="nav nav-pills">
							<?php if(!empty($person->vk)): ?>
                            <li><a href="<?php echo e($person->vk); ?>" target="_blank"><i class="fab fa-vk fa-3x" ></i></a></li>
                            <?php endif; ?>
                            <?php if(!empty($person->inst)): ?>
                            <li><a href="<?php echo e($person->inst); ?>" target="_blank"><i class="fab fa-instagram fa-3x" ></i></a></li>
                             <?php endif; ?>
                            <?php if(!empty($person->fb)): ?>
                            <li><a href="<?php echo e($person->fb); ?>" target="_blank"><i class="fab fa-facebook fa-3x" ></i></a></li>
                             <?php endif; ?>
                            
                        </ul>
                    </div>
  		</div>

   
 </div>
  </div>


</div>
	
</div>

<script type="text/javascript">
    $(document).ready(function () {
        $('tr').each(function () {
            $(this).find('td').each(function () {
                if ($(this).text().trim() == "") {
                    $(this).closest("tr").remove();
                };
            });
        });
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/alexking/people/resources/views/people/person.blade.php ENDPATH**/ ?>