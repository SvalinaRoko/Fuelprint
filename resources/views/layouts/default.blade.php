<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,200..800&display=swap" rel="stylesheet">
    <title>@yield ('title', 'Fuel Watch - easy track')</title>
    @stack('styles')
</head>
<body class="flex dir-col">
    <header>
    </header>
    <main>
        <section class="steps-section">
            <div class="steps-container center">
                <div class="heading-box-steps flex center">
                    <div>
                        <h2 class="heading-secondary">How to get started</h2>
                        <small class="tiny-text">Step by step</small>
                    </div>
                </div>
                <div class="steps-box">
                    <div class="steps one">
                        <div class="step flex center">
                            <div class="step-nbr">
                                <span>1.</span>
                            </div>
                            <p class="step-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum deserunt nostrum architecto quisquam, distinctio obcaecati facilis pariatur expedita tenetur consectetur.</p>
                        </div>
                    </div>
                    <div class="steps two">
                        <div class="step flex center">
                            <p class="step-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto dicta molestiae labore rerum ratione aliquam quo velit excepturi natus ipsa.</p>
                            <div class="step-nbr">
                                <span>2.</span>
                            </div>
                        </div>
                    </div>
                    <div class="steps three">
                        <div class="step flex center">
                            <div class="step-nbr">
                                <span>3.</span>
                            </div>
                            <p class="step-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto dicta molestiae labore rerum ratione aliquam quo velit excepturi natus ipsa.</p>
                        </div>
                    </div>
                    <div class="steps four">
                        <div class="step flex center">
                            <p class="step-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto dicta molestiae labore rerum ratione aliquam quo velit excepturi natus ipsa.</p>
                            <div class="step-nbr">
                                <span>4.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="video-section">
            <div class="video-container center">
                <div class="video-box">
                    <video class="video" width="1400" controls>
                        <source src="{{asset('videos/tutorial.mp4')}}" type="video/mp4">
                        <source src="{{asset('videos/tutorial.ogg')}}" type="video/ogg">
                        <p class="error-msg">Your browser dose not support HTML video.</p>
                    </video>
                </div>
            </div>
        </section>
    </main>
    <footer class="footer center">
        <section class="section-footer grid grid-3-cols">
            <div class="contact-container">
                <div class="heading-box-footer">
                    <h3 class="heading-tertiary">Contact us</h3>
                </div>
                <div class="number-box flex">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 256 256"><path d="m222.37 158.46-47.11-21.11-.13-.06a16 16 0 0 0-15.17 1.4 8 8 0 0 0-.75.56L134.87 160c-15.42-7.49-31.34-23.29-38.83-38.51l20.78-24.71c.2-.25.39-.5.57-.77a16 16 0 0 0 1.32-15.06v-.12L97.54 33.64a16 16 0 0 0-16.62-9.52A56.26 56.26 0 0 0 32 80c0 79.4 64.6 144 144 144a56.26 56.26 0 0 0 55.88-48.92 16 16 0 0 0-9.51-16.62M176 208A128.14 128.14 0 0 1 48 80a40.2 40.2 0 0 1 34.87-40 .6.6 0 0 0 0 .12l21 47-20.67 24.74a6 6 0 0 0-.57.77 16 16 0 0 0-1 15.7c9.06 18.53 27.73 37.06 46.46 46.11a16 16 0 0 0 15.75-1.14 8 8 0 0 0 .74-.56L168.89 152l47 21.05h.11A40.21 40.21 0 0 1 176 208"/></svg>
                    <span class='number'>+385 95 555 5555</span>
                </div>
                <div class="email-box flex">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 256 256"><path d="M224 48H32a8 8 0 0 0-8 8v136a16 16 0 0 0 16 16h176a16 16 0 0 0 16-16V56a8 8 0 0 0-8-8m-96 85.15L52.57 64h150.86ZM98.71 128 40 181.81V74.19Zm11.84 10.85 12 11.05a8 8 0 0 0 10.82 0l12-11.05 58 53.15H52.57ZM157.29 128 216 74.18v107.64Z"/></svg>
                    <p class="email">fuelwatch.support@gmail.com</p>
                </div>
                <div class="social-box flex">
                    <p>Follow us &mdash;</p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 256 256"><path d="m214.75 211.71-62.6-98.38 61.77-67.95a8 8 0 0 0-11.84-10.76l-58.84 64.72-40.49-63.63A8 8 0 0 0 96 32H48a8 8 0 0 0-6.75 12.3l62.6 98.37-61.77 68a8 8 0 1 0 11.84 10.76l58.84-64.72 40.49 63.63A8 8 0 0 0 160 224h48a8 8 0 0 0 6.75-12.29M164.39 208 62.57 48h29l101.86 160Z"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 256 256"><path d="M128 24a104 104 0 1 0 104 104A104.11 104.11 0 0 0 128 24m8 191.63V152h24a8 8 0 0 0 0-16h-24v-24a16 16 0 0 1 16-16h16a8 8 0 0 0 0-16h-16a32 32 0 0 0-32 32v24H96a8 8 0 0 0 0 16h24v63.63a88 88 0 1 1 16 0"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 256 256"><path d="M224 72a48.05 48.05 0 0 1-48-48 8 8 0 0 0-8-8h-40a8 8 0 0 0-8 8v132a20 20 0 1 1-28.57-18.08 8 8 0 0 0 4.57-7.23V88a8 8 0 0 0-9.4-7.88C50.91 86.48 24 119.1 24 156a76 76 0 0 0 152 0v-39.71A103.25 103.25 0 0 0 224 128a8 8 0 0 0 8-8V80a8 8 0 0 0-8-8m-8 39.64a87.2 87.2 0 0 1-43.33-16.15A8 8 0 0 0 160 102v54a60 60 0 0 1-120 0c0-25.9 16.64-49.13 40-57.6v27.67A36 36 0 1 0 136 156V32h24.5A64.14 64.14 0 0 0 216 87.5Z"/></svg>
                </div>
            </div>
            <div class="copyright-text">
                <small>Fuel Watch &copy; {{ date ('Y')}} &mdash; All rights reserved</small>
            </div>
            <div class="info-container flex">
                <div>
                    <div class="heading-box-footer">
                        <h3 class="heading-tertiary">Info</h3>
                    </div>
                    <div class="info-box">
                        <ul class="info-list">
                            <li class="info"><a href="#">FaQ</a></li>
                            <li class="info"><a href="#">About us</a></li>
                            <li class="info"><a href="#">Sitemap</a></li>
                        </ul>
                    </div>
                </div>
                <div>
                    <div class="heading-box-footer">
                        <h3 class="heading-tertiary">Legal info</h3>
                    </div>
                    <div class="info-box">
                        <ul class="info-list">
                            <li class="info"><a href="#">Privacy policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </footer>
</body>
</html>