@extends('layouts.default')

@section('title')

@push('styles')
<link href="{{asset('css/default.css')}}" rel="stylesheet">
<link href="{{asset('css/welcome.css')}}" rel="stylesheet">
@endpush
@section('nav-left-links')
<li><a href="#" class="nav-link" id="" aria-label="">How it works</a></li>
<li><a href="#" class="nav-link" id="" aria-label="">Values</a></li>
<li><a href="#" class="nav-link" id="" aria-label="">FaQ</a></li>
@endsection
@section('nav-right-links')
<li><a href="#" class="nav-link" id="" aria-label="">Help</a></li>
<li><a href="#" class="nav-link" id="" aria-label="">Login</a></li>
<li><a href="#" class="nav-link" id="" aria-label="">Sign in</a></li>
@endsection
@section('functionality')
<div class="func-container grid grid-2-cols">
    <div class="func-info-container">
        <div class="section-heading flex ">
            <div class="values-heading-box">
                <div class="section-title flex">
                    <div class="icon-box" role="img" aria-label="Puzzle icon for values section">
                        <svg class="title-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                            <path d="m220 159-7-1a20 20 0 1 1 0-36 8 8 0 0 0 11-7V72a16 16 0 0 0-16-16h-36v-4a36 36 0 0 0-11-26 36 36 0 0 0-61 23v7H64a16 16 0 0 0-16 16v32h-4a36 36 0 0 0-26 11 36 36 0 0 0-10 27 36 36 0 0 0 33 34h7v32a16 16 0 0 0 16 16h144a16 16 0 0 0 16-16v-43zm-12 49H64v-43a8 8 0 0 0-11-7 20 20 0 1 1 0-36 8 8 0 0 0 11-7V72h47a8 8 0 0 0 7-11 20 20 0 1 1 36 0 8 8 0 0 0 7 11h47v32h-7a36 36 0 0 0 3 72h4Z"/>
                        </svg>
                    </div>
                    <span class="title">How it works</span>
                </div>
                <div class="heading">
                    <h2 class="heading-secondary">Here is how <br>Fuelprint works</h2>
                </div>
                <div class="hint">
                    <small class="hint-text">Hint: it's unbelievably easy</small>
                </div>
            </div>
        </div>
        <div class="functions flex dir-col">
            <!-- FIRST -->
             <div class="funcion flex">
                <div class="function-name flex">
                    <div class="func-icon-box flex" role="img" aria-label="Two arrows pointing in opposite directions separated by a straight line icon">
                        <svg class="func-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                            <path d="M136 40v176a8 8 0 0 1-16 0V40a8 8 0 0 1 16 0m-40 80H35l19-18a8 8 0 0 0-12-12l-32 32a8 8 0 0 0 0 12l32 32a8 8 0 0 0 12-12l-19-18h61a8 8 0 0 0 0-16m150 2-32-32a8 8 0 0 0-12 12l19 18h-61a8 8 0 0 0 0 16h61l-19 18a8 8 0 0 0 12 12l32-32a8 8 0 0 0 0-12"/>
                        </svg>
                    </div>
                    <p class="name-text">Import and export</p>
                </div>
                <div class="icon-box" role="img" aria-label="Down arrow icon for functionality section">
                    <svg class="down-arr" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                        <path d="m214 102-80 80a8 8 0 0 1-12 0l-80-80a8 8 0 0 1 12-12l74 75 74-75a8 8 0 0 1 12 12"/>
                    </svg>
                </div>
             </div>
             <!-- SECOND -->
             <div class="funcion flex">
                <div class="function-name flex">
                    <div class="func-icon-box flex" role="img" aria-label="Painting pallet icon ">
                        <svg class="func-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                            <path d="M201 54a103 103 0 0 0-73-30h-1A104 104 0 0 0 24 128c0 43 27 79 69 94a32 32 0 0 0 43-30 16 16 0 0 1 16-16h46a32 32 0 0 0 31-25l3-24a103 103 0 0 0-31-73m13 94a16 16 0 0 1-16 12h-46a32 32 0 0 0-32 32 16 16 0 0 1-21 15 83 83 0 0 1-59-79 88 88 0 0 1 87-88h1a88 88 0 0 1 88 87zm-74-72a12 12 0 1 1-12-12 12 12 0 0 1 12 12m-44 24a12 12 0 1 1-12-12 12 12 0 0 1 12 12m0 56a12 12 0 1 1-12-12 12 12 0 0 1 12 12m88-56a12 12 0 1 1-12-12 12 12 0 0 1 12 12"/>
                        </svg>
                    </div>
                    <p class="name-text">Create and fill</p>
                </div>
                <div class="icon-box" role="img" aria-label="Down arrow icon for functionality section">
                    <svg class="down-arr" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                        <path d="m214 102-80 80a8 8 0 0 1-12 0l-80-80a8 8 0 0 1 12-12l74 75 74-75a8 8 0 0 1 12 12"/>
                    </svg>
                </div>
             </div>
             <!-- THIRD -->
             <div class="funcion flex">
                <div class="function-name flex">
                    <div class="func-icon-box flex" role="img" aria-label="Wand icon with stars surrounding it">
                        <svg class="func-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                            <path d="M48 64a8 8 0 0 1 8-8h16V40a8 8 0 0 1 16 0v16h16a8 8 0 0 1 0 16H88v16a8 8 0 0 1-16 0V72H56a8 8 0 0 1-8-8m136 128h-8v-8a8 8 0 0 0-16 0v8h-8a8 8 0 0 0 0 16h8v8a8 8 0 0 0 16 0v-8h8a8 8 0 0 0 0-16m56-48h-16v-16a8 8 0 0 0-16 0v16h-16a8 8 0 0 0 0 16h16v16a8 8 0 0 0 16 0v-16h16a8 8 0 0 0 0-16m-21-64L80 219a16 16 0 0 1-23 0l-20-20a16 16 0 0 1 0-23L176 37a16 16 0 0 1 23 0l20 20a16 16 0 0 1 0 23m-54 32-21-21-96 96 21 21Zm43-43-21-21-32 32 21 21Z"/>
                        </svg>
                    </div>
                    <p class="name-text">Magic</p>
                </div>
                <div class="icon-box" role="img" aria-label="Down arrow icon for functionality section">
                    <svg class="down-arr" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                        <path d="m214 102-80 80a8 8 0 0 1-12 0l-80-80a8 8 0 0 1 12-12l74 75 74-75a8 8 0 0 1 12 12"/>
                    </svg>
                </div>
             </div>
             <!-- FOURTH -->
             <div class="funcion flex">
                <div class="function-name flex">
                    <div class="func-icon-box flex" role="img" aria-label="Clock icon with arrow pointing to the left ">
                        <svg class="func-icon"xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                            <path d="M136 80v43l36 22a8 8 0 0 1-8 14l-40-24a8 8 0 0 1-4-7V80a8 8 0 0 1 16 0m-8-48a95 95 0 0 0-68 28L40 82V64a8 8 0 0 0-16 0v40a8 8 0 0 0 8 8h40a8 8 0 0 0 0-16H49l22-25a80 80 0 1 1 2 115 8 8 0 1 0-11 12 96 96 0 1 0 66-166"/>
                        </svg>
                    </div>
                    <p class="name-text">Go back in time</p>
                </div>
                <div class="icon-box" role="img" aria-label="Down arrow icon for functionality section">
                    <svg class="down-arr" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                        <path d="m214 102-80 80a8 8 0 0 1-12 0l-80-80a8 8 0 0 1 12-12l74 75 74-75a8 8 0 0 1 12 12"/>
                    </svg>
                </div>
             </div>
        </div>
    </div>
    <div class="func-image">
        <!-- INSERT IMAGE -->
        <div class="placeholder" role="img" aria-label="Placeholder for functions section image" role="img"></div>
    </div>
