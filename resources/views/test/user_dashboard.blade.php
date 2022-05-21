<h1>User Dashboard</h1>
<h2><a href="{{route('user.login')}}">User Login</a></h2>
@if(Auth::user())
<h2><a href="{{route('user.logout')}}">{{Auth::user()->name}} User Logout</a></h2>
@endif