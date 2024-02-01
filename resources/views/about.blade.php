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
                        <button class="mt-4">416-875-5112</button>
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


    <section>
        <div class="rvalue-section">
            <div class="container">

                <div class="row align-items-center justify-content-center pt-5">
                    
                    <div class="col-lg-6 mt-4">
                        <div class="rvalue-text call-section mt-4">
                            <h2>HIRE THE EXPERTS
                            </h2>
                            <p>
                                we have decades of experience installing and removing insulation for retrofit residential projects and new construction in toronto. we only use high-quality insulation material and high-tech equipment to guarantee comfortable indoor temperature, high energy efficiency, excellent soundproofing and overall great value for money.
                            </p>
                           
                            <button class="call-button">416-875-5112</button>
                        </div>
                    </div>
                    <div class="col-lg-5 mt-4">
                        <img src="{{url('images/pic19.jpeg')}}" width="500" height="350" class="attic-img">
                    </div>
                </div>
            </div>
        </div>
    </section>







@endsection