</div>
@endsection
@section('values')
    <div class="values-container ">
        <div class="section-heading flex ">
            <div class="values-heading-box">
                <div class="section-title flex">
                    <div class="icon-box" role="img" aria-label="Star icon for values section">
                        <svg class="title-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                            <path d="m229.5 113-63.4-23L143 26.4a16 16 0 0 0-30 0L90 89.9 26.4 113a16 16 0 0 0 0 30l63.4 23 23.1 63.5a16 16 0 0 0 30 0l23-63.4 63.5-23.1a16 16 0 0 0 0-30m-72.4 39.3a8 8 0 0 0-4.8 4.8L128 223.9l-24.3-66.8a8 8 0 0 0-4.8-4.8L32.1 128l66.8-24.3a8 8 0 0 0 4.8-4.8L128 32.1l24.3 66.8a8 8 0 0 0 4.8 4.8l66.8 24.3Z"/>
                        </svg>
                    </div>
                    <span class="title">Values</span>
                </div>
                <div class="heading">
                    <h2 class="heading-secondary">What we offer</h2>
                </div>
            </div>
        </div>
        <div class="values grid grid-3-cols">
            <!-- HABITS AND INSIGHT-->
            <div class="habits">
                <div class="value">
                    <div class="about-value">
                        <div class="icon flex" role="img" aria-label="Insight into fueling habits">
                            <svg class="values-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                                <path d="m33 130 1-14a107 107 0 1 1 10 62" style="fill:none;stroke:#231f20;stroke-miterlimit:10;stroke-width:16.59px"/>
                                <path d="m30 153-10-30L1 97l32 5 31-2-20 24z" style="fill:#231f20"/>
                                <path d="M213 128s-5-12-17-24q-24-23-57-23c-32 0-40 8-56 23a87 87 0 0 0-17 24v4s5 12 17 24q24 23 57 23c33 0 40-8 56-23 12-12 17-24 17-24zm-73 41q-29 1-50-20l-14-19 14-19q21-20 50-20c29 0 35 6 49 20l14 19c-5 8-24 39-64 39m0-69a30 30 0 1 0 0 60 30 30 0 0 0 0-60m0 50a20 20 0 1 1 0-40 20 20 0 0 1 0 40"/>
                            </svg>
                        </div>
                        <h3 class="heading-tertiary">Habits and Insight</h3>
                        <p class="value-text">Fuelprint helps users track and understand their fueling habits, providing valuable insights to improve their choices.</p>
                    </div>
                    <div class="value-image">
                        <!-- INSERT IMAGE -->
                        <div class="placeholder" role="img" aria-label="Image placholder"></div>
                    </div>
                </div>
            </div>
            <!-- QUICK AND EASY TO USE -->
            <div class="quick">
                <div class="value">
                     <div class="about-value">
                        <div class="icon flex" role="img" aria-label="Quick and easy to use">
                            <svg class="values-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                                <path d="m216 118-5-5-58-22 15-73a8 8 0 0 0-14-7L42 131a8 8 0 0 0 3 13l58 21-15 73a8 8 0 0 0 14 7l112-120zm-107 96 11-52a8 8 0 0 0-5-9l-53-20 85-91-11 52a8 8 0 0 0 5 9l53 20Z"/>
                            </svg>
                         </div>
                        <h3 class="heading-tertiary">Quick and easy to use</h3>
                        <p class="value-text">Fuelprint offers a simple and intuitive experience, making it quick and easy for users to track their fueling habits.</p>
                    </div>
                    <div class="value-image">
                        <!-- INSERT IMAGE -->
                        <div class="placeholder" role="img" aria-label="Image placholder"></div>
                    </div>
                </div>
            </div>
            <!-- ALL IN ONE PLACE -->
            <div class="place">
                    <div class="value">
                        <div class="about-value">
                            <div class="icon flex" role="img" aria-label="All features in one place">    
                                <svg class="values-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                                    <path d="M224 64h-48v-8a24 24 0 0 0-24-24h-48a24 24 0 0 0-24 24v8H32a16 16 0 0 0-16 16v112a16 16 0 0 0 16 16h192a16 16 0 0 0 16-16V80a16 16 0 0 0-16-16M96 56a8 8 0 0 1 8-8h48a8 8 0 0 1 8 8v8H96Zm128 24v32h-32v-8a8 8 0 0 0-16 0v8H80v-8a8 8 0 0 0-16 0v8H32V80Zm0 112H32v-64h32v8a8 8 0 0 0 16 0v-8h96v8a8 8 0 0 0 16 0v-8h32z"/>
                                </svg>
                            </div>
                            <h3 class="heading-tertiary">All in one place</h3>
                            <p class="value-text">Users can easily access all their fueling data, insights, and tools in a single location. For better decision-making and efficiency.</p>
                        </div>
                        <div class="value-image">
                            <!-- INSERT IMAGE -->
                             <div class="placeholder" role="img" aria-label="Image placholder"></div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
