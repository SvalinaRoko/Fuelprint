<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manjari:wght@100;400;500;700;800;900" rel="stylesheet">
    <title>@yield ('title', 'Fuel Watch - easy track')</title>
    @stack('styles')
</head>
<body>
    <header>
        
    </header>
    <main>
    </main>
    <footer class="footer">
        <section class="section-footer grid grid-3-cols">
            <div class="contact-containter">
                <div class="heading-box">
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
            </div>
            <div class="copyright-text">
                <small>Fuel Watch &copy; &mdash; {{ date ('Y')}} All rights reserved</small>
            </div>
            <div class="info-containter">
                <div class="heading-box">
                    <h3 class="heading-tertiary">Info</h3>
                </div>
                <div class="info-box">
                    <ul class="info-list">
                        <a href="#"><li class="info">FaQ</li></a>
                        <a href="#"><li class="info">Privacy policy</li></a>
                        <a href="#"><li class="info">Sitemap</li></a>
                    </ul>
                </div>
            </div>
        </section>
    </footer>
</body>
</html>