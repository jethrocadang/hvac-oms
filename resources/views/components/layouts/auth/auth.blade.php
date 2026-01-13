<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} - Authentication</title>
    <link href="{{ asset('css/auth.css') }}" rel="stylesheet">
</head>

<body>
    <x-layouts.app>
        <div class="auth-container">
            <!-- Visual/Geometric Side -->
            <div class="auth-visual" id="authVisual">
                <div class="geometric-shapes">
                    <div class="shape shape-1"></div>
                    <div class="shape shape-2"></div>
                    <div class="shape shape-3"></div>
                    <div class="shape shape-4"></div>
                </div>
                <div class="auth-brand">
                    <h1>{{ config('app.name', 'YourApp') }}</h1>
                    <p>Aeris --Your partner in your Air Conditioning!</p>
                </div>
            </div>

            <!-- Form Side -->
            <div class="auth-form-container" id="authFormContainer">
                <div class="auth-form-wrapper">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </x-layouts.app>

    <script>
        // Detect which page we're on and adjust layout
        const path = window.location.pathname;
        const isRegister = path.includes('login');
        const authVisual = document.getElementById('authVisual');
        const authFormContainer = document.getElementById('authFormContainer');

        // On register page, flip the layout
        if (isRegister) {
            authVisual.style.order = '2';
            authFormContainer.style.order = '1';
        }
    </script>
</body>

</html>
