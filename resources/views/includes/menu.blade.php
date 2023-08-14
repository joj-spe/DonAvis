@if(Auth::user()->role == 0 )
    @include('includes.menu_user')
@endif

@if(Auth::user()->role == 1 )
    @include('includes.menu_admin')
@endif

