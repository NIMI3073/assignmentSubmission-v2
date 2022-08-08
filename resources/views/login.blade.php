<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="keywords"
        content="Provision Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">

    <link href="css/font-awesome.min.css" rel="stylesheet">

    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i"
        rel="stylesheet">

</head>

<body>

    <section class="banner-bottom py-5" style="background:whitesmoke" id="app">
        <h1 class="text-primary;" style="margin-left:100px;padding:auto"><strong><i>EasySubmit</strong></i></h1>
        <div class="container py-md-4">
            <div class="comment-top mt-5 row">


                <form action="login" method="POST" id="login-page" name="myForm">
                    @csrf
                    <h5 class="login-class text-primary">Login to EasySubmit</h5>
                    
                    <input class="form-control form-control-lg" v-model="formData.email" type="text" name="email"
                    
                        id="email" placeholder="email" required="">
                    <input class="form-control form-control-lg" v-model="formData.password" type="password"
                        id="password" name="password" placeholder="password" required="">
                    <div class="form-check mb-3">
                        <label class="form-check-label login-class">
                            <input class="form-check-input bg-primary text-white" type="checkbox" name="remember">
                            Remember me
                        </label>
                    </div>

                    {{--<div v-if="errorMessage" class="text-center" style=><span
                            style="color:red">@{{ errorMessage }}</span></div> --}}
                    <div class="row">
                        <h5 style="margin-bottom: 15px;margin-left:35px" id="forgot"><a href="{{ route('forgot-password') }}"
                                class="text-primary"><strong>forgotten password?</strong></a></h5>
                        <h5 style="margin-bottom: 15px;" id="forgot"><a href="registration"
                                class="text-primary"><strong>Create Account</strong></a></h5>
                    </div>
                    <hr>
                    <button type="submit"
                        class="bg-primary btn-lg text-white btn-outline-primary"style="margin-top:15px"
                        id="mybtn">Log In</button>
                <div class="bg-white" style="padding:5px;margin-left:10px">
                    <h6 class="text-primary" id="show"><big></big></h6>
                </div>
                </form>
              
            </div>
        </div>
    </section>

    <x-footer>

    </x-footer>

</body>

</html>
<script src="https://kit.fontawesome.com/3e395a6b59.js" crossorigin="anonymous"></script>
<script src="https://unpkg.com/vue@3"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
 {{-- <script>
    
    const {
        createApp
    } = Vue

    createApp({
            data() {
                return {
                    formData: {
                        email: null,
                        password: null
                    },
                    errorMessage: null
                }
            },
            methods: {
                loginHandler() {
                    return axios.post('http://localhost:8002/api/login', this.formData).then(response => {
                        console.log(response)
                        alert(response.data.message)
                        window.location('panel')
                 
                        

                    }).catch(error => {
                        console.log(error.response)
                        // alert(error.response.data.message)
                        this.errorMessage = error.response.data.message
                    })
                }
            },
        })
        .mount("#app")

</script>  --}}
{{-- <script>
const submitButton = document.getElementById("mybtn");
submitButton.addEventListener("click", myFunction);

function myFunction() {
  document.getElementById("show").innerHTML = "Login successful";
}
</script> --}}