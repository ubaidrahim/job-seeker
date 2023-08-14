# Setting Up and Running a Laravel Application Locally

Welcome to the guide on setting up and running a Laravel application on your local machine. Laravel is a powerful PHP web framework that simplifies the development of web applications.

## Prerequisites

Before you start, make sure you have the following software installed:

- **PHP**: You can download PHP from [php.net](https://www.php.net/downloads.php).
- **Composer**: Download and install Composer from [getcomposer.org](https://getcomposer.org/download/).
- **Node.js and npm**: Install Node.js and npm from [nodejs.org](https://nodejs.org/).
- **Database**: Set up a database server such as MySQL, PostgreSQL, SQLite, etc.

## Setup Steps

Follow these steps to get your Laravel application up and running:

1. **Clone the Repository**:

    ```bash
    git clone <repository_url>
    cd <project_folder>
    ```

2. **Install Dependencies**:

    ```bash
    composer install
    npm install
    ```

3. **Configure Environment**:

    - Duplicate `.env.example` and name it `.env`.
    - Update the `.env` file with your database credentials and settings.

4. **Generate Application Key**:

    ```bash
    php artisan key:generate
    ```

5. **Run Migrations**:

    ```bash
    php artisan migrate
    ```

6. **Compile Assets**:

    ```bash
    npm run dev
    ```

7. **Start Development Server**:

    ```bash
    php artisan serve
    ```

    Access your Laravel app at `http://localhost:8000` in your browser.

## Additional Steps

- **Cache and Configuration**: During development, clear and cache config files with `php artisan config:clear` and `php artisan config:cache`.

- **Authentication and Authorization**: For user auth and authorization, utilize Laravel's built-in tools.

- **Testing**: Run tests with `php artisan test` using Laravel's testing suite.

## Conclusion

Congratulations! Your local Laravel app is now up and running. Explore the extensive Laravel documentation to discover advanced features and customization options. Happy coding!

# Testing Laravel API using POSTMAN

After setting up Laravel application on your local machine, you need to install POSTMAN application to interact with APIs.

## POSTMAN Installation

To install POSTMAN go to [postman.com](https://www.postman.com/downloads/) and install download & install the setup.

## Using job-seeker app through POSTMAN

- Go to `routes/api.php` in the root directory of your project.
- To fetch GET request routes, you need to select GET request from the dropdown.
- Now enter complete URL in the following input field. e.g To get list of all jobs you need to access `http://localhost:8000/api/jobs`. (Remeber to add prefix **'api'** in the route).

To send POST request with values:

- Select POST from the dropdown.
- Enter the complete URL with prefix **'api'** e.g `http://localhost:8000/api/login`.
- Go to **Body** tab and select **x-www-form-urlencoded** from radio buttons.
- Now populate the list of values to send to post request with the key value pairs and hit send.

To send request to protected route via **auth:sanctum** middleware.

- To send request to sanctum routes you need to provide `API Token` generated for each user.
- Copy the **API Token** provided when user in logged in.
- Go to **Authorization** tab and select **Bearer Token** from dropdown.
- Now paste the **API Token** in the provided input field.

Hope you enjoy the Job Seeker API. Feel free to contact me for any queries.

- **Email** `ubaidrahim@gmail.com`
- **Linkedin Profile** `https://www.linkedin.com/in/ubaidrahim/`