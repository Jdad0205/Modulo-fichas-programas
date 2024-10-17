<h1>Bienvenidos</h1>
<form action="{{ route('auth.logout') }}" method="POST">
                                @csrf
<button type="submit"> Logout </button>
</form>