@endsection
@section('faq')
    <div class="faq-container">
        <div class="section-heading flex ">
            <div class="faq-heading-box">
                <div class="section-title flex">
                    <div class="icon-box" role="img" aria-label="Information icon for frequently asked question section">
                        <svg class="title-icon" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 256 256">
                            <path d="M128 24a104 104 0 1 0 104 104A104 104 0 0 0 128 24m0 192a88 88 0 1 1 88-88 88 88 0 0 1-88 88m16-40a8 8 0 0 1-8 8 16 16 0 0 1-16-16v-40a8 8 0 0 1 0-16 16 16 0 0 1 16 16v40a8 8 0 0 1 8 8m-32-92a12 12 0 1 1 12 12 12 12 0 0 1-12-12"/>
                        </svg>
                    </div>
                    <span class="title">FAQs</span>
                </div>
                <div class="heading">
                    <h2 class="heading-secondary">Your questions answered</h2>
                </div>
            </div>
        </div>
        <div class="questions flex dir-col">
            <!-- FIRST QUESTION -->
            <div class="question flex">
                <p class="question-text">Lorem ipsum d elit. Itaque minus delectus, eaque nisi velit optio id ex cumque ratione vero?</p>
                <div role="img" aria-label="Plus icon for faq section">
                    <svg class="plus-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                        <path d="M224 128a8 8 0 0 1-8 8h-80v80a8 8 0 0 1-16 0v-80H40a8 8 0 0 1 0-16h80V40a8 8 0 0 1 16 0v80h80a8 8 0 0 1 8 8"/>
                    </svg>
                </div>
            </div>            
            <!-- SECOND QUESTION -->
            <div class="question flex">
                <p class="question-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque minus delectus, eaque nisi velit optio id ex cumque ratione vero?</p>
                <div role="img" aria-label="Plus icon for faq section">
                    <svg class="plus-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                        <path d="M224 128a8 8 0 0 1-8 8h-80v80a8 8 0 0 1-16 0v-80H40a8 8 0 0 1 0-16h80V40a8 8 0 0 1 16 0v80h80a8 8 0 0 1 8 8"/>
                    </svg>
                </div>
            </div>            
            <!-- THIRD QUESTION -->
            <div class="question flex">
                <p class="question-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque minus delectus, eaque nisi velit optio id ex cumque ratione vero?</p>
                <div role="img" aria-label="Plus icon for faq section">
                    <svg class="plus-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                        <path d="M224 128a8 8 0 0 1-8 8h-80v80a8 8 0 0 1-16 0v-80H40a8 8 0 0 1 0-16h80V40a8 8 0 0 1 16 0v80h80a8 8 0 0 1 8 8"/>
                    </svg>
                </div>
            </div>            
            <!-- FOURTH QUESTION -->
            <div class="question flex">
                <p class="question-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque minus delectus, eaque nisi velit optio id ex cumque ratione vero?</p>
                <div role="img" aria-label="Plus icon for faq section">
                    <svg class="plus-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                        <path d="M224 128a8 8 0 0 1-8 8h-80v80a8 8 0 0 1-16 0v-80H40a8 8 0 0 1 0-16h80V40a8 8 0 0 1 16 0v80h80a8 8 0 0 1 8 8"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer')
