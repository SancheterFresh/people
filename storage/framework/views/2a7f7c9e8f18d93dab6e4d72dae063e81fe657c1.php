<?php $__env->startSection('content'); ?>
<div class="contanier">
	<form id="contactform" method="POST" class="validateform">
    <?php echo e(csrf_field()); ?>

 
    <div id="sendmessage" class="text-success m-2">
        Ваше сообщение отправлено!
    </div>
    <div id="senderror" class="text-warning m-2">
        При отправке сообщения произошла ошибка. Продублируйте его, пожалуйста, на почту администратора <span><?php echo e(env('MAIL_ADMIN_EMAIL')); ?></span>
    </div>
    <div class="row no-gutters m-3">
        <div class="col-lg-4 field p-2">
            <input type="text" class="form-control" name="name" placeholder="* Введите ваше имя" required />
        </div>
        <div class="col-lg-4 field p-2">
            <input type="email" class="form-control" name="email" placeholder="* Введите ваш email" required />
        </div>
        <div class="col-lg-4 field p-2">
            <input type="text" class="form-control" name="subject" placeholder="* Введите тему сообщения" required />
        </div>
        <div class="col-lg-12 margintop10 field p-2">
            <textarea rows="12" name="message" class="form-control" placeholder="* Ваше сообщение..." required></textarea>
            <p>
                <button class="btn btn-primary pull-left" type="submit">Отправить</button>
                <span class="pull-right margintop20 text-danger">Поля с * обязательны для заполнения</span>
            </p>
        </div>
    </div>
</form>
</div>



<script type="text/javascript">
	$(document).ready(function () {
		$('#senderror').hide();
        $('#sendmessage').hide();
    $('#contactform').on('submit', function (e) {
        e.preventDefault();
         
        $.ajax({
            type: 'POST',
            url: '/sendmail',
            data: $('#contactform').serialize(),
            success: function (data) { 
                    $('#senderror').hide();
                    $('#sendmessage').show();
            },
            error: function () {
                $('#senderror').show();
                $('#sendmessage').hide();
            }
        });
    });
});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/alexking/people/resources/views/people/contacts.blade.php ENDPATH**/ ?>