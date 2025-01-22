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
                <a class="btn btn-primary shadow d-block text-start" href="/">Website</a>
            </li>
            <li class="list-group-item p-0 bg-none mb-2">
                <a class="btn btn-primary shadow d-block text-start" href="/dashboard">Grades</a>
            </li>
            <li class="list-group-item p-0 bg-none mb-2">
                <a class="btn btn-primary shadow d-block text-start" href="/dashboard">Documents</a>
            </li>
            <li class="list-group-item p-0 bg-none mb-2">
                <a class="btn btn-primary shadow d-block text-start" href="/dashboard">Grade Wise Documents</a>
            </li>
            <li class="list-group-item p-0 bg-none mb-2">
                <a class="btn btn-primary shadow d-block text-start" href="/dashboard">Academic Year</a>
            </li>
            <li class="list-group-item p-0 bg-none mb-2">
                <a class="btn btn-primary shadow d-block text-start" href="/dashboard">Admission Notice</a>
            </li>
            <li class="list-group-item p-0 bg-none mb-2">
                <a class="btn btn-primary shadow d-block text-start" href="/dashboard">Application</a>
            </li>
            <li class="list-group-item p-0 bg-none mb-2">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a class="btn btn-primary shadow d-block text-start" href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">{{ __('Logout') }}</a>
                </form>
            </li>

            
        </ul>
        
    </div>

    <!-- Content -->
    <div id="sidebar_content" class="sidebar-content sidebar-content-open">
        
        <button id="sidebar-toggle">Open Close</button>

        @yield('content')

    </div>

</div>

</body>
</html>