<x-header>

    <x-slot:extra>
        <!-- banner -->
        <div class="banner-content-w3pvt">
            <div class="banner-w3layouts-info text-center">
                <h3><i>Be Calm and do your Assignments.
                        EasySubmit keep it Simple and Significant</i></h3>
                <form class="banner-form" method="post" action="#">
                    @csrf
                    <input type="email" class="" id="email" placeholder="Enter your email..." name="email"
                        required="">
                    <button type="submit" class="btn btn-danger"> <a href="registration">Get started</a></button>
                </form>
            </div>
        </div>

        </x-slot>
</x-header>

<!-- banner-bottom -->
<section class="banner-bottom py-5" id="app">
    <div class="container py-md-4">
        <h1 class="tittle-w3layouts two text-center"><b>Contact Us <i>Today</i> <b></h1>
        <div class="comment-top mt-5 row">
            <div class="col-lg-5 comment-bottom w3pvt_mail_grid-img">
                {{-- <img class="img-fluid" src="images/apply2.jpg" alt=""> --}}
            </div>
            <div class="contact-div">
                <form @submit.prevent="contactHandler" method="POST" id="form-group" name="contactForm"
                    style="border-inline: 30px">
                    @csrf
                    <h3 style="text-align:center"><i><b> Send us a message</b></i></h3>

                    <input class="form-control" type="email" v-model="contactData.email" name="email"
                        placeholder="email" required="">
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <textarea class="form-control" name="message" v-model="contactData.message" placeholder="Write a message"
                        required=""></textarea>
                    <button type="submit" class="btn btn-primary btn-sm" id="reg-btn">Submit</button>
                    <div v-if="errorMessage" class="text-center" style=><span
                            style="color:red">@{{ errorMessage }}</span></div>
            </div>


            {{-- @if (isset($contactSuccessMessage))
                <div>
                    {{ $contactSuccessMessage }}
                </div>
            @endIf --}}
            </form>
        </div>

    </div>

    <ul class="list-unstyled row text-left mt-lg-5 pt-lg-5  pb-lg-3">
        <li class="col-lg-4 adress-info">
            <div class="row">
                <div class="col-md-3 text-lg-center adress-icon">
                    <span class="fa fa-map-marker"></span>
                </div>
                <div class="col-md-9 text-left">
                    <h6>Location</h6>
                    <p>olorunda
                        <br>kwara state, Nigeria
                    </p>
                </div>
            </div>
        </li>

        <li class="col-lg-4 adress-info">
            <div class="row">
                <div class="col-md-3 text-lg-center adress-icon">
                    <span class="fa fa-envelope-open-o"></span>
                </div>
                <div class="col-md-9 text-left">
                    <h6>Email</h6>
                    <a href="mailto:info@example.com">oluwalonimimary@gmail.com</a>

                </div>
            </div>
        </li>
        <li class="col-lg-4 adress-info">
            <div class="row">
                <div class="col-md-3 text-lg-center adress-icon">
                    <span class="fa fa-mobile"></span>
                </div>
                <div class="col-md-9 text-left">
                    <h6>Phone Number</h6>
                    <p>+ 234(81) 3073-4214</p>

                </div>
            </div>
        </li>
    </ul>


    </div>
</section>

<x-footer>

</x-footer>
</body>

</html>
<script src="https://kit.fontawesome.com/3e395a6b59.js" crossorigin="anonymous"></script>
<script src="https://unpkg.com/vue@3"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<script>
    const {
        createApp
    } = Vue

    createApp({
            data() {
                return {
                    contactData: {
                        email: null,
                        message: null,
                    },
                    errorMessage: null
                }
            },
            methods: {
                contactHandler() {
                    return axios.post('http://localhost:8002/api/contact', this.contactData).then(response => {
                        console.log(response);
                        alert(response.data.message)
                    }).catch(error => {
                        this.errorMessage = error.response.data.message
                        console.log(error.response)
                    })
                }
            },
        })
        .mount('#app')
</script>
