# Project Setup Instructions

## Step 1: Clone the Repository

Clone this repository to your local machine using the following command:

```bash
git clone https://github.com/IvanSholana/LMS_Punggawa-master.git
cd LMS_Punggawa-master
```

## Step 2: Install Dependencies

Install all the necessary dependencies by running:

```bash
composer install
```

## Step 3: Create Database

Create a new MySQL database with the name `example`. You can do this using the MySQL command line:

```sql
CREATE DATABASE example;
```

## Step 4: Import the Database

Import the `lms.sql` file into the `example` database. You can use the following command:

```bash
mysql -u your_username -p example < path/to/lms.sql
```

Replace `your_username` with your MySQL username and `path/to/lms.sql` with the path to the `lms.sql` file.

## Step 5: Configure Environment File

Copy the `.env.example` file to `.env`:

```bash
cp .env.example .env
```

Open the `.env` file and set the database name to `example`:

```env
DB_DATABASE=example
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

Make sure to replace `your_username` and `your_password` with your actual MySQL username and password.

## Step 6: Run Tinker Commands

Run the following Tinker commands to create the users:

```bash
php artisan tinker --execute="\App\Models\User::create(['name' => 'Admin User', 'username' => 'example@admin', 'email' => 'admin@example.com', 'email_verified_at' => now(), 'password' => bcrypt('password'), 'photo' => 'path/to/photo.jpg', 'phone' => '123456789', 'address' => 'Admin Address', 'role' => 'admin', 'status' => '1', 'last_seen' => now(), 'remember_token' => \Illuminate\Support\Str::random(10)]);"
```

```bash
php artisan tinker --execute="\App\Models\User::create(['name' => 'Instructor User', 'username' => 'example@instructor', 'email' => 'instructor@example.com', 'email_verified_at' => now(), 'password' => bcrypt('password'), 'photo' => 'path/to/photo.jpg', 'phone' => '123456789', 'address' => 'Instructor Address', 'role' => 'instructor', 'status' => '1', 'last_seen' => now(), 'remember_token' => \Illuminate\Support\Str::random(10)]);"
```

```bash
php artisan tinker --execute="\App\Models\User::create(['name' => 'Regular User', 'username' => 'example@user', 'email' => 'user@example.com', 'email_verified_at' => now(), 'password' => bcrypt('password'), 'photo' => 'path/to/photo.jpg', 'phone' => '123456789', 'address' => 'User Address', 'role' => 'user', 'status' => '1', 'last_seen' => now(), 'remember_token' => \Illuminate\Support\Str::random(10)]);"
```

## Step 7: You're All Set!

Your application should now be configured and ready to use. Happy coding!
