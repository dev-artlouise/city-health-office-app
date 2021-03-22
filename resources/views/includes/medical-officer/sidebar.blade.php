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
            <li class="{{'/medical-officer/dashboard' == request()->path() ? 'active': '' }}">
                <a href="/medical-officer/dashboard">
                    <span><i class="fas fa-2x fa-chart-line"></i></span>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="{{'/medical-officer/client' == request()->path() ? : '' }}">
                <a href="/medical-officer/client">
                    <span><i class="fas fa-2x fa-users"></i></span>
                    <span>Verify Clients</span>
                </a>
            </li>

            <li class="{{'/medical-officer/transaction-history' == request()->path() ? : '' }}">
                <a href="/medical-officer/transaction-history">
                    <span><i class="fas fa-2x fa-user-md"></i></span>
                    <span>Transactions</span>
                </a>
            </li>

            <li class="{{'/medical-officer/profile/' == request()->path() ? : '' }}">
                <a href="/medical-officer/profile/">
                    <span><i class="fas fa-2x fa-folder-open"></i></span>
                    <span>Profile</span>
                </a>
            </li>
        </ul>

    </div>

</div> 
