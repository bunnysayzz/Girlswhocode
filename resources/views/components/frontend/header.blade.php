@props(['title', 'article' => null])
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <x-frontend.seo-meta :article="$article"></x-frontend.seo-meta>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="shortcut icon" type="image/png" href="{{\App\Models\Config::getPath(\App\Models\Config::FAVICON)}}"/>

    <title>Girls Who Code</title>

    {{$slot}}

    <x-frontend.google-analytics/>

</head>
<body class="bg-gray-50">
<div class="border-b border-blue-200 mb-3">

    <div class="max-w-2xl mx-auto px-5 lg:px-0">
        <x-frontend.navbar/>
    </div>

</div>


<div class="max-w-2xl mx-auto px-5 lg:px-0 min-h-screen">

