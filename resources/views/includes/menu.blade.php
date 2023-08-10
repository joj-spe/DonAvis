<div class="navbar-wrapper">
            <div class="navbar-brand header-logo">
                <a href="{{route('welcome')}}" class="b-brand">
                    <div class="b-bg">
                        <i class="feather icon-trending-up"></i>
                    </div>
                    <span class="b-title">DonAvis</span>
                </a>
                <a class="mobile-menu" id="mobile-collapse" href="javascript:"><span></span></a>
            </div>
            <div class="navbar-content scroll-div">
                <ul class="nav pcoded-inner-navbar">
                    <li class="nav-item pcoded-menu-caption">
                        <label>Navigation</label>
                    </li>
                    <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project" class="nav-item active">
                        <a href="{{route('welcome')}}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Administrateur</span></a>
                    </li>

                    <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project" class="nav-item active">
                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Se Déconnecter</span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                        </form>
                    </li>

                </ul>
            </div>
        </div>