<form method="POST" action="{{route('vendor.login.submit')}}">

@csrf


<input 
type="email"
name="email"
placeholder="Email"
class="form-control mb-2"
>


<input
type="password"
name="password"
placeholder="Password"
class="form-control mb-2"
>


<button class="btn btn-primary">
Login
</button>


</form>