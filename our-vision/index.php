<?php

include $_SERVER['DOCUMENT_ROOT'].'/__lib/main.php';

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Our Vision - Hackathon 23</title>
    <link 
      rel="shortcut icon"
      href="/assets/images/logo/H-logo.png"
      type="image/x-icon"
    />
    <link rel="stylesheet" href="/assets/css/animate.css" />
    <link rel="stylesheet" href="/assets/css/tailwind.css" />

    <!-- ==== WOW JS ==== -->
    <script src="/assets/js/wow.min.js"></script>
    <script>
      new WOW().init();
    </script>
  </head>
  <body>

  
  <?load_template('header')?>

    <br>

    <!-- ====== Blog Details Section Start -->
    <section class="pt-20 pb-10 lg:pt-[120px] lg:pb-20">
      <div class="container">
        <div class="-mx-4 flex flex-wrap justify-center">
            </div>
            <div class="-mx-4 flex flex-wrap">
              <div class="w-full px-4 lg:w-8/12">
                <div>
                  <h2
                    class="wow fadeInUp mb-6 text-[26px] font-bold leading-snug text-white text-dark sm:text-3xl sm:leading-snug md:text-4xl md:leading-snug"
                    data-wow-delay=".1s
                    "
                  >
                   Our Vision - Hackathon 23
                  </h2>
                  <p
                    class="wow fadeInUp mb-8 text-base leading-relaxed text-[#e4e4e4]"
                    data-wow-delay=".1s"
                  >
                  The aim of Hackathon 23 is to explore the concept and usefulness of the hackathon style
process during the requirements and conceptual design phase of a complex engineered
system.There are multiple desirable features and themes incorporated into hackathon event.It
carries many upperhands like Quick results,develop a shared understanding,Learn and earn
new skills.Hackathon 23 is the supreme platform which allows for the elicitation,discussion and
refinement of each of the stakeholder's expectations and permits efficient collaboration during
subsequent tasks.The design objective of the hackathon is to propose a specific focus on
forthcoming youth.
                  </p>
                 
    </section>
    <!-- ====== Blog Details Section End -->

<?load_template('footer')?>

    <!-- ====== Back To Top Start -->
    <a
      href="javascript:void(0)"
      class="back-to-top fixed bottom-8 right-8 left-auto z-[999] hidden h-10 w-10 items-center justify-center rounded-md bg-primary text-white shadow-md transition duration-300 ease-in-out hover:bg-dark"
    >
      <span
        class="mt-[6px] h-3 w-3 rotate-45 border-t border-l border-white"
      ></span>
    </a>
    <!-- ====== Back To Top End -->

    <!-- ====== All Scripts -->
    <script src="/assets/js/main.js"></script>
  </body>
</html>
