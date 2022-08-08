<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Token</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/3e395a6b59.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/todo.css') }}" />
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i"
        rel="stylesheet">

</head>





<div class="cotainer">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">Token</div>
                <div class="card-body">

                    {{-- @if (Session::has('message'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('message') }}
                        </div>
                    @endif --}}


                    @if (isset($message))
                        <div class="text-success">
                            {{ $message }}
                        </div>
                    @endIf
                    <form action="/email-token" method="POST" id="login">
                        @csrf
                        <div class="form-group row">
                            <label for="token" class="col-md-4 col-form-label text-md-right">Enter Token</label>
                            <div class="col-md-6">
                                <input type="text" id="token" class="form-control" name="token" required
                                    autofocus>
                                @error('token')
                                    <span class="text-danger">{{ $message }}</span>
                                @endError
                            </div>

                            <input type="hidden" name="email" value="{{ $email }}">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @endError
                        </div>
                        <div class="col-md-6 offset-md-4" style="margin-top:20px ">
                            <button type="submit" class="btn btn-primary btn-sm" id="tokenbtn">
                                submit</button>

                        </div>


                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>
