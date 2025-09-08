<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    </head>
    <body class="bg-[#FDFDFC] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
        <header class="p-3 mb-3 border-bottom"> 
            <div class="container"> 
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start"> 
                    <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none"> 
                        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                            <use xlink:href="#bootstrap"></use></svg> 
                    </a> 
                    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0"> 
                        <li><x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link></li>
                        <li><x-nav-link href="/jobs" :active="request()->is('jobs')">Jobs</x-nav-link></li>
                        <li><x-nav-link href="/companies" :active="request()->is('companies')">Companies</x-nav-link></li>
                        <li><x-nav-link href="/categories" :active="request()->is('categories')">Categories</x-nav-link></li>
                    </ul> 
                    <div class="dropdown text-end"> 
                        
                        @if (Auth::guest())
                        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0"> 
                            <li><x-nav-link href="/register" :active="request()->is('/register')">Registrierung</x-nav-link></li>
                            <li><x-nav-link href="/login" :active="request()->is('/login')">Login</x-nav-link></li>
                        </ul>
                        @endif

                        @if (Auth::user())
                        <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">{{ Auth::user()->name }}</a> 
                        <ul class="dropdown-menu text-small"> 
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <x-dropdown-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                                        this.closest('form').submit();" class="dropdown-item">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                            </li>
                        </ul> 


                        @endif
                    </div> 
                </div> 
            </div> 
        </header>
        </nav>
        <div class="container bd-gutter pt-md-1 pb-md-4"> 
            <div class="row"> 
                <div class="col-xl-8"> 
                    <h1 class="bd-title mt-0">{{ $heading }}</h1> 
                </div>
            </div>
            {{ $slot }}
        </div>
    </body>
</html>
