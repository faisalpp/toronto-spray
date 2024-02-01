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
                            PROFESSIONAL AND AFFORDABLE
                            MOLD REMEDIATION SERVICES IN THE GTA
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
                            <h3>
                                SERVICS WE PROVIDE

                            </h3>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-4">
                        <div class="card-text bg-white-2 rounded">
                            <img src="{{url('images/pic3.jpeg')}}" class="img-fluid">
                            <div class="card-body">
                                <h5>BLOWN IN INSULATION</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card-text bg-white-2 rounded">
                            <img src="{{url('images/pic1.jpeg')}}" width="355" height="220">
                            <div class="card-body">
                                <h5>BATT INSULATION</h5>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4">
                        <div class="card-text bg-white-2 rounded">
                            <img src="{{url('images/pic4.jpeg')}}" width="355" height="220">
                            <div class="card-body">
                                <h5>ATTIC CLEANING</h5>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </section>
    <!-- card section end  -->



    <section>
        <div class="attic-main-section bg-color custom-padding mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="attic-section">
                            <h3>COMMON TYPES OF ATTIC MOLD
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="row mt-5 justify-content-center">
                    <div class="col-lg-6">
                        <div class="card-text bg-white-2 rounded">
                            <img src="{{url('images/mold1.jpg')}}" class="img-fluid">
                            <div class="card-body">
                                <h5>BLACK MOLD
                                </h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="card-text bg-white-2 rounded">
                            <img src="{{url('images/mold2.webp')}}" class="img-fluid">
                            <div class="card-body">
                                <h5>WHITE MOLD
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>







    <section>
        <div class="rvalue-section mt-5 bg-color-2">
            <div class="container">

                <div class="row">
                    <div class="col-lg-7">
                        <div>
                            <h4>ATTIC MOLD REMOVAL TORONTO
                            </h4>
                            <p class="mt-3">
                                To keep an attic maintained, people need to check for mold. Finding mold in attics is a
                                very common issue that most people are unaware of. Mold often starts in the colder
                                winter periods and is caused by several factors. Poor ventilation and moisture are the
                                main catalysts in mold growth. The attic is supposed to be adequately ventilated through
                                air vents. There are many types of air vents depending on the year of the build of your
                                house. If hot outtake air is not properly released and meets the cool air on the roof,
                                it can create a dew point that will lead to condensation. The dew point is essentially
                                water storage that can seep through gaps and enter the attic space that will lead to
                                mold growth which spread with mold spores. The attic is an ideal space for mold to grow.
                                People often do not bother with the attic as much as they need to and that is what
                                permits undisturbed mold growth. Our team at Attic Insulation Toronto has the knowledge
                                and resources to deal with mold growth and can also assess the situation to recommend
                                preventive measures so that the attic always performs at an optimal level. For more
                                information on our services, call the team at Attic Insulation Toronto.
                            </p>
                            <a href="tel:4168755112">
                                <button class="call-button">416-875-5112</button>
                            </a>

                        </div>
                    </div>
                    <div class="col-lg-5">
                        <img src="{{url('images/pic10.jpeg')}}" class="img-fluid attic-img" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section>
        <div class="rvalue-section mt-5 custom-padding">
            <div class="container">

                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <img src="{{url('images/pic14.jpeg')}}" class="img-fluid attic-img mt-3" alt="">
                    </div>
                    <div class="col-lg-7">
                        <div>
                            <h4>
                                HOW ATTIC MOLD IS CAUSED
                            </h4>
                            <p class="mt-3">
                                Simply put, the main cause of mold development in your attic is the difference between
                                the indoor temperature and the outdoor temperature creating condensation. Mold can
                                thrive under these circumstances along with the fact that attics remain untouched.
                                Roofing is also a cause that leads to mold development. Holes, gaps, or tears can arise
                                through years of exposure to the elements. This can cause openings in the roof where
                                water can pass through and eventually lead to mold growth on wood and on insulation.
                            </p>
                            <a href="tel:4168755112">
                                <button class="call-button">416-875-5112</button>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>



    <section>
        <div class="rvalue-section mt-5 bg-color-2">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-7">
                        <div>
                            <h4>
                                HOW PREVIOUS HOMEOWNERSHIP CAN CAUSE MOLD

                            </h4>
                            <p class="mt-3">
                                There is a big chance that your home has been owned by multiple homeowners over the past
                                years that each had their own needs and specifications. As the house switches hands,
                                multiple solutions have been used by several contractors to keep the house functioning.
                                Unfortunately, this can have consequences for present homeowners. In many cases, the
                                attic ventilation system is not as simple it is supposed to be. Several vents, pipes,
                                and ventilation systems all in one place can block or hinder airflow effectively. The
                                attic is often used for storage which can also prevent the hot air from escaping through
                                vents installed in the attic. As this warmth accumulates, it creates a cushion of air
                                that will naturally travel upwards and create a hot air mess which will lead to mold
                                growth in the attic when it meets a cold front on the roof.
                            </p>
                            <a href="tel:4168755112">
                                <button class="call-button">416-875-5112</button>
                            </a>

                        </div>
                    </div>


                    <div class="col-lg-5">
                        <img src="{{url('images/pic19.jpeg')}}" class="img-fluid attic-img mt-3" alt="">
                    </div>

                </div>
            </div>
        </div>
    </section>



    <section>
        <div class="rvalue-section mt-5 custom-padding">
            <div class="container">

                <div class="row align-items-center">

                    <div class="col-lg-5">
                        <img src="{{url('images/pic17.jpeg')}}" class="img-fluid attic-img mt-3" alt="">
                    </div>
                    <div class="col-lg-7">
                        <div>
                            <h4>
                                HOW TO TELL YOU HAVE MOLD
                            </h4>
                            <p class="mt-3">
                                Mold is an unpleasant thing to look at. It can negatively affect the house and can even
                                lead to various health complications when mold spores are inhaled. Mold is an extremely
                                dangerous fungus to people who already have a compromised respiratory system. An attic
                                is a stuffy place where air get can trap in easily without proper ventilation which also
                                encourages mold growth. One of the tell-tale signs of mold in your attic is seeing wet
                                insulation. Wet insulation will without a doubt have the perfect environment to grow
                                mold. If you have leaky roofs or water entering through the roof, this will also create
                                the perfect environment to grow mold. Mold in large quantities can threaten the
                                structural integrity of your wood as well as affect the quality of your insulation to
                                the point that insulation needs to be re-installed. Re-installation can be a very costly
                                process that could be all avoided by a proper assessment of your attic space as well as
                                your roof.

                            </p>
                            <a href="tel:4168755112">
                                <button class="call-button">416-875-5112</button>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>



    <section>
        <div class="rvalue-section mt-5 bg-color-2">
            <div class="container">

                <div class="row align-items-center">


                    <div class="col-lg-7">
                        <div>
                            <h5>
                                WHY CHOOSE PROFESSIONAL MOLD REMEDIATION SPECIALISTS?

                            </h5>
                            <p class="mt-3">
                                Professional mold remediation specialists can assess a situation more thoroughly by
                                looking at common problem areas as well as making sure that the ventilation functions
                                properly. If moisture is indeed a problem, the professional mold remediation specialist
                                will immediately convey this to the customer, so that the proper measures can be taken.
                                Attic Insulation Toronto has been in countless attics around Toronto and beyond and is
                                able to locate problem areas with relative ease through the years of experience we have
                                with attic mold cases. Attic Insulation Toronto has been hiring professionals for years
                                that have honed their skills for years.
                            </p>
                            <p class="mt-3">
                                Before moving on to fixing the ventilation by a third party, mold removal specialists
                                need to carefully assess the situation before moving forward. Mold spores are highly
                                toxic, and cleanup should never be attempted by anyone other than by experienced
                                professionals who are aware of the dangers that mold spores can have. Breathing in mold
                                spores can affect the respiratory system adversely. People who have medical issues like
                                people who suffer from asthma can be hypersensitive to mold spores. Mold can affect
                                everyone no matter how healthy they are in various ways. Our professionals wear
                                protective gear that will allow them to work and breathe continuously without being
                                exposed to the risks a DIYer would otherwise have. Even with all the Protective Personal
                                Equipment, the mold remediation process still poses a safety risk.
                            </p>
                            <p class="mt-3">
                                With regards to privacy, we would like to let you know that we employ all our
                                technicians in unmarked vehicles no matter where they go. We understand that discovering
                                mold in the attic is not a pleasant thing to discover. Mold in attics can be a costly
                                discovery where insulation is the most at risk. Re-installing a whole insulation system
                                can take days and can be an expensive endeavor. Ensuring that you have proper
                                circulation is critical to breaking the cycle of mold growth.
                            </p>
                            <p class="mt-3">
                                Safety is our number one priority. We will always work according to federal and
                                provincial regulations to make sure that our customers, as well as our technicians, stay
                                safe during the mold removal process. If you have any questions, contact the customer
                                support team at Attic Insulation Toronto to find out more about the mold removal
                                process.
                            </p>
                            <a href="tel:4168755112">
                                <button class="call-button">416-875-5112</button>
                            </a>
                        </div>
                    </div>


                    <div class="col-lg-5">
                        <img src="{{url('images/pic18.jpeg')}}" class="img-fluid attic-img" alt="">
                        <img src="{{url('images/pic1.jpeg')}}" class="img-fluid attic-img mt-3" alt="">
                    </div>


                </div>
            </div>
        </div>
    </section>




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




@endsection