@extends('includes.app')
@section('content')


<!-- BANNER SECTION START -->
<section class="banner-section" id="banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-12 banner_inner">
                <div class="banner_content me-lg-5 me-md-3 me-0">
                    <div class="banner_title py-2">
                        <h1>Luxury Cruising on the Nile</h1>
                        <div class="divider"></div>
                        <h3>Exclusive Cruise Packages for Couples</h3>
                    </div>
                    <div class="banner_cards">
                        <div class="row my-2">
                            <div class="col-xl-5 col-lg-6 col-md-5 col-sm-5 mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <span class="badge1">4 Nights</span>
                                        <h5 class="pt-3 pb-2 m-0">Aswan to Luxor</h5>
                                        <h2 class="p-0 m-0"><i class="bi bi-currency-rupee"></i>14,995</h2>
                                        <p>per couple</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <span class="badge2">7 Nights</span>
                                        <h5 class="pt-3 pb-2 m-0">Luxor to Aswan & Return</h5>
                                        <h2 class="p-0 m-0"><i class="bi bi-currency-rupee"></i>24,995</h2>
                                        <p>per couple</p>
                                    </div>
                                </div>
                            </div>
                            <div class="py-4">
                                <a href="#" class="banner_link"><i class="bi bi-fork-knife me-1"></i>All Meals
                                    Included</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12 form-section">
                <div class="card">
                    <div class="card-body">
                        <form action="javascript:void(0);" id="landing_form">
                            <div class="row">
                                <div class="col-md-6 mb-2">
                                    <div class="form-group">
                                        <label for="" class="form-label">First Name*</label>
                                        <div class="input-group flex-nowrap">
                                            <span class="input-group-text addon-wrapping"><i
                                                    class="bi bi-person"></i></span>
                                            <input type="text" class="form-control" placeholder="Username"
                                                aria-label="Username" name="first_name"
                                                aria-describedby="addon-wrapping">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <div class="form-group">
                                        <label for="" class="form-label">Last Name*</label>
                                        <div class="input-group flex-nowrap">
                                            <span class="input-group-text addon-wrapping"><i
                                                    class="bi bi-person"></i></span>
                                            <input type="text" class="form-control" name="last_name"
                                                placeholder="Ex: Doe">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <div class="form-group">
                                        <label for="" class="form-label">Your Email*</label>
                                        <div class="input-group flex-nowrap">
                                            <span class="input-group-text addon-wrapping"><i
                                                    class="bi bi-envelope"></i></span>
                                            <input type="email" class="form-control" name="email"
                                                placeholder="Ex: abc@example.com">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="phone" class="form-label">Phone Number*</label>
                                    <div class="form-group">
                                        <input type="tel" id="phone" class="form-control w-100" name="phone"
                                            placeholder="Ex: 9999999999">
                                    </div>
                                </div>

                                <div class="col-md-6 mb-2">
                                    <div class="form-group">
                                        <label for="" class="form-label">Date of Birth*</label>
                                        <div class="input-group flex-nowrap">
                                            <span class="input-group-text addon-wrapping"><i
                                                    class="bi bi-calendar"></i></span>
                                            <input type="date" class="form-control" name="date_of_birth">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <div class="form-group">
                                        <label for="" class="form-label">Marital Status*</label>
                                        <div class="input-group flex-nowrap">
                                            <span class="input-group-text addon-wrapping"><i
                                                    class="bi bi-filter-circle"></i></span>
                                            <select name="marital_status" class="form-control" id="">
                                                <option value="">Select</option>
                                                <option value="single">Single</option>
                                                <option value="married">Married</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-2">
                                    <div class="form-group">
                                        <label for="" class="form-label">Select Package*</label>
                                        <div class="input-group flex-nowrap">
                                            <span class="input-group-text addon-wrapping"><i
                                                    class="bi bi-box"></i></span>
                                            <select name="package" class="form-control" id="">
                                                <option value="">Select</option>
                                                <option value="standard">Standard</option>
                                                <option value="premium">Premium</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <label for="" class="form-label">Message</label>
                                        <textarea name="message" class="form-control" rows="3"
                                            placeholder="Your Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button class="submit_btn" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- BANNER SECTION END -->

