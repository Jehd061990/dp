@if (Session::get('account_type') == 'admin')
@include('layouts/navbar_admin')
@else
@include('layouts/navbar_user')
@endif