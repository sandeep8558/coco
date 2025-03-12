<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('head')
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>

<div class="">

    <!-- Sidebar -->
    <div id="sidebar" class="sidebar sidebar-open text-bg-light p-2">
        
        <ul class="list-group list-group-flush">
            <li class="list-group-item p-0 bg-none mb-2" style="">
                <a class="btn btn-primary shadow d-block text-start" href="/dashboard">Dashboard</a>
            </li>
            <li class="list-group-item p-0 bg-none mb-2">
                <a class="btn btn-primary shadow d-block text-start" href="/admin/grades">Grades</a>
            </li>
            <li class="list-group-item p-0 bg-none mb-2">
                <a class="btn btn-primary shadow d-block text-start" href="/admin/documents">Documents</a>
            </li>
            <li class="list-group-item p-0 bg-none mb-2">
                <a class="btn btn-primary shadow d-block text-start" href="/admin/grade_wise_documents">Grade Wise Documents</a>
            </li>
            <li class="list-group-item p-0 bg-none mb-2">
                <a class="btn btn-primary shadow d-block text-start" href="/admin/academic_year">Academic Year</a>
            </li>
            <li class="list-group-item p-0 bg-none mb-2">
                <a class="btn btn-primary shadow d-block text-start" href="/admin/admission_notice">Admission Notice</a>
            </li>
            <li class="list-group-item p-0 bg-none mb-2">
                <a class="btn btn-primary shadow d-block text-start" href="/admin/application">Application</a>
            </li>
            <li class="list-group-item p-0 bg-none mb-2">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a class="btn btn-primary shadow d-block text-start" href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">{{ __('Logout') }}</a>
                </form>
            </li>
            <li class="list-group-item p-0 bg-none mb-2">
                <a class="btn btn-primary shadow d-block text-start" href="/">Website</a>
            </li>
          

            
        </ul>
        
    </div>

    <!-- Content -->
    <div id="sidebar_content" class="sidebar-content sidebar-content-open">
        

        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">   
                    <button id="sidebar-toggle"><i class="bi bi-list"></i></button>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link" href="">@yield('pageheader')</a>
                    </div>
                </div>
            </div>
        </nav>

      
        @yield('content')

    </div>

</div>

</body>
</html>