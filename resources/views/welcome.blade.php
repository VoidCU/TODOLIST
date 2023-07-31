<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        
    </head>
    <body class="antialiased">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>To-do list </h1>
                    
                    <!-- form for todolist -->

                    <form action="{{ route('saveItem') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Title">
                            <label for="description">Description</label>
                            <textarea class="form-control" id=" description"  name=" description" rows="3"></textarea>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>

                    </form>



                 
                </div>
            </div>
        </div>
    </body>
</html>
