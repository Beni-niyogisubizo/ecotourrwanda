<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>EcoTour Rwanda | Blog</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

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
<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
  <div class="container">
    <a class="navbar-brand" href="index.php">EcoTour Rwanda</a>
    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="blog.php" class="nav-link active">Blog</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container py-5">
  <h2>EcoTour Rwanda Blog</h2>

  <?php
$feed_url = "https://news.mongabay.com/feed/?s=Rwanda";
$rss = @simplexml_load_file($feed_url);
if ($rss):
    $max_items = 3;
    $count = 0;
    echo '<h4>Latest Rwanda Conservation News</h4>';
    foreach ($rss->channel->item as $item) {
        if ($count++ >= $max_items) break;
        // Try to extract a summary/description if available:
        $description = isset($item->description) ? strip_tags($item->description) : '';
        // Truncate description for preview:
        $preview = substr($description, 0, 220);
        echo '<div class="card mb-4 shadow-sm">';
        echo '<div class="card-body">';
        echo '<h5 class="card-title"><a href="' . htmlspecialchars($item->link) . '" target="_blank">' . htmlspecialchars($item->title) . '</a></h5>';
        echo '<div class="mb-2"><small class="text-muted">' . date('F j, Y', strtotime($item->pubDate)) . '</small></div>';
        echo '<p class="card-text">' . htmlspecialchars($preview) . '...</p>';
        echo '<a href="' . htmlspecialchars($item->link) . '" class="btn btn-success btn-sm" target="_blank">Read More</a>';
        echo '</div></div>';
    }
else:
    echo '<div class="alert alert-warning">Could not load latest news at this time.</div>';
endif;
?>

<!-- Social Share Bar -->
<div class="my-2">
  <span class="me-2 fw-bold">Share this:</span>
  <a href="https://www.facebook.com/sharer/sharer.php?u=https://ecotourrwanda.com" target="_blank" title="Share on Facebook">
    <img src="images/facebook-icon.png" alt="Facebook" style="height:28px;">
  </a>
  <a href="https://twitter.com/intent/tweet?url=https://ecotourrwanda.com&text=EcoTour+Rwanda+-+Real+Conservation+Tours%21" target="_blank" title="Share on Twitter">
    <img src="images/twitter-icon.png" alt="Twitter" style="height:28px;">
  </a>
  <a href="https://wa.me/?text=https://ecotourrwanda.com" target="_blank" title="Share on WhatsApp">
    <img src="images/whatsapp-icon.png" alt="WhatsApp" style="height:28px;">
  </a>
</div>



  <!-- Example blog posts -->
  <div class="card mb-3">
    <div class="card-body">
      <h3 class="card-title">EcoTour Rwanda Launches New Gorilla Trek</h3>
      <div class="text-muted">2025-11-02</div>
      <p>We are excited to unveil a new gorilla trekking package in Volcanoes National Park, supporting conservation and local communities.</p>
    </div>
  </div>
  <div class="card mb-3">
    <div class="card-body">
      <h3 class="card-title">Farmers and Conservation: Our New Program</h3>
      <div class="text-muted">2025-11-01</div>
      <p>Learn the latest about eco-friendly agriculture practices and how farmers can be heroes for Rwanda's environment.</p>
    </div>
  </div>
  <!-- Add more posts as you want -->
</div>
<footer>
  &copy; <?php echo date('Y'); ?> EcoTour Rwanda | Powered by Community, Conservation & Technology
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
