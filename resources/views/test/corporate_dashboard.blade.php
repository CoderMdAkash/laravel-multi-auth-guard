<h1>Corprate Dashboard</h1>
<h2><a href="{{route('corporate.login')}}">Corprate Login</a></h2>
 @if(Auth::guard('corporate')->user())
    <h2><a href="{{route('corporate.logout')}}">{{Auth::guard('corporate')->user()->name}} User Logout</a></h2>
@endif