<!-- ABOUT SECTION START -->
<section class="about-section" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-sm-4">
                <div class="about_image">
                    <img src="{{ asset('assets/img/about.webp') }}" class="img-fluid" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about_content px-lg-4 px-md-3 px-0">
                    <h5 class="about_title">About Us</h5>
                    <h1>Karma Karnak, Luxor</h1>
                    <div class="para">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit atque
                            voluptas similique quae aspernatur sit porro. Facilis, at in mollitia officiis nulla
                            facere temporibus cum ducimus! Sint, omnis ipsa. Illum voluptates, praesentium aut
                            quo ut voluptatem culpa a provident? Tenetur, repellendus, qui fugit vero adipisci
                            ea necessitatibus quod magni velit ducimus repellat facere non dicta dolores
                            accusantium laborum saepe hic asperiores corrupti sunt vel cumque. Repellat, eum
                            perspiciatis.</p>
                    </div>
                    <div class="about_amenities">
                        <p>Amenities:</p>
                        <div class="row row-gap-4">
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12 p-sm-0">
                                <div class="amenities_inner d-flex align-items-center gap-3 gap-sm-2">
                                    <i class="bi bi-tree-fill"></i>
                                    <h5>Sun Deck</h5>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12 p-sm-0">
                                <div class="amenities_inner d-flex align-items-center gap-3 gap-sm-2">
                                    <i class="bi bi-bicycle"></i>
                                    <h5>Fitness Center</h5>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12 p-sm-0">
                                <div class="amenities_inner d-flex align-items-center gap-3 gap-sm-2">
                                    <i class="bi bi-cup-straw"></i>
                                    <h5>Wine Bar</h5>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12 p-sm-0">
                                <div class="amenities_inner d-flex align-items-center gap-3 gap-sm-2">
                                    <i class="bi bi-buildings"></i>
                                    <h5>Restaurant</h5>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12 p-sm-0">
                                <div class="amenities_inner d-flex align-items-center gap-3 gap-sm-2">
                                    <i class="bi bi-peace"></i>
                                    <h5>Swimming Pool</h5>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12 p-sm-0">
                                <div class="amenities_inner d-flex align-items-center gap-3 gap-sm-2">
                                    <i class="bi bi-tv"></i>
                                    <h5>Entertainment</h5>
                                </div>
                            </div>
                        </div>
                        <div class="button">
                            <a href="#" class="enquiry_button">Enquire Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- ABOUT SECTION END -->

