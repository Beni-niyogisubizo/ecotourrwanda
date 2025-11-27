<?php
$services = [
    [
        "title" => "Gorilla Trekking in Volcanoes National Park",
        "image" => "images/gorilla-trekking.jpg",
        "eco_rating" => "5/5",
        "description" => "Guided eco trek to see endangered mountain gorillas in Rwanda’s world-famous conservation park. Certified local guides, wildlife protection, and a once-in-a-lifetime adventure.",
        "price" => "$120"
    ],
    [
        "title" => "Canopy Walkway in Nyungwe Forest",
        "image" => "images/canopy-walkway.jpg",
        "eco_rating" => "4/5",
        "description" => "Walk the spectacular canopy bridge above ancient rainforest. Eco-guides reveal rare birds, primates, and the ecosystem that makes Rwanda an African biodiversity hotspot.",
        "price" => "$60"
    ],
    [
        "title" => "Birdwatching Safari in Akagera National Park",
        "image" => "images/birdwatching.jpg",
        "eco_rating" => "5/5",
        "description" => "Join expert guides for a safari focused on Rwanda’s 700+ bird species—cranes, kingfishers, and more—while supporting wetland preservation and anti-poaching projects.",
        "price" => "$90"
    ],
    [
        "title" => "Chimpanzee Trekking in Gishwati-Mukura",
        "image" => "images/gorilla.jpg",
        "eco_rating" => "5/5",
        "description" => "Join a primate conservation walk. See chimpanzees, golden monkeys, ancient trees—an eco-tour funding park protection and local communities.",
        "price" => "$100"
    ],
    [
        "title" => "Community-Led Eco-Tour",
        "image" => "images/rwanda-forest.jpg",
        "eco_rating" => "5/5",
        "description" => "Experience rural Rwanda through agro-tourism, cultural guiding, and farm stays. This eco-friendly experience supports families and funds reforestation projects.",
        "price" => "$70"
    ],
    [
        "title" => "Eco Volunteer & Conservation Program",
        "image" => "images/contact-ngo.jpg",
        "eco_rating" => "5/5",
        "description" => "Hands-on voluntourism with Rwanda’s leading environmental NGOs—tree planting, wildlife surveys, park cleanup, and direct action against climate change.",
        "price" => "$0 (Voluntourism)"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>EcoTour Rwanda | Home</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <style>
    .hero {background: url('images/rwanda-forest.jpg') center/cover no-repeat; color: #fff; min-height: 350px; display: flex; align-items: center; justify-content: center; flex-direction: column;}
    .blur-bg {background-color: rgba(34,55,34,0.65); padding:2rem 2rem; border-radius:1rem;}
    .service-img {width:100%; height:180px; object-fit:cover; border-radius:.6rem;}
    .eco-badge {background: #228B22; color: #fff; padding: .2em .8em; border-radius: 20px; font-size: .9em;}
    .navbar-brand {font-weight:700; color:#228B22 !important;}
    .card:hover { box-shadow:0 6px 24px #22352040; transform:translateY(-2px);}
    footer { background: #228B22; color: #fff; padding:1rem 0; text-align:center;}
  </style>
  <!-- SEO: Description, Keywords, Author -->
<meta name="description" content="EcoTour Rwanda: Book gorilla trekking, birdwatching, and reforestation eco-tours in Rwanda. Support conservation while exploring Rwanda's wild places.">
<meta name="keywords" content="ecotourism, Rwanda, gorilla trekking, volcanoes, reforestation, conservation, wildlife tours, eco-tour">
<meta name="author" content="EcoTour Rwanda">

<!-- Open Graph / Facebook/WhatsApp -->
<meta property="og:title" content="EcoTour Rwanda - Conservation Eco-Tours & Adventures">
<meta property="og:description" content="Certified tours, community reforestation, gorilla trekking, and real nature impact in Rwanda.">
<meta property="og:image" content="images/rwanda-forest.jpg"> <!-- Use full URL when live online! -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://ecotourrwanda.com">

<!-- Twitter Card -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="EcoTour Rwanda - Conservation Tours">
<meta name="twitter:description" content="Book authentic eco-tours that make a difference. Save gorillas, restore forests, empower locals.">
<meta name="twitter:image" content="images/rwanda-forest.jpg">

</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
  <div class="container">
    <a class="navbar-brand" href="#home">EcoTour Rwanda</a>
    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a href="#home" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="#mission" class="nav-link">Mission</a></li>
        <li class="nav-item"><a href="#services" class="nav-link">Services</a></li>
        <li class="nav-item"><a href="#conservation" class="nav-link">Conservation</a></li>
        <li class="nav-item"><a href="#agriculture" class="nav-link">Agriculture</a></li>
        <li class="nav-item"><a href="#reviews" class="nav-link">Reviews</a></li>
        <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
        <li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
      </ul>
    </div>
  </div>
</nav>

<?php if (isset($_GET['book']) && $_GET['book'] == 'success'): ?>
  <div class="alert alert-success text-center m-3">
    Your booking was successful! Thank you for choosing EcoTour Rwanda.
  </div>
<?php endif; ?>
<?php if (isset($_GET['contact']) && $_GET['contact'] == 'success'): ?>
  <div class="alert alert-success text-center m-3">
    Your message has been sent successfully! We appreciate your interest.
  </div>
<?php endif; ?>

<!-- Hero Section -->

<section id="home" class="hero">
  <div class="blur-bg text-center">
    <h1 class="display-5 fw-bold">EcoTour Rwanda</h1>
    <p class="lead">Where Adventure Meets Conservation</p>
    <p>Discover, book, and experience Rwanda’s eco-friendly tours while helping preserve its rich biodiversity and local communities.</p>
    <a href="#services" class="btn btn-success btn-lg mt-2">Browse Eco-Services</a>
  </div>
</section>

<!-- Mission Section -->
<section id="mission" class="container py-4 my-4">
  <div class="row align-items-center">
    <div class="col-md-6"><img src="images/gorilla.jpg" class="img-fluid rounded" alt="Rwanda Gorilla"></div>
    <div class="col-md-6">
      <h3>Our Mission</h3>
      <p>
        EcoTour Rwanda uses digital tourism to channel funds and visibility toward ecosystem conservation—wetlands, forests, and wildlife corridors. Every booking supports certified eco-operators and direct conservation action.
      </p>
      <ul>
        <li>Promote responsible, low-impact tourism</li>
        <li>Support certified local operators and NGOs</li>
        <li>Fund conservation projects with each booking</li>
        <li>Empower travelers to make a positive impact</li>
      </ul>
    </div>
  </div>
</section>

<!-- Services Section (All images/files exist based on your folder) -->
<section id="services" class="container py-4 my-4">
  <h2 class="mb-3">Featured Eco-Friendly Services</h2>
  <div class="row g-4">
  <?php foreach ($services as $srv): ?>
    <div class="col-md-4">
      <div class="card h-100">
        <img src="<?= htmlspecialchars($srv['image']) ?>" class="service-img" alt="<?= htmlspecialchars($srv['title']) ?>">
        <div class="card-body">
          <h5 class="card-title"><?= htmlspecialchars($srv['title']) ?></h5>
          <span class="eco-badge">Eco-Rating: <?= htmlspecialchars($srv['eco_rating']) ?></span>
          <p class="card-text"><?= htmlspecialchars($srv['description']) ?></p>
          <p class="card-text"><strong>Price:</strong> <?= htmlspecialchars($srv['price']) ?></p>
          <button class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#bookModal" data-service="<?= htmlspecialchars($srv['title']) ?>">
            <?= stripos($srv['title'], 'volunteer') !== false ? 'Apply' : 'Book Now'; ?>
          </button>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
  </div>
</section>



<!-- Conservation Section -->
<section id="conservation" class="container py-5">
  <div class="mb-4 text-center">
    <img src="images/rwanda-forest.jpg" 
         class="img-fluid rounded shadow mb-3" 
         alt="Rwanda Forest Conservation" 
         style="max-height:300px; object-fit:cover; width:100%;">
  </div>
  <div class="row justify-content-center">
    <div class="col-lg-8">
      <h2 class="text-success fw-bold text-center mb-3">Conservation in Rwanda</h2>
      <p class="fs-5 text-center">
        Rwanda is a model for wildlife and ecosystem conservation in Africa! Our efforts focus on saving mountain gorillas, expanding protected parks, restoring forests, and empowering communities to coexist with wildlife.
      </p>
      <div class="row mt-4">
        <div class="col-md-6">
          <ul class="list-unstyled fs-6">
            <li class="mb-3"><b class="text-success">Gorilla Protection:</b> Join sustainable gorilla trekking to help fund research and anti-poaching patrols in Volcanoes National Park.</li>
            <li class="mb-3"><b class="text-success">Reforestation:</b> Rwanda aims for <b>30% forest cover by 2030</b>. Tourists and partners can participate in tree-planting or support restoration projects.</li>
            <li class="mb-3"><b class="text-success">Community Livelihoods:</b> Every eco-tour channels revenue into NGOs, schools, hospitals, and local income. By booking eco-friendly activities, you make a direct impact!</li>
          </ul>
        </div>
        <div class="col-md-6">
          <div class="card p-3 mb-3">
            <b>What We Ask of Our Visitors:</b>
            <ul class="mb-1 mt-2">
              <li>Respect wildlife and natural habitats—stay on marked trails.</li>
              <li>Minimize plastic and other waste—carry reusable items.</li>
              <li>Support local conservation by booking certified eco-tours and learning about Rwanda’s biodiversity.</li>
              <li>Engage in voluntourism: join park cleanups, contribute to conservation funds, or plant a tree!</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="card bg-light border-1 my-4" style="max-width:700px; margin:auto;">
        <div class="card-body">
          <?php
          $feed_url = "https://news.mongabay.com/feed/?s=Rwanda";
          $rss = @simplexml_load_file($feed_url);
          if ($rss):
              $max_items = 3;
              $count = 0;
              echo '<div class="mb-2"><strong>Quick Rwanda Conservation Updates</strong></div>';
              echo '<ul class="list-unstyled ms-3">';
              foreach ($rss->channel->item as $item) {
                  if ($count++ >= $max_items) break;
                  echo '<li style="margin-bottom:8px;">
                          <span class="me-2" style="font-size:1.1em; color:#228B22;">&#9679;</span>
                          <a href="' . htmlspecialchars($item->link) . '" target="_blank" style="text-decoration:none; font-weight:500;">
                            ' . htmlspecialchars($item->title) . '
                          </a>
                       </li>';
              }
              echo '</ul>';
          else:
              echo '<em>Conservation news currently unavailable.</em>';
          endif;
          ?>
        </div>
      </div>

      <section id="newsletter" class="container my-5">
  <div class="row justify-content-center">
    <div class="col-md-8 text-center">
      <h4 class="mb-3 text-success">EcoTour Rwanda Email Updates</h4>
      <p>Stay updated on eco-tours, conservation news, and special offers. No spam, ever!</p>
      <form action="subscribe.php" method="POST" class="row g-2 justify-content-center">
        <div class="col-sm-8">
          <input type="email" name="email" class="form-control" placeholder="Your email address" required>
        </div>
        <div class="col-sm-auto">
          <button type="submit" class="btn btn-success px-4">Subscribe</button>
        </div>
      </form>
      <?php if (isset($_GET['sub']) && $_GET['sub'] == 'ok'): ?>
        <div class="alert alert-success mt-3">Thank you for subscribing!</div>
      <?php elseif (isset($_GET['sub']) && $_GET['sub'] == 'exists'): ?>
        <div class="alert alert-warning mt-3">That email is already subscribed.</div>
      <?php elseif (isset($_GET['sub']) && $_GET['sub'] == 'fail'): ?>
        <div class="alert alert-danger mt-3">Invalid email or error—please try again.</div>
      <?php endif; ?>
    </div>
  </div>
</section>


      <p class="text-center fs-5 mt-3"><b>Every visitor is part of Rwanda’s conservation success story.</b> Thank you for making a positive difference!</p>
    </div>
  </div>
</section>



<!-- Agriculture Section -->
<section id="agriculture" class="container py-5">
  <div class="row align-items-center">
    <div class="col-md-7">
      <h2>Supporting Sustainable Agriculture</h2>
      <p>
        EcoTour Rwanda promotes <b>conservation agriculture</b>—a climate-resilient approach recognized by Rwanda Environment Management Authority and experts worldwide.
      </p>
      <ul>
        <li><b>Minimize Soil Disturbance:</b> Reduce tilling and plowing—protects soil fertility and prevents erosion.</li>
        <li><b>Permanently Cover Soil:</b> Grow cover crops, use mulch, and plant trees alongside crops (agroforestry).</li>
        <li><b>Crop Diversification:</b> Practice crop rotation, intercropping, and plant a variety of fruits, vegetables, and legumes.</li>
        <li><b>Compost and Mulch:</b> Use organic compost and mulch to enrich soil without chemicals.</li>
        <li><b>Integrated Pest Management (IPM):</b> Combine natural predators, crop rotation, and minimal safe pesticides.</li>
        <li><b>Smart Water Use:</b> Build rainwater tanks, use drip irrigation, and avoid wasting water.</li>
        <li><b>Business Skills and Cooperatives:</b> Work with local farming cooperatives, share resources, and market crops together.</li>
        <li><b>Post-Harvest Handling:</b> Store harvests well, reduce loss, and add value through processing.</li>
        <li><b>Horticulture:</b> Grow Rwanda’s famous fruits and vegetables for profit and diet variety.</li>
      </ul>
      <p>
        <b>Farmers—your efforts to adopt these eco-friendly practices help protect Rwanda’s beauty and food security! EcoTour Rwanda is proud to support you in building a sustainable future.</b>
      </p>
    </div>
    <div class="col-md-5"><img src="images/rwanda-forest.jpg" class="img-fluid rounded" alt="Sustainable Agriculture Rwanda"></div>
  </div>
</section>

<!-- Reviews Section -->
<section id="reviews" class="container my-4 py-4">
  <h2 class="mb-3">Traveler Reviews & Impact</h2>
  <div class="row">
    <div class="col-md-4">
      <div class="border rounded p-3 bg-light">
        <strong>Beth, UK:</strong>
        <p>“Unforgettable! Knowing that part of my trip funded gorilla conservation made every moment special.”</p>
        <span class="eco-badge">Gorilla Trekking</span>
      </div>
    </div>
    <div class="col-md-4">
      <div class="border rounded p-3 bg-light">
        <strong>Jean-Paul, Rwanda:</strong>
        <p>“Canopy walk guides were so passionate about protecting the forest. Highly recommended.”</p>
        <span class="eco-badge">Canopy Walkway</span>
      </div>
    </div>
    <div class="col-md-4">
      <div class="border rounded p-3 bg-light">
        <strong>Lila, USA:</strong>
        <p>“Birdwatching helped me see how tourism can help keep habitats safe. Thank you!”</p>
        <span class="eco-badge">Birdwatching Safari</span>
      </div>
    </div>
  </div>
</section>

<!-- Contact Section -->
<section id="contact" class="container my-4 py-4">
  <div class="row">
    <div class="col-md-7">
      <h2>Contact EcoTour Rwanda</h2>
      <p>Questions, feedback, or want to partner with us? Drop us a message!</p>
      <form method="POST" action="contact.php">
  <div class="mb-3">
    <label for="name" class="form-label">Your Name</label>
    <input type="text" id="name" name="name" class="form-control" placeholder="Name" required>
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
  </div>
  <div class="mb-3">
    <label for="msgText" class="form-label">Message</label>
    <textarea id="msgText" name="message" rows="3" class="form-control" placeholder="Your message" required></textarea>
  </div>
  <button type="submit" class="btn btn-success">Send Message</button>
</form>

    </div>
    <div class="col-md-5 align-self-center">
      <img src="images/contact-ngo.jpg" class="img-fluid rounded" alt="EcoTour Rwanda Conservation">
    </div>
  </div>
</section>

<footer>
  &copy; <?php echo date('Y'); ?> EcoTour Rwanda | Powered by Community, Conservation & Technology
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Booking Modal (before </body>) -->
<div class="modal fade" id="bookModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <form class="modal-content" method="POST" action="book.php">
      <div class="modal-header">
        <h5 class="modal-title">Book a Service</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <input type="hidden" name="service" id="bookServiceInput" required>
        <div class="mb-3"><input type="text" name="name" class="form-control" placeholder="Your Name" required></div>
        <div class="mb-3"><input type="email" name="email" class="form-control" placeholder="Your Email" required></div>
        <div class="mb-3"><input type="text" name="phone" class="form-control" placeholder="Phone" pattern="^\d{7,15}$" title="Enter a valid phone number"></div>
        <div class="mb-3"><textarea name="details" class="form-control" placeholder="Tell us more (optional)"></textarea></div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success">Send Booking</button>
      </div>
    </form>
  </div>
</div>

<script>
document.querySelectorAll('[data-bs-target="#bookModal"]').forEach(btn => {
  btn.addEventListener('click', function() {
    document.getElementById('bookServiceInput').value = btn.getAttribute('data-service');
  });
});
</script>

</body>
</html>
