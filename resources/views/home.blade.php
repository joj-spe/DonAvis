
<!-- <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
</form> -->

<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">

<div class="dropdown-item-icon"><i data-feather="log-out"></i></div>
        Logout
</a>
<form id="logout-form" action="{{ route('logout') }}" method="POST">
@csrf
</form>


