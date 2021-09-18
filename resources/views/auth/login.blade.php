<form action="{{ route('login') }}" method="post">
    @csrf
    <input type="text" name="username" value="{{ old('username') }}" placeholder="Username">
    <input type="password" name="password" value="{{ old('password') }}" placeholder="Password">
    <button type="submit">
        Login
    </button>
</form>
