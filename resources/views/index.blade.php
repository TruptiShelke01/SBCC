@extends('layouts.main')

@section('main-content')

<!DOCTYPE html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Extreme Spoken English Training Centre</title>
    
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-grad-school.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
    <link rel="stylesheet" href="assets/css/style.css">
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
     
  </head>

<body>

  <!-- ***** Main Banner Area Start ***** -->
  <section class="section main-banner" id="top" data-section="section1">
      <video autoplay muted loop id="bg-video">
          <source src="assets/images/course-video.mp4" type="video/mp4" />
      </video>

      <!-- <div class="video-overlay header-text">
          <div class="caption">
              <h6>Join us now ! & improve your</h6>
              <h2><em>English</em> Speaking Skills</h2>
              <div class="main-button">
                  <div class="scroll-to-section"><a href="#section2">Discover more</a></div>
              </div>
          </div>
      </div> -->
  </section>
  <!-- ***** Main Banner Area End ***** -->

  <section class="features">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-12">
          <div class="features-post">
            <div class="features-content">
              <div class="content-show">
                <h4><i class="fa fa-pencil"></i>Why Choose Us?</h4>
              </div>
              <div class="content-hide">
                <p>"Unlock your full potential in English speaking with our intensive, results-driven training. Achieve fluency and confidence through personalized coaching and real-world practice."</p>
                <p class="hidden-sm">Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In mollis eros a posuere imperdiet.</p>
                <div class="scroll-to-section"><a href="#section2">All Course</a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-12">
          <div class="features-post second-features">
            <div class="features-content">
              <div class="content-show">
                <h4><i class="fa fa-graduation-cap"></i>Online Class</h4>
              </div>
              <div class="content-hide">
                <p>"Learn English anytime, anywhere with our interactive online classes tailored for your success!"</p>
                <p class="hidden-sm"></p>
                <div class="scroll-to-section"><a href="#section3">Details</a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-12">
          <div class="features-post third-features">
            <div class="features-content">
              <div class="content-show">
                <h4><i class="fa fa-book"></i>Offline Class</h4>
              </div>
              <div class="content-hide">
                <p>
                "Experience immersive learning through engaging, in-person sessions at our state-of-the-art training center!"</p>
                <p class="hidden-sm"></p>
                <div class="scroll-to-section"><a href="#section4">Details</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- WhatsApp Icon -->
  <a href="javascript:void(0)" id="whatsapp-link" class="whatsapp-icon fixed bottom-5 left-5 bg-[#25d366] text-white p-4 rounded-full text-3xl shadow-lg z-50 transition-transform duration-500 ease-in-out animate-rotate hover:bg-[#128c7e]" target="_blank">
    <i class="fa fa-whatsapp"></i>
  </a>

  <script>
    // Fetch WhatsApp link from the backend
    fetch('/whatsapp-link')
      .then(response => response.json())
      .then(data => {
        // Set the WhatsApp link to the icon
        document.getElementById('whatsapp-link').href = data.whatsappLink;
      })
      .catch(error => console.error('Error fetching WhatsApp link:', error));
  </script>
</body>

<section class="section video" data-section="section5">
    <div class="container">
      <div class="row">
        <div class="col-md-6 align-self-center">
          <div class="left-content">
            <span>Speciality about Extreme</span>
            <h4>"From Basics to Brilliance   <em>– Extreme Spoken English for Everyone!</em>"</h4>
            <p>                       -Vaibhav Jadhav (Founder)<a rel="nofollow" href="#" target="_parent"></a> 
            <br><br>"Extreme Spoken English Training Center offers personalized coaching, expert trainers, and a friendly learning environment. Whether online or offline, our classes focus on building confidence, improving fluency, and mastering pronunciation. With practical activities, interactive sessions, and flexible schedules, we ensure everyone can achieve their English-speaking goals effectively and efficiently!"</p>
            <div class="main-button"><a rel="nofollow" href="https://wa.me/9322967271" target="_parent">Take Admission</a></div>
          </div>
        </div>
        <div class="col-md-6">
         Button to open the video pop-up 
       <!-- Video Pop-up Container -->
        <div id="video-popup" class="hidden fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center z-50">
        <div class="relative bg-white rounded-lg shadow-lg w-full max-w-2xl overflow-hidden">

        <!-- Close Button -->


<!-- Video Container -->
<div class="aspect-w-16 aspect-h-9">
         <video controls autoplay class="w-full h-full">
               <source src="assets/images/viddemo.mp4" type="video/mp4" />
                Your browser does not support the video tag.
         </video>
     </div>
     </section>

  <section>


   <div id="overlay"></div>

   <div id="videoPopup">
    <!-- Close Button (Cross Mark) -->
    <button id="closeBtn" class="close-btn">&times;</button>

    <div id="videoContainer">
        <!-- Video Element -->
        <video id="popupVideo" autoplay controls muted>
            <source src="{{ asset('assets/images/viddemo.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <!-- Lock Overlay -->
        <div id="lockOverlay">
            <span id="lockIcon">🔒</span>
        </div>
    </div>
    <!-- Continue Button -->
    <button id="continueBtn">Click Here to Continue</button>
