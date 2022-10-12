<?php
include __DIR__ . '/../functions.php';
include __DIR__ . '/header.php';
?>

<header>
    <div class="header-navigation-bar">
        <div class="container">
            <div class="row justify-content-center justify-content-lg-between align-items-center py-5">
                <div class="col-auto">
                    <div class="row align-items-center gx-8">
                        <div class="col-auto">
                            <a href="./">
                                <?= renderImg("logo.png", "logo") ?>
                            </a>
                        </div>
                        <div class="col">
                            <ul class="navigation">
                                <li><a href="#about-us">About Us</a></li>
                                <li><a href="#truck-finance">Truck Finance</a></li>
                                <li><a href="#loans">Loans</a></li>
                                <li><a href="#why-us">Why ODIN?</a></li>
                                <li><a href="#how-does-it-work">How Does It Work?</a></li>
                                <li><a href="#things-to-know">Things to know</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <a href="tel:<?= $phone_number ?>" class="btn rounded-pill btn-secondary rounded-0 text-white px-md-5">
                        <?= $phone_number ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="banner">
    <?= renderImg("banner-lightening.png", "background", "banner-lightening") ?>
    <?= renderImg("banner-truck.png", "background", "banner-truck") ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="fs-128 fw-400 fw-700 lh-1 pb-4">Need a great deal on Truck Finance?</div>
                <div class="pt-3 pb-6 fs-24">Go with a company that has been financing trucks for over 20 years</div>
                <a href="tel:<?= $phone_number ?>" class="btn d-inline-flex rounded-pill btn-secondary rounded-0 text-white px-md-5">
                    Enquire Now
                </a>
            </div>
        </div>
    </div>
</section>

<section class="cta">
    <div class="cta-slider" id="cta">
        <div class="cta-card">
            <?= renderImg('cta-1.png', "icons") ?>
            <div class="fs-24 fw-700 lh-3 pt-5">Fast &amp; Easy<br> Approval Process</div>
        </div>
        <div class="cta-card">
            <?= renderImg('cta-2.png', "icons") ?>
            <div class="fs-24 fw-700 lh-3 pt-5">Quality Customer<br> Focused Service</div>
        </div>
        <div class="cta-card">
            <?= renderImg('cta-3.png', "icons") ?>
            <div class="fs-24 fw-700 lh-3 pt-5">No Long Application<br> Forms</div>
        </div>
        <div class="cta-card">
            <?= renderImg('cta-4.png', "icons") ?>
            <div class="fs-24 fw-700 lh-3 pt-5">Approvals with No<br> Financials Needed</div>
        </div>
        <div class="cta-card">
            <?= renderImg('cta-5.png', "icons") ?>
            <div class="fs-24 fw-700 lh-3 pt-5">Lifetime Support on<br> All Your Loans</div>
        </div>
        <div class="cta-card">
            <?= renderImg('cta-6.png', "icons") ?>
            <div class="fs-24 fw-700 lh-3 pt-5">No Deposits<br> Required</div>
        </div>
        <div class="cta-card">
            <?= renderImg('cta-1.png', "icons") ?>
            <div class="fs-24 fw-700 lh-3 pt-5">Award Winning Truck<br> Finance Brokerage</div>
        </div>
        <div class="cta-card">
            <?= renderImg('cta-7.png', "icons") ?>
            <div class="fs-24 fw-700 lh-3 pt-5">Market-Leading<br> Interest Rates</div>
        </div>
        <div class="cta-card">
            <?= renderImg('cta-8.png', "icons") ?>
            <div class="fs-24 fw-700 lh-3 pt-5">Expert Knowledge<br> on Trucks</div>
        </div>
    </div>
    <div class="container">
        <div class="fs-18">*Conditions apply</div>
    </div>
</section>

