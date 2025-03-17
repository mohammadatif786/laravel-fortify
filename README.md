<b> Laravel 12 Fortify Authentication </b>

<p>
This project implements user authentication using <b>Laravel Fortify</b> in Laravel 12. It includes features like login, registration, email verification, and password reset with secure authentication handling.
</p>

<b> Features </b>

<p> ✅ User authentication (Login & Registration) </p>
<p> ✅ Email verification using Mailtrap </p>
<p> ✅ Password reset functionality </p>
<p> ✅ Secure authentication handling </p>
<p> ✅ Middleware protection for routes </p>
<p> ✅ Bootstrap UI for authentication pages </p>

<b> Installation </b>

1. <b> Clone the repository </b> <br>
   git clone https://github.com/mohammadatif786/laravel-fortify.git <br>
   cd laravel-fortify

2. <b> Install dependencies </b><br>
   composer install <br>
   npm install

3. <b> Set up environment </b><br>
   Copy .env.example and rename it to .env, then update the database credentials. <br>
   cp .env.example .env

4. <b> Generate application key </b> <br>
   php artisan key:generate

5. <b> Install Laravel Fortify </b> <br>
   composer require laravel/fortify <br>
   php artisan fortify:install <br>

6. <b> Install Laravel UI & Bootstrap </b> <br>
   composer require laravel/ui <br>
   php artisan ui bootstrap <br>
   npm install && npm run dev

7. <b> Run migrations </b> <br>
   php artisan migrate

8. <b> Configure Mailtrap for email verification </b> <br>
   Update the <b>.env</b> file with Mailtrap credentials:  
   <code>
   MAIL_MAILER=smtp <br>
   MAIL_HOST=smtp.mailtrap.io <br>
   MAIL_PORT=2525 <br>
   MAIL_USERNAME=your_mailtrap_username <br>
   MAIL_PASSWORD=your_mailtrap_password <br>
   MAIL_ENCRYPTION=tls <br>
   MAIL_FROM_ADDRESS=your-email@example.com <br>
   MAIL_FROM_NAME="Laravel Fortify"
   </code>

9. <b> Serve the application </b> <br>
   php artisan serve <br>
   Open http://127.0.0.1:8000 in your browser.

<b> Usage </b>

1. Register a new user account.
2. Verify your email using the link sent to your inbox.
3. Login with your registered credentials.
4. Reset your password if required.

<b> Technologies Used </b>

1. Laravel 12 – Backend framework
2. Laravel Fortify – Authentication package
3. Laravel UI – For Bootstrap-based UI
4. Blade – Templating engine
5. MySQL – Database
6. Bootstrap – Frontend styling

<b> License </b>

<p> This project is open-source and free to use. </p>
