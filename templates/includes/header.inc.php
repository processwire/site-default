<?php namespace ProcessWire; ?>
<link type="text/css" rel="stylesheet" href="<?= $rootUrl ?>assets/css/header-nav.css" />
<style id="header-nav-inline-css">
    header {

        /* background-color: #2874f0; */

        padding: 0 5%;

        box-shadow: 0 10px 20px rgb(0, 0, 0/5%), 0 6px 6px rgb(0, 0, 0/6%);

    }



    header nav {

        display: flex;

        flex-direction: row;

        flex-wrap: nowrap;

        justify-content: space-between;

    }



    .logo {

        flex: 4;

        display: flex;

        align-items: center;

    }



    .logo a {

        text-decoration: none;

        font-size: 26px;

        color: #fff;

        text-transform: uppercase;

        font-weight: 800;

    }



    .bartoggle,

    #menubrop {

        display: none;

    }



    .NavMenu {

        /* flex: 14; */

        list-style: none;

        position: relative;

        /* display: flex; */

        justify-content: end;

        z-index: 999999;

        margin-top: 20px;

    }



    .NavMenu li {

        display: inline-block;

    }



    .NavMenu li input {

        display: none;

    }



    .NavMenu li a {

        display: block;

        padding: 5px 5px;

        font-size: 14px;

        text-decoration: none;

        text-transform: uppercase;

        color: #7e878d;

        text-transform: uppercase;

        position: relative;

    }



    .NavMenu li a label {

        cursor: pointer;

        appearance: none;

        display: block;

        position: relative;

        font-weight: normal;

    }



    /* .NavMenu li a label::after {

            content: "\f078";

            font-family: "FontAwesome";

            position: absolute;

            right: 0;

            top: 0;

            font-size: 20px;

         } */



    .NavMenu>li>a label::after {

        right: -15px;

        top: -3px;

    }



    .NavMenu li ul {

        position: absolute;

        display: flex;

        flex-direction: column;

        background-color: #fff;

        min-width: 200px;

        border-bottom: 2px solid #f33434;

        top: 100%;

        box-shadow: 0 3px 5px rgb(0 0 0/20%);

        transition: all 0.5s;

        -webkit-transition: all 0.5s;

        -moz-transition: all 0.5s;

        -ms-transition: all 0.5s;

        -o-transition: all 0.5s;

        transform: translateY(10px);

        -webkit-transform: translateY(10px);

        -moz-transform: translateY(10px);

        -ms-transform: translateY(10px);

        -o-transform: translateY(10px);

        visibility: hidden;

        opacity: 0;

        padding: 0;

    }



    .NavMenu li ul li {

        position: relative;

    }



    .NavMenu li ul li a {

        color: #7e878d;

        padding: 8px 10px;

        display: block;

        border-left: 2px solid transparent;

        border-bottom: 1px solid rgba(0, 0, 0, 0.1);

        transition: all 0.5s;

        -webkit-transition: all 0.5s;

        -moz-transition: all 0.5s;

        -ms-transition: all 0.5s;

        -o-transition: all 0.5s;

        font-size: 13px;

    }



    .NavMenu li ul li ul {

        position: absolute;

        left: 100%;

        top: 0;

    }

    .logo a img {

        max-width: 100%;

        width: 260px;

        transition: all .5s ease;

        -webkit-transition: all .5s ease;

        -moz-transition: all .5s ease;

        -o-transition: all .5s ease;

        margin: 20px auto;

    }

    .navbar-fixed-top {

        background: white;

    }

    @media only screen and (max-width: 1200px) {

        .NavMenu li a {

            display: block;

            padding: 4px 4px;

            font-size: 12px;

            text-decoration: none;

            text-transform: uppercase;

            color: #7e878d;

            text-transform: uppercase;

            position: relative;

        }

        .logo a img {

            max-width: 100%;

            width: 220px;

        }

    }

    @media (min-width: 992px) {

        .NavMenu li ul li a:hover {

            /* border-left: 2px solid #2874f0; */

        }



        .NavMenu li:hover>ul,

        .NavMenu li ul li:hover>ul {

            visibility: visible;

            opacity: 1;

            transform: translateY(0);

            -webkit-transform: translateY(0);

            -moz-transform: translateY(0);

            -ms-transform: translateY(0);

            -o-transform: translateY(0);

        }

    }



    .mobile-drawer-header {
        display: none !important;
    }

    .menu-backdrop {
        display: none;
    }

    @media (max-width: 991.98px) {

        header {
            padding: 6px 5%;
        }

        .logo {
            flex: 6;
        }

        .bartoggle {
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 28px;
            color: #1e282c;
            background-color: #f4f6f8;
            border: 1px solid #dcdcdc;
            border-radius: 4px;
            width: 44px;
            height: 40px;
            padding: 0;
            cursor: pointer;
            user-select: none;
            transition: background 0.2s;
        }

        .bartoggle:hover {
            background-color: #e9ecef;
        }

        .menu-backdrop {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            background: rgba(0, 0, 0, 0.5);
            z-index: 9999;
        }

        input:checked~.menu-backdrop {
            display: block;
        }

        .mobile-drawer-header {
            display: flex !important;
            justify-content: space-between;
            align-items: center;
            padding: 16px 20px;
            background: #141c22;
            border-bottom: 1px solid rgba(255, 255, 255, 0.12);
            color: #ffffff;
            font-size: 15px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .mobile-drawer-header .drawer-close {
            font-size: 26px;
            line-height: 1;
            cursor: pointer;
            color: #ffffff;
            margin: 0;
            padding: 0 4px;
            transition: color 0.2s;
        }

        .mobile-drawer-header .drawer-close:hover {
            color: #3ca4dc;
        }

        .NavMenu {
            width: 310px !important;
            max-width: 85vw !important;
            position: fixed !important;
            flex-direction: column !important;
            background-color: #1e282c !important;
            left: 0 !important;
            top: 0 !important;
            height: 100vh !important;
            z-index: 10000 !important;
            padding: 0 0 60px 0 !important;
            justify-content: flex-start !important;
            overflow-y: auto !important;
            -webkit-overflow-scrolling: touch !important;
            box-shadow: 4px 0 25px rgba(0, 0, 0, 0.35) !important;
            transition: transform 0.35s cubic-bezier(0.4, 0, 0.2, 1) !important;
            transform: translateX(-100%) !important;
            display: block !important;
            margin: 0 !important;
        }

        input:checked+.NavMenu,
        input:checked+*+.NavMenu,
        input:checked~.NavMenu {
            transform: translateX(0) !important;
        }

        .NavMenu li {
            display: block !important;
            width: 100% !important;
            margin: 0 !important;
            padding: 0 !important;
            float: none !important;
            clear: both !important;
            position: relative !important;
            box-sizing: border-box !important;
            border-bottom: 1px solid rgba(255, 255, 255, 0.08) !important;
        }

        .NavMenu li a {
            display: flex !important;
            align-items: center !important;
            justify-content: space-between !important;
            padding: 13px 20px !important;
            color: #ffffff !important;
            font-size: 13.5px !important;
            font-weight: 600 !important;
            letter-spacing: 0.3px !important;
            text-decoration: none !important;
            border-bottom: none !important;
            transition: background 0.2s, color 0.2s !important;
        }

        .NavMenu li a:hover,
        .NavMenu li a:focus,
        .NavMenu li.menu-open>a {
            background-color: rgba(255, 255, 255, 0.08) !important;
            color: #3ca4dc !important;
        }

        .NavMenu li a label {
            display: flex !important;
            align-items: center !important;
            justify-content: space-between !important;
            width: 100% !important;
            margin: 0 !important;
            cursor: pointer !important;
            color: inherit !important;
            font-weight: inherit !important;
            font-size: inherit !important;
        }

        .NavMenu li a label::after {
            content: "\f078" !important;
            font-family: "FontAwesome" !important;
            position: static !important;
            font-size: 11px !important;
            margin-left: 10px !important;
            transition: transform 0.3s ease !important;
            color: #3ca4dc !important;
        }

        .NavMenu li:has(> input:checked)>a label::after,
        .NavMenu li.menu-open>a label::after,
        .NavMenu li input:checked~a label::after {
            transform: rotate(180deg) !important;
            color: #f33434 !important;
        }

        .NavMenu li ul {
            position: static !important;
            display: none !important;
            background-color: #141c22 !important;
            box-shadow: inset 0 2px 6px rgba(0, 0, 0, 0.3) !important;
            border-bottom: none !important;
            padding: 4px 0 !important;
            margin: 0 !important;
            width: 100% !important;
            visibility: visible !important;
            opacity: 1 !important;
            transform: none !important;
        }

        .NavMenu li input:checked+ul,
        .NavMenu li.menu-open>ul,
        .NavMenu li ul li input:checked+ul,
        .NavMenu li ul li.menu-open>ul {
            display: block !important;
        }

        .NavMenu li ul li {
            border-bottom: 1px solid rgba(255, 255, 255, 0.04) !important;
        }

        .NavMenu li ul li a {
            padding: 10px 20px 10px 30px !important;
            font-size: 12.5px !important;
            font-weight: 400 !important;
            color: #d1d8e0 !important;
        }

        .NavMenu li ul li a:hover {
            color: #ffffff !important;
            background-color: rgba(255, 255, 255, 0.06) !important;
        }

        .NavMenu li ul li ul {
            background-color: #0c1216 !important;
            margin: 0 !important;
        }

        .NavMenu li ul li ul li a {
            padding: 8px 20px 8px 45px !important;
            font-size: 12px !important;
            color: #a4b0be !important;
        }

    }

    .logo-img {
        width: 120px !important;
        max-width: 120px !important;
        height: auto !important;
        display: inline-block !important;
    }
</style>
<!-- MENU MOBILE-->
<div class="wrapper-mobile-nav">
    <div class="header-topbar">
        <div class="topbar-search search-mobile">
            <form class="search-form">
                <div class="input-icon"><input class="form-control" placeholder="Search here..." type="text" /></div>
            </form>
        </div>
    </div>
</div>

<!-- WRAPPER CONTENT-->
<div class="wrapper-content">
    <div class="header-topbar border-bottom header-dental-care">
        <div class="container">
            <div class="topbar-left ticker-news" style="overflow: hidden; position: relative; height: 24px;">
                <ul style="position: absolute; margin: 0px; padding: 0px; top: 0px;">
                    <li style="margin: 0px; padding: 0px; height: 24px;">
                        <a class="ticker-inner" href="#"><span class="ticker-color">Dental Colleges </span> in Pune</a>
                    </li>
                    <li style="margin: 0px; padding: 0px; height: 24px;">
                        <a class="ticker-inner" href="#">Welcome to <span class="ticker-color">D Y Patil</span> Dental
                            School</a>
                    </li>
                    <li style="margin: 0px; padding: 0px; height: 24px;"><a class="ticker-inner" href="#">Get Free
                            Dental Check-up &amp; X-ray.</a></li>
                </ul>
            </div>
            <div class="topbar-right ticker-info">
                <ul class="list-inline list-unstyled">
                    <li>
                        <div class="information-toppar ticker-inner">
                            <p class="text">Mon - Sat at <span class="info-inner"> 9:00AM to 4:00PM </span></p>
                        </div>
                    </li>
                    <li>
                        <div class="information-toppar ticker-inner">
                            <p class="text">Admission Enquiry: <span class="info-inner"> <?= htmlspecialchars($settings->setting_admission_phone ?: "8237901176") ?> </span></p>
                        </div>
                    </li>
                    <li>
                        <div class="information-toppar ticker-inner">
                            <p class="text"><?= htmlspecialchars($settings->setting_phone ?: "020 - 35037848") ?></p>
                        </div>
                    </li>
                    <li>
                        <div class="information-toppar ticker-inner">
                            <p class="text"><a href="<?= $rootUrl ?>contact-us/">Contact Us</a></p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <header id="mNavbar">
        <div class="row">
            <div class="col-sm-12 text-center">
                <div class="mb-4"><a href="<?= $rootUrl ?>"> <img src="<?= $rootUrl ?>assets/images/logo/ADYPU-logo.jpeg" class="logo-img"
                            style="width: 120px; max-width: 120px; height: auto;" alt="ADYPU Logo"></a></div>
                <div class=""><a href="<?= $rootUrl ?>">
                        <h4>D Y PATIL DENTAL SCHOOL</h4>
                    </a></div>
                <h5>Affiliated to MUHS, Nashik and recognised by DCI</h5>
            </div>
        </div>
        <nav class="">
            <label for="menubrop" class="bartoggle">≡</label>
            <input type="checkbox" id="menubrop" />
            <label for="menubrop" class="menu-backdrop"></label>
            <ul class="NavMenu">
                <li class="mobile-drawer-header">
                    <span class="drawer-title">Navigation Menu</span>
                    <label for="menubrop" class="drawer-close">&times;</label>
                </li>

                <li><a href="<?= $rootUrl ?>">Home</a></li>

                <li>

                    <a href="javascript:void(0)"><label for="droplist1" class="toggle">About Us</label></a>

                    <input type="checkbox" id="droplist1" />

                    <!-- =============FirstDropDown================== -->

                    <ul>

                        <li>

                            <a class="link-page" href="<?= $rootUrl ?>about-us-philosophy/"><span class="text">Our
                                    Philosophy</span></a>

                        </li>

                        <li>

                            <a class="link-page" href="<?= $rootUrl ?>about-us-our-logo/"><span class="text">Our Logo</span></a>

                        </li>

                        <li>

                            <a class="link-page" href="<?= $rootUrl ?>about-us-d-y-patil-group/"><span class="text">Our
                                    Foundation</span></a>

                        </li>

                        <li>

                            <a class="link-page" href="<?= $rootUrl ?>about-us-message-from-chairman/"><span class="text">Message
                                    from Chairman</span></a>

                        </li>

                        <li>

                            <a class="link-page" href="<?= $rootUrl ?>about-us-message-from-principal/"><span class="text">Message
                                    from Dean</span></a>

                        </li>

                        <li>

                            <a class="link-page" href="<?= $rootUrl ?>our-vision-and-mission/"><span class="text">Our Vision and
                                    Mission</span></a>

                        </li>

                        <li>

                            <a class="link-page" href="<?= $rootUrl ?>awards/"><span class="text">Awards and
                                    Achievements</span></a>

                        </li>

                        <li>

                            <a class="link-page" href="<?= $rootUrl ?>institutional_committees/"><span class="text">Institutional
                                    Committees</span></a>

                        </li>

                        <li>

                            <a class="link-page" href="http://dypds.densoftinfotech.in/" target="_blank"><span
                                    class="text">Hospital Management Information Software</span></a>

                        </li>

                        <li>

                            <a class="link-page" href="<?= $rootUrl ?>institutional-distinctiveness/"><span
                                    class="text">Institutional Distinctiveness</span></a>

                        </li>

                        <li>

                            <a class="link-page" href="<?= $rootUrl ?>best-practices/"><span class="text">Best Practices</span></a>

                        </li>

                    </ul>

                </li>

                <li>

                    <a href="javascript:void(0)"><label for="droplist2" class="toggle">Admissions</label></a>

                    <input type="checkbox" id="droplist2" />

                    <!-- =============FirstDropDown================== -->

                    <ul>

                        <li>

                            <a class="link-page" href="<?= $rootUrl ?>admissions-dypds/"><span class="text">Admissions @
                                    DYPDS</span></a>

                        </li>

                        <li>

                            <a class="link-page" href="<?= $rootUrl ?>assets/downloads/Fees-for-First-year-BDS.pdf"
                                target="_blank"><span class="text">Admissions @DYPDS- BDS</span></a>

                        </li>

                        <li>

                            <a class="link-page" href="javascript:void(0)"><span class="text">Admissions @DYPDS-
                                    MDS</span></a>

                        </li>

                        <li>

                            <a class="link-page" href="javascript:void(0)"><span class="text">"FELLOWSHIP IN ROTARY
                                    ENDODONTICS" recognized by MUHS</span></a>

                        </li>

                        <li>

                            <a class="link-page"
                                href="<?= $rootUrl ?>fee-proposal-submitted-to-fra-for-the-academic-year-2023-24/"><span
                                    class="text">Fee proposal submitted to FRA for the Academic Year 2023-24</span></a>

                        </li>

                    </ul>

                </li>

                <li>

                    <a href="javascript:void(0)"><label for="droplist3" class="toggle">Student Section</label></a>

                    <input type="checkbox" id="droplist3" />

                    <!-- =============FirstDropDown================== -->

                    <ul>

                        <!-- <li><a class="link-page" href="<?= $rootUrl ?>assets/downloads/timetable-2022-23.pdf" target="_blank"><span class="text">Timetable for 2022-23</span></a></li> -->

                        <li>

                            <a class="link-page" href="<?= $rootUrl ?>admissions-anti-ragging/"><span
                                    class="text">Anti-Ragging</span></a>

                        </li>

                        <li>

                            <a class="link-page" href="institutional-committees-pdf/Student Council Committee.pdf"
                                target="_blank"><span class="text">Student Council</span></a>

                        </li>

                        <li>

                            <a class="link-page" href="<?= $rootUrl ?>mentorship-programme/"><span class="text">Mentorship
                                    Programme</span></a>

                        </li>

                        <li>

                            <a class="link-page" href="students-club"><span class="text">STUDENTS CLUB</span></a>

                        </li>

                        <li>

                            <a class="link-page" href="<?= $rootUrl ?>alumni-association/"><span class="text">Alumni
                                    Association</span></a>

                        </li>

                        <li>

                            <a class="link-page" href="<?= $rootUrl ?>assets/downloads/Code-of-Conduct.pdf" target="_blank"><span
                                    class="text">Code of Conduct</span></a>

                        </li>

                        <li>

                            <a class="link-page" href="<?= $rootUrl ?>assets/downloads/List-of-Holidays.pdf" target="_blank"><span
                                    class="text">List of Holidays</span></a>

                        </li>

                        <li>

                            <a class="link-page" href="<?= $rootUrl ?>assets/downloads/Capability Enhancement Scheme.pdf"
                                target="_blank"><span class="text">Capability Enhancement scheme</span></a>

                        </li>

                        <li>

                            <a class="link-page" href="<?= $rootUrl ?>assets/downloads/Grievance committee.pdf" target="_blank"><span
                                    class="text">Student Grievance Redressal Committee </span></a>

                        </li>

                        <li>

                            <a class="link-page" href="<?= $rootUrl ?>assets/downloads/Exam Grievance.pdf" target="_blank"><span
                                    class="text">Exam Grievance Redressal Committee</span></a>

                        </li>

                    </ul>

                </li>

                <li>

                    <a href="javascript:void(0)"><label for="droplist4" class="toggle">Academics</label></a>

                    <input type="checkbox" id="droplist4" />

                    <!-- =============FirstDropDown================== -->

                    <ul>

                        <li>

                            <a class="link-page" href="<?= $rootUrl ?>assets/downloads/timetable-2024-25.pdf" target="_blank"><span
                                    class="text">Timetable - BDS</span></a>

                        </li>

                        <li>

                            <a class="link-page" href="<?= $rootUrl ?>assets/downloads/PG Academic Calendar.pdf" target="_blank"><span
                                    class="text">Timetable- MDS </span></a>

                        </li>

                        <li>

                            <a class="link-page" href="<?= $rootUrl ?>assets/downloads/Academic-Calender.pdf" target="_blank"><span
                                    class="text">Academic Calender </span></a>

                        </li>

                        <li>

                            <a class="link-page" href="<?= $rootUrl ?>assets/downloads/syallbus.pdf" target="_blank"><span
                                    class="text">Syllabus for BDS Students</span></a>

                        </li>

                        <li>

                            <a class="link-page" href="<?= $rootUrl ?>syllabus-for-mds/"><span class="text">Syllabus For
                                    MDS</span></a>

                        </li>

                        <li>

                            <a class="link-page" href="<?= $rootUrl ?>assets/downloads/Curriculum-Committee.pdf" target="_blank"><span
                                    class="text">Curriculum Committee</span></a>

                        </li>

                        <li>

                            <a class="link-page" href="<?= $rootUrl ?>assets/downloads/Learning Outcomes and Graduate Attributes.pdf"
                                target="_blank"><span class="text">Learning outcomes and Graduate Attributes</span></a>

                        </li>

                        <li>

                            <a class="link-page"
                                href="<?= $rootUrl ?>assets/downloads/Course Outcomes for all courses and Programme Outcome.pdf"
                                target="_blank"><span class="text"> COURSE OUTCOMES AND PROGRAMME OUTCOMES </span></a>

                        </li>

                        <li>

                            <a class="link-page" href="<?= $rootUrl ?>e-courses-e-content/"><span class="text">E-Courses /
                                    E-Content</span></a>

                        </li>

                        <li>

                            <a class="link-page" href="<?= $rootUrl ?>study-material/"><span class="text">STUDY MATERIAL</span></a>

                        </li>

                        <li>

                            <a class="link-page" href="https://iguru.guru/" target="_blank"><span
                                    class="text">LMS</span></a>

                        </li>

                    </ul>

                </li>

                <li>

                    <a href="javascript:void(0)"><label for="droplist5" class="toggle">DEPARTMENTS</label></a>

                    <input type="checkbox" id="droplist5" />

                    <!-- =============FirstDropDown================== -->

                    <ul>

                        <li>

                            <a class="link-page" href="<?= $rootUrl ?>department-of-prosthodontics/"><span
                                    class="text">Prosthodontics and Crown and Bridge</span></a>

                        </li>

                        <li>

                            <a class="link-page" href="<?= $rootUrl ?>department-conservative-dentistry-endodontics/"><span
                                    class="text">Conservative Dentistry and Endodontics</span></a>

                        </li>

                        <li>

                            <a class="link-page" href="<?= $rootUrl ?>department-periodontology/"><span
                                    class="text">Periodontology</span></a>

                        </li>

                        <li>

                            <a class="link-page" href="<?= $rootUrl ?>department-orthodontics-dentofacial-orthopedics/"><span
                                    class="text">Orthodontics and Dentofacial Orthopedics</span></a>

                        </li>

                        <li>

                            <a class="link-page" href="<?= $rootUrl ?>department-of-oral-and-maxillofacial-surgery/"><span
                                    class="text">Oral and Maxillofacial Surgery</span></a>

                        </li>

                        <li>

                            <a class="link-page" href="<?= $rootUrl ?>department-oral-maxillofacial-pathology/"><span
                                    class="text">Oral and Maxillofacial Pathology and Oral Microbiology</span></a>

                        </li>

                        <li>

                            <a class="link-page" href="<?= $rootUrl ?>department-oral-medicine-and-radiology/"><span
                                    class="text">Oral Medicine and Radiology</span></a>

                        </li>

                        <li>

                            <a class="link-page" href="<?= $rootUrl ?>department-pediatric-dentistry/"><span class="text">Pediatric
                                    and Preventive Dentistry</span></a>

                        </li>

                        <li>

                            <a class="link-page" href="<?= $rootUrl ?>department-public-health-dentistry/"><span
                                    class="text">Public
                                    Health Dentistry</span></a>

                        </li>

                        <li>

                            <a class="link-page" href="<?= $rootUrl ?>department-medical-staff/"><span class="text">Medical
                                    Departments</span></a>

                        </li>

                    </ul>

                </li>

                <li>

                    <a href="javascript:void(0)"><label for="droplist6" class="toggle">GALLERY</label></a>

                    <input type="checkbox" id="droplist6" />

                    <!-- =============FirstDropDown================== -->

                    <ul>

                        <li>

                            <a class="link-page" href="<?= $rootUrl ?>photo-gallery-events-by-scientific-committee-2026/"><span
                                    class="text">Events by Scientific Committee - 2026</span></a>

                        </li>

                        <li>

                            <a class="link-page" href="<?= $rootUrl ?>photo-gallery-events-by-scientific-committee-2025/"><span
                                    class="text">Events by Scientific Committee - 2025</span></a>

                        </li>

                        <li>

                            <a class="link-page" href="<?= $rootUrl ?>photo-gallery-events-by-scientific-committee-2024/"><span
                                    class="text">Events by Scientific Committee - 2024</span></a>

                        </li>

                        <li>

                            <a class="link-page" href="<?= $rootUrl ?>photo-gallery-events-by-scientific-committee-2023/"><span
                                    class="text">Events by Scientific Committee - 2023</span></a>

                        </li>

                        <li>

                            <a class="link-page" href="<?= $rootUrl ?>photo-gallery-events-by-scientific-committee-2022/"><span
                                    class="text">Events by Scientific Committee - 2022</span></a>

                        </li>

                        <li>

                            <a class="link-page" href="<?= $rootUrl ?>photo-gallery-events-by-scientific-committee/"><span
                                    class="text">Events by Scientific Committee - 2021</span></a>

                        </li>

                        <li>

                            <a class="link-page" href="<?= $rootUrl ?>photo-gallery-scientific-society/"><span class="text">Events
                                    by Scientific Committee - 2020</span></a>

                        </li>

                        <li>

                            <a class="link-page" href="<?= $rootUrl ?>student-exchange-programs/"><span class="text">Student
                                    Exchange Programs</span></a>

                        </li>

                        <li>

                            <a class="link-page" href="<?= $rootUrl ?>sports-events/"><span class="text">Sports Events</span></a>

                        </li>

                        <li>

                            <a class="link-page" href="<?= $rootUrl ?>photo-gallery-nss-activities/"><span class="text">NSS
                                    Activities (National Service Scheme) </span></a>

                        </li>

                        <li>

                            <a class="link-page" href="<?= $rootUrl ?>photo-gallery-ankuram-2021/"><span class="text">ANKURAM
                                    2021</span></a>

                        </li>

                        <li>

                            <a class="link-page" href="<?= $rootUrl ?>photo-gallery-founders-day/"><span class="text">Founder&#39;s
                                    Day</span></a>

                        </li>

                        <li>

                            <a class="link-page" href="<?= $rootUrl ?>photo-gallery-guest-lecture/"><span class="text">Guest
                                    Lectures and Webinars</span></a>

                        </li>

                        <li>

                            <a class="link-page" href="<?= $rootUrl ?>photo-gallery-annual-cultural-events/"><span
                                    class="text">Annual Cultural Events </span></a>

                        </li>

                        <li>

                            <a class="link-page" href="<?= $rootUrl ?>photo-gallery-dental-camps/"><span class="text">OUT REACH
                                    PROGRAM</span></a>

                        </li>

                    </ul>

                </li>

                <li><a href="<?= $rootUrl ?>dypds-facilities/">FACILITIES</a></li>

                <li>

                    <a href="javascript:void(0)"><label for="droplist7" class="toggle">MUHS MANDATE</label></a>

                    <input type="checkbox" id="droplist7" />

                    <!-- =============FirstDropDown================== -->

                    <ul>

                        <li>

                            <a class="main-menu" href="<?= $rootUrl ?>muhs-mandate-202627/"><span class="text">MUHS Mandate
                                    2026-27</span></a>

                        </li>

                        <li>

                            <a class="main-menu" href="<?= $rootUrl ?>muhs-mandate-2025-26/"><span class="text">MUHS Mandate
                                    2025-26</span></a>

                        </li>

                        <li>

                            <a class="main-menu" href="<?= $rootUrl ?>muhs-mandate-2024-25/"><span class="text">MUHS Mandate
                                    2024-25</span></a>

                        </li>

                        <li>

                            <a class="main-menu" href="<?= $rootUrl ?>muhs-mandate-2023-24/"><span class="text">MUHS Mandate
                                    2023-24</span></a>

                        </li>

                        <li>

                            <a class="main-menu" href="<?= $rootUrl ?>muhs-mandate/"><span class="text">MUHS Mandate
                                    2022-23</span></a>

                        </li>

                    </ul>

                </li>

                <!-- <li><a href="institutional-committees-pdf/NAAC Cell_.pdf"><label for="droplist8" class="toggle">NAAC</label></a>

                                   <input type="checkbox" id="droplist8">

                                   <ul>

                                   </ul>

                                 </li> -->

                <li>

                    <a href="javascript:void(0)"><label for="droplist9" class="toggle">IQAC</label></a>

                    <input type="checkbox" id="droplist9" />

                    <ul>

                        <li>

                            <a class="main-menu" href="<?= $rootUrl ?>assets/downloads/IQAC.pdf" target="_blank"><span
                                    class="text">IQAC
                                    committee</span></a>

                        </li>

                        <li>

                            <a class="main-menu" href="<?= $rootUrl ?>assets/downloads/SOPs of IQAC.pdf" target="_blank"><span
                                    class="text">SOPs of IQAC</span></a>

                        </li>

                        <li>

                            <a class="main-menu" href="<?= $rootUrl ?>minutes-of-meeting/"><span class="text">Minutes of Meetings -
                                    IQAC</span></a>

                        </li>

                        <li>

                            <a class="main-menu" href="institutional-committees-pdf/NAAC Cell_.pdf"
                                target="_blank"><span class="text">NAAC</span></a>

                        </li>

                        <li>

                            <a class="link-page" href="<?= $rootUrl ?>ssr/"><span class="text">SSR</span></a>

                        </li>

                        <li>

                            <a class="link-page" href="<?= $rootUrl ?>aquar-24-25/"><span class="text">AQAR 2024-25</span></a>

                        </li>

                        <li>

                            <a class="link-page" href="<?= $rootUrl ?>dvv/"><span class="text">DVV</span></a>

                        </li>

                    </ul>

                </li>

                <!-- <li><a href="<?= $rootUrl ?>assets/downloads/NIRF.pdf" target="_blank">NIRF</a></li> -->

                <li>

                    <a href="javascript:void(0)"><label for="droplist10" class="toggle">NIRF</label></a>

                    <input type="checkbox" id="droplist10" />

                    <ul>

                        <li>

                            <a class="main-menu" href="<?= $rootUrl ?>assets/downloads/e43e80da-8e60-4375-b4a5-42cae9206ba6.pdf"
                                target="_blank"><span class="text">NIRF REPORT- 2026</span></a>

                        </li>

                        <li>

                            <a class="main-menu" href="<?= $rootUrl ?>assets/downloads/NIRF.pdf" target="_blank"><span
                                    class="text">NIRF
                                    REPORT- 2025</span></a>

                        </li>

                    </ul>

                </li>

                <li>

                    <a href="javascript:void(0)"><label for="droplist_research" class="toggle">Research</label></a>

                    <input type="checkbox" id="droplist_research" />

                    <ul>

                        <li>

                            <a class="main-menu" href="javascript:void(0)"><span class="text">Institutional Ethics
                                    Committee</span></a>

                        </li>

                        <li>

                            <a class="main-menu" href="<?= $rootUrl ?>assets/downloads/Institutional Ethics Committee.pdf"
                                target="_blank"><span class="text">Code of Ethics</span></a>

                        </li>

                        <li>

                            <a class="main-menu" href="<?= $rootUrl ?>list-of-publications/"><span class="text">List of
                                    Publications</span></a>

                        </li>

                    </ul>

                </li>

                <li>

                    <a class="main-menu" href="<?= $rootUrl ?>assets/downloads/RTI-ACT-2005.pdf" target="_blank"><span class="text">RTI
                            ACT 2005</span></a>

                </li>
                <li>
                    <a href="javascript:void(0)"><label for="droplist11" class="toggle">NDC</label></a>
                    <input type="checkbox" id="droplist11" />
                    <ul style="right: 0;">
                        <li>
                            <a class="main-menu" href="<?= $rootUrl ?>institutional-information-as-per-ndc/"><span
                                    class="text">Institutional Information as per NDC</span></a>
                        </li>
                        <li>
                            <a class="main-menu" href="<?= $rootUrl ?>ndc-annexure-1/"><span class="text">NDC Annexures</span></a>
                        </li>
                    </ul>
                </li>
                <li>

                    <a class="main-menu" href="javascript:void(0)"><span class="text">Vacancies</span></a>

                </li>

            </ul>
        </nav>
    </header>
</div>

<script>
    if (typeof AdjustHeader !== 'function') {
        function AdjustHeader() {
            var $navbar = $("#mNavbar");
            if (!$navbar.length) return;
            // On inner pages, keep header in natural flow so breadcrumbs are never overlapped
            $navbar.removeClass("navbar-fixed-top");
        }
        $(window).scroll(function () {
            AdjustHeader();
        });
        $(document).ready(function () {
            AdjustHeader();
        });
    }
</script>