<!-- PACKAGE SECTION START -->
<section class="package-section">
    <div class="container">
        <div class="package_title flex-column d-flex align-items-center justify-content-center text-center">
            <h1>Luxury Cabins & Cruise Packages</h1>
            <span class="divider"></span>
            <h5>Experience the Nile in comfort with our explosive cruise packages for couples</h5>
        </div>
        <div class="row my-4">
            <div class="col-lg-6">
                <div class="package_image">
                    <img src="{{ asset('assets/img/package.jpg') }}" class="img-fluid" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="package_content">
                    <div class="card" id="main_card">
                        <div class="card-body">
                            <p class="package_text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, aliquid nisi
                                alias
                                non, minus placeat eligendi officia libero quam repellat maxime voluptatem
                                molestiae
                                assumenda deleniti optio aspernatur incidunt amet at. Lorem ipsum, dolor sit
                                amet
                                consectetur adipisicing elit. Adipisci, dolore?
                            </p>
                            <div class="package_option d-flex align-items-center gap-2">
                                <i class="bi bi-boxes fs-3"></i>
                                <h5>Package Options</h5>
                            </div>

                            <div class="card" id="package_card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 mb-sm-4">
                                            <div class="card package_card_inner">
                                                <div class="card-body">
                                                    <span class="badge">4 Nights</span>
                                                    <h5 class="py-1 m-0">Aswan to Luxor</h5>
                                                    <div class="package_price py-1">
                                                        <span class="h2 p-0 m-0"><i
                                                                class="bi bi-currency-rupee"></i>14,995
                                                        </span><span class="fs-6">per couple</span>
                                                    </div>
                                                    <div class="d-flex align-items-center gap-2 package_meal">
                                                        <i class="bi bi-check-circle-fill"></i>
                                                        <p class="m-0 text-white fw-bold ">All meals included
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="card package_card_inner">
                                                <div class="card-body">
                                                    <span class="badge">7 Nights</span>
                                                    <h5 class="py-1 m-0">Aswan to Luxor</h5>
                                                    <div class="package_price py-1">
                                                        <span class="h2 p-0 m-0"><i
                                                                class="bi bi-currency-rupee"></i>14,995
                                                        </span><span class="fs-6">per couple</span>
                                                    </div>
                                                    <div class="d-flex align-items-center gap-2 package_meal">
                                                        <i class="bi bi-check-circle-fill"></i>
                                                        <p class="m-0 text-white fw-bold ">All meals included
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="package_period d-flex gap-2">
                                <i class="bi bi-calendar"></i>
                                <p>Stay Period: November to December 2025</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- PACKAGE SECTION END -->

