<x-header>
    <x-slot:extraData>
        <!-- banner -->


        <div class="banner-content-w3pvt">
            <div class="banner-w3layouts-info text-center" style="">
                <h3><i>Be Calm and do your Assignments.
                        EasySubmit keep it Simple and Significant</i></h3>
                <form class="banner-form" method="post" action="">
                    @csrf
                    <input type="email" class="" id="email" placeholder="Enter your email..." name="email"
                        required="">
                    <button type="submit" class="btn btn-danger">Get Started</button>
                </form>
            </div>
        </div>
        </x-slot>
</x-header>
<!-- //main -->
<!-- banner-bottom -->

<section class="banner-bottom py-5" id="app">
    <div class="container py-md-4">
        <div class="single-w3pvt-page mt-md-5 mt-4 px-lg-5">
            <div class="content-sing-w3layouts">

                <div class="footer-w3pvt-copy-social my-4 text-center">

                    <form @submit.prevent="registrationHandler" method="POST" class=" text-primary" id="form"
                        name="regForm">
                        @csrf
                        <h3><i> Sign up</i></h3>
                        <input class=" form-control input-lg rounded-0" v-model="regData.full_name" type="text"
                            name="full_name" placeholder="fullname" required="">
                        @error('fullname')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <input class="form-control" type="text" v-model="regData.phone" name="phone"
                            placeholder="Phone Number" required="">
                        @error('phone')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <input class="form-control" type="email" v-model="regData.email" name="email"
                            placeholder="Email" required="">
                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <select name="type" class="form-control" style="height: 40px" v-model="regData.type">
                            <option value="none" selected="" disabled="">Select User</option>
                            <option>lecturer</option>
                            <option>student</option>

                        </select>

                        <input class="form-control" id="password" type="password" v-model="regData.password"
                            name="password" placeholder="password">
                        @error('password')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <input class="form-control" type="password"
                            v-model="regData.password_confirmation" name="password_confirmation"
                            placeholder=" confirm password" id="new-password">

                        <button class="bg-primary text-white btn-lg btn-outline-primary" type="submit"
                            style="border-radius: 7px" id="center2">Submit</button>
                </div>
            </div>
             <div v-if="errorMessage" class="text-center" style=><span style="color:red">@{{ errorMessage }}</span>
            </div>
            <div id="error-message" class="text-center" style=><span style="color:red"></span>
            </div>
           
            </form>
        </div>

    </div>

</section>
<!-- //banner-bottom -->

<x-footer>

</x-footer>
<!-- //footer -->


</body>

</html>
<script src="https://unpkg.com/vue@3"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
    const {
        createApp
    } = Vue

    createApp({
            data() {
                return {
                    regData: {
                        full_name: null,
                        phone: null,
                        email: null,
                        type: null,
                        password: null,
                        password_confirmation: null,
                    },
                    errorMessage: null
                }
            },
            methods: {
                registrationHandler() {
                    return axios.post('http://localhost:8002/api/registration', this.regData).then(response => {
                        console.log(response);
                        alert(response.data.message)
                    }).catch(error => {
                        this.errorMessage = error.response.data.message
                        console.log(error.response)
                    })
                }
            },
        })
        .mount("#app")
</script>
<script>
    const passwordInput = document.getElementById('password');
    const confirmPassword = document.getElementById('new-password');
    const errorMsg = document.getElementById('error-message');
    const button = document.getElementById('center2');

    
confirmPassword.addEventListener('blur',()=>{
    if(passwordInput.value === confirmPassword.value){
        passwordInput.style.border ='thin solid green';
        confirmPassword.style.border ='thin solid green';
        errorMsg.style.display ='none'
    }else{
        passwordInput.style.border ='thin solid red';
        confirmPassword.style.border ='thin solid red';
        errorMsg.style.display ='inline'
    }
});

</script>
