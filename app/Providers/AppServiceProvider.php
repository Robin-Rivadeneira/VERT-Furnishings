<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Controllers\IndexController;

class AppServiceProvider extends ServiceProvider
{
    
    public function register(): void
    {
    }

    public function boot(): void
    {
        $routeFiles = [
            base_path('routes/index.php'),
            base_path('routes/store.php'),
            base_path('routes/categoires.php'),
            base_path('routes/subCategoires.php'),
            base_path('routes/product.php')
        ];

        foreach ($routeFiles as $routeFile) {
            if (!file_exists($routeFile)) {
                throw new \Exception("El archivo de rutas $routeFile no existe.");
            }

            require $routeFile;
        }
    }
}
