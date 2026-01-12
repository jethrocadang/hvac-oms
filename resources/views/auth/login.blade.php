<x-layouts.auth.auth>
    <div class="container min-vh-100 d-flex align-items-center justify-content-center">
        <div class="card shadow-lg border-0" style="max-width: 420px; width: 100%;">
            <div class="card-body p-4">
                <h3 class="text-center fw-bold mb-4">Welcome Back</h3>

                <!-- Session Status -->
                @if (session('status'))
                    <div class="alert alert-success mb-3" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('login.store') }}">
                    @csrf

                    <!-- Email Address -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" name="email"
                            class="form-control @error('email') is-invalid @enderror" placeholder="name@example.com"
                            value="{{ old('email') }}" required autofocus>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" id="password" name="password"
                            class="form-control @error('password') is-invalid @enderror" placeholder="" required>
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Remember Me -->
                    <div class="form-check mb-3">
                        <input type="checkbox" name="remember" id="remember" class="form-check-input">
                        <label for="remember" class="form-check-label">Remember me</label>
                    </div>

                    <!-- Forgot Password Link (optional) -->
                    @if (Route::has('password.request'))
                        <div class="mb-3">
                            <a href="{{ route('password.request') }}" class="text-decoration-none small">
                                Forgot your password?
                            </a>
                        </div>
                    @endif

                    <button type="submit" class="btn btn-primary w-100">Sign In</button>
                </form>

                <div class="text-center mt-3">
                    <small>Don't have an account?
                        <a href="{{ route('register') }}" class="fw-semibold">Register</a>
                    </small>
                </div>
            </div>
        </div>
    </div>
</x-layouts.auth.auth>
