<div class="profile-sidebar">
	<div class="profile-userpic">
		@if (Auth::user()->avatar!=null)
 			<img src="{{ Auth::user()->avatar }}" class="img-responsive" alt="{{Auth::user()->name}}">	
 		@else
 			<img src="{{ url('/assets/images/no_image.png') }}" class="img-responsive" alt="{{Auth::user()->name}}">
 		@endif
	</div>
	<div class="profile-usertitle">
		<div class="profile-usertitle-name">
			{{ Auth::user()->name }}
		</div>
	</div>
	<div class="profile-userbuttons">
		<!--<button type="button" class="btn btn-success btn-sm">Follow</button>
		<button type="button" class="btn btn-danger btn-sm">Message</button>-->
	</div>
	<div class="profile-usermenu">
		<ul class="nav">
			<li class="@yield('activeItem')">
				<a href="{{url('/')}}">
					<i class="glyphicon glyphicon-home"></i>
					Página Inicial 
				</a>
			</li>
			<li class="@yield('categories_questions_active')">
				<a href="{{url('/questions/categories/')}}">
					<i class="glyphicon glyphicon-flag"></i>
					Categorias de Questões 
				</a>
			</li>
			<li class="@yield('questions_active')">
				<a href="{{url('/questions/')}}">
					<i class="glyphicon glyphicon-ok"></i>
					Questões 
				</a>
			</li>
			<li class="@yield('categories_tests_active')">
				<a href="{{url('/tests/categories/')}}">
					<i class="glyphicon glyphicon-flag"></i>
					Categorias de Provas 
				</a>
			</li>
			<li class="@yield('tests_active')">
				<a href="{{url('/tests/')}}">
					<i class="glyphicon glyphicon-ok"></i>
					Provas 
				</a>
			</li>
			<li class="@yield('my_account_active')">
				<a href="{{url('/user/')}}">
					<i class="glyphicon glyphicon-user"></i>
					Minha Conta
				</a>
			</li>
		</ul>
	</div>
</div>