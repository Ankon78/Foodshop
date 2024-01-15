<div class="col-2">

    <div class="row sidebar ms-1">
        <div class="sidebar_header ms-5">
            <h4>Sidebar</h4>

        </div>
        <hr style="color: white;">

        <div class="link ">
           <ul class="sidebar_menu">
            <li>
                <a class="{{ Request::is('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}"><i class="fas fa-tachometer-alt"></i>
                <span class="ps-1">DASHBOARD</span></a>
            </li>
            <li>
                <a class="{{ Request::is('category*') ? 'active' : ''}}" href="{{ route('category.index') }}"><i class="fas fa-list"></i>
                <span class="ps-1">CATEGORY</span></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-list "></i>
                <span class="ps-1">SUB CATEGORY</span></a>
            </li>
            <li>
                <a class="{{ Request:: is('brand*') ? 'active' : '' }}" href="{{ route('brand.index') }}"><i class="fab fa-bandcamp"></i>
                <span class="ps-1">BRAND</span></a>
            </li>
            <li>
                <a href="#"><i class="fab fa-product-hunt"></i>
                <span class="ps-1">PRODUCT</span></a>
            </li>
            <li>
                <a href="#"><i class="far fa-user"></i>
                <span class="ps-1">USER</span></a>
            </li>

           </ul>

        </div>
    </div>
</div>
