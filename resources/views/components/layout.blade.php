<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CyberNexus</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
 <x-navbar></x-navbar>


    {{$slot}}

    <script src="https://kit.fontawesome.com/2b8422c872.js" crossorigin="anonymous">
        
    </script>
</body>
</html>