<!-- CRUISE ITINERARY SECTION START -->
<section class="cruise-section">
    <div class="container">
        <div class="cruise_title flex-column d-flex align-items-center justify-content-center text-center">
            <h1>Cruise Itineraries</h1>
            <h5>Explore the wonders of the Nile with our carefully crafted journey</h5>
        </div>
        <div class="cruise_card my-5">
            <div class="card border-0 mb-5" id="main_card">
                <div class="card-header bg-none border-bottom-0 d-flex justify-content-between p-4">
                    <div class="header-title d-flex align-items-center gap-3">
                        <i class="bi bi-pin-map-fill"></i>
                        <h4>4 Nights - Aswan to Luxor</h4>
                    </div>
                    <div class="button">
                        <a href="#" class="meals_button"><i class="bi bi-fork-knife me-1 text-white"></i>All
                            Meals
                            Included</a>
                    </div>
                </div>
                <div class="vertical-line"></div>
                <div class="card-body pt-0">
                    <div class="card_inner_1 d-flex justify-content-center gap-4">
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-geo-alt-fill be9874"></i>
                            <p class="be9874 m-0">Visit</p>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-moon-fill dark-color"></i>
                            <p class="dark-color m-0">Overnight</p>
                        </div>
                    </div>
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5 card_inner_2">
                        <div class="col mb-sm-3">
                            <div class="card hover_card">
                                <div class="card-body">
                                    <div class="day_1">
                                        <span>1</span>
                                        <p>Day 1</p>
                                    </div>
                                    <p class="night-font-size mb-2"><i class="bi bi-geo-alt-fill be9874"></i>
                                        Aswan</p>
                                    <p class="night-font-size mb-2"><i class="bi bi-moon-fill dark-color"></i>
                                        Cruise</p>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-sm-3">
                            <div class="card hover_card">
                                <div class="card-body">
                                    <div class="day_1">
                                        <span>2</span>
                                        <p>Day 2</p>
                                    </div>
                                    <p class="night-font-size mb-2"><i class="bi bi-geo-alt-fill be9874"></i>
                                        Kom Ombu 7 Edfu</p>
                                    <p class="night-font-size mb-2"><i class="bi bi-moon-fill dark-color"></i>
                                        Edfu</p>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-sm-3">
                            <div class="card hover_card">
                                <div class="card-body">
                                    <div class="day_1">
                                        <span>3</span>
                                        <p>Day 3</p>
                                    </div>
                                    <p class="night-font-size mb-2"><i class="bi bi-geo-alt-fill be9874"></i>
                                        Esna</p>
                                    <p class="night-font-size mb-2"><i class="bi bi-moon-fill dark-color"></i>
                                        Luxar</p>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-sm-3">
                            <div class="card hover_card">
                                <div class="card-body">
                                    <div class="day_1">
                                        <span>4</span>
                                        <p>Day 4</p>
                                    </div>
                                    <p class="night-font-size mb-2"><i class="bi bi-geo-alt-fill be9874"></i>
                                        East Bank Luxor</p>
                                    <p class="night-font-size mb-2"><i class="bi bi-moon-fill dark-color"></i>
                                        Luxor</p>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-sm-3">
                            <div class="card hover_card">
                                <div class="card-body">
                                    <div class="day_1">
                                        <span>5</span>
                                        <p>Day 5</p>
                                    </div>
                                    <p class="night-font-size mb-2"><i class="bi bi-box-arrow-in-right"></i>
                                        Checkout</p>
                                    <p class="night-font-size text-muted mb-2">West Bank Visit</p>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-md-2 d-none"></div> -->
                    </div>

                </div>
            </div>
            <div class="card border-0" id="main_card">
                <div class="card-header bg-none border-bottom-0 d-flex justify-content-between p-4">
                    <div class="header-title d-flex align-items-center gap-3">
                        <i class="bi bi-pin-map-fill"></i>
                        <h4>7 Nights - Luxor to Aswan Return</h4>
                    </div>
                    <div class="button">
                        <a href="#" class="meals_button"><i class="bi bi-fork-knife me-1 text-white"></i>All
                            Meals
                            Included</a>
                    </div>
                </div>
                <div class="vertical-line"></div>
                <div class="card-body pt-0">
                    <div class="card_inner_1 d-flex justify-content-center gap-4">
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-geo-alt-fill be9874"></i>
                            <p class="be9874 m-0">Visit</p>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-moon-fill dark-color"></i>
                            <p class="dark-color m-0">Overnight</p>
                        </div>
                    </div>
                    <div class="card-container">
                        <div class="card hover_card">
                            <div class="card-body">
                                <div class="day_1">
                                    <span>1</span>
                                    <p>Day 1</p>
                                </div>
                                <p class="night-font-size mb-2"><i class="bi bi-geo-alt-fill be9874"></i> Aswan
                                </p>
                                <p class="night-font-size mb-2"><i class="bi bi-moon-fill dark-color"></i>
                                    Cruise</p>
                            </div>
                        </div>

                        <div class="card hover_card">
                            <div class="card-body">
                                <div class="day_1">
                                    <span>2</span>
                                    <p>Day 2</p>
                                </div>
                                <p class="night-font-size mb-2"><i class="bi bi-geo-alt-fill be9874"></i> Kom
                                    Ombu & Edfu</p>
                                <p class="night-font-size mb-2"><i class="bi bi-moon-fill dark-color"></i> Edfu
                                </p>
                            </div>
                        </div>

                        <div class="card hover_card">
                            <div class="card-body">
                                <div class="day_1">
                                    <span>3</span>
                                    <p>Day 3</p>
                                </div>
                                <p class="night-font-size mb-2"><i class="bi bi-geo-alt-fill be9874"></i> Esna
                                </p>
                                <p class="night-font-size mb-2"><i class="bi bi-moon-fill dark-color"></i> Luxar
                                </p>
                            </div>
                        </div>

                        <div class="card hover_card">
                            <div class="card-body">
                                <div class="day_1">
                                    <span>4</span>
                                    <p>Day 4 & 5</p>
                                </div>
                                <p class="night-font-size mb-2"><i class="bi bi-geo-alt-fill be9874"></i> Aswan</p>
                                <p class="night-font-size mb-2"><i class="bi bi-moon-fill dark-color"></i> Aswan
                                </p>
                            </div>
                        </div>



                        <div class="card hover_card">
                            <div class="card-body">
                                <div class="day_1">
                                    <span>6</span>
                                    <p>Day 6</p>
                                </div>
                                <p class="night-font-size mb-2"><i class="bi bi-geo-alt-fill be9874"></i> Kom Ombu</p>
                                <p class="night-font-size mb-2"><i class="bi bi-moon-fill dark-color"></i> Edfu
                                </p>
                            </div>
                        </div>

                        <div class="card hover_card">
                            <div class="card-body">
                                <div class="day_1">
                                    <span>7</span>
                                    <p>Day 7</p>
                                </div>
                                <p class="night-font-size mb-2"><i class="bi bi-geo-alt-fill be9874"></i> Esna</p>
                                <p class="night-font-size mb-2"><i class="bi bi-moon-fill dark-color"></i> Luxor
                                </p>
                            </div>
                        </div>

                        <div class="card hover_card">
                            <div class="card-body">
                                <div class="day_1">
                                    <span>8</span>
                                    <p>Day 8</p>
                                </div>
                                <p class="night-font-size mb-2"><i class="bi bi-box-arrow-in-right"></i>
                                    Checkout</p>
                                <p class="night-font-size text-muted mb-2">Departure</p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>
