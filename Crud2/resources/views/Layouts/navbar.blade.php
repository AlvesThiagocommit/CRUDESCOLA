<div class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="javascript:void(0)">CRUD</a>
      </div>
      <div class="navbar-collapse collapse navbar-responsive-collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="{{ route('home') }}">Home</a></li>
          <li><a href="{{ route('Professor\create') }}">Professor </a></li>
          <li><a href="{{ route('Course\create') }}">Course</a></li>
          <li><a href="{{ route('Student\create') }}">Student</a></li>
          
         
        </ul>
      </div>
    </div>
  </div>