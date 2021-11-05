  <style>
    .sidebar li .submenu{ 
    list-style: none; 
    margin: 0; 
    padding: 0; 
    padding-left: 1rem; 
    padding-right: 1rem;
    color:white;
    }
  </style>
  <div class="p-3 text-white bg-dark sidebar" style="width: 250px; height:750px">
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
  </div>
  <script>
    document.addEventListener("DOMContentLoaded", function(){
  document.querySelectorAll('.sidebar .nav-link').forEach(function(element){
    
    element.addEventListener('click', function (e) {

      let nextEl = element.nextElementSibling;
      let parentEl  = element.parentElement;	

        if(nextEl) {
            e.preventDefault();	
            let mycollapse = new bootstrap.Collapse(nextEl);
            
            if(nextEl.classList.contains('show')){
              mycollapse.hide();
            } else {
                mycollapse.show();
                // find other submenus with class=show
                var opened_submenu = parentEl.parentElement.querySelector('.submenu.show');
                // if it exists, then close all of them
                if(opened_submenu){
                  new bootstrap.Collapse(opened_submenu);
                }
            }
        }
    }); // addEventListener
  }) // forEach
}); 
// DOMContentLoaded  end
  </script>