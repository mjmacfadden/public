<?php
    include 'header.php'; // Include header
?>

<!-- Hero Section -->
<section class="hero position-relative pt-4">
  <div class="hero-overlay pt-4"></div>
  <div class="container hero-content">
    <div class="row text-center">
      <div class="col-12 pb-4">
        <p>follow me on:</p>
        <img src="img/substack_logo.png" style="width:80%; max-width:400px;" alt="Find me on Substack" class="mt-1 mb-4"/>
        <h2 class="mt-4">Creativity and Innovation in Teaching and Learning.</h2>
        <p class="mb-4">Join hundreds of other creatives and innovators to receive my weekly round up and occassional essays.</p>
        <!-- https://substackapi.com/ -->
        <div class="pb-4">
          <div id="custom-substack-embed" class="my-4"></div>
          <script>
                window.CustomSubstackWidget = {
                  substackUrl: "mmacfadden.substack.com",
                  placeholder: "example@gmail.com",
                  buttonText: "Subscribe",
                  theme: "custom",
                  colors: {
                    primary: "#30BDB6",
                    input: "#FFFFFF",
                    email: "#212529",
                    text: "#212529",
                  },

                  // Go to substackapi.com to unlock custom redirect

                };
          </script>
          <script src="substack_widget.js" async></script>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="container home">
  <div class="row my-4">
    <div class="col-md-6 py-4">
      <h2>Why Hello</h2>
      <p>Welcome to my homepage. I'm so glad you are here.</p>
      <p>I recently finished a complete overhaul of my website. If you're thinking it looks different than last time you were here, you are correct. It totally is.<p>
      <p>I've tried to retain everything here that I considered valauble, with the exception that ALL of my archived and future articles will now live on <a href="https://mmacfadden.substack.com" target="_blank">Substack</a>. It'd be pretty cool if you subscribed.</p>
      <p>In the meantime, check out some of my online projects below. Thanks again for stopping by!</p>
    </div>
    <div class="col-md-6 py-4 text-center">
        <img src="img/mmacfadden_headshot.jpg" class="img-fluid rounded-circle headshot" alt="Mike Macfadden's headshot"/>
        <figcaption>Mike Macfadden</figcaption>
      </div>
    </div>
</div>

<div class="projects">
  <div class="container-fluid">
    <div class="row d-flex and align-items-stretch text-light text-shadow text-center" style="height:100%;">
      <div class="col-sm-12 col-md-3 py-4 project american_handkerchief">
        <img src="img/projects/american_handkerchief_logo.png" class="img-shadow img-fluid py-4" alt="American Handkerchief" />
        <br>
        <a href="https://www.americanhandkerchief.com" target="_blank">
          <button type="button" class="btn btn-outline-light btn-shadow">Go Now</button>
        </a>
      </div>
      <div class="col-sm-12 col-md-3 project mqotd"></div>
      <div class="col-sm-12 col-md-3 project cryptoswatch">
        <img src="img/projects/cryptoswatch_logo.png" class="img-shadow img-fluid py-4 px-4 mt-4" style="max-width:200px; opacity:.8;" alt="cryptoswatch" />
        <br>
        <button type="button" class="btn btn-outline-light btn-shadow">Go Now</button>

      </div>
      <div class="col-sm-12 col-md-3 project meaningful_attendance"></div>
    </div>
  </div>
</div>

<div class="media_mentions">
  <div class="container-fluid py-4" style="min-height: 100px;">
    <div class="row text-center">
        <div class="col"><h6>Mike has been featured in:</h6></div>
    </div>
    <div class="row h-100">
      <div class="py-4 col-6 col-md-4 col-lg-2 d-flex justify-content-center align-items-center">
        <a href="https://web.archive.org/web/20180822211210/http://www.chicagotribune.com/suburbs/glenview/news/ct-gla-d225-business-incubator-tl-0608-20170602-story.html" target="_blank">
          <img src="img/media/tribune.png" class="img-fluid" alt="Tribune Media">
        </a>
      </div>
      <div class="py-4 col-6 col-md-4 col-lg-2 d-flex justify-content-center align-items-center">
        <a href="http://theoracle.glenbrook225.org/news/2016/02/05/new-courses-added-to-2016-2017-school-year/" target="_blank">
          <img src="img/media/oracle.png" class="img-fluid" alt="Oracle Media">
        </a>
      </div>
      <div class="py-4 col-6 col-md-4 col-lg-2  d-flex justify-content-center align-items-center">
        <a href="https://pantagraph.com/news/colleges-are-ground-zero-of-youtube-revolution/article_b7e851a1-e8a3-522f-a81f-47740e3758f4.html" target="_blank">
          <img src="img/media/pantagraph.png" class="img-fluid" alt="Pantagraph Media">
        </a>
      </div>
      <div class="py-4 col-6 col-md-4 col-lg-2  d-flex justify-content-center align-items-center">
        <a href="https://web.archive.org/web/20200928182913/https://jwcdaily.com/2017/05/26/glenbrook-incubator-students-prep-for-pitch-night/" target="_blank">
          <img src="img/media/northshore.png" class="img-fluid" alt="Northshore Media">
        </a>
      </div>
      <div class="py-4 col-6 col-md-4 col-lg-2  d-flex justify-content-center align-items-center">
        <a href="https://web.archive.org/web/20201205221158/http://www.glenviewlantern.com/school/business-incubator-bring-entrepreneurial-training-glenbrook-students" target="_blank">
          <img src="img/media/lantern.png" class="img-fluid" alt="Lantern Media">
        </a>
      </div>
      <div class="py-4 col-6 col-md-4 col-lg-2  d-flex justify-content-center align-items-center">
        <a href="media.php"><p class="text-center">all media appearances >></p></a>
      </div>
    </div>
  </div>
</div>


<?php
    include 'footer.php'; // Include footer
?>
