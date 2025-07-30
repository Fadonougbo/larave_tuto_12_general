<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @viteReactRefresh
    @vite(['resources/js/frontend/index.ts','resources/css/app.css','resources/js/frontend/App.tsx'])
</head>
<body>
    @csrf
    <home-home data-users="{{ $users }}">

        Loading....
       
    </home-home>

</body>
</html>