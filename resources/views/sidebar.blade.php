
<nav id="siproNavbarSidebar" class="navbar-dark bg-dark collapse show">
    <div class="sidebar-header">
        <h3>{{__('app.menu')}}</h3>
    </div>

    <ul class="list-unstyled navbar-nav mr-auto">
        @php
            NavItem::build('home', url('/'), 'fa fa-home');
            NavItem::build('teacher', '#teacher-sub-menu', 'fas fa-chalkboard-teacher', [
                ['question_categories', url('/questionCategory/'), 'fas fa-stream'],
                ['questions', url('/question/'), 'fas fa-question'],
                ['test_categories', url('/testCategory/'), 'fas fa-stream'],
                ['tests', url('/test/'), 'fas fa-tasks'],
            ]);
            NavItem::build('student', '#student-sub-menu', 'fas fa-user-graduate');
            NavItem::build('my_account', url('/user/'), 'fa fa-user');
        @endphp
    </ul>
    <div style="padding: 20px; font-size: 10px; text-align: center; color: white;">
        {{ __('app.developed_by') }} <a href="mailto:guilherme.fabrin@gmail.com">Guilherme Fabrin Franco</a> ©
        - {{ __('app.rights') }} {{ date('Y') }}.
        <br>
        <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/4.0/">
            <img alt="{{__('app.license')}}" src="https://i.creativecommons.org/l/by-nc-nd/4.0/88x31.png"/>
        </a>
    </div>
</nav>