# Laravel-Auth-Profile

This laravel package takes advantage of the already provided Auth generation and extends it, enabling user profiles.

## Getting Started

These instructions will enable you to plug this package into your laravel installation and customise with ease.

### Installing

Step 1: Run laravel's Authentiaction scaffolding

```bash
php artisan make:auth
```

Step 2: Open a command window in the your laravel project folder and run

```bash
composer require mressex/laravel-auth-profile
```

Step 3: Register the AuthProfileServiceProvider::class
    
1. Open PROJECT_NAME/config/app.php 
2. In the `'providers' => []`  array, under `Illuminate\View\ViewServiceProvider::class,` add `MrEssex\LaravelAuthProfile\AuthProfileServiceProvider::class,`

Step 4: To customise the views run `php artisan vendor:publish`. Now you can edit the views in PROJECT_NAME/resources/views/vendor/mressex/laravel-auth-profile

Step 5: In your `resources/views/layouts/app.blade.php` Navigate to line 63, or `<a href="{{ route('logout') }}"` and add the following above it:

```html
<a href="{{ route('profile') }}">Profile</a>
```

## Common Errors
1. `[Login] view doesn't exist` Ensure you have ran `php artisan make:auth`

## Contributing

Please read [CONTRIBUTING.md](https://github.com/mressex/laravel-auth-profile/.git/CONTRIBUTING.md) for details on our code of conduct, and the process for submitting pull requests to us.

## Versioning

We use [SemVer](http://semver.org/) for versioning. For the versions available, see the [tags on this repository](https://github.com/mressex/laravel-auth-profile/tags). 

## Authors

* **Kyle Essex** - *Initial work* - [MrEssex](https://github.com/MrEssex)

See also the list of [contributors](https://github.com/mressex/laravel-auth-profile/contributors) who participated in this project.

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details