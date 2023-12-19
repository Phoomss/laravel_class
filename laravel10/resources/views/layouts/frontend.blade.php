<!DOCTYPE html>
<html lang="en">
{{-- CSRF TOKEN --}}
<meta name="csrf-token" content="{{ csrf_token() }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web App - @yield('title')</title>
    <link rel="stylesheet" href="https://cnd.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.min.css" rel="stylesheet">

    @livewireStyles

    @yield('css_befor')
</head>

<body>
    <div class="b-example-divider">
        <nav class="py-2 bg-light border-bottom">
            <div class="container d-flex flex-wrap">
                <ul class="nav me-auto">
                    <li class="nav-item">
                        <a href="{{ url('/') }}" class="nav-link link-dark px-2 active "
                            aria-current="page">{{ __('messages.HOME') }}</a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ url('/post') }}" class="nav-link link-dark px-2  ">{{ __('messages.ARTICLE') }}</a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ url('/category') }}" class="nav-link link-dark px-2  " ">{{ __('messages.CATEGORY') }}</a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ rout('/roles.index') }}" class="nav-link link-dark px-2  "
                          >{{ __('messages.ROLE-MANAGEMANT') }}</a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ rout('/users.index') }}" class="nav-link link-dark px-2  "
                          >{{ __('messages.USERS-MANAGEMANT') }}</a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ url('/products') }}" class="nav-link link-dark px-2  "
                          >{{ __('messages.PRODUCT') }}</a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ url('/aboute') }}" class="nav-link link-dark px-2  "
                          >{{ __('messages.ABOUTE') }}</a>
                    </li>
                </ul>
                <ul class="nav">
                    @guest

                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a href="{{ route('login') }}"
                                class="nav-link link-dark px-2  ">{{ __('messages.LOGIN') }}</a>
                        </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a href="{{ route('login') }}"
                                    class="nav-link link-dark px-2  ">{{ __('messages.REGISTER') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="navitem dropdown">
                            <a href="#" id="navbarDropdown" class="nav-link dropdown-toggle" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a href="{{ rout('logout') }}" class="dropdown-item"
                                    onclick="event.preventDefault() document.getElemenByID('logout-form').submit()">ออกจะระบบ</a>
                                <form action="{{ rout('logout') }}" id="logout-form" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                    <li>
                        <select name="" id="" class="form-control changeLang">
                            <option value="en" {{ session()->get('local') = 'en' ? 'selected' : '' }}>Englise
                            </option>
                            <option value="en" {{ session()->get('local') = 'th' ? 'selected' : '' }}>ภาษาไทย
                            </option>
                        </select>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container">
            @yield('content')
        </div>
    </div>
</body>

@livewireScripts

@if (Sestion::has('success'))
    <script>
        Swal.fire(
            "แจ้งเตือนการทำรายการ",
            {{ Session::get('success') }},
            'success'
        );
    </script>
@endif
<script type="text/javascript">
    var url = "{{ route('changeLang') }}"
    $(".changeLang").change(function() {
        window.location.herf = url + "?lang=" + (this).var()
    })
</script>
@yield('js_before')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.all.min.js"></script>


</html>
