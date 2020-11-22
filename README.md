# Example acquiring laravel-package

1. Add repository in `composer.json`
    ```json
    {
      "repositories": [
        {
          "type": "git",
          "url": "https://github.com/lo2s/laravel-package.git"
        }
      ]
    }
    ```
   
2. Install package: `composer require lo2s/laravel-package`
3. Publish package files: `php artisan vendor:publish --provider=Lo2s\\LaravelPackage\\PackageServiceProvider` 
4. Set environment variables:
    - ACQUIRING_PROVIDER (available values: **json, xml**)
    - ACQUIRING_URL_CREATE_PAYMENT
    - ACQUIRING_URL_GET_PAYMENT_STATUS
5. Run migrations: `php artisan migrate`