</div>

    </section>
    




  <section class="section why-us" data-section="section2">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
           
          </div>
        </div>
        <div class="col-md-12">
          <div id='tabs'>
            <ul>
              <li><a href='#tabs-1'>Best Education</a></li>
              <li><a href='#tabs-2'>Top Management</a></li>
              <li><a href='#tabs-3'>Confidence Building</a></li>
            </ul>
            <section class='tabs-content'>
              <article id='tabs-1'>
                <div class="row">
                  <div class="col-md-6">
                    <img src="assets/images/choose-us-image-02.jpeg" alt="">
                  </div>
                  <div class="col-md-6">
                    <h4>Best Education</h4>
                    <p>"At Extreme Coaching Classes, we provide expert educators, personalized attention, and innovative teaching methods to ensure academic excellence. With proven results and comprehensive study materials, we create a strong foundation for success. Join us today and unlock your potential with the best education for a brighter future!"</p>
                  </div>
                </div>
              </article>


            <article id="tabs-2">
              <div class="row">
                  <div class="col-md-6">
                   <img src="assets/images/choose-us-image-01.jpeg" alt="">
                  </div>
              <div class="col-md-6">
               <h4>Top Level</h4>
               <p>
               Extreme Coaching Classes is led by an experienced management team focused on excellence and innovation. From expert faculty selection to student-centric policies and cutting-edge infrastructure, our leadership ensures top-quality education. With a mission to nurture talent, we are dedicated to empowering students to achieve their full potential.
               </p>
              </div>
             </div>
           </article>



              <article id='tabs-3'>
                <div class="row">
                  <div class="col-md-6">
                    <img src="assets/images/choose-us-image-03.jpeg" alt="">
                  </div>
                  <div class="col-md-6">
                    <h4>Practice with peers</h4>
                    <p>At Extreme Coaching Classes, we believe confidence is key to success. Through interactive sessions, motivational guidance, and skill-building activities, we help students overcome challenges, express themselves effectively, and face exams with self-assurance. Join us to unlock your potential and build the confidence to achieve your dreams!.</p>
                  </div>
                </div>
              </article>
            </section>
          </div>
        </div>
      </div>
    </div>
  </section>









  <section class="section coming-soon" data-section="section3">
    <div class="container">
      <div class="row">
        <div class="col-md-7 col-xs-12">
          <div class="continer centerIt">
            <div>
              <h4>Take admission in <em> Online batch </em>now !!</h4>
              <div class="counter">

                <div class="days">
                  <div class="value"></div>
                  <span>Days</span>
                </div>

                <div class="hours">
                  <div class="value"></div>
                  <span>Hours</span>
                </div>

                <div class="minutes">
                  <div class="value"></div>
                  <span>Minutes</span>
                </div>

                <div class="seconds">
                  <div class="value"></div>
                  <span>Seconds</span>
                </div>

              </div>
            </div>
          </div>
        </div>
        <div class="col-md-5">
          <div class="right-content">
            <div class="top-content">
              <h6>Register your name <em>get immediate</em> access to online courses</h6>
            </div>
            <form id="contact" action="" method="get">
              <div class="row">
                <div class="col-md-12">
                  <fieldset>
                    <input name="name" type="text" class="form-control" id="name" placeholder="Your Name" required="">
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                    <input name="edication" type="text" class="form-control" id="education" placeholder="Education" required="">
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                    <input name="phone-number" type="text" class="form-control" id="phone-number" placeholder="Your Phone Number" required="">
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                    <button type="submit" id="form-submit" class="button"> Submit </button>
                  </fieldset>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>


 <!-- <section class="section coming-soon" data-section="section3">
    <div class="container">
        <div class="row">
            
            <div class="col-md-4">
                <div class="card">
                
                    <div class="card-body">
                        <h5 class="card-title">Intensive Speaking Bootcamps</h5>
                        <p class="card-text">"Jumpstart your fluency with our intensive bootcamp. Engage in challenging speaking exercises designed to improve confidence and spontaneity in real-world conversations."</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="card ">
                    <div class="card-body ">
                        <h5 class="card-title">Accent Reduction Masterclasses</h5>
                        <p class="card-text"> "Refine your pronunciation and sound more natural! This course dives into the nuances of English accents, helping you achieve clarity and a neutral tone."</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Advanced Conversation Techniques</h5>
                        <p class="card-text">"Master conversational English through advanced techniques. Our experts guide you in expressing ideas effectively, from debates to storytelling."</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->







  <section class="section courses" data-section="section4">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Choose Your Course</h2>
          </div>
        </div>
        <div class="owl-carousel owl-theme">
          <div class="item">
            <img src="assets/images/courses-01.jpg" alt="Course #1">
            <div class="down-content">
              <h4>Basic English Skills</h4>
              <p>Focus on essential grammar, vocabulary, and conversational skills for everyday communication.</p>
              <div class="author-image">
                <img src="assets/images/elogo.png" alt="Author 1">
              </div>
              <div class="text-button-pay">
                <a href="https://rzp.io/rzp/dGQQ9oY">Pay <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="assets/images/courses-02.jpg" alt="Course #2">
            <div class="down-content">
              <h4>Intermediate English Proficiency</h4>
              <p> Enhance fluency, comprehension, and writing through engaging activities and real-life scenarios.</p>
              <div class="author-image">
                <img src="assets/images/elogo.png" alt="Author 2">
              </div>
              <div class="text-button-free">
                <a href="https://rzp.io/rzp/FyOMRVGw">Pay <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="assets/images/courses-03.jpg" alt="Course #3">
            <div class="down-content">
              <h4>Advanced English Mastery</h4>
              <p>Develop expertise in business communication, public speaking, and professional writing techniques.</p>
              <div class="author-image">
                <img src="assets/images/elogo.png" alt="Author 3">
              </div>
              <div class="text-button-pay">
                <a href="https://rzp.io/rzp/0vsUmMV">Pay <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
           </div>
          
          <div class="item">
            <img src="assets/images/courses-03.jpg" alt="Course #3">
            <div class="down-content">
              <h4>IELTS Preparation</h4>
              <p> Comprehensive training for all modules, ensuring success in international English proficiency tests.</p>
              <div class="author-image">
                <img src="assets/images/elogo.png" alt="Author 3">
              </div>
              <div class="text-button-pay">
                <a href="https://rzp.io/rzp/QdAJIo9">Pay <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
           </div>
          
          <div class="item">
            <img src="assets/images/courses-03.jpg" alt="Course #3">
            <div class="down-content">
              <h4>Business English Essentials</h4>
              <p>Learn professional etiquette, email writing, and workplace communication for corporate environments.</p>
              <div class="author-image">
                <img src="assets/images/elogo.png" alt="Author 3">
              </div>
              <div class="text-button-pay">
                <a href="https://rzp.io/rzp/S32V2He">Pay <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
           </div>
      </div>
    </div>
  </section>
    </section>

  <!-- <section class="section video" data-section="section5">
    <div class="container">
      <div class="row">
        <div class="col-md-6 align-self-center">
          <div class="left-content">
            <span>Demo Video of Extreme</span>
            <h4>Watch the video to learn more <em>about Extreme Training Centre</em></h4>
            <p>Other info <a rel="nofollow" href="#" target="_parent">Your info</a> for details.
            <br><br>Text will be addes here</p>
            <div class="main-button"><a rel="nofollow" href="#" target="_parent">Take Admission</a></div>
          </div>
        </div>
        <div class="col-md-6">
          <article class="video-item">
            <div class="video-caption">
              <h4>Your Heading</h4>
            </div>
            <figure>
              <a href="" class="play"><img src="assets/images/main-thumb.png"></a>
            </figure>
          </article>
        </div>
      </div>
    </div>
  </section> -->

  <section class="section contact" data-section="section6">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Let’s Keep In Touch</h2>
          </div>
        </div>
        <div class="col-md-6">
        
        Do you need a working HTML contact-form script?
                	
                    Please visit https://templatemo.com/contact page -->
                    
          <form id="contact" action="" method="post">
            <div class="row">
              <div class="col-md-6">
                  <fieldset>
                    <input name="name" type="text" class="form-control" id="name" placeholder="Your Name" required="">
                  </fieldset>
                </div>
                <div class="col-md-6">
                  <fieldset>
                    <input name="education" type="text" class="form-control" id="education" placeholder="Education" required="">
                  </fieldset>
                </div>
              <div class="col-md-12">
                <fieldset>
                  <input name="Contactno" rows="6" class="form-control" id="contact" placeholder="Contact No." required="">
                </fieldset>
              </div>
              <div class="col-md-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="button">Submit</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-6">
          <div id="map">
            <!-- <iframe src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="422px" frameborder="0" style="border:0" allowfullscreen></iframe> -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15007.791548569994!2d74.4796806!3d19.8844223!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdc446132166689%3A0x7ee3d1f7f05acb5f!2sEXTREME%20Spoken%20ENGLISH%20Training%20Centre!5e0!3m2!1sen!2sin!4v1726663839422!5m2!1sen!2sin" width="100%" height="422px" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="{{ asset('assets/js/video-popup.js') }}"></script>


  <script>
  // Get the navbar and the "our presentation is for you" section
  const navbar = document.querySelector('.main-header');
  const presentationSection = document.querySelector('.section.video');

  // Function to change the navbar background color when scrolling
  function onScroll() {
    const sectionTop = presentationSection.getBoundingClientRect().top;

    if (sectionTop <= 0) {  // When section is scrolled past
      // Change navbar to solid color
      navbar.style.backgroundColor = 'rgba(113, 0, 0, 1)'; // Solid color
    } else {
      // Make navbar transparent again when section is above the viewport
      navbar.style.backgroundColor = 'rgba(113, 0, 0, 0)'; // Transparent
    }
  }

  // Listen for scroll events
  window.addEventListener('scroll', onScroll);
</script>


</body>
</html>
@include('scripts')
@endsection




