@section('sidenav')
    <ul class="nav nav-pills flex-column mb-auto">
        <li>
            <a href="#" class="nav-link text-white">
                Dashboard
            </a>
        </li>
        <li>
            <a class="nav-link text-white" href="#"> Users </a>
            <ul class="submenu collapse">
                <li><a class="nav-link text-white" href="#">Students </a></li>
                <li><a class="nav-link text-white" href="#">Trainers </a></li>
                <li><a class="nav-link text-white"  href="#">CRM Users</a></li>
            </ul>
        </li>
        <li>
            <a class="nav-link text-white" href="#">Classes</a>
            <ul class="submenu collapse">
                <li><a class="nav-link text-white" href="#">Class Management</a></li>
                <li><a class="nav-link text-white" href="#">Upcoming Classes</a></li>
                <li><a class="nav-link text-white" href="#">Ongoing Classes</a></li>
                <li><a class="nav-link text-white"  href="#">History</a></li>
            </ul>
        </li>
        <li>
            <a class="nav-link text-white" href="#">Courses</a>
        </li>
        <li>
            <a class="nav-link text-white" href="#">Curriculum</a>
        </li>
    </ul>

    <ul class="nav nav-pills flex-column">
        <li>
            <a class="nav-link text-white" href="#">College</a>
            <ul class="submenu collapse">
                <li><a class="nav-link text-white" href="#">College Management</a></li>
                <li><a class="nav-link text-white" href="#">Degree</a></li>
                <li><a class="nav-link text-white" href="#">Degree Branch</a></li>
            </ul>
        </li>
    </ul>

    <ul class="nav nav-pills flex-column pt-5">
        <li>
            <a class="nav-link text-white" href="#">Settings</a>
            <ul class="submenu collapse">
                <li><a class="nav-link text-white" href="#">CRM Settings</a></li>
            </ul>
        </li>
    </ul>     
@endsection