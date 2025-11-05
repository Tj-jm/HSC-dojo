# HSC-Dojo
**Bangladesh’s First Full-Fledged EdTech Platform — Built During the Onset of the Pandemic**

---

## 🧭 Overview

**HSC-Dojo** is a Laravel-based online learning platform launched during the early months of the COVID-19 pandemic (2020).
At a time when physical classrooms were closed, it emerged as **Bangladesh’s first complete digital education system**, enabling students nationwide to continue structured study, practice, and interaction remotely.

The platform integrated lessons, practice modules, exams, and instructor support into one coherent ecosystem — effectively laying the groundwork for modern successors.

This repository preserves the **original Laravel 7 codebase** as a historical and technical archive of that landmark development.

---

## ⚙️ Tech Stack

- **Framework:** Laravel 7 (PHP)
- **Frontend:** Blade Templates, Bootstrap, jQuery
- **Database:** MySQL
- **Dependencies:** Composer, NPM
- **Server:** Apache / Nginx (PHP 7.4+)

---

## 🧩 Key Features

1. **High-Performance and Innovative Practice Tools**
   - Interactive, error-checked practice systems created by leading Bangladeshi educators.
   - Real-time scoring and feedback for continuous assessment.

2. **Lessons & Weekly Activities**
   - Structured weekly lesson plans with integrated progress tracking.
   - Designed and curated by top national instructors.

3. **24/7 Problem-Solving Support**
   - Around-the-clock academic assistance by experienced faculty.
   - Ensures students never face learning bottlenecks alone.

4. **Program-Wise Course Arrangements**
   - Organized 3–4-month programs aligned with national curricula.
   - Provides clear academic milestones and exam preparation cycles.

5. **Separate Streams for English-Version Students**
   - Tailored content for both Bengali and English-medium learners.
   - Unified backend with distinct front-end experiences per stream.

6. **Adaptive Mobile Interface**
   - Fully responsive for smartphones and tablets.
   - Designed for accessibility in low-resource environments.

7. **Free Access to High-Quality Educational Resources**
   - A dedicated blog section offering study notes and articles free of cost.
   - Promoted open learning and community knowledge sharing.

8. **Affordable Premium Subscriptions**
   - Extended access, live sessions, and premium content at accessible pricing.
   - Each paid program spanned roughly 3–4 months.

---

## 🏛️ Historical Significance

Developed in early 2020 by **Nur A Jaman** and his team under *Studio-T*, HSC-Dojo became the **first fully integrated EdTech ecosystem of Bangladesh**.
Its launch marked a pivotal shift in national education delivery — pioneering blended learning, 24/7 teacher interaction, and structured online practice long before such systems became mainstream.

It set the conceptual and architectural foundations, making it a cornerstone in the country’s EdTech evolution.

---

## 🛠️ Installation

```bash
git clone https://github.com/Tj-jm/HSC-dojo.git
cd HSC-dojo
composer install
npm install
cp .env.example .env
php artisan key:generate
```

Configure your database in `.env`, then run:
```bash
php artisan migrate --seed
php artisan serve
```
Visit **http://localhost:8000**

---

## 🧱 Project Structure

```
HSC-dojo/
├── app/                # Core application (controllers, models)
├── bootstrap/          # Laravel bootstrap scripts
├── config/             # Configuration files
├── database/           # Migrations, factories, seeders
├── public/             # Public assets
├── resources/          # Blade templates, JS, CSS
├── routes/             # Web & API routes
├── storage/            # Logs, cache, sessions
└── tests/              # PHPUnit tests
```

---

## 🧰 Common Commands

```bash
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear
npm run dev      # Development build
npm run build    # Production build
php artisan optimize
```

---

## 🧾 Deployment

1. `APP_ENV=production`, `APP_DEBUG=false`
2. `composer install --optimize-autoloader --no-dev`
3. `npm run build`
4. `php artisan config:cache && php artisan route:cache && php artisan view:cache`
5. Correct permissions on `storage` and `bootstrap/cache`
6. Configure Apache/Nginx virtual host

---

## 🏷️ Legacy Notice

This repository is maintained as an **archival codebase** representing Bangladesh’s earliest complete online education infrastructure.
It is not under active development but stands as a technical and historical milestone in the nation’s digital learning transformation.

---

## 📄 License

**Proprietary Software — All Rights Reserved**
© 2019–2025 Nur A Jaman

Unauthorized copying, modification, or redistribution is prohibited without written permission.

---



---
## 🎥 Demo Video

Watch the full system walkthrough below:

[![Watch HSC-Dojo Demo](https://drive.google.com/thumbnail?id=1s6e_R1UA3BZNF1WSaGjRfEwRbSCGQrw_)](https://drive.google.com/file/d/1s6e_R1UA3BZNF1WSaGjRfEwRbSCGQrw_/preview)


This video showcases the complete system architecture, interface, and functionality designed during the 2020 pandemic launch.


## 📬 Contact

Developed by **Nur A Jaman**
- Website: [turjo-jaman.com](https://turjo-jaman.com)
- GitHub: [@Tj-jm](https://github.com/Tj-jm)
