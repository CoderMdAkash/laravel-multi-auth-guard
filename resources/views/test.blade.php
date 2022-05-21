<h2>@if(Auth::guard('admin')->user()) {{Auth::guard('admin')->user()->name}} @endif</h2>
<h2>@if(Auth::guard('corporate')->user()) {{Auth::guard('corporate')->user()->name}} @endif</h2>
<h2>@if(Auth::user()) {{Auth::user()->name}} @endif</h2>
<h2>@if(Auth::guard('admin')->user()) @elseif(Auth::guard('corporate')->user()) @elseif(Auth::user()) @else {{"No Auth Found"}} @endif</h2>