<section class="form">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <form id="slider-form" class="bg-secondary" action="./src/form" method="POST">
                    <div class="multi-step-form">
                        <div class="multi-step-form-slider" id="multi-step-form-slider">
                            <div class="tab">
                                <div class="fs-24 fw-600 faded">Enquire Here</div>
                                <div class="fs-64 lh-1 fw-700 pt-2">Go with the right<br> Truck Finance</div>
                                <div class="fs-24 fw-600 pt-6">
                                    For pre-approval on Truck or Heavy Equipment Finance up to $500K, please complete this simple form. It’s easy and will give you an answer within seconds!
                                </div>
                            </div>
                            <div class="tab">
                                <div class="step fs-36 fw-700 pb-5 line-height-1">A few quick questions...</div>
                                <div class="row gy-5">
                                    <div class="col-12 col-xl-8">
                                        <label>ABN Number*</label>
                                        <input type="text" placeholder="Input 'new' if start up business" class="form-control required" name="abn_number">
                                    </div>
                                    <div class="col-12">
                                        <label>Do you own or are you paying off any equipment loans? *</label>
                                        <div class="form-group ps-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="paying_equipment_loans" id="paying_equipment_loans1">
                                                <label class="form-check-label" for="paying_equipment_loans1">
                                                    <span class="radio-button-circle"></span>Own
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="paying_equipment_loans" id="paying_equipment_loans2" checked>
                                                <label class="form-check-label" for="paying_equipment_loans2">
                                                    <span class="radio-button-circle"></span>Paying Off
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="paying_equipment_loans" id="paying_equipment_loans3" checked>
                                                <label class="form-check-label" for="paying_equipment_loans3">
                                                    <span class="radio-button-circle"></span>None
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label>Do you own a car or are you paying off any car loans? *</label>
                                        <div class="form-group ps-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="paying_car_loans" id="paying_car_loans1">
                                                <label class="form-check-label" for="paying_car_loans1">
                                                    <span class="radio-button-circle"></span><span class="radio-button-circle"></span>Own
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="paying_car_loans" id="paying_car_loans2" checked>
                                                <label class="form-check-label" for="paying_car_loans2">
                                                    <span class="radio-button-circle"></span><span class="radio-button-circle"></span>Paying Off
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="paying_car_loans" id="paying_car_loans3" checked>
                                                <label class="form-check-label" for="paying_car_loans3">
                                                    <span class="radio-button-circle"></span><span class="radio-button-circle"></span>None
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label>Do you own a home or are you paying off a home loan? *</label>
                                        <div class="form-group ps-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="paying_home_loans" id="paying_home_loans1">
                                                <label class="form-check-label" for="paying_home_loans1">
                                                    <span class="radio-button-circle"></span>Own
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="paying_home_loans" id="paying_home_loans2" checked>
                                                <label class="form-check-label" for="paying_home_loans2">
                                                    <span class="radio-button-circle"></span>Paying Off
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="paying_home_loans" id="paying_home_loans3" checked>
                                                <label class="form-check-label" for="paying_home_loans3">
                                                    <span class="radio-button-circle"></span>None
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab">
                                <div class="step fs-36 fw-700 pb-5 line-height-1">Your details...</div>
                                <div class="row gy-5">
                                    <div class="col-12">
                                        <label>Full Name*</label>
                                        <input type="text" placeholder="e.g. John Smith" class="form-control required" name="name">
                                    </div>
                                    <div class="col-12">
                                        <label>Email Address*</label>
                                        <input type="email" placeholder="e.g. johnsmith@gmail.com" class="form-control required" name="email">
                                    </div>
                                    <div class="col-12">
                                        <label>Finance Amount Required*</label>
                                        <input type="number" placeholder="e.g. $225,000" class="form-control required" name="finance_amount_required">
                                    </div>
                                    <div class="col-12">
                                        <label>Description of Equipment*</label>
                                        <input type="text" placeholder="e.g. 3 Crane Trucks" class="form-control required" name="description_of_equipment">
                                    </div>
                                </div>
                            </div>
                            <div class="tab d-flex align-items-center">
                                <div>
                                    <div class="step fs-36 fw-700 pb-5 line-height-1">Nearly there! Just verify your request</div>
                                    <div class="row">
                                        <div class="col-md-auto">
                                            <label>Please enter any two digits*</label>
                                            <input type="number" placeholder="e.g. 23" class="form-control required" name="verification">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="buttons d-flex align-items-center justify-content-md-start justify-content-center flex-wrap mt-5">
                            <button type="button" id="nextBtn" class="btn d-inline-flex rounded-pill btn-white rounded-0 text-primary px-md-5" onclick="nextPrev(1)">Next</button>
                            <span class="px-3 py-md-0 py-2 text-tertiary" id="prevBtn" onclick="nextPrev(-1)">Go Back</span>
                        </div>
                    </div>
                </form>
                <div class="slick-slider-dots pt-3"></div>
            </div>
            <div class="col-12 col-lg">
                <ul class="form-list">
                    <li>Same Day Truck Finance</li>
                    <li>No Doc and Low doc funding for up to $500K</li>
                    <li>Competitive interest rates</li>
                    <li>Fast approval within 24 hours</li>
                    <li>3-7 years loan terms</li>
                    <li>Borrow up to 100% without any down<br> payment</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="about-us" id="about-us">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="fs-96 fw-700 lh-1 pb-6">Who we are.</div>
                <a href="tel:<?= $phone_number ?>" class="btn d-inline-flex rounded-pill btn-secondary rounded-0 text-white px-md-5 fw-500">
                    Enquire Now
                </a>
            </div>
            <div class="col-lg-6 fs-18">
                <p>At Odin, we value the relationships we form with our clients and pride ourselves on ensuring each client’s experience is efficient and effective. We know how to strategically get the best result out of every bank and lender across Australia to grow your transport business the right way.</p>
                <p>Odin’s goal is to optimise every client’s financial position, and through utilising our panel of over 50 market-leading lenders, we can guarantee a finance option with exceptional turnaround times and great value.</p>
                <p>Our passion for finance, exceptional service and industry knowledge are all factors that have led to substantial growth in the assets we fund. Odin has the capacity to effectively deliver finance options for; motor vehicles, fit outs, agricultural equipment, earthmoving equipment, medical equipment, solar and working capital for businesses. Leave the finance to us–focus on running your business with a huge load off your shoulders.</p>
            </div>
        </div>
    </div>