<!-- CRUISE ITINERARY SECTION END -->

<!-- OUR GALLERY SECTION START -->
<section class="galley-section" id="gallery">
    <div class="container">
        <h1 class="gallery_title text-center">Our Gallery</h1>
        <div class="row row-gap-3">
            <div class="col-md-4">
                <img src="{{ asset('assets/img/gallery1.webp') }}" class="img-fluid" alt="">
            </div>
            <div class="col-md-4">
                <img src="{{ asset('assets/img/gallery2.webp') }}" class="img-fluid" alt="">
            </div>
            <div class="col-md-4">
                <img src="{{ asset('assets/img/gallery3.webp') }}" class="img-fluid" alt="">
            </div>
            <div class="col-md-4">
                <img src="{{ asset('assets/img/gallery4.webp') }}" class="img-fluid" alt="">
            </div>
            <div class="col-md-4">
                <img src="{{ asset('assets/img/gallery5.webp') }}" class="img-fluid" alt="">
            </div>
            <div class="col-md-4">
                <img src="{{ asset('assets/img/gallery6.webp') }}" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</section>
<!-- OUR GALLERY SECTION END -->

<!-- NEW ATTRACTION SECTION START -->
<section class="attraction-section" id="cabins">
    <div class="container">
        <h1 class="attraction_title text-center">Nearby Attraction</h1>
        <div class="row row-gap-3">
            <div class="col-md-4">
                <div class="card border-0">
                    <img src="{{ asset('assets/img/nearBy1.webp') }}" class="card-img-top p-0" alt="">
                    <div class="card-body">
                        <div class="card-text p-2 text-center">
                            <h5>Karnak Temple & Open Air Museum</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0">
                    <img src="{{ asset('assets/img/nearBy2.webp') }}" class="card-img-top p-0" alt="">
                    <div class="card-body">
                        <div class="card-text p-2 text-center">
                            <h5>Luxor Temple & Avenue of Sphinxes</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0">
                    <img src="{{ asset('assets/img/nearBy3.webp') }}" class="card-img-top p-0" alt="">
                    <div class="card-body">
                        <div class="card-text p-2 text-center">
                            <h5>Luxor & Mummification Museums</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- NEW ATTRACTION SECTION END -->

