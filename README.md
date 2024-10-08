# Laravel & Vue.js Project

This project is a web application built using Laravel and Vue.js. I am working on it. It is just a test project.

## Table of Contents

- [Installation](#installation)
- [Configuration](#configuration)
- [Database Setup](#database-setup)
- [Frontend Setup](#frontend-setup)
- [Running the Application](#running-the-application)
- [File Structure](#file-structure)
- [Features](#features)
- [Contributing](#contributing)
- [License](#license)

## Installation

### Clone the Repository
First, clone this repository to your local machine using Git:

```bash
git clone git@github.com:rubayetdev/Laravel-Vuejs.git
```
cd your-repository


### Install Laravel Dependencies
Install the required Laravel dependencies using Composer:

```bash
composer install
```


### Install NPM Dependencies
Install the required Node.js dependencies:
```bash
npm install
```

## Configuration
### Environment Setup
Copy the .env.example file to create your .env file:
```bash
cp .env .env
```
### Generate Application Key
Generate an application key, which is used for various encryption services:
```bash
php artisan key:generate
```
### Set Up Environment Variables
Open the .env file and configure your environment variables, such as database settings, mail configuration, and other services. Here's an example configuration:
```bash
APP_NAME="Laravel Vue App"
APP_ENV=local
APP_KEY=base64:your-generated-key
APP_DEBUG=true
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=root
DB_PASSWORD=
```

# Add your other environment variables here

## Database Setup


### Run Migrations
Migrate the database to create the required tables:
```bash
php artisan migrate
```

## Frontend Setup
### Compile Assets
Compile the frontend assets, including JavaScript and CSS:
```bash
npm run dev
```

### Vue.js Integration
This project is set up with Vue.js. You can find Vue components in the resources/js/components directory. To add a new component, create a .vue file in this directory, and reference it in your resources/js/app.js file.
```bash
Vue.component('example-component', require('./components/ExampleComponent.vue').default);
```

## Running the Application
### Start the Development Server
To start the Laravel development server, run:
```bash
php artisan serve
```
To start the Vue Js development server, run:
```bash
npm run dev
```

## File Structure
```bash
├── app/                    # Application logic and models
├── bootstrap/              # Bootstrap framework files
├── config/                 # Configuration files
├── database/               # Database migrations and seeds
├── public/                 # Publicly accessible files (e.g., index.php, assets)
├── resources/              # Views, languages, and frontend assets (CSS, JS, Vue components)
├── routes/                 # Application routes (web.php, api.php)
├── storage/                # Logs, cache, compiled Blade templates
├── tests/                  # Automated tests
└── webpack.mix.js          # Laravel Mix configuration file for asset compilation
```
## Features
* Laravel Backend: Utilize Laravel for backend logic, routing, and data management.
* Vue.js Frontend: Build dynamic user interfaces with Vue.js components.
* Authentication: Basic user authentication and registration features.
* CRUD Operations: Fully functional Create, Read, Update, Delete operations.
* Responsive Design: Mobile-first, responsive design using Tailwind CSS.


## Contributing
Contributions are welcome! If you want to contribute to this project, please fork the repository and submit a pull request.

## License
This project is open-source and licensed under the MIT License.
Author: [Sheikh Md. Rubayet Islam Ifti](https://github.com/rubayetdev)
