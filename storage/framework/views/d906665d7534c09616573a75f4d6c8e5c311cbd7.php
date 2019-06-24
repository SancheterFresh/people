 <header>
  <nav class="navbar sticky-top navbar-expand-md navbar-light bg-light">
    <a class="navbar-brand">
<i class="fas fa-users"></i>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo e(route('mainPage')); ?>">Главная</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo e(route('contactsPage')); ?>">Обратная связь</a>
        </li>
        
      </ul>
      <form class="form-inline mt-2 mt-md-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Поиск" aria-label="Search">
        <button class="btn btn-primary my-2 my-sm-0" type="submit">
<i class="fas fa-search"></i>
        </button>
      </form>
    </div>
  </nav>

</header><?php /**PATH /Users/alexking/people/resources/views/layouts/navbar.blade.php ENDPATH**/ ?>