<section class="footer-section">
    <div class="footer-container flex dir-col">
        <div class="page-links">
            <ul class="links-list page flex">
                <li><a href="#" class="footer-link" id="">Placeholder</a></li>
                <li><a href="#" class="footer-link" id="">Placeholder</a></li>
                <li><a href="#" class="footer-link" id="">Placeholder</a></li>
                <li><a href="#" class="footer-link" id="">Placeholder</a></li>
                <li><a href="#" class="footer-link" id="legal">Legal</a></li>
            </ul>
        </div>
        <div class="social-links">
            <ul class="links-list social flex">
                <li><a href="#" class="footer-link" id="instagram" aria-label="Instagram">
                    <svg class="social-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                        <path d="M128 80a48 48 0 1 0 48 48 48 48 0 0 0-48-48m0 80a32 32 0 1 1 32-32 32 32 0 0 1-32 32m48-136H80a56 56 0 0 0-56 56v96a56 56 0 0 0 56 56h96a56 56 0 0 0 56-56V80a56 56 0 0 0-56-56m40 152a40 40 0 0 1-40 40H80a40 40 0 0 1-40-40V80a40 40 0 0 1 40-40h96a40 40 0 0 1 40 40ZM192 76a12 12 0 1 1-12-12 12 12 0 0 1 12 12"/>
                    </svg>
                </a></li>
                <li><a href="#" class="footer-link" id="linkedin" aria-label="Linkedin">
                    <svg class="social-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                        <path d="M216 24H40a16 16 0 0 0-16 16v176a16 16 0 0 0 16 16h176a16 16 0 0 0 16-16V40a16 16 0 0 0-16-16m0 192H40V40h176zM96 112v64a8 8 0 0 1-16 0v-64a8 8 0 0 1 16 0m88 28v36a8 8 0 0 1-16 0v-36a20 20 0 0 0-40 0v36a8 8 0 0 1-16 0v-64a8 8 0 0 1 15.8-1.8A36 36 0 0 1 184 140m-84-56a12 12 0 1 1-12-12 12 12 0 0 1 12 12"/>
                    </svg>
                </a></li>
                <li><a href="#" class="footer-link" id="youtube" aria-label="Youtube">
                    <svg class="social-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                        <path d="m164.4 121.3-48-32A8 8 0 0 0 104 96v64a8 8 0 0 0 12.4 6.7l48-32a8 8 0 0 0 0-13.4M120 145.1V111l25.6 17Zm114.3-75.6a24 24 0 0 0-14.5-16.4C185.6 40 131 40 128 40s-57.6-.1-91.8 13.1a24 24 0 0 0-14.5 16.4C19 79.5 16 97.7 16 128s3 48.5 5.7 58.5a24 24 0 0 0 14.5 16.4C69 215.6 120.4 216 127.3 216h1.4c6.9 0 58.3-.4 91.1-13.1a24 24 0 0 0 14.5-16.4c2.6-10 5.7-28.2 5.7-58.5s-3-48.5-5.7-58.5m-15.5 113a8 8 0 0 1-4.7 5.5c-31.7 12.2-85.5 12-86 12h-.1c-.5 0-54.3.2-86-12a8 8 0 0 1-4.8-5.5c-2.4-9.1-5.2-26-5.2-54.5s2.8-45.4 5.2-54.5a8 8 0 0 1 4.7-5.5c30.6-11.8 81.7-12 85.9-12h.3c.5 0 54.3-.2 86 12a8 8 0 0 1 4.7 5.5c2.4 9.1 5.2 26 5.2 54.5s-2.8 45.4-5.2 54.5Z"/>
                    </svg>
                </a></li>
                <li><a href="#" class="footer-link" id="facebook" aria-label="Facebook">
                    <svg class="social-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                        <path d="M128 24a104 104 0 1 0 104 104A104 104 0 0 0 128 24m8 191.6V152h24a8 8 0 0 0 0-16h-24v-24a16 16 0 0 1 16-16h16a8 8 0 0 0 0-16h-16a32 32 0 0 0-32 32v24H96a8 8 0 0 0 0 16h24v63.6a88 88 0 1 1 16 0"/>
                    </svg>
                </a></li>
            </ul>
        </div>
    </div>
    <div class="footer-logo" role="img" aria-label="Fuelprint logo text">       
            <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" width="" height="" viewBox="0 0 400 100">
                <defs>
                    <linearGradient id="gradient1" x1="0%" y1="100%" x2="0%" y2="0%">
                        <stop offset="0%" style="stop-color:#fff; stop-opacity:0" />
                        <stop offset="100%" style="stop-color:#fff; stop-opacity:1" />
                    </linearGradient>
                    <style>
                        .st1 { fill: url(#gradient1); }
                    </style>
                </defs>
                <!-- LOGO -->
                <!-- <path d="M44 44.3c-.6.3 0 .9.2 1.2l.1 2 .4 2c.3.3.7 0 1 .1l8.2.8q1.2-.2 1-1.2c0-1-1-5.2-1.4-6L53 43l-2.4.2q-3.4.4-6.6 1.2M50 68q.9 2.2 1.6 4.5.1.4.9.4c2.4-.8 5.3-1 7.7-1.9q1-.2.5-1L59 64.7l-9 2.8q-.2 0 0 .4m2.6 7.2q-.3.4-.2.9c.1.6.6 2.2 1 2.6l.5.3q3.9-.4 7.8-1.3.9-.3 1-1a10 10 0 0 0-.7-3.2l-.3-.1zM54 82c.5.9.2 2.2 1.6 2.2L57 84c2.3.3 4.4 1 6.6 1q.8-1.7.4-3.6c-.1-.7-.1-1.4-1-1.3l-8.1 1q-.6.3-.8.8m-5.5-48.4H48c-1.4.3-4.5 1.8-5.8 2.5q-.8.3-.5 1c.3.7 1 3 1.6 3.5q.6.4 1.4.3l2.6-1c1.2-.4 3-.5 4-.9l1-.5c-.6-.7-.3-1.5-.5-2.3-.1-.7-.4-2.3-.7-3q-.7-1-1.9-.2zM39 74l-.3-.8c-.2-.6-.4-2.3-1-2.4H37q-1.3 0-2.5.4l-.7.5-3 .7-.6.2.3 1.2-.2 1.3.4 2c0 .7-.2 1.5.4 2l8.4-3zM25.4 47.6c-.7-.7-2.1-2.3-2.9-2.9q-.4-.3-1 .1c-2.4 1.3-4.7 3.3-7.2 4.6-.7.4.1 1 .4 1.5s3.4 4.1 3.7 4.1l.3-.2 7.1-6.5zm6.4 6L28 50.3l-6.8 7.4 4.8 4.6 6-8.2zm9.5 27.6-.5-1.6-.5-.5c-.4-.3-1.7.4-2.2.5l-4 1c-.7.3-2.5 1-2.5 1.8.4.9.4 2.2.8 3q.2.6.7.4c1.6-.5 3.6-1.5 5.2-2.2 1.1-.4 3.3-.7 3-2.5Zm.8 3.6c-.5-.2-.6.2-1 .4l-7.2 3v.9l1.6 3.5s.2.4.4.4l7.5-5.9c-.3-.5-.8-2-1.3-2.3m20.8 2.3c-2-.5-4.5-.4-6.6-.7q-.7-.4-1.5-.5c-1.1.3-1 1.2-1.5 2-1 1.3-4.3 2.5-6 2.3-1-.1-1.5-1.5-3-.9l-5 4.4c-.4.3-1.6 1.1-1.6 1.5v.2l1.4 1.5c.7.5 5.3 2 6.3 2 1.8.4 5.6 0 7.3-.6 1.4-.4 3.5-1.3 4.7-2a13 13 0 0 0 6.2-8.6q-.1-.5-.7-.6M12.3 36.4c.9-.3 2.8-1.1 3.4-1.6 1-.7.1-1.7-.1-2.5l-.8-2.3-.2-.3c-.2-.1-2.3.4-2.8.6q-1.7.4-3.5.6c-.6 0-2.1 0-2.5.5l-.2.9c.1 1 .8 4 1.3 4.8.5.9 1.7 0 2.4-.1zm7.9 5.8c.2-.4-.7-1.2-1-1.7l-1.6-3-8.9 3.4 3 6.2q3.6-1.5 6.7-3.6c.3-.3 1.7-1.1 1.8-1.4ZM30 16.8c1 .7 1.6 1.9 2.4 2.6 1 1 1.2-.7 1.6-1l.7-.5 1.5-1.7 2.4-2.5q0-.5-.4-1c-.6-.8-2.2-2.3-3-3q-.6-.6-1.1-.3l-.4.5-4.7 5.9c0 .7.6.7 1 1m6.3 3.8L35 22.2c-.4.7.3 1 .7 1.5s1 2.8 1.6 3l.8-.2c.4-.2.2-.8.5-1l1.7-.9 2-1.5c1-.5 2.8-1.3 2.2-2.4S43 17.8 42.3 17q-.5-.6-1.2-.2l-1.5 1-.1.6-1.1.4a7 7 0 0 0-2 1.8ZM13 18.3q.5-.4.5-1c.8-2.2 1.2-3.6 3.5-4.8 3.3-1.7 6.3-.9 9.2 1.3q.6 0 1-.4l4.7-6.6c0-.4-.6-.9-.9-1.1a21 21 0 0 0-18.5-4.1l-1.7.7c-1.7 1-5 6-5.8 7.8a21 21 0 0 0-1.3 5.2c0 .6-.3 1.9-.2 2.4q0 .4.4.7zm-5.1 9.1 3-.7c.7-.2 1.8-.1 2.5-.3.9-.3.4-.8.2-1.7l-.3-1.9v-1.3c0-.4-1-.3-1.3-.3-1.3 0-6.4-.1-7.4.2l-.7.5v.3c.4 1.5.3 3.3.6 4.8l.5 1c.3 0 1.5-.5 1.8-.7zm36.2-1.5-1.2.4c-.5.2-1.2.9-1.7 1.2L39 29.4l.1.4 1.3 3q.1.5.6.6l.8-.2.9-.7.7-.1c1.8-.6 3.5-1.8 5.2-2.4.8-.4.4-1.4.2-2L47 25q-.4-.6-1.2-.6c-.8.2-1.2 1.2-1.8 1.5ZM50 73.6l-.4-.4-.7-2.2-.5-.5-.1.1-.8 1.2q-.8.3-1.1 1c.4 1 .7 3.7 2.2 2.6 0-.2 1.3-1.6 1.3-1.8" class="st1"/>
                <path d="m18.8 17-1.3-1.3-.6.2c-.7.6-1.2 2.3-1.3 3 0 1.1 0 3.4.3 4.3q.3.6.7.3c.6-.3.9-2.5 1.1-3.2l1-1.6q.6-.7.1-1.6ZM46 82q.5 0 .4-.5c0-.3-.6-1.3-.8-1.5l-2-1-.5.2c-.7.4-.3 1.7.1 2.2s2.2.8 2.9.6m-1.7-5.3c.9-.2.5-.3.3-.7-.3-1-.2-2.3-1-2.8l-2.1-.8-.5.2c-1 .7 0 2.7.7 3.4.5.5 1.9 1 2.6.7M47.6 88c.6 0 .5-.7.3-1.1l-.7-1.3q-.2-.5-.7-.6c-.4-.2-1.3-.4-1.6-.2-.7.6.3 1.8.7 2.2.3.3 1.6 1.2 2 1M25.4 16q-2.1-1.9-5-2.2-.5 0-.5.7l1 2.4c2-.4 3.9.5 5.8.8l.2-.2v-.4c-.3-.4-1.2-1-1.6-1.2Zm23.7 65c.5.1 2-1.3 2.1-1.7l-.6-1.7q-.4-.2-.8.1a5 5 0 0 0-1.4 1.5c0 .4.3 1.8.7 1.9m3.2 4.6-.2-2q0-.6-.3-1.3h-.3c-.4.3-1.3 2-1.3 2.4 0 .5.5 2 .7 2.2.7.7 1.3-.8 1.4-1.3M74.6 72V26.2q.1-1.5 1.6-1.6h6.2q1.5.1 1.6 1.6v45.6q-.1 1.5-1.6 1.6h-6.2q-1.5-.1-1.6-1.6M78.9 31v-4.8q.1-1.5 1.6-1.6h28q1.5.1 1.6 1.6V31q-.1 1.5-1.6 1.6h-28q-1.5-.1-1.6-1.6m0 21.6v-4.5q.1-1.5 1.6-1.6h25.1q1.5.1 1.6 1.6v4.5q-.1 1.6-1.6 1.7h-25q-1.6-.2-1.7-1.7m50.6 22q-6.7 0-10-4.6-3.4-4.6-3.4-13.8V36.3q.1-1.4 1.6-1.6h6.1q1.6.2 1.7 1.7V55q0 6 1.7 8.7 1.8 3 5.5 3 2.3 0 3.8-1.1 1.6-1 2.8-3 1.3-2 2-4.6c.6-2.6.6-3.6.7-5.7v-16c0-.8.8-1.6 1.7-1.6h6.1q1.6.2 1.7 1.7v21.1l-.1 14.3q-.1 1.6-1.6 1.7h-4.5q-1.5-.2-1.6-1.7l.1-10.5h-1.2q-1.1 4.5-2.8 7.5-1.8 3-4.3 4.3-2.5 1.5-6 1.4m49.9.1q-4.8 0-8.4-1.4t-6.2-4-3.8-6q-1.2-3.7-1.2-8.3c0-4.6.4-5.9 1.2-8.5q1.3-3.8 3.7-6.7 2.4-2.8 6-4.3 3.5-1.6 8-1.6c4.4 0 5.4.5 7.6 1.4q3.4 1.4 5.6 4.2a19 19 0 0 1 3.3 7q1 3.5 1 7.9-.2 1.5-1.7 1.6l-27 .2q-1.6-.2-1.7-1.7v-2.1q.2-1.6 1.7-1.6l20.8-.2c.8 0 1.2 1 .6 1.6-.6.5-1.5 0-1.5-.7q0-2.9-.7-4.8a8 8 0 0 0-8-5.3q-3 0-5.2 1.6-2.3 1.5-3.5 4.5t-1.3 7.3q0 6.4 2.8 9.7a10 10 0 0 0 7.9 3.1q2.2 0 3.7-.5a8 8 0 0 0 4.3-3.7l.5-1q.5-1.2 1.8-1l5 1q1.6.6 1.3 2.2-.6 1.7-1.5 3.1-1.3 2.1-3.4 3.8-2 1.5-5 2.4t-6.7.8m25.1-2.6V22.5q.1-1.6 1.6-1.6h6q1.6.1 1.7 1.6v49.3q-.2 1.5-1.7 1.6h-6q-1.5-.1-1.6-1.6m20.7 14a1 1 0 0 1-1-.8V36.4q.2-1.5 1.7-1.6h4.6q1.5.2 1.6 1.7v8.8l1.1.1q.9-3.7 2.5-6.3t4.2-3.9a13 13 0 0 1 6.1-1.4q5.3 0 9 2.6 3.6 2.7 5.4 7.3 2 4.5 1.9 10.7c-.1 6.2-.6 7.3-1.7 10.3q-1.8 4.5-5.2 7.2a14 14 0 0 1-8.7 2.7q-3.8 0-6.4-1.5t-4.2-4.2-2.7-6H232a40 40 0 0 1 1.3 8.3l.2 3.9V85q0 .8-.9.8zM243.6 67q2.9 0 4.9-1.7 2-1.5 3-4.4 1.2-2.8 1.1-6.6c0-3.8-.3-4.8-1-6.7a10 10 0 0 0-3.3-4.3q-2-1.5-4.9-1.6-2.4 0-4.3 1.1a10 10 0 0 0-3 3q-1.3 1.7-1.9 3.8t-.6 4V55a14 14 0 0 0 3.6 9q1.2 1.4 2.8 2.1t3.6.8Zm28.7 6.6q-1.5-.2-1.6-1.7V36.4q.2-1.5 1.7-1.6h4.6q1.6.2 1.7 1.7l-.2 11.7h1.3q.5-4.8 2-8 1.6-3 4-4.7 2.7-1.6 6.2-1.6l2 .2q1.4.2 1.5 1.6l-.3 6.4c0 1-1 1.8-2 1.6l-.5-.1-2.2-.3q-3 0-5 1.5-2.1 1.5-3.5 4.2-1.2 2.8-1.9 6.3V72q-.1 1.6-1.6 1.7zm34.4-44.9q-3 0-4.4-1.2t-1.5-3.4q0-2.4 1.6-3.6 1.5-1.2 4.3-1.2 3 0 4.4 1.2c1.4 1.2 1.5 2 1.5 3.5s-.5 2.7-1.5 3.5-2.5 1.2-4.4 1.2M302 72V36.4q.1-1.5 1.6-1.6h6q1.6.1 1.7 1.6V72q-.1 1.5-1.6 1.6h-6.1q-1.6-.1-1.6-1.6m21.4 1.6q-1.5-.2-1.6-1.7V36.4q.2-1.5 1.7-1.6h4.6q1.5.2 1.6 1.7l-.2 10.2h1.4q.9-4.3 2.7-7.2c1.8-3 2.7-3.3 4.5-4.3q2.7-1.3 6.2-1.3 6.8 0 10.2 4.7Q358 43.2 358 53v19c0 .8-.8 1.6-1.7 1.6h-6.2q-1.5-.2-1.6-1.7V54q0-6.3-1.9-9.2-1.9-3-5.6-3-3.2 0-5.3 2t-3.3 5.2q-1 3.3-1.2 7v16q-.2 1.6-1.7 1.7zm57.8.8q-6 0-9-3.3t-3-10.3V44q-.1-1.5-1.6-1.6h-2.4q-1.5-.2-1.6-1.7v-4.1q.3-1.5 1.7-1.6h2.3q2 0 3-.7 1.2-.6 1.3-2.4l.7-4.2q.1-1.3 1.6-1.4h2.5q1.5.2 1.6 1.7v5.3q.1 1.5 1.6 1.6h6.8q1.6.1 1.7 1.6V41q-.2 1.5-1.7 1.6H380q-1.5.1-1.6 1.6v16.3q0 2.8 1.3 4 1.2 1.2 3.8 1.2l3.2-.4c1-.3 2 .5 2 1.5V72q0 1.1-1.1 1.5a22 22 0 0 1-6.3 1ZM27.8 18.6c-1.4 3.6-1.8 6.8.9 10.2 3.5 4.5 11.8 6 13.3 12.4q1 4.7-2 8c-5.7 6.2-15.5.6-15.7-8 0-2 .7-4.4-1.2-5.9l-.7-.5q1.2-.6 2.4.2c2.6 1.6 2.3 5 4.6 6.6s4.2-.1 3.1-2.7c-.8-2-3-2.5-4.4-3.7-4.8-3.8-4-11.2-1.4-15.8.1-.3 1.2-2 1.4-2.1l.2.1z" class="st1"/> -->
                <!-- ONLY TEXT -->
                 <path d="M11 70.3V13q.1-1 1-1h9.4q1 0 1 1v57.3q0 1-1 1H12a1 1 0 0 1-1-1m5.2-49.6V13q.1-1 1.1-1h35.9q1 0 1 1v7.7q0 .9-1 1H17.3a1 1 0 0 1-1-1m0 26.3v-7.4q.1-1 1.1-1h32.4q.9 0 1 1V47q-.1 1-1 1.1H17.3a1 1 0 0 1-1-1M77.7 72.6q-8 0-12.2-5.6a28 28 0 0 1-4-16.8V25.3q0-1 1-1h9.3q1 0 1 1V49q0 7.2 2.2 10.6 2 3.5 6.7 3.5a8 8 0 0 0 4.6-1.3 12 12 0 0 0 3.5-3.6 19 19 0 0 0 2.3-5.6q.7-3 1-7V25.4q0-1 1-1h9.3q1 0 1.1 1v44.9q-.1 1-1.2 1.1h-7.2a1 1 0 0 1-1-1l.1-13q0-.7-.8-.7-.7 0-.9.6-1.2 5-3.2 8.5a14 14 0 0 1-5.2 5.2q-3 1.7-7.3 1.7ZM138.4 72.6a29 29 0 0 1-10.2-1.7q-4.5-1.6-7.5-4.7t-4.6-7.5q-1.5-4.5-1.5-10c0-5.6.5-7.2 1.5-10.3q1.5-4.6 4.5-8.2 3-3.4 7.2-5.3t9.7-1.8c5.4 0 6.6.5 9.3 1.7q4.2 1.6 6.8 5 2.8 3.4 4 8.5 1.4 4.6 1.2 10.6-.1 1-1 1l-34.8.2a1 1 0 0 1-1-1v-4.5q0-1 1-1l26.3-.2a1 1 0 0 1 .7 1.8 1 1 0 0 1-1.8-.8q0-3.5-.9-5.9a10 10 0 0 0-3.9-4.8q-2.5-1.5-5.8-1.6-3.6 0-6.3 2a13 13 0 0 0-4.3 5.5 23 23 0 0 0-1.5 8.9q0 7.8 3.4 11.7a12 12 0 0 0 9.5 3.9q2.7 0 4.6-.7a9 9 0 0 0 5.1-4.5l1-2a1 1 0 0 1 1.2-.7l7.2 1.6q1.7.5 1.5 1.5-.9 2.7-2.1 4.8a16 16 0 0 1-4.2 4.6 18 18 0 0 1-6 3q-3.5 1-8.3 1ZM169 70.3V8.5q0-1 1-1h9.1q1 0 1.1 1v61.8q-.1 1-1 1H170a1 1 0 0 1-1-1M194 86.3a1 1 0 0 1-1-1l-.1-37.2V25.3q.1-1 1.1-1h7.4q1 0 1.1 1v11q0 .6.6.7t1-.6q.9-4 2.7-6.9 2-3 5.2-4.7t7.4-1.7q6.5 0 10.8 3.1 4.5 3.1 6.7 8.8t2.3 13c0 7.3-.7 8.9-2.1 12.6a19 19 0 0 1-6.3 8.8 17 17 0 0 1-10.5 3.2q-4.8 0-7.9-1.8a15 15 0 0 1-5.1-5q-1.8-3-3-6.6a1 1 0 0 0-1-.8h-.9a49 49 0 0 1 1.7 10.1l.2 4.7v12q0 1-1 1zm22.5-23a9 9 0 0 0 5.9-2q2.4-1.9 3.7-5.3 1.5-3.5 1.4-8a19 19 0 0 0-1.4-8.2q-1.4-3.3-3.8-5.3a10 10 0 0 0-6-1.9q-3 0-5.3 1.4t-3.7 3.6a17 17 0 0 0-3 9.5v1.7a17 17 0 0 0 4.4 11q1.5 1.5 3.4 2.6 2 1 4.4 1ZM250.5 71.3a1 1 0 0 1-1-1v-45q.1-1 1-1h7.6q1 0 1 1l-.2 14.3q.1.8.8.9t.9-.7q.8-5.4 2.4-9a13 13 0 0 1 4.8-5.7q3.2-2 7.5-2l3.4.4q.8.1.9 1l-.4 9.8a1 1 0 0 1-1.4 1 14 14 0 0 0-4.3-.7q-3.6 0-6.1 1.8a13 13 0 0 0-4.2 5.1 28 28 0 0 0-2.4 8v20.8q0 1-1 1zM293.2 16.9q-3.5 0-5.3-1.5a5 5 0 0 1-1.8-4.2q0-3 1.8-4.4t5.3-1.5q3.6 0 5.4 1.5t1.8 4.3c0 2.8-.6 3.3-1.8 4.3q-1.9 1.5-5.4 1.5m-5.8 53.4v-45q.1-1 1-1h9.3q1 0 1 1v45q0 1-1 1h-9.2a1 1 0 0 1-1-1M312.6 71.3a1 1 0 0 1-1-1v-45q.1-1 1.1-1h7.4q1 .1 1 1l-.3 12.5q.1.8.8.9h.3q.6 0 .8-.7a28 28 0 0 1 3.2-8q2.1-3.6 5.4-5.2t7.6-1.7q8.1 0 12.3 5.7t4.3 17.5v24q-.1 1-1.1 1H345a1 1 0 0 1-1-1V47.5q0-7.6-2.4-11.2a8 8 0 0 0-6.8-3.6q-3.8 0-6.4 2.4t-4 6.3a25 25 0 0 0-1.5 8.5v20.4q-.1 1-1.1 1zM383.8 72.4q-7.4 0-11-4t-3.6-12.6V34.4q-.1-1-1-1h-4.8a1 1 0 0 1-1-1.2l.1-6.8q.1-1 1-1h3.7a8 8 0 0 0 3.8-1q1.2-.6 1.5-2.8l.9-5.9q.1-.9 1-1h4.8q1 .2 1 1.2v8.3q.1 1 1.1 1h10.1q1 .1 1.1 1.1v7.3q-.1 1-1 1h-10.2a1 1 0 0 0-1 1.2v20.7q0 3.3 1.5 4.8c1.5 1.5 2.6 1.5 4.7 1.5a16 16 0 0 0 4.9-.9 1 1 0 0 1 1.5 1v8.2q0 .8-.8 1a27 27 0 0 1-8.3 1.3Z" class="st1"/>
            </svg>
        </div>
        <div class="copyright">
            <small>
                &copy; {{date('Y')}} All rights reserved
            </small>
        </div>
</section>
@endsection
