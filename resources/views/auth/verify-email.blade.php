<x-layouts.auth.auth>
    <div class="container min-vh-100 d-flex align-items-center justify-content-center">
        <div class="card shadow-lg border-0" style="max-width: 500px; width: 100%;">
            <div class="card-body p-4">
                <div class="text-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-envelope-check text-primary mb-3" viewBox="0 0 16 16">
                        <path d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2zm3.708 6.208L1 11.105V5.383zM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2z"/>
                        <path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0m-1.993-1.679a.5.5 0 0 0-.686.172l-1.17 1.95-.547-.547a.5.5 0 0 0-.708.708l.774.773a.75.75 0 0 0 1.174-.144l1.335-2.226a.5.5 0 0 0-.172-.686"/>
                    </svg>
                    <h3 class="fw-bold">Verify Your Email</h3>
                </div>

                <p class="text-muted text-center mb-4">
                    Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you?
                </p>

                @if (session('status') == 'verification-link-sent')
                    <div class="alert alert-success mb-3" role="alert">
                        <strong>Email Sent!</strong> A new verification link has been sent to your email address.
                    </div>
                @endif

                <div class="d-grid gap-2">
                    <form method="POST" action="{{ route('verification.send') }}">
                        @csrf
                        <button type="submit" class="btn btn-primary w-100">
                            Resend Verification Email
                        </button>
                    </form>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-outline-secondary w-100">
                            Logout
                        </button>
                    </form>
                </div>

                <div class="text-center mt-3">
                    <small class="text-muted">
                        Didn't receive the email? Check your spam folder or click resend.
                    </small>
                </div>
            </div>
        </div>
    </div>
</x-layouts.auth.auth>
