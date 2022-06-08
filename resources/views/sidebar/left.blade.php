<nav class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('dashboard') }}">
                <span data-feather="home"></span>
                Dashboard
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{ route('project.index') }}">
                <span data-feather="project"></span>
                Projects
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="users">
                <span data-feather="file"></span>
                Users
            </a>
        </li>
    </ul>
</nav>