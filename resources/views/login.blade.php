<head>
    <script src="{{ asset('assets/js/alpine.min.js') }}" defer></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>
<form action="{{ route('register.user') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" maxlength="255" name="email" class="form-control" id="email" value="admin@gmail.com"
            required>
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" maxlength="32" class="form-control" name="password" value="123456" id="password"
            required>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Log in</button>
    </div>
</form>
{{-- <div x-data="onLogin()">
    <form @submit.prevent="login" method="POST">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" maxlength="255" x-model="user.email" class="form-control" id="email" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" maxlength="32" class="form-control" x-model="user.password" id="password" required>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Log in</button>
        </div>
    </form>
</div> --}}
<script>
    function onLogin() {
        return {
            user: {
                email: "",
                password: "",
            },
            async login() {

                const data = await fetch('/api/register', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.head.querySelector('meta[name=csrf-token]').content
                    },
                    body: JSON.stringify(this.user)
                });
            }
        }
    }
</script>
