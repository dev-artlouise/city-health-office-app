{{-- sidebar --}}

<input type="checkbox" id="sidebar-toggle">
<div class="sidebar">
    <div class="sidebar-header">
        <h3 class="brand">
            <span>City Health Office<span>
            {{-- <span>City Health Office</span> --}}
        </h3>

        <label for="sidebar-toggle"><i class="fa fa-2x fa-bars" aria-hidden="true"></i></label>
    </div>

    <div class="sidebar-menu" id="">

        <ul>    
            <!--nav-item-->
            <li class="{{'/admin/dashboard' == request()->path() ? 'active': '' }}">
                <a href="/admin/dashboard">
                    <span><i class="fas fa-2x fa-chart-line"></i></span>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="{{'/admin/client' == request()->path() ? : '' }}">
                <a href="/admin/client">
                    <span><i class="fas fa-2x fa-users"></i></span>
                    <span>Clients</span>
                </a>
            </li>

            <li class="{{'/admin/medical-officer' == request()->path() ? : '' }}">
                <a href="/admin/medical-officer">
                    <span><i class="fas fa-2x fa-user-md"></i></span>
                    <span>Medical Officers</span>
                </a>
            </li>

            <li class="{{'/admin/archives' == request()->path() ? : '' }}">
                <a href="/admin/archives">
                    <span><i class="fas fa-2x fa-folder-open"></i></span>
                    <span>Archives</span>
                </a>
            </li>
        </ul>

    </div>

</div> 
