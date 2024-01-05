<aside class="main-sidebar sidebar-dark-primary elevation-4 position-fixed">
    <!-- Logo de la marque -->
    <a href="{{ route('home') }}" class="brand-link">
        <img src="{{ asset('img/logo.png')  }}"
            class="brand-image img-circle elevation-3" alt="Image de groupe">
        <span class="brand-text font-weight-light text-center">Gestion de Projets</span>
    </a>

    <!-- Barre latérale -->
    <div class="sidebar">
        <!-- Menu latéral -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item">
                    <a href="../../gestion_des_projet/project/index.php" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Projets
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../../gestion_des_projet/tache/index.php" class="nav-link ">
                        <i class="nav-icon fas fa-tasks"></i>
                        <p>
                            Tâches
                        </p>
                    </a>
                </li>
                <!-- MEMBRE -->

                <li class="nav-item">
                    <a href="../../gestion_des_projet/membre/index.php" class="nav-link ">
                        <i class="fa-solid fa-users pl-1 pr-1"></i>
                        <p>
                            Membre
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>