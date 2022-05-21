<h1>Admin Dashboard</h1>
<h2><a href="{{route('admin.login')}}">Admin Login</a></h2>
@if(Auth::guard('admin')->user())

<h2><a href="{{route('admin.logout')}}">{{Auth::guard('admin')->user()->name}} Logout</a></h2>
@endif