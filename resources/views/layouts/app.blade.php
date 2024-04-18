<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test PT DASHINDO SOLUSI INTEGRASI :: {{ $title ?? 'No Title' }}</title>
    <link rel="stylesheet" href="{{ asset('assets') }}/css/bag-1.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/vendors/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/vendors/izitoast/dist/css/iziToast.min.css">
</head>

<body>
    <header>
        @include('layouts.header')
    </header>
    <div class="container">
        <main>
            @yield('konten')
        </main>
    </div>

    <script src="{{ asset('assets') }}/vendors/izitoast/dist/js/iziToast.min.js" type="text/javascript"></script>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <script>
                iziToast.error({
                    title: 'Error',
                    message: '{{ $error }}',
                    position: 'bottomRight',
                });
            </script> @endforeach
       @endif

    @if (Session::has('error')) <script>
            iziToast.error({
                title: 'Error',
                message: '{{ Session::get('error') }}',
                position: 'bottomRight',
            });
        </script> @endif

    @if (Session::has('info')) <script>
            iziToast.info({
                title: 'Info',
                message: '{{ Session::get('info') }}',
                position: 'bottomRight',
            });
        </script> @endif

    @if (Session::has('warning')) <script>
            iziToast.warning({
                title: 'Warning',
                message: '{{ Session::get('warning') }}',
                position: 'bottomRight',
            });
        </script> @endif

    @if (Session::has('success')) <script>
            iziToast.success({
                title: 'Success',
                message: '{{ Session::get('success') }}',
                position: 'bottomRight',
            });
        </script> @endif

    @stack('js-konten')
    </body>

</html>
