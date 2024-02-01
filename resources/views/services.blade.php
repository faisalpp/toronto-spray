@extends('layout.main')
@section('main')

    <!-- bg section start-->
    <div class="header-bgimg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="header-text">
                        <h3>
                            Toronto Spray Foam Insulation    
                        </h3>
                        <h6 class="mt-3">
                            WE WORK HARD TO KEEP YOUR HOME
                            WELL <br> INSULATED AND COMPLETELY SEALED
                        </h6>
                        <a href="tel:4168755112">
                        <button class="mt-4">416-875-5112</button>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div>
                    <form action="{{url('/send-quote')}}" method="post" class="submit-form">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label home-form">Name</label>
                                <input type="text" name="name" class="form-control home-textarea" id="exampleFormControlInput1"
                                    placeholder="Name">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label home-form">Email</label>
                                <input type="email" name="email" class="form-control home-textarea" id="exampleFormControlInput1"
                                    placeholder="Email">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label home-form">Phone</label>
                                <input type="number" name="phone" class="form-control home-textarea" id="exampleFormControlInput1"
                                    placeholder="Phone">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label home-form">Message</label>
                                <textarea name="message" class="form-control home-textarea" id="exampleFormControlTextarea1"
                                    rows="3">Message</textarea>
                            </div>
                            <button>Reqest a Quote</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bg section end -->


    <!-- card section start  -->
    <section>
        <div class="attic-main-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="attic-section">
                            <h3>SERVICES WE OFFER</h3>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-3">
                        <div class="card card-text bg-white-2 rounded">
                            <img src="{{url('images/pic1.jpeg')}}" class="img-fluid" style="height: 185px;">
                            <div class="card-body">
                                <h5>Insulation Removal</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="card card-text bg-white-2 rounded">
                            <img src="{{url('images/pic3.jpeg')}}" class="img-fluid" style="height: 185px;">
                            <div class="card-body">
                                <h5>New Insulation</h5>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-3">
                        <div class="card card-text bg-white-3 rounded">
                            <img src="{{url('images/pic6.jpeg')}}" class="img-fluid" style="height: 185px;">
                            <div class="card-body">
                                <h5>Toronto Cleaning and Disinfecting</h5>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-3">
                        <div class="card card-text bg-white-2 rounded">
                            <img src="{{url('images/pic5.jpeg')}}"  class="img-fluid" style="height: 185px;">
                            <div class="card-body">
                                <h5>Toronto wildlife Profling</h5>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- card section end  -->





    <!-- section serivce  strt  -->
    <section>
        <div class="bg-color mt-5">
            <div class="container">
                <div class="row service-card-section">
                    <div class="col-lg-12">
                        <h2 class="service-text mb-5">SERVICE AREAS
                        </h2>
                    </div>
                    <div class="col-lg-2">
                        <div class="service-card">
                            <i class="fa-solid fa-location-dot"></i>
                            <h6>Mississauga</h6>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="service-card">
                            <i class="fa-solid fa-location-dot"></i>
                            <h6>Richmond Hill</h6>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="service-card">
                            <i class="fa-solid fa-location-dot"></i>
                            <h6>Brampton</h6>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="service-card">
                            <i class="fa-solid fa-location-dot"></i>
                            <h6>Oakville</h6>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="service-card">
                            <i class="fa-solid fa-location-dot"></i>
                            <h6>Markham</h6>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="service-card">
                            <i class="fa-solid fa-location-dot"></i>
                            <h6>Milton</h6>
                        </div>
                    </div>
                    <div class="col-lg-2 mt-3">
                        <div class="service-card">
                            <i class="fa-solid fa-location-dot"></i>
                            <h6>Georgetown
                            </h6>
                        </div>
                    </div>
                    <div class="col-lg-2 mt-3">
                        <div class="service-card">
                            <i class="fa-solid fa-location-dot"></i>
                            <h6>Pickering</h6>
                        </div>
                    </div>
                    <div class="col-lg-2 mt-3">
                        <div class="service-card">
                            <i class="fa-solid fa-location-dot"></i>
                            <h6>Orangeville</h6>
                        </div>
                    </div>
                    <div class="col-lg-2 mt-3">
                        <div class="service-card">
                            <i class="fa-solid fa-location-dot"></i>
                            <h6>Caledon</h6>
                        </div>
                    </div>
                    <div class="col-lg-2 mt-3">
                        <div class="service-card">
                            <i class="fa-solid fa-location-dot"></i>
                            <h6>Oshawa
                            </h6>
                        </div>
                    </div>
                    <div class="col-lg-2 mt-3">
                        <div class="service-card">
                            <i class="fa-solid fa-location-dot"></i>
                            <h6>King City
                            </h6>
                        </div>
                    </div>
                    <div class="col-lg-2 mt-3">
                        <div class="service-card">
                            <i class="fa-solid fa-location-dot"></i>
                            <h6>Vaughan
                            </h6>
                        </div>
                    </div>
                    <div class="col-lg-2 mt-3">
                        <div class="service-card">
                            <i class="fa-solid fa-location-dot"></i>
                            <h6>Whitby
                            </h6>
                        </div>
                    </div>
                    <div class="col-lg-2 mt-3">
                        <div class="service-card">
                            <i class="fa-solid fa-location-dot"></i>
                            <h6>King City
                            </h6>
                        </div>
                    </div>
                    <div class="col-lg-2 mt-3">
                        <div class="service-card">
                            <i class="fa-solid fa-location-dot"></i>
                            <h6>Vaughan
                            </h6>
                        </div>
                    </div>
                    <div class="col-lg-2 mt-3">
                        <div class="service-card">
                            <i class="fa-solid fa-location-dot"></i>
                            <h6>Whitby</h6>
                        </div>
                    </div>
                    <div class="col-lg-2 mt-3">
                        <div class="service-card">
                            <i class="fa-solid fa-location-dot"></i>
                            <h6>Scarborough</h6>
                        </div>
                    </div>
                    <div class="col-lg-2 mt-3">
                        <div class="service-card">
                            <i class="fa-solid fa-location-dot"></i>
                            <h6>Toronto</h6>
                        </div>
                    </div>
                    <div class="col-lg-2 mt-3">
                        <div class="service-card">
                            <i class="fa-solid fa-location-dot"></i>
                            <h6>North York
                            </h6>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </section>
    <!-- section serivce  end  -->

@endsection