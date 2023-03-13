<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link @if(Route::currentRouteName() === 'dashboard') @else collapsed @endif" href="{{ route('dashboard') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link @if(Route::currentRouteName() === 'horarios') @else collapsed @endif" href="{{ route('horarios') }}">
                <i class="bi bi-calendar"></i>
                <span>Horários</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link @if(Route::currentRouteName() === 'refeicoes.index') @else collapsed @endif" href="{{ route('refeicoes.index') }}">
                <i class="bi bi-cup-hot"></i>
                <span>Refeições</span>
            </a>
        </li>

        @if (Auth::user()->utype === 'ADM')
            <li class="nav-heading">Admin</li>

            <li class="nav-item">
                <a class="nav-link @if(Route::currentRouteName() === 'horarios.admin') @else collapsed @endif" href="{{route('horarios.admin')}}">
                    <i class="bi bi-calendar"></i>
                    <span>Horários (Admin)</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link @if(Route::currentRouteName() === 'avisos.admin') @else collapsed @endif" href="{{ route('avisos.admin') }}">
                    <i class="bi bi-exclamation-diamond"></i>
                    <span>Avisos</span>
                </a>
            </li><!-- End Dashboard Nav -->
        @endif
    </ul>
</aside><!-- End Sidebar-->
