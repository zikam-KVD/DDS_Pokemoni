<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- css -->
    <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}">
</head>

<body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 lg:justify-centerflex-col">
    <div class="flex pt-10 justify-center w-full">
        <main class="flex max-w-[335px] gap-4 w-full flex-col-reverse lg:max-w-4xl lg:flex-row">
            <a
                href="{{ route('showTrainers') }}"
                class="p-6 bg-white shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d]">
                <span>Trenéři</span>
            </a>
            <a
                href="{{ route('showLocations') }}"
                class="p-6 bg-white shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d]">
                <span>Lokace</span>
            </a>
            <a
                href="{{ route('showGyms') }}"
                class="p-6 bg-white shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d]">
                <span>Arény</span>
            </a>
        </main>
    </div>
</body>

</html>
