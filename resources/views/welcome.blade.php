<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Miamisburg City Schools - Reported District Covid Data</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
         <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased bg-gray-100">
        <div class='px-6 lg:px-8 max-w-7xl my-6 mx-auto'>
            <h2 class="text-2xl font-bold py-2">Miamisburg City Schools - Reported District Covid Data</h2>
            <p>The information below is based upon data provided by the <a href="https://miamisburgcityschools.org/">Miamisburg School District</a>. This project was created by a parent within the school district to try to better understand the trends and impact of Covid-19 within the district. This project is not affiliated with, endorsed by, or paid for by the district or any employee of the city.</p>
        </div>

        <div>
            <div class="max-w-7xl my-6 mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                    <livewire:report-table />
                </div>
            </div>
        </div>

        <div>
            <div class="max-w-7xl my-6 mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                    <livewire:schools-list />
                </div>
            </div>
        </div>

        <p class="text-xs text-grey-200 text-center p-6">&copy; 2021, All Rights Reserved</p>

        @livewireScripts
    </body>
</html>
