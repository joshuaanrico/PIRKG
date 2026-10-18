# PIRKG: dental information and reservation site

A website for a dental clinic: patients read health articles, register, and book an appointment; admins publish articles, record which dentists are in, and manage the reservation list.

PIRKG stands for *Pusat Informasi dan Reservasi Kesehatan Gigi* (Dental Health Information and Reservation Centre). Software engineering project (PPL), Sumatra Institute of Technology, February to May 2020. Team of 3.

## Features

- Patient register, log in and profile
- Dental health articles with a "read more" page
- Reservation form for patients, with booking rules
- Admin area: write articles, set dentist attendance, view and manage reservations

## Stack

| Part | Tech |
|---|---|
| Framework | CodeIgniter 3 (PHP, MVC) |
| Database | MySQL (`pirkg.sql`) |
| Frontend | HTML, CSS, JavaScript, Bootstrap |

## My part

I was the main contributor (33 of 44 commits, not counting merges). I set up CodeIgniter and the database, built the header, footer and home page, the register, login and profile backend, the article pages and admin article editor, the patient reservation form and its backend, the admin reservation table and dentist attendance. M. Hafidh Dliyaul Haq and Nurul Fauzia Aziza worked on other pages and fixes.

## Run locally

Needs PHP 7 and MySQL, for example with XAMPP.

1. Copy the repo into your web root as `htdocs/PIRKG`.
2. Create a database called `pirkg` and import `pirkg.sql`.
3. Database settings are in `application/config/database.php` (default: `root` with no password, XAMPP style).
4. Open http://localhost/PIRKG.

## Project structure

```
application/controllers/   Pages, Users, Posts (articles), Admins
application/models/        one model per controller
application/views/         page templates
pirkg.sql                  database schema and sample data
system/, user_guide/       CodeIgniter itself
```

## Note

Kept close to how it was submitted in 2020. The UI text is in Indonesian. CodeIgniter's own licence is in `license.txt`.
