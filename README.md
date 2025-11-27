# EcoTour Rwanda

EcoTour Rwanda is a PHP/MySQL web application that connects travelers with eco‑friendly tours in Rwanda while channeling bookings toward conservation and local communities. It demonstrates how a simple digital platform can promote responsible tourism, support forest and wildlife protection, and make conservation stories visible online.

## Features

- Browse curated eco‑services (gorilla trekking, canopy walks, birdwatching, voluntourism, community tours).
- Book eco‑tours via a Bootstrap modal; bookings are stored in MySQL and email confirmations are sent to visitor and admin.
- Contact form for questions and partnerships, with database storage and auto‑reply email.
- Newsletter subscription that saves subscriber emails and sends a welcome message.
- Conservation and sustainable agriculture sections explaining how tourism supports reforestation, wildlife protection, and rural livelihoods.
- Live conservation news snippet, pulling headlines about Rwanda from an external RSS feed (when available).
- Fully responsive interface using Bootstrap 5, optimized for mobile and desktop.

## Tech Stack

- PHP 8 (procedural PHP with simple controllers)
- MySQL (Hostinger phpMyAdmin)
- Bootstrap 5 (CDN)
- HTML5, CSS3
- Deployed on Hostinger shared hosting with HTTPS

## Running the project locally

1. Clone the repository:

git clone https://github.com/Beni-niyogisubizo/ecotourrwanda.git
cd ecotourrwanda


2. Create a MySQL database (e.g. `ecotourrwanda`) in phpMyAdmin or MySQL CLI.

3. Import the schema and sample data:

-- In phpMyAdmin: choose the database, go to Import, select ecotourrwanda.sql, and run.


4. Copy the example config and fill your local credentials:

cp config.example.php config.php


Edit `config.php` and set your database name, username, and password.

5. Move the project into your local web root (e.g. `htdocs` for XAMPP) and start Apache/MySQL.

6. Visit:

- `http://localhost/ecotourrwanda` for the site.
- Test booking, contact, and newsletter forms.

## Live deployment

- **Live site:** `https://ecotourrwanda.site`
- Hosted on Hostinger Single Web Hosting with a free SSL certificate (HTTPS).

## Future improvements

- Full multi‑role authentication (tourists, tour operators, NGOs) with dashboards.
- “My bookings” page so tourists can see their history and impact.
- Operator tools to manage listings and availability.
- Richer impact reporting for conservation partners (NGOs).
- Multi‑language support (English/Kinyarwanda/French).

---

This project was built as a learning prototype to practice full‑stack web development, deployment, and basic integrations (database + email) while telling a real conservation story about Rwanda.

