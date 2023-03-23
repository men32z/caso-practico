# Caso practico

> Schoolar project.

## Live Version

[here](https://caso.preza.dev/)

## Built With

- Laravel
- Vue
- HTML
- Mysql
- CSS
- Tailwind

## Requirements

To run this proyect you must have the next tools installed in your computer.
- XAMP or native PHP and Mysql
- Composer
- Node

## Local Install

1. Clone the project to your local directory

```
 git clone git@github.com:men32z/caso-practico.git
```

2. Get in to the folder app

```
cd caso-practico
```

3. Prepare environment
```
cp .env.example .env
php artisan key:generate
```

4. Install dependencies
```
composer install
npm install
```

5. Migrate and seed 
```
php artisan migrate --seed
```
6. Configure your database on the env file.
```
DB_HOST=********
DB_PORT=********
DB_DATABASE=********
DB_USERNAME=********
DB_PASSWORD=********
```
7. run server

```
php artisan serve
```

### Usage

Go to Localhost in your favorite browser

```
http://localhost:8000/
```

### Run tests

```
php artisan test
```

## Author

👤 **Luis Preza**

- Github: [@men32z](https://github.com/men32z)
- Linkedin: [Luis Preza](https://www.linkedin.com/in/men32z/)

## Show your support

Give a ⭐️ if you like this project!

### 📝 License
ANY TYPE OF REPRODUCTION, COMMERCIAL EXPLOITATION, EXCHANGE IS STRICTLY PROHIBITED