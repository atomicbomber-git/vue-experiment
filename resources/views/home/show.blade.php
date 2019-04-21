<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Whatever </title>
    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
</head>
<body>
    <div class="container mt-3" id="app">
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam incidunt expedita enim ipsa libero illo voluptas aliquam temporibus, eius reiciendis quasi sint saepe mollitia commodi provident similique vero? At, a?
        </p>

        <example-component
            :items='{{ json_encode($items) }}'
        />
    </div>

    <script src="{{ asset("js/app.js") }}"></script>
</body>
</html>