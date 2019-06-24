@extends ('layout')

@section('content')

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
  			<img src="{{ $person->imgpath }}" class="img-thumbnail">
  		</div>
  		<div class="col-xs-12 col-sm-6 col-md-7 col-lg-8">
  			<table class="table table-bordered">
  <tbody>
    <tr>
      <th width="30%" scope="row"><i class="fa fa-user"></i> ФИО</th>
      <td>{{ $person->fullname }}</td>
    </tr>
    <tr>
      <th scope="row"><i class="fa fa-envelope"></i> E-mail</th>
      <td>{{ $person->email }}</td>
    </tr>
   <tr>
      <th scope="row"><i class="fa fa-phone"></i> Телефон</th>
      <td>{{ $person->phone }}</td>
    </tr>
     <tr>
      <th scope="row"><i class="fa fa-calendar"></i> Возраст</th>
      <td>{{ $interval->format('%y') }}</td>
    </tr>
     <tr>
      <th scope="row"><i class="fas fa-book"></i> Среднее образование</th>
      <td>{{ $person->middleeducation }}</td>
    </tr>
     <tr>
      <th scope="row"><i class="fas fa-graduation-cap"></i> Высшее образование</th>
      <td>{{ $person->higheducation }}</td>
    </tr>
     <tr>
      <th scope="row"><i class="fas fa-home"></i> Город</th>
      <td>{{ $person->city }}</td>
    </tr>
  </tbody>
</table>
<div class="social d-flex justify-content-center">
<ul class="nav nav-pills">
							@if (!empty($person->vk))
                            <li><a href="{{ $person->vk }}" target="_blank"><i class="fab fa-vk fa-3x" ></i></a></li>
                            @endif
                            @if (!empty($person->inst))
                            <li><a href="{{ $person->inst }}" target="_blank"><i class="fab fa-instagram fa-3x" ></i></a></li>
                             @endif
                            @if (!empty($person->fb))
                            <li><a href="{{ $person->fb }}" target="_blank"><i class="fab fa-facebook fa-3x" ></i></a></li>
                             @endif
                            
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
@endsection