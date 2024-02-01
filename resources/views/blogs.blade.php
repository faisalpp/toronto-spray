@extends('layout.main')
@section('main')

    <section>
        <div class="request-section">
            <div class="container">
                <div class="row">
                    <div class="attic-card-head">
                        <h4>BLOGS</h4>
                        <p class="mt-4 text-center">Stay cozy all year long, Your guide to attic insulation.</p>

                        <div class="row mt-5">
                            <div class="col-lg-4">
                                <div class="attic-card  rounded shadow-sm d-flex flex-column align-items-center"
                                    style="height: auto !important;">
                                    <img class="rounded mb-2" src="{{url('images/blog2.jpg')}}" width="320px" height="200px" />
                                    <h3 style="font-weight: 500;">The Superiority of Spray Foam Insulation over Batt
                                        Insulation</h3>
                                    <p class="mt-3">When it comes to insulating your home or commercial building,
                                        choosing the right type of insulation is crucial for energy efficiency, comfort,
                                        and cost savings. While batt insulation has been a popular choice for many
                                        years, spray foam insulation is emerging as a superior alternative. In this blog
                                        post, we will explore why spray foam insulation surpasses batt insulation in
                                        terms of performance, durability, and overall effectiveness.</p>
                                    <a href="{{url('/blog1')}}" class="btn btn-danger" style="width: 50%;">Read More</a>
                                </div>
                            </div>


                            <div class="col-lg-4 mt-4 mt-md-0 ">
                                <div class="attic-card  rounded shadow-sm d-flex flex-column align-items-center"
                                    style="height: auto !important;">
                                    <img class="rounded mb-2" src="{{url('images/blog3.jpg')}}" width="320px" height="200px" />
                                    <h3 style="font-weight: 500;">Potential Pitfalls of Improperly Installed Spray Foam
                                        Insulation</h3>
                                    <p class="mt-3">Spray foam insulation is an excellent choice for enhancing energy
                                        efficiency, improving comfort, and reducing utility costs. However, like any
                                        construction material, its benefits can be compromised if not installed
                                        correctly. In this blog post, we will explore the potential problems that can
                                        arise from improper installation of spray foam insulation and the importance of
                                        hiring professional installers.</p>
                                    <a href="{{url('/blog2')}}" class="btn btn-danger" style="width: 50%;">Read More</a>
                                </div>
                            </div>

                            <div class="col-lg-4 mt-4 mt-md-0">
                                <div class="attic-card  rounded shadow-sm d-flex flex-column align-items-center"
                                    style="height: auto !important;">
                                    <img class="rounded mb-2" src="{{url('images/blog4.png')}}" width="320px" height="200px" />
                                    <h3 style="font-weight: 500;">Unveiling the Benefits of Blown-In Fiberglass
                                        Insulation</h3>
                                    <p class="mt-3">When it comes to insulating your home or commercial space, it's
                                        essential to explore the available options to make an informed decision.
                                        Blown-in fiberglass insulation has gained popularity as a reliable and efficient
                                        solution. In this blog post, we will delve into the benefits of blown-in
                                        fiberglass insulation and understand why it's a smart choice for enhancing
                                        energy efficiency, comfort, and cost savings..</p>
                                    <a href="{{url('/blog3')}}" class="btn btn-danger" style="width: 50%;">Read More</a>
                                </div>
                            </div>



                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection