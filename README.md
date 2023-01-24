Once downloaded please do the following 
```
composer install
npm install
php artisan key:generate
```

then you have to remove ```.example``` from ```.env``` file
after that update it with your database credentials 
lastly run 
```
php artisan migrate
npm run dev 
php artisan serve
```
