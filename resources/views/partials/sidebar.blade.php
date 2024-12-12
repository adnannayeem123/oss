<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
      <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="sidebarMenuLabel">Company name</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
        </div>

 

        <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
        <ul class="nav flex-column">
         <li class="nav-item">
         <a class="nav-link d-flex align-items-center gap-2 active" aria-current="page" href="/">
           <svg class="bi"><use xlink:href=""/></svg>
                Dashboard
             </a>
            </li>

            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2" href="{{url('catagory')}}">
                <svg class="bi"><use xlink:href=""/></svg>
                Categories
              </a>
            </li>


            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2" href="#">
                <svg class="bi"><use xlink:href=""/></svg>
                Orders
              </a>
            </li>



            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2" href="{{url('/product')}}">
                <svg class="bi"><use xlink:href=""/></svg>
                Products
              </a>
            </li>


            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2" href="#">
                <svg class="bi"><use xlink:href=""/></svg>
                Customers
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2" href="#">
                <svg class="bi"><use xlink:href=""/></svg>
                Brand
              </a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2" href="">
                <svg class="bi"><use xlink:href=""/></svg>
                Payment
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2" href="">
                <svg class="bi"><use xlink:href=""/></svg>
                Report
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2" href="#">
                <svg class="bi"><use xlink:href="#"/></svg>
                Order Details
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2" href="/wishlist-form">
                <svg class="bi"><use xlink:href=""/></svg>
                Wishlist
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2" href="{{route('sign-out')}}">
                <svg class="bi"><use xlink:href=""/></svg>
                Sign out
              </a>
            </li>

          </ul>
        </div>
      </div>
    </div>