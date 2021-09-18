Profile Update page
<form action="{{ route('add-profile') }}" method="post">
    @csrf
    <input type="text" name="username" value="{{ old('username') }}" placeholder="Username">
    <input type="email" name="email" value="{{ old('email') }}" placeholder="Email">
    <input type="password" name="password" value="{{ old('password') }}" placeholder="Password">
    <input type="text" name="group" value="{{ old('group') }}" placeholder="Group">
    <input type="text" name="avatar" value="{{ old('avatar') }}" placeholder="Avatar">
    <button type="submit">
        Login
    </button>
</form>
