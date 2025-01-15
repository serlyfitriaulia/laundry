<!doctype html>
<html lang="en" dir="ltr" data-bs-theme="auto">
<head>

    <!-- Include JavaScript for color modes -->
    <script src="{{ asset('halaman') }}/assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Update the 'content' attribute to reflect the actual content description -->
    <meta name="description" content="your_description_goes_here">

    <!-- Modify the 'content' attribute to include appropriate keywords -->
    <meta name="keywords" content="your_keywords_goes_here">

    <meta name="author" content="tigmatemplate">
    <meta name="generator" content="Bootstrap">

    <!-- Change the text within the <title> tag to match the webpage's content -->
    <title> Laundry Bahagia | HomePage </title>

    <!-- 
        Set the website's favicon and Apple touch icon using the files in the assets/logo folder. You can change these files to your own icons by replacing them with the same names and sizes.

        Be careful if you change the site.webmanifest file, as you need to update the src attribute of the icons array to match the new path of your icon files. Otherwise, your icons may not display correctly on some devices. 
    -->
	<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('halaman') }}/assets/logo/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('halaman') }}/assets/logo/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('halaman') }}/assets/logo/favicon-16x16.png">
	<link rel="icon" type="image/x-icon" href="{{ asset('halaman') }}/assets/logo/favicon.ico">
	<link rel="manifest" href="{{ asset('halaman') }}/assets/logo/site.webmanifest">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('halaman') }}/assets/libraries/glide/css/glide.core.min.css">
    <link rel="stylesheet" href="{{ asset('halaman') }}/assets/libraries/aos/aos.css">
    <link rel="stylesheet" href="{{ asset('halaman') }}/assets/css/main.min.css">
    <link rel="stylesheet" href="{{ asset('halaman') }}/assets/css/style.css">

    <!-- Open Graph Meta Tags for Social Sharing -->
    <!-- Update the 'title' and 'description' content below to enhance social sharing -->
    <meta property="og:title" content="your_title_goes_here">
    <meta property="og:description" content="your_description_goes_here">
    <!-- Update with actual absolute image URL like: https://example.com/main.jpg -->
    <meta property="og:image" content="your_absolute_image_url_goes_here">
    <!-- Update with the absolute URL of the content like: https://example.com/index.html -->
    <meta property="og:url" content="your_absolute_content_url_goes_here">
    <!-- Update with the type of object you’re sharing. (e.g., article, website, etc.) -->
    <meta property="og:type" content="website">
    <!-- Defines the content language -->
    <meta property="og:locale" content="en_US">

    
    <!-- X/Twitter Card Meta Tags for Social Sharing -->
    <meta name="twitter:card" content="summary_large_image">
    <!-- Update with your X/Twitter handle -->
    <meta name="twitter:site" content="@yourtwitterhandle"> 
    <!-- Update the 'title' and 'description' content below to enhance social sharing -->
    <meta name="twitter:title" content="your_title_goes_here"> 
    <meta name="twitter:description" content="your_description_goes_here">
    <!-- Update with actual absolute image URL like: https://example.com/main.jpg -->
    <meta name="twitter:image" content="your_absolute_image_url_goes_here"> 
    
    <!-- 
        The following line specifies the canonical URL for this page.
        Replace your_canonical_url_goes_here with the actual canonical URL if needed like: https://example.com/index.html
        Or just remove it!!!!
    -->
    <link rel="canonical" href="#">

