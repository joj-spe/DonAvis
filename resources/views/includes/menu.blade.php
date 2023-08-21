@if(Auth::user()->role == 1 )
    @include('includes.menu_admin')
@endif

@if(Auth::user()->role == 2 )
    @include('includes.menu_user')
@endif


@if(Auth::user()->role == 3 )
    @include('includes.menu_organ')
@endif

<!--li class="nav-item">
    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            preserveAspectRatio="xMidYMid" width="16" height="13" class="left-icons" viewBox="0 0 16 13">
            <path
                d="M4.333,7.667 C2.860,7.667 1.666,6.473 1.666,5.000 C1.666,3.527 2.860,2.333 4.333,2.333 C5.805,2.333 6.999,3.527 6.999,5.000 C6.999,6.473 5.805,7.667 4.333,7.667 ZM4.333,6.333 C5.069,6.333 5.666,5.736 5.666,5.000 C5.666,4.264 5.069,3.667 4.333,3.667 C3.597,3.667 3.000,4.264 3.000,5.000 C3.000,5.736 3.597,6.333 4.333,6.333 ZM-0.000,11.666 L-0.000,10.666 C-0.000,9.378 1.045,8.333 2.333,8.333 L6.333,8.333 C7.621,8.333 8.666,9.378 8.666,10.666 L8.666,11.666 C8.666,12.403 8.069,13.000 7.333,13.000 L1.333,13.000 C0.597,13.000 -0.000,12.403 -0.000,11.666 ZM1.333,11.666 L7.333,11.666 L7.333,10.666 C7.333,10.114 6.885,9.666 6.333,9.666 L2.333,9.666 C1.781,9.666 1.333,10.114 1.333,10.666 L1.333,11.666 ZM10.469,7.696 C10.337,7.641 10.207,7.579 10.081,7.510 L8.904,7.957 C8.366,8.160 7.840,7.634 8.044,7.097 L8.490,5.919 C8.422,5.793 8.359,5.664 8.304,5.531 C8.105,5.050 8.001,4.531 8.001,4.000 C8.001,1.791 9.791,-0.000 12.000,-0.000 C14.209,-0.000 16.000,1.791 16.000,4.000 C16.000,6.209 14.209,8.000 12.000,8.000 C11.469,8.000 10.951,7.896 10.469,7.696 ZM9.852,6.088 L9.815,6.185 L9.912,6.148 C10.114,6.072 10.340,6.098 10.519,6.218 C10.664,6.315 10.819,6.398 10.980,6.465 C11.300,6.597 11.645,6.667 12.000,6.667 C13.473,6.667 14.667,5.473 14.667,4.000 C14.667,2.527 13.473,1.333 12.000,1.333 C10.528,1.333 9.334,2.527 9.334,4.000 C9.334,4.355 9.403,4.700 9.536,5.021 C9.603,5.182 9.685,5.336 9.783,5.481 C9.903,5.660 9.928,5.886 9.852,6.088 Z">
            </path>
        </svg>
        <div class="fos" id="foo10"> Déconnexion</div>
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST">
        @csrf
    </form>
</li-->

<li class="nav-main-item">
    <a class="nav-main-link"  href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >
        <i class="nav-main-link-icon si si-speedometer"></i>
        <span class="nav-main-link-name">Se Deconnecter</span>
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST">
        @csrf
    </form>
</li>

