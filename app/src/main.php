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
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Truck Finance</a></li>
                                <li><a href="#">Loans</a></li>
                                <li><a href="#">Why ODIN?</a></li>
                                <li><a href="#">How Does It Work?</a></li>
                                <li><a href="#">Things to know</a></li>
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
                <div class="fs-128 text-white fw-400 fw-700 lh-1 pb-4">Need a great deal on Truck Finance?</div>
                <div class="pt-3 pb-6 text-white fs-24">Go with a company that has been financing trucks for over 20 years</div>
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
        <div class="text-white fs-18">*Conditions apply</div>
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
                                                    Own
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="paying_equipment_loans" id="paying_equipment_loans2" checked>
                                                <label class="form-check-label" for="paying_equipment_loans2">
                                                    Paying Off
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="paying_equipment_loans" id="paying_equipment_loans3" checked>
                                                <label class="form-check-label" for="paying_equipment_loans3">
                                                    None
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
                                                    Own
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="paying_car_loans" id="paying_car_loans2" checked>
                                                <label class="form-check-label" for="paying_car_loans2">
                                                    Paying Off
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="paying_car_loans" id="paying_car_loans3" checked>
                                                <label class="form-check-label" for="paying_car_loans3">
                                                    None
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
                                                    Own
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="paying_home_loans" id="paying_home_loans2" checked>
                                                <label class="form-check-label" for="paying_home_loans2">
                                                    Paying Off
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="paying_home_loans" id="paying_home_loans3" checked>
                                                <label class="form-check-label" for="paying_home_loans3">
                                                    None
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

<?php include __DIR__ . '/footer.php'; ?>