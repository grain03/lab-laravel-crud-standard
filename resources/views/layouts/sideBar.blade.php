<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ route('home') }}" class="brand-link">
        <img src="{{ asset('img/logo.png') }}"
             alt="AdminLTE Logo"
             class="brand-image img-circle elevation-3">
        <span class="brand-text font-weight-light">Lab CRUD Standard</span>
    </a>
    <div class="sidebar">
        <!-- Menu latéral --> 
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item">
                    <a href="{{ route('projects.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Projets
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('tasks.index') }}" class="nav-link ">
                        <i class="nav-icon fas fa-tasks"></i>
                        <p>
                            Tâches
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
</aside>