</head>
<body>


    <!-- loader-wrapper -->
    <div class="loader-wrapper">
        <div class="spinner-border text-primary p-5" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>



	<!-- header top -->
	<header class="navigation position-absolute w-100 bg-body-tertiary shadow border-bottom border-light border-opacity-10 rounded-bottom-3 rounded-bottom-sm-4">
	    <nav class="navbar navbar-expand-xl" aria-label="Offcanvas navbar large">
	        <div class="container py-1">
	            <a href="#" class="navbar-brand">
					
	                <img src="{{ asset('halaman') }}/assets/logo/logo.png" height="40" alt="logo" >
	            </a>

				<h4 style="color: white" class="font-weight-bold">Laundry Bahagia</h4>
	            <div class="dropdown ms-3 order-last">
	                <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
	                    <symbol id="check2" viewBox="0 0 16 16">
	                        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
	                    </symbol>
	                    <symbol id="circle-half" viewBox="0 0 16 16">
	                        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
	                    </symbol>
	                    <symbol id="moon-stars-fill" viewBox="0 0 16 16">
	                        <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
	                        <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
	                    </symbol>
	                    <symbol id="sun-fill" viewBox="0 0 16 16">
	                        <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
	                    </symbol>
	                </svg>

	                <button class="btn btn-primary text-white btn-sm rounded dropdown-toggle d-flex align-items-center"
	                    id="bd-theme" type="button" aria-expanded="false" data-bs-toggle="dropdown"
	                    aria-label="Toggle theme (auto)">
	                    <svg fill="currentColor" class="bi my-1 theme-icon-active" width="1em" height="1em"><use href="#"></use></svg>
	                    <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
	                </button>

	                <ul class="p-1 dropdown-menu dropdown-menu-end dropdown-menu-hover end-0 rounded-3 shadow bg-body-tertiary"
	                    style="--bs-dropdown-min-width: 9rem;" aria-labelledby="bd-theme-text">

	                    <li style="color: var(--bs-tertiary-bg);">
	                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
	                            class="mt-n1 d-inline-block position-absolute top-0 end-0 translate-middle" viewBox="0 0 16 16">
	                            <path class="carret-dropdown-path" d="m7.247 4.86-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z"/>
	                        </svg>
	                    </li>

	                    <li>
	                        <button type="button" class="dropdown-item d-flex align-items-center rounded-1" data-bs-theme-value="light" aria-pressed="false">
	                            <svg fill="currentColor" class="bi me-2 theme-icon" width="1em" height="1em"><use href="#"></use></svg>
	                            Light
	                            <svg fill="currentColor" class="bi ms-auto d-none active-check" width="1em" height="1em"><use href="#"></use></svg>
	                        </button>
	                    </li>

	                    <li>
	                        <button type="button" class="my-1 dropdown-item d-flex align-items-center rounded-1" data-bs-theme-value="dark" aria-pressed="false">
	                            <svg fill="currentColor" class="bi me-2 theme-icon" width="1em" height="1em"><use href="#"></use></svg>
	                            Dark
	                            <svg fill="currentColor" class="bi ms-auto d-none active-check" width="1em" height="1em"><use href="#"></use></svg>
	                        </button>
	                    </li>

	                    <li>
	                        <button type="button" class="dropdown-item d-flex align-items-center rounded-1 active" data-bs-theme-value="auto" aria-pressed="true">
	                            <svg fill="currentColor" class="bi me-2 theme-icon" width="1em" height="1em"><use href="#"></use></svg>
	                            Auto
	                            <svg fill="currentColor" class="bi ms-auto d-none active-check" width="1em" height="1em"><use href="#"></use></svg>
	                        </button>
	                    </li>
	                </ul>
	            </div>

	            <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2" aria-label="Toggle navigation">
	                <span class="navbar-toggler-icon"></span>
	            </button>

	            <div class="offcanvas offcanvas-end border-0 rounded-start-0 rounded-start-sm-4" tabindex="-1" id="offcanvasNavbar2" aria-labelledby="offcanvasNavbar2Label">
	                <div class="offcanvas-header" style="padding: 2rem 2rem 1.5rem 2rem;">
	                    <h5 class="offcanvas-title m-0" id="offcanvasNavbar2Label">
	                        <a class="navbar-brand" href="#;">
	                            <img src="{{ asset('halaman') }}/assets/logo/logo.png" height="32" alt="logo">
	                        </a>
	                    </h5>
	                    <button type="button" class="btn-close text-body-emphasis" data-bs-dismiss="offcanvas" aria-label="Close"></button>
	                </div>

	                <div class="offcanvas-body">
	                    <ul class="navbar-nav align-items-xl-center flex-grow-1 column-gap-4 row-gap-4 row-gap-xl-2">
	                        <li class="nav-item ms-xl-auto">
	                            <a href="#" class="px-3 text-body-emphasis bg-body-secondary-hover nav-link rounded-3 text-base leading-6 fw-semibold" aria-current="page">
	                                Home
	                            </a>
	                        </li>

	                        <li class="nav-item">
	                            <a href="#" class="px-3 text-body-emphasis bg-body-secondary-hover nav-link rounded-3 text-base leading-6 fw-semibold">
	                                Services
	                            </a>
	                        </li>

	                        <li class="nav-item">
	                            <a href="#" class="px-3 text-body-emphasis bg-body-secondary-hover nav-link rounded-3 text-base leading-6 fw-semibold">
	                                About
	                            </a>
	                        </li>

	                        <li class="nav-item">
					            <div class="dropdown">
								    <button class="btn w-100 text-start dropdown-toggle px-3 text-body-emphasis bg-body-secondary-hover nav-link rounded-3 text-base leading-6 fw-semibold" type="button" data-bs-toggle="dropdown" aria-expanded="false">
								        Blog
								    </button>
								    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-hover end-0 text-sm shadow bg-body-tertiary" style="--bs-dropdown-min-width: 9rem;">
								    	<li class="d-none d-xl-block" style="color: var(--bs-tertiary-bg);">
					                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
					                            class="mt-n1 d-inline-block position-absolute top-0 end-0 translate-middle" viewBox="0 0 16 16">
					                            <path class="carret-dropdown-path" d="m7.247 4.86-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z"/>
					                        </svg>
					                    </li>
								        <li>
								        	<a class="dropdown-item text-body-emphasis bg-body-secondary-hover py-2 text-base leading-6 fw-semibold" href="#"> 
								        		Blog page 
								        	</a>
								        </li>
								        <li>
								        	<a class="dropdown-item text-body-emphasis bg-body-secondary-hover py-2 text-base leading-6 fw-semibold" href="#"> 
								        		Blog post 
								        	</a>
								        </li>
								        <li>
								        	<a class="dropdown-item text-body-emphasis bg-body-secondary-hover py-2 text-base leading-6 fw-semibold" href="#"> 	Author page 
								        	</a>
								        </li>
								    </ul>
								</div>
	                        </li>

	                        <li class="nav-item ms-xl-auto">
	                            <a href="#" class="px-3 text-body-emphasis bg-body-secondary-hover border nav-link rounded-3 text-base leading-6 fw-semibold text-center">
	                                Contact us
	                            </a>
	                        </li>
	                    </ul>
	                </div>
	            </div>
	        </div>
	    </nav>
	</header>



	<!-- header body -->
	<div class="overflow-hidden position-relative">
	   <img src="{{ asset('halaman') }}/assets/img/bg/bg1.jpg" class="position-absolute z-n1 top-0 h-100 w-100 object-fit-cover" alt="Meeting">

	   <div class="overlay position-absolute z-n1 top-0 h-100 w-100 bg-dark"
	        style="opacity: 0.85; mix-blend-mode: multiply; filter: contrast(1.15) brightness(0.85);">
	    </div>

	    <div class="container">
	        <div class="min-vh-100 row align-items-center">
	        	<div class="col-12 col-xl-8">
		            <div class="pt-9 pt-md-10 pt-xl-11 pb-7 pb-md-8 pb-xl-9 max-w-2xl mx-auto mx-xl-0">
		                <div class="mt-4 pt-2">
		                    <div class="text-center text-xl-start">
		                        <h1 class="m-0 text-white tracking-tight text-6xl fw-bold" data-aos-delay="0" data-aos="fade" data-aos-duration="3000">
		                            
									Rasakan Kebersihan Maksimal
		                        </h1>
		                        <p class="m-0 mt-4 text-white text-lg leading-8" data-aos-delay="100" data-aos="fade" data-aos-duration="3000">
		                            Tidak perlu khawatir cucian lagi! Tim profesional Laundry Bahagia siap menangani semuanya. Pakaian Anda bersih, harum, rapi, dan layanan kami selalu penuh kebahagiaan!
		                        </p>
		                        <div class="mt-4 pt-3 d-flex align-items-center justify-content-center justify-content-xl-start column-gap-3">
		                            <a href="#;" class="btn btn-lg btn-primary text-white text-sm fw-semibold" data-aos-delay="200" data-aos="fade" data-aos-duration="3000">
		                                Kontak Kami
		                            </a>
		                            <a href="#;" class="btn btn-lg text-white icon-link icon-link-hover bg-secondary-hover text-sm leading-6 fw-semibold" data-aos-delay="300" data-aos="fade" data-aos-duration="3000">
		                                Pelajari Lebih Lanjut
		                                <span class="bi align-self-start left-to-right" aria-hidden="true">→</span>
		                                <span class="bi align-self-start right-to-left" aria-hidden="true">←</span>
		                            </a>
		                        </div>
		                    </div>
		                </div>
		            </div>
	            </div>

	            <div class="col-12 col-xl-4">
	            	<div class="pt-3 pt-md-4 pt-xl-12 pb-2 pb-md-3 pb-xl-6">
	            		<!-- Button trigger modal -->
						<a class="video-play-button video-btn-modal position-relative" href="#;"
							data-bs-toggle="modal" data-bs-target="#videoModal"
							data-bs-src="https://www.youtube.com/embed/EX0TcLgOPv0">
							<span class="top-50 start-50 translate-middle"></span>
						</a>
	            	</div>
	            </div>
	        </div>
	    </div>
	</div> 



	<!-- Modal to embed vidoes!! -->
	<div class="modal fade" id="videoModal" tabindex="-1" aria-hidden="true">
		<div class="modal-dialog modal-xl modal-dialog-centered">
			<div class="modal-content border-0" style="border-radius: 0.75rem;">
				<div class="modal-header border-0 p-0">
					<button type="button" class="btn-close bg-white border position-absolute top-0 end-0 translate-middle me-n3 me-sm-n5 mt-n4 rounded-circle p-2" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body p-0">
					<div class="ratio ratio-16x9">
						<iframe class="embed-responsive-item iframeVideo" style="border-radius: 0.75rem;" allow="autoplay"></iframe>
					</div>
				</div>
				
			</div>
		</div>
	</div>



	<!-- services -->
	<div class="overflow-hidden py-7 py-sm-8 py-xl-9 bg-body-tertiary">
	    <div class="container">
	        <div>
	            <div class="mx-auto max-w-2xl text-center">
					<h2 class="m-0 text-primary-emphasis text-base leading-7 fw-semibold">
						Layanan Kami
					</h2>
	                <p class="m-0 mt-2 text-body-emphasis text-4xl tracking-tight fw-bold">
	                    Laundry Praktis di Laundry Bahagia
	                </p>
	                <p class="m-0 mt-4 text-body text-lg leading-8">
						Rasakan kebersihan maksimal dengan deterjen ramah lingkungan berkualitas premium dari layanan kami!
	                </p>
	            </div>
	        </div>
	        <div>
	            <div class="row row-cols-1 row-cols-xl-3 gy-5 gx-xl-4 mt-1 justify-content-center justify-content-xl-between">
	                <div class="col pt-5 pt-xl-4">
	                    <div class="max-w-xl mx-auto mx-xl-0" data-aos-delay="0" data-aos="fade" data-aos-duration="1000">
                        	<div class="ratio" style="--bs-aspect-ratio: 66.66%;">
                                <img src="{{ asset('halaman') }}/assets/img/bg/bg2.jpg" class="object-fit-cover rounded-3" alt="Service image" loading="lazy">
                            </div>

                            <h3 class="m-0 mt-4 text-body-emphasis text-lg leading-6 fw-semibold">
								Dry Cleaning Ramah Lingkungan
                            </h3>

                            <!-- Remove line-clamp-2 if you need more lines or add line-clamp-3 -->
                            <p class="m-0 mt-3 text-body-secondary line-clamp-2 text-sm leading-6">
                                Bersihkan pakaian delicate Anda dengan aman menggunakan layanan dry cleaning ramah lingkungan kami. Hasilnya, pakaian tetap segar tanpa bahan kimia keras!
                            </p>
	                    </div>
	                </div>
      				
      				<div class="col pt-5 pt-xl-4">
	                    <div class="max-w-xl mx-auto mx-xl-0" data-aos-delay="100" data-aos="fade" data-aos-duration="1000">
                        	<div class="ratio" style="--bs-aspect-ratio: 66.66%;">
                                <img src="{{ asset('halaman') }}/assets/img/bg/bg3.jpg" class="object-fit-cover rounded-3" alt="Service image" loading="lazy">
                            </div>

                            <h3 class="m-0 mt-4 text-body-emphasis text-lg leading-6 fw-semibold">
                                
								Layanan Cuci Lipat
                            </h3>

                            <!-- Remove line-clamp-2 if you need more lines or add line-clamp-3 -->
                            <p class="m-0 mt-3 text-body-secondary line-clamp-2 text-sm leading-6">
                                Hemat waktu Anda dengan mempercayakan kebutuhan laundry kepada kami. Pakaian Anda akan bersih dan dilipat rapi dengan layanan cuci lipat yang efisien!
                            </p>
	                    </div>
	                </div>

	                <div class="col pt-5 pt-xl-4">
	                    <div class="max-w-xl mx-auto mx-xl-0" data-aos-delay="200" data-aos="fade" data-aos-duration="1000">
                        	<div class="ratio" style="--bs-aspect-ratio: 66.66%;">
                                <img src="{{ asset('halaman') }}/assets/img/bg/bg4.jpg" class="object-fit-cover rounded-3" alt="Service image" loading="lazy">
                            </div>

                            <h3 class="m-0 mt-4 text-body-emphasis text-lg leading-6 fw-semibold">
                                
								Penjemputan & Pengantaran di Hari yang Sama
                            </h3>

                            <!-- Remove line-clamp-2 if you need more lines or add line-clamp-3 -->
                            <p class="m-0 mt-3 text-body-secondary line-clamp-2 text-sm leading-6">
                                Lupakan tentang menunggu!  – Layanan penjemputan dan pengantaran di hari yang sama memastikan laundry Anda dijemput, dicuci, dan dikembalikan tepat waktu tanpa harus menunggu lama.
                            </p>
	                    </div>
	                </div>
	            </div>
	        </div>

	        <div class="text-center pt-7">
	            <a href="javascript:;" class="btn btn-lg btn-primary text-white icon-link icon-link-hover text-sm leading-6 fw-semibold">
                
					Pelajari Lebih Lanjut
                    <span class="bi align-self-start left-to-right" aria-hidden="true">→</span>
                    <span class="bi align-self-start right-to-left" aria-hidden="true">←</span>
                </a>
	        </div>
	    </div>      
	</div>	



	<!-- Back to top button -->
	<button type="button" class="btn btn-primary btn-back-to-top rounded-circle justify-content-center align-items-center p-2 text-white">
		<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-caret-up-fill" viewBox="0 0 16 16"> <path d="m7.247 4.86-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z"/> </svg>
	</button>



	<!-- Bootstrap JavaScript: Bundle with Popper -->
	<script src="{{ asset('halaman') }}/assets/libraries/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="{{ asset('halaman') }}/assets/libraries/glide/glide.min.js"></script>
	<script src="{{ asset('halaman') }}/assets/libraries/aos/aos.js"></script>
	<script src="{{ asset('halaman') }}/assets/js/scripts.js"></script>
    <script src="{{ asset('halaman') }}/assets/php/contact/script.js"></script>



</body>
</html>