</section>

<section class="truck-finance" id="truck-finance">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="fs-96 fw-700 lh-1">
                    We<br> finance<br> all types<br> of trucks<br>...
                </div>
            </div>
            <div class="col">
                <div class="row gx-4 gy-5 types-row">
                    <?php
                    $truck_types = ["Car Carrier", "Concrete Truck", "Crane Truck", "Livestock Truck", "Refrigerated Truck", "Tilt Tray Truck", "Tip Truck", "Water Truck", "Pantech Truck", "Prime Mover"];

                    foreach ($truck_types as $key => $type) { ?>
                        <div class="col-lg-3">
                            <div class="truck-card">
                                <?= renderImg("truck-finance-" . ($key + 1) . ".jpg", "lib", "w-100") ?>
                                <div class="caption"><?= $type ?></div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="loans" id="loans">
    <div class="container">
        <div class="row justify-content-end pb-3">
            <div class="col-xl-9">
                <div class="fs-96 lh-1 fw-700 text-end">& can help you with multiple types of loans!</div>
            </div>
        </div>
        <div class="row pt-9">
            <?php
            $loan_types_1 = ["Boom / Scissor Lifts", "Construction / Mining Equipment", "Luxury Vehicles", "Agriculture", "Healthcare"];

            foreach ($loan_types_1 as $key => $type) { ?>
                <div class="col-lg-2">
                    <div class="truck-card">
                        <?= renderImg("loan_type_1_" . ($key + 1) . ".jpg", "lib", "w-100") ?>
                        <div class="caption"><?= $type ?></div>
                    </div>
                </div>
            <?php } ?>
        </div>

        <div class="row justify-content-end pt-5">
            <?php
            $loan_types_1 = ["Transport / Logistics", "Manufacturing", "Business Finance", "Commercial Vehicles"];

            foreach ($loan_types_1 as $key => $type) { ?>
                <div class="col-lg-2">
                    <div class="truck-card">
                        <?= renderImg("loan_type_2_" . ($key + 1) . ".jpg", "lib", "w-100") ?>
                        <div class="caption"><?= $type ?></div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<section class="why-us" id="why-us">
    <?= renderImg("lightening-why-us.png", "background", "lightening") ?>
    <?= renderImg("why-us.png", "lib", "truck") ?>
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-lg-6">
                <div class="fs-96 fw-700 pb-4 line-height-1">So why ODIN?</div>
                <div class="fs-18 pb-4">If you're looking for fast and expert truck loan financing, you've come to the right place. At Odin Finance, we understand the unique needs of truck owners, and our team is committed to getting you the best financing possible.</div>
                <div class="fs-18">In the business for 20+ years, we’re specialists in Truck Financing, and we offer tailored products to match your customer profile. Whether you are looking for funding for personal or business, Odin Truck Finance can get the best loan for you!</div>
                <div class="px-4 py-5">
                    <div class="row align-items-center py-3">
                        <div class="col-auto"><?= renderImg("why-us-1.png", "icons") ?></div>
                        <div class="col fs-24 fw-600">We specialise in truck finance and can present our clients with funding solutions every time</div>
                    </div>
                    <div class="row align-items-center py-3">
                        <div class="col-auto"><?= renderImg("why-us-2.png", "icons") ?></div>
                        <div class="col fs-24 fw-600">No Doc and Low Doc funding options to suit your needs</div>
                    </div>
                    <div class="row align-items-center py-3">
                        <div class="col-auto"><?= renderImg("why-us-3.png", "icons") ?></div>
                        <div class="col fs-24 fw-600">Easy online Pre-Approval process provides an answer within seconds for up to $500K</div>
                    </div>
                    <div class="row align-items-center py-3">
                        <div class="col-auto"><?= renderImg("why-us-4.png", "icons") ?></div>
                        <div class="col fs-24 fw-600">All of our finance approvals are obligation-free</div>
                    </div>
                    <div class="row align-items-center py-3">
                        <div class="col-auto"><?= renderImg("why-us-5.png", "icons") ?></div>
                        <div class="col fs-24 fw-600">We deal with transport operators Australia-wide</div>
                    </div>
                </div>
                <a href="tel:<?= $phone_number ?>" class="btn d-inline-flex rounded-pill btn-secondary rounded-0 text-white px-md-5 fw-500">
                    Enquire Now
                </a>
            </div>
        </div>
    </div>
</section>

<section class="how-does-it-work" id="how-does-it-work">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-3">
                <div class="fs-96 lh-1 fw-700 pb-5">How does it work?</div>
                <div class="fs-18">
                    Applying for a truck loan is easy, but there are a few things you need to know before you get started. Odin Finance does Truck Finance in 4 easy steps.
                </div>
            </div>
            <div class="col-lg-8">
                <div class="loans-slider-wrapper">
                    <ul class="loans-slider-nav">
                        <li class="active">
                            <div class="content">
                                <?= renderImg("working-1.png", "icons") ?>
                                <div>
                                    <div class="heading fs-24 fw-700 lh-1">Apply for pre-approval</div>
                                    <div class="fs-18 pt-2">Online or talk with one of our finance experts.</div>
                                </div>
                            </div>
                            <a href="javascript:void(0)" class="loan-slider-btn nextBtn" slideTarget="1">
                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle r="15" transform="matrix(1 0 0 -1 15 15)" fill="white" />
                                    <path d="M11 23L20 15L11 7" stroke="#F9A51A" stroke-width="2" />
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="loan-slider-btn prevBtn" slideTarget="0">
                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle r="15" transform="matrix(-1 0 0 1 15 15)" fill="white" />
                                    <path d="M19 7L10 15L19 23" stroke="#F9A51A" stroke-width="2" />
                                </svg>
                            </a>
                            <div class="content">
                                <?= renderImg("working-2.png", "icons") ?>
                                <div>
                                    <div class="heading fs-24 fw-700 lh-1">Assessment</div>
                                    <div class="fs-18 pt-2">Whether low doc, or no doc the broker will support this process.</div>
                                </div>
                            </div>
                            <a href="javascript:void(0)" class="loan-slider-btn nextBtn" slideTarget="2">
                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle r="15" transform="matrix(1 0 0 -1 15 15)" fill="white" />
                                    <path d="M11 23L20 15L11 7" stroke="#F9A51A" stroke-width="2" />
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="loan-slider-btn prevBtn" slideTarget="1">
                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle r="15" transform="matrix(-1 0 0 1 15 15)" fill="white" />
                                    <path d="M19 7L10 15L19 23" stroke="#F9A51A" stroke-width="2" />
                                </svg>
                            </a>
                            <div class="content">
                                <?= renderImg("working-3.png", "icons") ?>
                                <div>
                                    <div class="heading fs-24 fw-700 lh-1">Conditional approval in 24 to 48 hours</div>
                                    <div class="fs-18 pt-2">Broker to explain package and formal approval.</div>
                                </div>
                            </div>
                            <a href="javascript:void(0)" class="loan-slider-btn nextBtn" slideTarget="3">
                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle r="15" transform="matrix(1 0 0 -1 15 15)" fill="white" />
                                    <path d="M11 23L20 15L11 7" stroke="#F9A51A" stroke-width="2" />
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="loan-slider-btn prevBtn" slideTarget="2">
                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle r="15" transform="matrix(-1 0 0 1 15 15)" fill="white" />
                                    <path d="M19 7L10 15L19 23" stroke="#F9A51A" stroke-width="2" />
                                </svg>
                            </a>
                            <div class="content">
                                <?= renderImg("working-4.png", "icons") ?>
                                <div>
                                    <div class="heading fs-24 fw-700 lh-1">Funding goes through in 24 hours!</div>
                                    <div class="fs-18 pt-2">The truck supplier paid. Take delivery of a truck!</div>
                                </div>
                            </div>
                        </li>
                        <li class="slide"></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/footer.php'; ?>