
# How to copy this repository

Follow these steps to copy this repository to your local machine and run the application.

## 1. Clone the repository

Use the `git clone` command to clone the repository to your desired location.

```bash
git clone https://github.com/your-username/your-repository.git
```

## 2. Install the dependencies

Use the `npm install` and `composer install` commands to install the required dependencies.

```bash
npm install
composer install
```

## 3. Cache the configuration

Use the `php artisan config:cache` command to cache the configuration files.

```bash
php artisan config:cache
```

## 4. Run the migrations (and seed the database)

Use the `php artisan migrate` command to run the database migrations. You will need to manually seed the database table `rate` and `meter` using the `php artisan db:seed` command with the appropriate class name. Then, use the `npm run build` command to build the application.

```bash
php artisan migrate
php artisan db:seed --class=ElectricUsageTableSeeder
npm run build
```

## 5. Run the application

Use the `php artisan serve`, `npm run dev`, and `php artisan websockets:serve` commands to run the application on your local server.

```bash
php artisan serve
npm run dev
php artisan websockets:serve
```

## 6. Open the application in your browser

Go to `http://localhost:8000` to see the application in action.

# Applied Security Measures

## 1. Authentication



