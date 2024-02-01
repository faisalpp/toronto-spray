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

    <!-- Blown section start  -->
    <section>
        <div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="blown-section">
                            <h4>SAVINGS WITH PROPER INSULATION</h4>
                            <p class="mt-4 text-center">
                                Toronto Spray Foam Insulation. Installing new insulation in the attic is a great way to
                                dramatically improve your home’s energy efficiency. We are blown in insulation experts
                                in Toronto and specialize in inspecting attic insulation, providing expert
                                recommendations, removing old insulation and installing new insulation. Bringing your
                                insulation in the attic to R-60 value can make your home more energy-efficient and
                                reduce electricity bills by up to 50%
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blown section end  -->




    <!-- section 1 start -->
    <section>
        <div class="rvalue-section mt-5">
            <div class="container">

                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="blown-section">
                            <h4>WHAT IS R-VALUE AND HOW DOES IT HELP IN INSULATION?</h4>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="rvalue-text mt-5">
                            <p>
                                It’s essential that insulation in your attic is installed with the right R-Value.
                                Insulation in your attic helps provide resistance to heat/cold flow reducing your
                                cooling and heating costs. Your insulation’s ability to resist the transfer of heat/cold
                                is measured by R-Value. Meaning, the higher an insulation’s R-value, the better the
                                ability to withstand the flow of heat or cold. It is important to note that the R-Values
                                are not directly related to the thickness of the insulation, but it is however compared
                                to the number of fibres per square inch or the density of insulation. Ontario Building
                                Code continuously increases requirements of R-Value for attic insulation, in 1992 the
                                minimal value was around R-32, and in 2018 it is recommended to be between R-50/60. So
                                if your home is over 25 years old and insulation in your attic has never been updated
                                the likelihood that your R-Value between 15 – 30 is very high since insulation materials
                                settle over time. Moreover, if your house built in the early ’70s, it might have a
                                little bit of insulation in the attic or even empty cavities between the joists.
                                Therefore you would need to bring it to today’s’ standards by adding the top-up layer of
                                blown in insulation.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-5">
                        <img src="{{url('images/pic3.jpeg')}}" class="img-fluid rounded">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- seciton 2 end  -->



    <!-- section 1 start -->
    <section>
        <div class="rvalue-section mt-5 bg-color-2">
            <div class="container">

                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="blown-section">
                            <h4>WHAT IS R-VALUE AND HOW DOES IT HELP IN INSULATION?</h4>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-5">
                        <div class="rvalue-text  call-section mt-4 bg-color-2">
                            <h2>CALL FOR A QUOTE</h2>
                            <p>
                                OUR TECHNICIANS ARE CONTINUALLY TRAINED IN THE INDUSTRY’S BEST PRACTICES AND ARE
                                EQUIPPED WITH THE BEST TECHNOLOGY TO REMOVE OLD INSULATION WITHOUT CREATING A MESS AND
                                INSTALLING NEW INSULATION QUICKLY, EFFICIENTLY AND EFFECTIVELY.z
                            </p>
                            <a href="tel:4168755112">
                            <button class="call-button">416-875-5112</button>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-5">
                        <img src="{{url('images/insulating-attic2.jpg')}}" class="attic-img img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- seciton 2 end  -->


    <section>
        <div class="rvalue-section mt-5">
            <div class="container">

                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="blown-section">
                            <h4>WHY YOU NEED TO REPLACE OLD INSULATION</h4>
                            <p class="text-center">
                                There are many instances where you can simply install new insulation over the old one
                                especially when working with batting. Unfortunately, this is not always the case. Our
                                technicians can provide accurate information on this after inspection. There are
                                instances where you definitely need to remove old insulation such as:
                            </p>

                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div>
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
                            <p class="mt-3">
                                It is also dangerous working in an attic that is not properly ventilated, working in
                                tight spaces and with unstable attic floors. Our professionals are used to working in
                                all kinds of spaces and environments and will do a better job removing the old
                                insulation. They also remove toxic material without contaminating the rest of the house
                                and know how to dispose it safely and responsibly.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <img src="{{url('images/pic4.jpeg')}}" class="img-fluid attic-img" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- section 1 start -->
    <section>
        <div class="rvalue-section mt-5 bg-color-2">
            <div class="container">

                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="blown-section">
                            <h4>WHY Toronto Spray Foam Insulation Is important</h4>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-5">
                        <img src="{{url('images/pic4.jpeg')}}" class="img-fluid rounded">
                    </div>
                    <div class="col-lg-6">
                        <div class="rvalue-text mt-4">
                            <p>
                                Proper insulation is vital when it comes to having a healthy comfortable home. Apart
                                from keeping your energy bills low, they prevent mould growth and also keep out unwanted
                                noise. We recommend R-Values of 60 in the attic for maximum savings and comfort. Proper
                                insulation in attics helps prevent warm air from escaping through celling and forming
                                moisture. When warm air hits a cold surface in your attic, condensation occurs causing
                                frost or water damage, that results in the growth of mould and mildew, which is a health
                                hazard and damages your attic. Well-insulated attics help keep the indoor temperature in
                                balance and prevent moisture buildup, better sound-proofing and better air quality
                                inside your home. According to statistics, the adequately insulated home can reduce
                                heating and cooling costs between 20% – 50%.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- seciton 2 end  -->




    <!-- section 1 start -->
    <section>
        <div class="rvalue-section mt-5">
            <div class="container">

                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-12">
                        <div class="blown-section">
                            <h4>WHAT HAPPENS TO THE OLD INSULATION?</h4>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="rvalue-text mt-4">
                            <p>
                                Toronto Spray Foam Insulation specializes in removing old insulation and installing new blown
                                in cellulose insulation. Our technicians are equipped with proper safety gear to handle
                                toxic or dangerous material. We also transport and dispose of toxic materials safely and
                                responsibly. Our team uses high-tech equipment to remove the old insulation without
                                contaminating the rest of the home with dust, debris or other allergens. This is
                                critical in cases where there are suspected toxins or contaminants in the old
                                insulation.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-3">
                        <img src="{{url('images/pic5.jpeg')}}" width="400" height="350" class="rounded">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- seciton 2 end  -->




    <!-- section 1 start -->
    <section>
        <div class="rvalue-section mt-5 bg-color-2">
            <div class="container">

                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="blown-section">
                            <h4>WHY CHOOSE Toronto Spray Foam Insulation</h4>
                            <p class="text-center">
                                We have streamlined our services over the decades. We have been in the industry to
                                become synonymous <br> with high-quality blown in insulation Toronto Spray Foam Insulation.
                                You can expect;
                            </p>

                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div>
                            <ul class="list-home">
                                <li>
                                    <a>
                                        <span>1</span> Proper Documentation – including bonding, licensing,
                                        certification and
                                        insurance
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span> 2</span> Well trained, friendly and experienced staff
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span> 3</span> High-quality materials and high R-value
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span> 4</span> Fair and transparent pricing
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span> 5</span> Materials and workmanship that adheres to local and national
                                        laws and
                                        regulations
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span> 6</span> Modern and high-tech equipment and best practices
                                    </a>
                                </li>
                            </ul>
                            <p class="mt-3">Hire us to inspect existing insulation, remove old insulation and/or install
                                new insulation.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-5 mt-4">
                        <img src="{{url('images/Attic-Insulation.jpg')}}" class="img-fluid attic-img" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- seciton 2 end  -->



    <!-- card section start  -->
    <section>
        <div class="attic-main-section bg-color custom-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="attic-section">
                            <h3>WHEN YOU NEED NEW Toronto Spray Foam Insulation</h3>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-4">
                        <div class="card card-text bg-white-2 rounded">
                            <img src="{{url('images/pic5.jpeg')}}" class="img-fluid" style="height: 250px;">
                            <div class="card-body custom-card-body2">
                                <h5>HAVING ISSUESc WITH HVAC</h5>
                                <p>Common signs of damaged or contaminated insulation include thermostat issues, ice
                                    buildup on the roof and mould outbreak in the house.
                                </p>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4">
                        <div class="card card-text bg-white-2 rounded">
                            <img src="{{url('images/pic6.jpeg')}}" class="img-fluid" style="height: 250px;">
                            <div class="card-body custom-card-body2">
                                <h5>AFTER REMOVING OLD INSULATION</h5>
                                <p>Remove old insulation and air-seal the attic before installing new insulation to get
                                    the best possible performance and return on investment.
                                </p>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4">
                        <div class="card card-text bg-white-2 rounded">
                            <img src="{{url('images/pic7.jpeg')}}"class="img-fluid" style="height: 250px;">
                            <div class="card-body custom-card-body">
                                <h5>AFTER WILDLIFE REMOVAL</h5>
                                <p>Contaminated, old, moisture-damaged and decaying insulation is dangerous and poses
                                    serious health risks including allergies and respiratory infections.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="row mt-4">
                    <div class="col-lg-4">
                        <div class="card card-text bg-white-2 rounded">
                            <img src="{{url('images/pic8.jpeg')}}"class="img-fluid" style="height: 250px;">
                            <div class="card-body custom-card-body">
                                <h5>AFTER INSULATION DAMAGE</h5>
                                <p>Common causes for damaged insulation include excess moisture in the attic, smoke
                                    damage, contamination by wildlife and pests, age and a leaking roof.
                                </p>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4">
                        <div class="card card-text bg-white-2 rounded">
                            <img src="{{url('images/pic9.jpeg')}}" class="img-fluid" style="height: 250px;">
                            <div class="card-body custom-card-body">
                                <h5>IF YOU HAVE VERMICULITE</h5>
                                <p>Many homes built before 1975 have asbestos insulation which is not only illegal for
                                    insulating and fireproofing but also considered a toxic and hazardous material.
                                </p>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4">
                        <div class="card card-text bg-white-2 rounded">
                            <img src="{{url('images/pic12.jpeg')}}"class="img-fluid" style="height: 250px;">
                            <div class="card-body custom-card-body">
                                <h5>IF UTILITY BILLS ARE TOO HIGH</h5>
                                <p>
                                    An un-insulated home can lose up to 60% of the energy produced indoors, primarily
                                    through the attic and walls. There are up to 10 different options for insulation on
                                    the market today.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- card section end  -->


    <section>
        <div class="bg-color-2 custom-padding mt-5">
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-12">
                    <div class="count-section mt-5">
                        <h4>
                            <span class="count-span">01</span> TORONTO SPRAY FOAM INSULTATION OFFERS
                            RESIDENTIAL INSULATION SERVICES
                        </h4>
                        <p>
                            Lacking a protective layer of insulation in your attic will lead to losing money, comfort,
                            and the increase of carbon footprint. That is where Attic Insulation Toronto comes in. We
                            are confident that we have the right personnel and products for your attic. Your home’s
                            cooling and heating costs account for up to 60% of your home’s energy expenses. With our
                            professional input and assistance, insulating your attic is the most cost-effective and
                            rational means to cut on your monthly energy consumption. We specialize in improving
                            insulation in attics and remediation services. We offer professional service delivery and
                            outstanding customer service.
                        </p>
                    </div>
                </div>


                <div class="col-lg-12">
                    <div class="count-section mt-5">
                        <h4>
                            <span class="count-span">02</span> COMMERCIAL INSULATION SERVICES
                        </h4>
                        <p>
                            Just like your home, your commercial building’s attic requires proper insulation. Without
                            proper insulation, your building is prone to damage and energy loss which will result in
                            high energy costs. We offer a wide variety of insulation services to fit your commercial
                            needs.
                            We have experience installing insulation on some of the most high-profile buildings in
                            Toronto. Our insulation professionals are well experienced to effectively recommend the best
                            commercial insulation services for your new commercial project and to spot any deficiencies
                            in your current insulation application. As experts in commercial insulation, we know there
                            is no better choice than our team.
                        </p>
                    </div>
                </div>


                <div class="col-lg-12">
                    <div class="count-section mt-5">
                        <h4>
                            <span class="count-span">03</span> CHOOSING THE BEST TORONTO SPRAY FOAM INSULTATION
                        </h4>
                        <p>
                            There are two main types of insulation blown-in insulation and batt insulation. Each has its
                            own unique advantages and applications so speak to our experts for recommendations on the
                            best option.
                        </p>
                    </div>
                </div>


                <div class="col-lg-12">
                    <div class="count-section mt-5">
                        <h4>
                            <span class="count-span">04</span> ADVANTAGES OF BLOW IN CELLULOSE INSULATION
                        </h4>
                        <p>
                            It is quick and easy to install and particularly good for attic spaces. The loose-fill
                            material is perfect for insulating around fixtures and odd-shaped structures and fills
                            cracks and gaps. This type of insulation is eco-friendly and has a high content of recycled
                            material. Blow in insulation has steadily gained popularity over the past decade for the
                            following reasons:
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>




    <section>
        <div class="bg-color">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blown-section">

                        <div class="row mt-5">
                            <div class="col-lg-3">
                                <div>
                                    <div class="icon_box">
                                        <!-- <i class="fa-solid fa-cart-shopping"></i> -->
                                        <i class="fa-solid fa-leaf custom-icon"></i>
                                    </div>
                                    <div class="e-commerce text-center">
                                        <h5 class="mt-2">Energy efficiency</h5>
                                        <p class="mt-3">
                                            Blown insulation is an effective way to seal gaps and air leaks in a
                                            building, which can help to reduce heating and cooling costs by keeping
                                            conditioned air inside and preventing drafts.
                                        </p>
                                    </div>
                                </div>

                            </div>


                            <div class="col-lg-3">
                                <div>
                                    <div class="icon_box">
                                        <i class="fa-solid fa-screwdriver-wrench custom-icon"></i>
                                        <!-- <i class="fa-solid fa-cart-shopping"></i> -->
                                    </div>
                                    <div class="e-commerce text-center">
                                        <h5 class="mt-2">ENERGY EFFICIENT</h5>
                                        <p class="mt-3">
                                            Since the insulation is loose fill, it fits in gaps and cracks without
                                            leaving any weak spots. It is also great for insulating around odd-shaped
                                            structures and fittings.
                                        </p>
                                    </div>
                                </div>

                            </div>

                            <div class="col-lg-3">
                                <div>
                                    <div class="icon_box">
                                        <!-- <i class="fa-solid fa-cart-shopping"></i> -->
                                        <i class="fa-solid fa-dice-d6 custom-icon3"></i>
                                    </div>
                                    <div class="e-commerce text-center">
                                        <h5 class="mt-2">SOUNDPROOFING</h5>
                                        <p class="mt-3">
                                            The tight and compact place fit means that the insulation makes a great
                                            sound barrier if you are looking for soundproofing qualities along with
                                            energy efficiency.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div>
                                    <div class="icon_box">
                                        <i class="fa fa-solar-panel custom-icon4"></i>
                                        <!-- <i class="fa-solid fa-cart-shopping"></i> -->
                                    </div>
                                    <div class="e-commerce text-center">
                                        <h5 class="mt-2">GREAT ROI</h5>
                                        <p class="mt-3">
                                            Blown-in attic insulation offers a great return on investment. Most
                                            homeowners
                                            recover the installation cost in the first 2 – 4 years.
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>



    <section>
        <div class="mt-5  custom-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-9 text-center">
                        <h4>GET OUR EXPERTS TO INSPECT YOUR ATTIC AND RECOMMEND THE BEST MATERIAL FOR YOUR BLOW IN Toronto Spray Foam Insulation
                        </h4>
                    </div>
                </div>
                <div class="row mt-5 justify-content-center">
                    <div class="col-lg-5">
                        <div>
                            <p class="mt-3">
                                Hire our experts. We can remove the old insulation especially if your attic has moisture
                                problems, pest and wildlife infestation (rats, mice, squirrels, raccoons, etc.),
                                insulation installed before 1975 (it might be toxic and contain asbestos). Only
                                professional installers can guarantee that you get all mentioned benefits and more from
                                your new attic insulation.
                            </p>
                            <a href="tel:4168755112">
                            <button class="call-button mt-3">416-875-5112</button>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <img src="{{url('images/alert.png')}}" class="img-fluid mt-2" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="rvalue-section  mt-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="blown-section">
                            <h4>BLOW-IN CELLULOSE INSULATION</h4>
                            <p class="text-center">
                                Blow-in insulation is installed by literally blowing loose-fill material into place.
                                Cellulose is a good option for loose-fill insulation. <br> Other types include
                                fibreglass and mineral wood.
                            </p>

                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div>
                            <ol class="list-home-2">
                                <li>
                                    <a>
                                        Has the highest recycled material content – it’s made from up to 85-percent
                                        recycled newsprint
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        Very effective in filling gaps and voids to provide premium insulation and great
                                        soundproofing
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        Has a higher R-value on average than fibreglass – approximately R-3.2 per inch
                                        VS R-2.2 per inch for fibreglass
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        Good fire retardant and pest resistant qualities
                                    </a>
                                </li>
                                <li>
                                    <a>

                                        Easy to install and typically requires a 2-man team; can be installed in just a
                                        few hours
                                    </a>
                                </li>
                                <li>
                                    <a>

                                        Requires little technology to manufacture and therefore available almost
                                        anywhere and at a reasonable price
                                    </a>
                                </li>
                            </ol>
                        </div>
                    </div>
                    <div class="col-lg-5 mt-4">
                        <img src="{{url('images/pic14.jpeg')}}" width="380" height="300" class="rounded attic-img" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section>
        <div class="rvalue-section mt-5 bg-color-2">
            <div class="container">

                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="blown-section">
                            <h4>WHAT IS R-VALUE AND HOW DOES IT HELP IN INSULATION?</h4>
                        </div>
                    </div>
                    <div class="col-lg-7 mt-4">
                        <div class="rvalue-text call-section mt-4" style="background-color: white;">
                            <h2>CLICK BELOW TO REQUEST A QUOTE</h2>
                            <p>
                                Our technicians have combined decades of experience installing blown in cellulose
                                insulation. Installing blown in insulation can be a messy job but our experts leave the
                                work site as clean as they found it. The material is fed from outside the house and the
                                hose secured in the attic to ensure that dust, debris, and allergens don’t find their
                                way into the main house.
                            </p>
                            <p class="mt-3">
                                Another concern when installing blow-in insulation is settling which reduces the
                                insulation’s effectiveness over time. Our experts are able to work around this issue
                                whether that means using the additional material or other solution. Our procedures are
                                non-invasive and rarely involve tearing up drywall or other such extreme measures.
                            </p>
                            <a href="tel:4168755112">
                            <button class="call-button">416-875-5112</button>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-5 mt-4">
                        <img src="{{url('images/pic15.jpeg')}}" class="attic-img img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="rvalue-section  mt-5">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-5 mt-4">
                        <img src="{{url('images/pic16.jpeg')}}" width="380" height="300" class="mt-5 rounded attic-img">
                    </div>
                    <div class="col-lg-6">
                        <div class="batt-section mt-5">
                            <h4>BATT INSULATION</h4>
                            <p>
                                For decades we has been the installer of batt insulation in Toronto. Batt insulation is
                                an excellent option for insulating ceilings, walls, floors and attics especially in
                                unfinished spaces where the batts are installed between studs, joists and beams. Our
                                professional technicians do a pre-installation inspection to determine whether batting
                                is the best option. Our contractors also advice on the best material for your
                                application.
                            </p>
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
                    <div class="col-lg-12">
                        <div class="blown-section">
                            <h4>THE BENEFITS OF INSULATING YOUR HOME</h4>
                            <p class="text-center">
                                Whether you are insulating your attic for the first time or replacing old or damaged
                                insulation, this is a project that is well worth the investment. <br> Some of the
                                advantages that you can expect from professionally done batt insulation include;
                            </p>

                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div>
                            <ol class="list-home-2">
                                <li>
                                    <a>
                                        Increased energy efficiency – you can expect to make significant savings in
                                        heating and cooling costs
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        Acoustic benefits – thick batting has excellent soundproofing qualities
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        Ambient indoor temperature – you can expect a consistent and comfortable indoor
                                        temperature with the right amount of insulation
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        Reduce your carbon footprint – high-quality insulation means your home takes up
                                        less of our precious natural resources for its energy needs
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        Aside from these benefits and more, many of our customers recoup their initial
                                        investment in as little as 3-4 years. Insulation can slash your energy costs by
                                        up to 80-percent.
                                    </a>
                                </li>
                            </ol>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <img src="{{url('images/pic17.jpeg')}}" width="380" height="300" alt="" class="attic-img">
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section>
        <div class="rvalue-section mt-5 ">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="blown-section">
                            <h4>BATT TORONTO SPRAY PROCEDURE</h4>
                            <p class="text-center mb-4">
                                The first step is the pre-insulation walkthrough. This allows the Attic Insulation
                                Toronto technician to get a sense of what is required <br> in terms of batting material and
                                other information he needs to formulate the way forward.
                            </p>

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div>
                            <p>
                                Next is the preparation which includes cleaning and air-sealing the attic or space to be
                                insulated. The procedure here depends on the space and sealing requirements and may
                                include sprayed on sealing, caulking, taping or a combination of these.
                            </p>
                            <p class="mt-3">
                                Finally, the technicians install the batt insulation using the industry’s best
                                practices, specialty equipment and hardware. All our insulation materials meet all local
                                and national government guidelines and sustainability requirements.
                            </p>
                            <a href="tel:4168755112">
                            <button class="call-button">416-875-5112</button>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-4 text-end">
                        <img src="{{url('images/room1.jpeg')}}" width="380" height="300" alt="" class="attic-img">  
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section>
        <div class="rvalue-section mt-5 bg-color-2">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="blown-section">
                            <h4> TORONTO SPRAY FOAM COST</h4>
                            <p class="text-center mb-5">
                                The cost to insulate an attic depends on several factors. We price insulation installs
                                on a square foot basis. <br> The square foot price can vary depending on how much
                                insulation we are adding and general project difficulty.
                            </p>

                        </div>
                    </div>
                    <div class="col-lg-5 mt-2">
                        <img src="{{url('images/pic18.jpeg')}}" class="img-fluid attic-img"  alt="">
                    </div>
                    <div class="col-lg-7">
                        <div>
                            <ol class="list-home-2">
                                <li>
                                    <a>
                                        You should expect the starting cost for a complete install of insulation from 0
                                        to R60 starting at in and around $1.45 per square foot. Top ups are generally
                                        more economical.
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        This cost however can vary and depends on several factors.
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        How much cellulose insulation we are adding – height. If you do not have any
                                        insulation in your attic expect the cost per square foot to be higher than for
                                        topping up insulation in place. Going from 0 to R60 is more expensive from going
                                        to R30 to R60 because we are adding more product.
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        The size of the attic space we are insulating. Smaller attics have a higher per
                                        square foot cost while larger attics have a marginally smaller per square foot
                                        cost.
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        Difficulty of installation. Small attic spaces are more difficult to work in and
                                        hence take a lot more time to complete a job. If your attic is tighter expect a
                                        small additional cost per square foot.
                                    </a>
                                </li>

                                <li>
                                    <a>Ventilation – If we need to improve ventilation there will be additional costs
                                        for installing rafter vents.
                                    </a>
                                </li>

                                <li>
                                    <a>
                                        Attic Hatch – Is your attic hatch high enough? As we are installing more
                                        insulation the wall around the attic hatch must be raised so that the added
                                        insulation does not fall through the hatch. Hense a parapet wall will need to be
                                        constructed.
                                    </a>
                                </li>


                                <li>
                                    <a>If you would like an accurate quote for your attic insulation call us. We will
                                        arrange for a thorough inspection and measurement and followup with an accurate
                                        quotation.
                                    </a>
                                </li>
                            </ol>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>




    <!-- section start -->
    <section>
        <div class="rvalue-section mt-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="blown-section">
                            <h4> TORONTO SPRAY FOAM INSULATION EXPERTS
                            </h4>
                            <p class="text-center mb-5">
                                Our expert’s advice that you should have your TORONTO SPRAY FOAM insulation inspected at least once a
                                year or so. Although insulation can last 80 or even 100 years, there are many causes
                                that can compromise the insulation’s life. Hire our technicians for a thorough
                                inspection and subsequent recommendations for your attic insulation project.
                            </p>

                        </div>
                    </div>

                    <div class="col-lg-7">
                        <div>
                            <ol class="list-home-2">
                                <li>
                                    <a>
                                        Upgrading your insulation can improve your home’s energy efficiency drastically
                                        and slash monthly bills by up to 80%. You can recoup your investment in as
                                        little as three years if you get the job done by an expert.
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        Installing new insulation is a positive step in many instances, however, there
                                        is such a thing as over insulation. Installing too much insulation compromises
                                        your home’s ventilation and may cause moisture to get trapped inside the house
                                        especially in the attic.
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        A far more common downside of installing new insulation yourself is
                                        under-insulation. Signs that your new insulation is deficient includes uneven
                                        temperatures and drafts in various rooms, higher utility bills without having
                                        increased your energy usage and the second floor is unusually warm or cold
                                        during summers or winters.
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        Our Toronto Spray Foam Insulation experts can guarantee your attic is properly
                                        insulated and with the proper material for your situation. Again, there are
                                        pre-installation procedures that ultimately affect the performance of your new
                                        insulation. There is also the question of whether it is necessary to remove the
                                        existing insulation. You may not even need new insulation if your energy
                                        efficiency issues are due to a faulty HVAC system. Our experts take all these
                                        factors into consideration before coming up with the best course of action.

                                    </a>
                                </li>

                            </ol>

                        </div>
                    </div>

                    <div class="col-lg-5 mt-2 text-end">
                        <img src="{{url('images/pic19.jpeg')}}" class="img-fluid rounded attic-img"  alt="">
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- section end-->



@endsection