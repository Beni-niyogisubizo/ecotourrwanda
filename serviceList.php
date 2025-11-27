<!-- views/serviceList.php -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<style>
.card {
  margin: 15px;
}
.card-img-top {
  max-height: 200px;
  object-fit: cover;
}
</style>

<div class="container">
  <h2 class="my-4">Eco-Friendly Services</h2>
  <div class="row">
    <?php foreach ($services as $service): ?>
      <div class="col-md-4">
        <div class="card">
          <img src="<?php echo htmlspecialchars($service['image_url']); ?>" class="card-img-top" alt="<?php echo htmlspecialchars($service['name']); ?>">
          <div class="card-body">
            <h5 class="card-title"><?php echo htmlspecialchars($service['name']); ?></h5>
            <p class="card-text"><strong>Price:</strong> $<?php echo htmlspecialchars($service['price']); ?></p>
            <p class="card-text"><strong>Eco Rating:</strong> <?php echo htmlspecialchars($service['eco_rating']); ?>/5</p>
            <p class="card-text"><?php echo htmlspecialchars($service['description']); ?></p>
            <!-- Add booking button later -->
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>
