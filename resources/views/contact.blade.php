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
                            <h3>Toronto Spray Foam Insulation</h3>
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





    <section>
      <div class="rvalue-section mt-5">
          <div class="container">

              <div class="row align-items-center justify-content-center">
                  <div class="col-lg-12">
                      <div class="blown-section">
                          <h4>WHY YOU NEED TO REPLACE OLD INSULATION
                          </h4>
                          <p class="text-center">
                            There are many instances where you can simply install new insulation over the old one especially when working with batting. Unfortunately, <br> this is not always the case. Our technicians can provide accurate information on this after inspection.

                          </p>

                      </div>
                  </div>
                  <div class="col-lg-6 mt-5">
                      <div>
                        <p>
                          There are instances where you definitely need to remove old insulation such as;
                        </p>
                          <ul class="list-home">
                              <li>
                                  <a>
                                      <span>1</span> After wildlife or pest removal
                                  </a>
                              </li>
                              <li>
                                  <a>
                                      <span> 2</span> Mold and mildew on insulation
                                  </a>
                              </li>
                              <li>
                                  <a>
                                      <span> 3</span> Asbestos insulation – usually for homes built before 1975
                                  </a>
                              </li>
                              <li>
                                  <a>
                                      <span> 4</span> Leaking roof and other moisture issues
                                  </a>
                              </li>
                          </ul>
                          <p class="mt-3">
                              Hire our experts to remove your old insulation. The material might be toxic especially
                              if you’ve had wildlife or pests living in your attic. Animal feces contain many
                              disease-causing pathogens that soak into the insulation and make it dangerous to inhale
                              or handle. Mold and mildew are also toxic and shouldn’t be handled without proper gear
                              including gloves and respirator or face mask.
                          </p>
                      </div>
                  </div>
                  <div class="col-lg-5 mt-3">
                      <img src="{{url('images/pic3.jpeg')}}" class="img-fluid rounded attic-img" alt="">
                  </div>
              </div>
          </div>
      </div>
  </section>






@endsection