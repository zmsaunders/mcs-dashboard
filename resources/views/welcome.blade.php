<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta property="og:url" content="https://mcscovid.com/" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="Miamisburg City Schools - Reported District Covid Data" />
        <meta property="og:description" content="A project trying to better understand the trends and impact of Covid-19 within the district." />
        <meta property="og:image" content="https://mcscovid.com/socimg-latest.png" />

        <title>Miamisburg City Schools - Reported District Covid Data</title>
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png" />
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png" />
        <link rel="manifest" href="/site.webmanifest" />

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
         <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-R12GX7E3DM"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'G-R12GX7E3DM');
        </script>
    </head>
    <body class="font-sans antialiased bg-gray-100 dark:bg-gray-900">
        <div class="dark:bg-red-900 bg-red-700">
            <div class='px-6 lg:px-8 max-w-7xl my-0 mx-auto'>
                <p class="dark:text-gray-100 text-white">This data is out of date as the covid numbers are no longer being reported.</p>
            </div>
        </div>
        <div class="dark:bg-indigo-900 bg-indigo-700 shadow-md p-6">
            <div class='px-6 lg:px-8 max-w-7xl my-6 mx-auto'>
                <h1 class="text-2xl font-bold pb-2 text-white dark:text-gray-100">Miamisburg City Schools - Reported District Covid Data</h1>
                <p class="dark:text-gray-100 text-white">The information below is based upon data provided by the <a href="https://miamisburgcityschools.org/">Miamisburg School District</a> and will be updated as data is released. This project was created by a parent within the school district to try to better understand the trends and impact of Covid-19 within the district. This project is not affiliated with, endorsed by, or paid for by the district or any employee of the city.</p>
                <livewire:global-filter />
            </div>
        </div>

        <div>
            <div class="max-w-7xl my-6 mx-auto sm:px-6 lg:px-8 grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-4">
                <livewire:percent-tile
                    :type="'student_positive'"
                    :text="'Students Positive'"
                    :class="'bg-white dark:bg-gray-800 overflow-hidden shadow-md sm:rounded-lg p-4'" />

                <livewire:percent-tile
                    :type="'student_quarantine'"
                    :text="'Students Quarantined'"
                    :class="'bg-white dark:bg-gray-800 overflow-hidden shadow-md sm:rounded-lg p-4'" />

                <livewire:percent-tile
                    :type="'staff_positive'"
                    :text="'Staff Positive'"
                    :class="'bg-white dark:bg-gray-800 overflow-hidden shadow-md sm:rounded-lg p-4'" />

                <livewire:percent-tile
                    :type="'staff_quarantine'"
                    :text="'Staff Quarantined'"
                    :class="'bg-white dark:bg-gray-800 overflow-hidden shadow-md sm:rounded-lg p-4'" />
            </div>
        </div>

        <div>
            <div class="max-w-7xl my-6 mx-auto sm:px-6 lg:px-8 grid grid-cols-1 gap-4">
                @livewire('report-chart', [
                    'class'         => 'bg-white dark:bg-gray-800 overflow-hidden shadow-md sm:rounded-lg p-6',
                    'sourcechart'   => 'student_chart',
                    'chartid'       => 'student_chart',
                    'title'         => 'Students',
                    'url'           => ''
                ])

                @livewire('report-chart', [
                    'class'         => 'bg-white dark:bg-gray-800 overflow-hidden shadow-md sm:rounded-lg p-6',
                    'sourcechart'   => 'staff_chart',
                    'chartid'       => 'staff_chart',
                    'title'         => 'Staff',
                    'url'           => ''
                ])

            </div>
        </div>

        <div>
            <div class="max-w-7xl my-6 mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-md sm:rounded-lg py-6">
                    <livewire:report-table />
                </div>
            </div>
        </div>

        <div>
            <div class="max-w-7xl my-6 mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-md sm:rounded-lg py-6">
                    <livewire:schools-list />
                </div>
            </div>
        </div>

        <div>
            <div class="max-w-7xl my-6 mx-auto sm:px-6 lg:px-8">
                <livewire:contact-form />
            </div>
        </div>

        <p class="text-xs text-gray-600 dark:text-gray-500 text-center p-6">&copy; 2021, All Rights Reserved</p>

        @livewireScripts
        <script src="https://unpkg.com/chart.js@2.9.3/dist/Chart.min.js"></script>
        <!-- Chartisan -->
        <script src="https://unpkg.com/@chartisan/chartjs@^2.1.0/dist/chartisan_chartjs.umd.js"></script>
        @stack('scripts')
    </body>
</html>
