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
                            <h3>
                                INSULATION REMOVAL SERVICES
                            </h3>
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





    <!-- section 1 start -->
    <section>
        <div class="rvalue-section mt-5">
            <div class="container">

                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="blown-section">
                            <h4>PROFESSIONAL INSULATION REMOVAL
                            </h4>
                            <p class="text-center">
                                We are a leading provider of attic restoration services in Toronto. The attic is crucial
                                to the overall energy efficiency of your home since the roof is where most of the home’s
                                energy is lost. We understand that this space is out-of-sight and therefore easy to
                                neglect. Eventually, you may end up with worn or damaged insulation, mould, mildew, and
                                other toxins among other potential hazards. Your HVAC may be spreading contaminated air
                                throughout your home. Our team of experienced and highly trained professionals can be
                                taken on even the most challenging insulation projects. We can remove all types of attic
                                insulation including blown in, batt, and vermiculite. We offer professional services at
                                affordable prices.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class=" mt-4">
                            <p class="mt-3">
                                There are many reasons to hire professionals to remove your old or contaminated
                                insulation. Handling contaminated insulation in a tight space raises serious health
                                concerns especially if you do not have the proper safety equipment. Our technicians are
                                trained and equipped to handle even toxic material properly in all kinds of
                                environments.
                            </p>
                            <p class="mt-3">
                                Our Attic Insulation Removal technicians use modern equipment to remove old insulation
                                from the attic without releasing dust, debris, and allergens in the house. Our work is
                                always clean, tidy, and effective. All insulation is removed using a PVC suction hose
                                straight to insulation bags in our trucks. There is no dust or contaminants left behind.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <img src="{{url('images/pic3.jpeg')}}" class="img-fluid attic-img">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- seciton 2 end  -->




    <section>
        <div class="rvalue-section mt-5 bg-color-2">
            <div class="container">

                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="blown-section">
                            <h4>WHEN TO REMOVE INSULATION
                            </h4>
                            <p class="text-center">
                                At the very least, get an expert opinion on whether or not you need to remove your old
                                insulation. There are instances where the solution is simply installing new insulation
                                over the old one. However, there are instances where it is in your best interest to hire
                                a professional for insulation removal in Toronto.
                            </p>

                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div>
                            <ol class="list-home-2">
                                <p>We suggest that you call us if you have noted the following issues:
                                </p>
                                <li>
                                    <a>
                                        Haven’t inspected your attic for more than a year
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        Concerned with the dust and debris piling in the attic
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        Residents suddenly prone to allergies and respiratory issues
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        When dealing with pests and wildlife in your attic
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        Odours and smells from the attic
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        Before installing new insulation
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        Noticed a dip in energy efficiency
                                    </a>
                                </li>
                                <li>
                                    <a>Failed an energy audit</a>
                                </li>
                                <li>
                                    <a>For older homes built before 1975 – asbestos insulation is
                                        common in these <br> houses and is considered toxic and dangerous
                                    </a>
                                </li>
                            </ol>

                        </div>
                    </div>
                    <div class="col-lg-5">
                        <img src="{{url('images/pic8.jpeg')}}" class="img-fluid attic-img mt-3" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>





    <section>
        <div class="rvalue-section mt-5">
            <div class="container">

                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="blown-section">
                            <h4>WHAT IS R-VALUE AND HOW DOES IT HELP IN INSULATION?</h4>
                        </div>
                    </div>
                    <div class="col-lg-7 mt-4">
                        <div class="rvalue-text call-section mt-4">
                            <h5>GIVE US A CALL TO SCHEDULE AN ATTIC INSPECTION
                            </h5>
                            <p class="mt-3">
                                Our team comes equipped with protective gear, powerful vacuums, chemicals, and equipment
                                to perform removal of old and contaminated insulation and attic cleaning services. Our
                                equipment is specifically designed to operate from the home’s exterior and within the
                                confines of the attic so you don’t have to worry about spreading dust, debris, and
                                possible toxins and allergens to the rest of the house. We always begin with an
                                inspection before defining the range of services required which is explained to you in
                                detail before we start working.
                            </p>
                            <p class="mt-3">
                                It is also dangerous working in an attic that is not properly ventilated, working in
                                tight spaces and with unstable attic floors. Our professionals are used to working
                                in
                                all kinds of spaces and environments and will do a better job removing the old
                                insulation. They also remove toxic material without contaminating the rest of the
                                house
                                and know how to dispose it safely and responsibly.
                            </p>
                            <a href="tel:4168755112">
                            <button class="call-button">416-875-5112</button>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-5 mt-5">
                        <img src="{{url('images/pic14.jpeg')}}" class="attic-img img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>












    <section>
        <div class="rvalue-section bg-color-2 mt-5">
            <div class="container">

                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="blown-section">
                            <h4>WHY HIRE US FOR ATTIC INSULATION REMOVAL
                            </h4>
                        </div>
                    </div>
                    <div class="col-lg-5 mt-5">
                        <img src="{{url('images/pic1.jpeg')}}" class="attic-img img-fluid">
                    </div>
                    <div class="col-lg-7 mt-4">
                        <div class="rvalue-text call-section mt-4" style="background-color: white;">
                            </h5>
                            <p class="mt-3">
                                We are a one-stop service for all your attic needs. Whether you simply need to remove
                                old insulation and clean out your attic after many years of neglect or require
                                additional services, we are the experts for the job. We remove (and dispose) old
                                insulation and install new. Our materials are environmentally compliant, modern, and
                                have excellent R-Value. Our experts inspect the attic before suggesting the most
                                suitable insulation material.
                            </p>
                            <p class="mt-3">
                                Schedule a site visit with one of our technicians for a professional opinion and get a
                                quote for our attic insulation removal services in Toronto. Our team treats your home
                                with respect and leaves it in the condition they found it in. We perform extensive
                                background checks on all our employees to keep our clients at ease having strangers in
                                the house.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>






    <!-- card section start  -->
    <section>
        <div class="attic-main-section bg-color custom-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="attic-section">
                            <h3>EXAMPLES OF OUR WORK</h3>
                        </div>
                    </div>
                </div>
                <div class="row mt-5 justify-content-center">
                    <div class="col-lg-5">
                        <div class="card card-text bg-white-2 rounded">
                            <img src="{{url('images/after1.jpg')}}" class="img-fluid">
                            <div class="card-body">
                                <h5>BEFORE</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="card card-text bg-white-2 rounded">
                            <img src="{{url('images/after2.jpg')}}" class="img-fluid">
                            <div class="card-body">
                                <h5>AFTER</h5>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-5 mt-4">
                        <div class="card card-text bg-white-2 rounded">
                            <img src="{{url('images/after3.jpg')}}" class="img-fluid">
                            <div class="card-body">
                                <h5>BEFORE</h5>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-5 mt-4">
                        <div class="card card-text bg-white-2 rounded">
                            <img src="{{url('images/after4.jpg')}}" class="img-fluid">
                            <div class="card-body">
                                <h5>AFTER</h5>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- card section end  -->









    <section>
        <div class="bg-color bg-color-2 custom-padding mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="count-section">
                            <h4>
                                WHY REMOVE OLD ATTIC INSULATION?
                            </h4>
                        </div>
                    </div>



                    <div class="col-lg-12">
                        <div class="count-section mt-5">
                            <h4>
                                <span class="count-span">01</span> HIGH ENERGY BILLS
                            </h4>
                            <p>
                                There are many possible explanations for why your energy bills seem to be rising by the
                                year but poor attic insulation is always a major suspect. Old, worn, or damaged
                                insulation is inefficient and could be the reason for mounting electric bills. The
                                inefficient insulation is also causing your HVAC system to work harder than necessary
                                which leads to preventable maintenance and repair costs. Most homeowners recover their
                                investment in new attic insulation within three years.
                            </p>
                        </div>
                    </div>




                    <div class="col-lg-12">
                        <div class="count-section mt-5">
                            <h4>
                                <span class="count-span">02</span> PEST PROBLEMS
                            </h4>
                            <p>
                                Pests such as rats, mice, squirrels, and bats in the attics aren’t just a nuisance but
                                have likely destroyed the insulation. These pests rip insulation to use as nesting
                                material. Furthermore, pest feces and urine contaminate the insulation and in most
                                cases, there is little choice but to remove and replace the insulation. Wildlife urine
                                and droppings contain numerous disease-causing pathogens some of which may be fatal.
                            </p>
                        </div>
                    </div>





                    <div class="col-lg-12">
                        <div class="count-section mt-5">
                            <h4>
                                <span class="count-span">03</span> OLD INSULATION
                            </h4>
                            <p>
                                Your old insulation may be inefficient and even dangerous. Attic insulation technology
                                has improved a great deal over the past decade so you can expect a far better return on
                                investment by replacing it with new insulation. Furthermore, old insulation contains
                                asbestos and other compounds that are now considered dangerous. This is true especially
                                for homes built before 1975 whose insulation is most likely vermiculite.

                            </p>
                        </div>
                    </div>




                    <div class="col-lg-12">
                        <div class="count-section mt-5">
                            <h4>
                                <span class="count-span">04</span> MOISTURE ISSUES
                            </h4>
                            <p>
                                From leaking roofs to sweating pipes and poorly ventilated attics, there are many
                                reasons for moisture problems in the attic. Consistent moisture in your insulation grows
                                mould and mildew which cause serious respiratory problems among other health issues.
                                Most moisture problems are difficult to diagnose and require an expert’s keen eye and
                                experience.
                            </p>
                        </div>
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
                            <h4>INSULATION REMOVAL COST</h4>
                            <p class="text-center mb-5">
                                HOW MUCH DOES IT COST TO REMOVE INSULATION FROM AN ATTIC?
                            </p>

                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div>
                            <ol class="list-home-2">
                                <li>
                                    <a>
                                        Expect the cost for insulation removal to start at around $2 per square foot.
                                        There are a few factors that can drive the insulation removal cost up.
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        Accessibility – How accessible is your attic? The higher the clearance inside
                                        the attic the better for everyone. Lower clearance attics require more time to
                                        work on and hence the cost per square foot will be a little higher.
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        Size – Very small attics will have a higher cost per square foot for removal. We
                                        would have to mobilize the same number of personnel and equipment for a small
                                        attic as for a large attic.
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        Debris – Attics with insulation that contains a lot of debris will be more
                                        expensive to work on. Debris can damage our machinery and thus requires more
                                        care and time to deal with. Consequently, the cost increases when there is
                                        debris present. If your attic contains construction debris, nails, plywood,
                                        shingles, animal carcasses, fecal matter, etc expect a higher cost for removal.
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        Amount of insulation – Removing higher levels of insulation is more costly than
                                        removing lower levels of insulation.
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        Type of Insulation – The cost to remove blown-in insulation is generally lower
                                        than that to remove batt insulation. Cellulose loose-fill insulation can be
                                        removed efficiently with an insulation removal vacuum. Batt insulation on the
                                        other hand needs to be removed manually. Either cut in pieces and fed through
                                        the vacuum hose or placed in bags and taken out of the attic by hand.
                                    </a>
                                </li>
                                <li>
                                    <a>Call us for an exact insulation removal quote. We will inspect and
                                        measure your attic and provide a written quotation for your consideration.
                                    </a>
                                </li>
                            </ol>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <img src="{{url('images/pic15.jpeg')}}" class="img-fluid attic-img rounded" alt="">
                        <!-- <img src="images/5.jpg" class="img-fluid mt-3" alt=""> -->
                    </div>
                </div>
            </div>
        </div>
    </section>





    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blown-section">

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="box-2">
                                    <div class="icon_box icon_box_2">
                                        <!-- <i class="fa-solid fa-cart-shopping"></i> -->
                                        <i class="fa-sharp fa-solid fa-shield custom-icon-2"></i>
                                    </div>
                                    <div class="e-commerce text-center">
                                        <h5 class="mt-2">SAFETY</h5>
                                        <p class="mt-3">
                                            Safety is a concern when getting into crawlspaces and attics. Depending on how the home is built, the attic floor may be unstable or can’t handle your weight. Hire a professional to perform attic repairs especially if you do not know what the attic floor is made from.
                                        </p>
                                    </div>
                                </div>

                            </div>


                            <div class="col-lg-4">
                                <div class="box-2">
                                    <div class="icon_box icon_box_2">
                                        <i class="fa-regular fa-clock custom-icon_5"></i>
                                    </div>
                                    <div class="e-commerce text-center">
                                        <h5 class="mt-2">TIME</h5>
                                        <p class="mt-3">
                                            Professional attic remediation and insulation removal in Toronto takes between 4 – 7 hours. You can expect to take twice the time a professional would even with help from friends. It is quicker and more convenient to let a professional do the job.
                                        </p>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-4">
                                <div class="box-2">
                                    <div class="icon_box icon_box_2">
                                        <i class="fa-solid fa-screwdriver-wrench custom-icon_5"></i>
                                    </div>
                                    <div class="e-commerce text-center">
                                        <h5 class="mt-2">PROPER TOOLS</h5>
                                        <p class="mt-3">
                                            Proper tools guarantee that the job is done properly and efficiently. You also need vacuum equipment to clean up the mess after removal, air-sealing equipment to prepare the attic for the new installation, and a disposal system especially when dealing with toxic material. 
                                        </p>
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
        <div class="rvalue-section mt-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="blown-section">
                            <h4>INSULATION REMOVAL COST</h4>
                            <p class="text-center mb-4">
                                HOW MUCH DOES IT COST TO REMOVE INSULATION FROM AN ATTIC?
                            </p>

                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div>
                            <ol class="list-home-2">
                                <li>
                                    <a>
                                        Expect the cost for insulation removal to start at around $2 per square foot. There are a few factors that can drive the insulation removal cost up.
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        Accessibility – How accessible is your attic? The higher the clearance inside the attic the better for everyone. Lower clearance attics require more time to work on and hence the cost per square foot will be a little higher.
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        Size – Very small attics will have a higher cost per square foot for removal. We would have to mobilize the same number of personnel and equipment for a small attic as for a large attic.
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        Debris – Attics with insulation that contains a lot of debris will be more expensive to work on. Debris can damage our machinery and thus requires more care and time to deal with. Consequently, the cost increases when there is debris present. If your attic contains construction debris, nails, plywood, shingles, animal carcasses, fecal matter, etc expect a higher cost for removal.
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        Amount of insulation – Removing higher levels of insulation is more costly than removing lower levels of insulation.
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        Type of Insulation – The cost to remove blown-in insulation is generally lower than that to remove batt insulation. Cellulose loose-fill insulation can be removed efficiently with an insulation removal vacuum. Batt insulation on the other hand needs to be removed manually. Either cut in pieces and fed through the vacuum hose or placed in bags and taken out of the attic by hand.
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        Call us for an exact insulation removal quote. We will inspect and measure your attic and provide a written quotation for your consideration.
                                    </a>
                                </li>
                            </ol>
                        </div>
                    </div>
                    <div class="col-lg-5 mt-4">
                        <img src="{{url('images/pic13.jpeg')}}" class="img-fluid attic-img" alt="">
                        <!-- <img src="images/8.webp" width="400" alt="" class="mt-3"> -->
                    </div>
                </div>
            </div>
        </div>
    </section>




        


    <section>
        <div class="rvalue-section bg-color-2 mt-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="blown-section">
                            <h4 class="mb-5">F.A.Q <br> SHOULD OLD INSULATION BE REMOVED FROM AN ATTIC?</h4>
                          
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <img src="{{url('images/pic8.jpeg')}}" class="img-fluid attic-img rounded" alt="">
                        <!-- <img src="images/10.jpg" alt="" class="mt-3 img-fluid"> -->
                    </div>
                    <div class="col-lg-7">
                        <div>
                            <ol class="list-home-2">
                                <li>
                                    <a>
                                        When it comes to insulation, it is easy for most of us to forget about it once it has been placed. Although this is just part of owning a home and the old adage of: out of sight, out of mind, it is actually beneficial to upgrade insulation in the attic after a certain number of years. For years, the most common type of insulation was made of fiberglass, which is susceptible to mold and a build-up of pest and rodent waste over time. 
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        We all value clean and sanitary homes, as well as efficient and high-performing ones as well, therefore, an insulation upgrade is never a bad thing after ten to fifteen years. One of the primary problems that can face insulation is the build-up of dust and debris from the air. We depend on attic insulation to keep warm air in during the winter and cool air in during the summer. An accumulation of dust can degrade the insulation over time, reducing the optimal performance of the material. 

                                    </a>
                                </li>
                                <li>
                                    <a>
                                        In addition to dust, moisture is perhaps the second most degrading component of attic insulation. It is always important to poke around your attic a few times a year to ensure that no leaks are occurring. Leaks can completely destroy insulation by causing the material to deactivate as well as the conditions necessary for mold and mildew to grow. Keeping insulation dry is absolutely paramount. 
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        Finally, even though we may never think that our attics harbor pests or rodents, it is actually quite common for raccoons and squirrels to nest inside of attics here in Toronto. Rodents can rip apart insulation to make nests and even defecate on the insulation, which can actually be quite dangerous to have this waste circulate throughout the air. 
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        If you notice any of these signs, or, if you feel like you may need to have an insulation upgrade, be sure and contact an attic insulation removal specialist to assess the situation and recommend a comprehensive replacement plan.  
                                    </a>
                                </li>
                             
                            </ol>
                        </div>
                    </div>
                  
                </div>
            </div>
        </div>
    </section>


    



    <section>
        <div class="rvalue-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="blown-section">
                            <h4 class="mb-5">
                                HOW DO YOU REMOVE INSULATION FROM AN ATTIC?
                            </h4>                          
                        </div>
                    </div>
                
                    <div class="col-lg-7">
                        <div>
                            <ol class="list-home-2">
                                <li>
                                    <a>
                                        Removing insulation from an attic is no easy task. First and foremost, performing work of this scale in a tight space with sensitive flooring is difficult and potentially dangerous. Added to this is the actual act of removing insulation, which varies based on the type of insulation needing to be extracted. Blown-in insulation requires powerful suction to be loosened to where it can then be removed. Batt insulation is even more complicated since this requires manual work to loosen the insulation. 
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        Attic insulation removal specialists use a comprehensive range of equipment to remove attic insulation. A special set of vacuums, pressurized air, debris removal equipment, and extraction receptacles are part of a professionals arsenal. Old insulation is not generally safe or desirable stuff to breathe in, so it is never a good idea to attempt to do this job alone. The first step a specialist will take is to loosen the insulation to make it accessible to large vacuums. 

                                    </a>
                                </li>
                                <li>
                                    <a>
                                        After this, a removal specialist will begin the vacuuming process which extracts the insulation into a disposal system which is air-tight to prevent potentially dangerous dust and debris from escaping into the surrounding atmosphere. At this point, the cleaning process can begin, as well as any prep work to have the attic ready for a new set of fresh insulation. 
                                    </a>
                                </li>
                            </ol>
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <img src="{{url('images/pic8.jpeg')}}" class="img-fluid attic-img" alt="">
                    </div>
                  
                </div>
            </div>
        </div>
    </section>





    <section>
        <div class="rvalue-section bg-color-2">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="blown-section">
                            <h4 class="mb-5">
                                CAN BLOWN IN INSULATION BE REMOVED?

                            </h4>                          
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <img src="{{url('images/pic7.jpeg')}}" class="img-fluid attic-img" alt="">
                        <!-- <img src="images/13.webp" class="img-fluid mt-3" alt=""> -->
                    </div>
                    <div class="col-lg-7">
                        <div>
                            <ol class="list-home-2">
                                <li>
                                    <a>
                                        Upon an initial inspection, it may very well look like blown in insulation is there to stay, but this type of insulation can indeed be removed. This type of insulation is usually popular in spaces of the attic that are difficult to access. Although the process of blowing the insulation into this space was somewhat easy, its removal is not so much. The first thing a removal specialist will do is to test the material of the insulation to determine the best method for removal. 
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        This method of insulation was one of the first popular insulation methods to be utilized, which can also mean that mold and asbestos can accumulate inside of the insulation over time. This is another reason why it is crucial to hire a professional removal service to take on this task. The potentially dangerous particles can begin to swirl around in the air once the process begins. Professionals have the proper equipment to reduce this debris stir-up as much as possible.  

                                    </a>
                                </li>
                                <li>
                                    <a>
                                        Blown in insulation is applied directly to the space, therefore it will need to be vacuumed up into a receptacle for easy removal. A professional service will also remove the old insulation and perform the proper cleanup of the area. Imagine having to try and remove blown in insulation with only a small vacuum and a large supply of trash bags–it is not worth the difficulty. Blown in insulation removal will no doubt make a mess of your home below if you attempt to remove the insulation without professional-grade equipment. 

                                    </a>
                                </li>
                                <li>
                                    <a>
                                        The process of removing blown in insulation is complex and tricky, which is made even more difficult by the release of particles into the surrounding air. When in doubt, always consult an insulation removal specialist for this incredibly difficult task. 
                                    </a>
                                </li>
                            </ol>
                        </div>
                    </div>

                 
                  
                </div>
            </div>
        </div>
    </section>






    <section>
        <div class="rvalue-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="blown-section">
                            <h4 class="mb-5">
                                SHOULD I REMOVE OLD BLOWN IN INSULATION?
                            </h4>                          
                        </div>
                    </div>
                  
                    <div class="col-lg-7">
                        <div>
                            <ol class="list-home-2">
                                <li>
                                    <a>
                                        The thing about blown in insulation that is always problematic is the incredibly difficult task that comes with removing it at some point in time. This creates a messy and arduous task and blown in insulation is the most susceptible type of insulation to mold, mildew, and pest infestation. The older the blown in insulation is, the more prone the material is to growing mold, asbestos, and accumulation pest and rodent waste. 
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        If the insulation in your attic predates the 1980s, this is even more of a reason to have old blown in insulation removed. In addition to the above-listed problems with insulation this old, the insulation will also begin to degrade after the 20-30-year mark. The material will begin to lose its efficiency, no doubt due to the accumulation of dust, debris, mold, mildew, and rodent and pest waste. 

                                    </a>
                                </li>
                                <li>
                                    <a>
                                        You should always strive to keep your home up to date with industry standards and recent innovations to ensure that your home is properly maintained over the decades. Old blown in cellulose insulation is perhaps the most problematic of the older insulation types within attics. Toronto can be a particularly moist environment in the spring and summer months, and this process has no doubt eroded the efficiency of the insulation. Blown in cellulose insulation is also susceptible to dangerous airborne asbestos as well, which is a potential carcinogen. 
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        Fiberglass is more prone to mold and mildew, which is one of the primary things about blown in cellulose insulation that makes it such a more attractive option. Cellulose insulation is also better at trapping air, but the process of having any type of insulation blown in makes the insulation susceptible to degradation over time. If it has been a few decades, you should definitely replace it.

                                    </a>
                                </li>
                            </ol>
                        </div>
                    </div>


                    <div class="col-lg-5">
                        <img src="{{url('images/pic1.jpeg')}}" class="img-fluid attic-img" alt="">
                        <!-- <img src="images/15.jpg" class="img-fluid mt-3" alt=""> -->
                    </div>
                 
                  
                </div>
            </div>
        </div>
    </section>



    <section>
        <div class="rvalue-section bg-color-2">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="blown-section">
                            <h4 class="mb-5">
                                HOW TO REMOVE OLD INSULATION FROM ATTIC
                            </h4>                          
                        </div>
                    </div>
                  
                    <div class="col-lg-5">
                        <img src="{{url('images/pic4.jpeg')}}" class="img-fluid  attic-img" alt="">
                    </div>
                 
                    <div class="col-lg-7">
                        <div>
                            <ol class="list-home-2">
                                <li>
                                    <a>
                                        The removal process of insulation from an attic is mostly the same depending on the type of insulation, but there are some special steps that should be taken for old insulation removal. When removing old insulation, safety is the primary thing that should be considered. There are some distinct differences between fiberglass and cellulose insulation. Both have benefits and disadvantages the older the insulation becomes. 
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        Fiberglass insulation is sturdy and long-lasting; however, it can also be prone to mold and mildew. Cellulose insulation is a bit cleaner, but also susceptible to degradation from dust, debris, and rodent or pest waste. Both types of insulation can make the ambient air within your home potentially dangerous and should be replaced if the insulation appears degraded or is within two to three decades old. 
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        The removal process should always be maintained by a professional service due to the danger of the particles that will circulate within the attic during the removal process. Technicians will typically begin the process by sealing off all entry points of the attic to the home below. This is important because once the removal process begins, the air within the attic will be filled with particles that should never enter the lungs. Once the insulation is loosened, the vacuuming process can begin, which will suction all of the old insulation into an air-tight container for safe removal. 
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        Removal technicians can also install new insulation of your choice with attention given to areas that were uncovered due to the old insulation degrading over time. 
                                    </a>
                                </li>
                            </ol>
                        </div>
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