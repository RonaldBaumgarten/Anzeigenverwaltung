## How to run this app

If Laravel is not installed on your system, follow the instructions on [laravel.com](https://laravel.com/docs/12.x/installation) to do so.

If you are using Herd, it should suffice to clone the repository into your ~/Herd directory and visit [http://anzeigenverwaltung-app.test](anzeigenverwaltung-app).

### Withoud Herd

Clone the project, change into the project's root-directory and run the following commands:

```
composer update
npm install
npm run build
```

# Now, create sample data:
```
php artisan db:seed
```

# Run the App:
```
compser run dev
```

Finally, visit [localhost:8000](localhost:8000) in your browser!