<!-- TESTIMONIAL SECTION START -->
<section class="testimonial-section" id="testimonial">
    <div class="container">
        <div class="testimonial_title text-center">
            <p class="mb-2">Testimonial</p>
            <h1 class="title">What Our Clients Says</h1>
        </div>
        <div class="owl-carousel owl-theme">
            <div class="row justify-content-center">
                <div class="col-md-4 mb-4">
                    <div class="testimonial-card">
                        <div class="testimonial-header">
                            <h5 class="client-name">T Arvind</h5>
                            <i class="bi bi-quote"></i>
                        </div>
                        <div class="stars">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <p class="testimonial-text">
                            We had wonderful trip at Karma Karnak. Tour guides are well informed. Guides
                            explained all the historic places with the best information.
                        </p>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="testimonial-card">
                        <div class="testimonial-header">
                            <h5 class="client-name">Arnab Chakraborty</h5>
                            <i class="bi bi-quote"></i>
                        </div>
                        <div class="stars">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <p class="testimonial-text">
                            Great vacation from Karma. Really enjoyed the voyage. The food was awesome. Staff
                            were really cordial and helpful.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-4 mb-4">
                    <div class="testimonial-card">
                        <div class="testimonial-header">
                            <h5 class="client-name">Ravi Sharma</h5>
                            <i class="bi bi-quote"></i>
                        </div>
                        <div class="stars">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <p class="testimonial-text">
                            Had a great time with Karma! Staff was professional and very supportive throughout
                            our trip.
                        </p>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="testimonial-card">
                        <div class="testimonial-header">
                            <h5 class="client-name">Sanya Verma</h5>
                            <i class="bi bi-quote"></i>
                        </div>
                        <div class="stars">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <p class="testimonial-text">
                            Karma exceeded our expectations! The service was amazing and the entire experience
                            was memorable.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center mt-2" id="loader" style="display: none;">
        <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
</section>
<!-- TESTIMONIAL SECTION END -->


@endsection

@section('customJS')
<script>
$(document).ready(function() {
    $("#landing_form").validate({
        rules: {
            first_name: {
                required: true,
            },
            last_name: {
                required: true,
            },
            email: {
                required: true,
            },
            phone: {
                required: true,
                maxlength: 10,
                minlength: 10,
            },
            date_of_birth: {
                required: true,
            },
            marital_status: {
                required: true,
            },
            package: {
                required: true
            }
        },
        messages: {
            first_name: {
                required: "Please fill first name",
            },
            last_name: {
                required: "Please fill last name",
            },
            email: {
                required: "Email field is required"
            },
            phone: {
                required: "Phone Number is required",
                maxlength: "Number should be 10 digit",
                minlength: "Invalid Number"
            },
            date_of_birth: {
                required: "This field is required"
            },
            marital_status: {
                required: "This field is required"
            },
            package: {
                required: "This field is required"
            }
        },
        errorElement: "p",
        errorPlacement: function(error, element) {
            if (element.attr('id') === 'phone') {
                let itiContainer = element.closest('.form-group');
                error.insertAfter(itiContainer);
            } else {
                let inputGroup = element.closest('.input-group');
                if (inputGroup.length) {
                    error.insertAfter(inputGroup);
                } else {
                    error.insertAfter(element);
                }
            }
        },


        submitHandler: function(form) {
            $(".data-submit").prop("disabled", true);
            $("#loader").show();
            var formData = new FormData(form);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: "{{ route('landingForm') }}",
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    $("#loader").hide();
                    if (response.status == "success") {
                        Swal.fire({
                            icon: 'success',
                            title: 'Mail Sent Successfully',
                            text: response.message,
                            confirmButtonText: 'OK'
                        }).then(() => {
                            // Reset the form
                            $('#landing_form')[0].reset();
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: response.message,
                            confirmButtonText: 'OK'
                        });
                    }
                },
                error: function(xhr) {
                    $("#loader").hide();
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops!',
                        text: 'Something went wrong. Please try again.',
                        confirmButtonText: 'OK'
                    });
                }
            })

        }
    });
});
</script>

@endsection