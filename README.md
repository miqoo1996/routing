PHP Routing
----------------------

* composer require miqoo1996/routing

```PHP
Example Web Route


use miqoo1996\routing\Core\Route;
use miqoo1996\routing\Http\Controllers\ExampleController;

Route::get('/', [ExampleController::class, 'welcomePage']);
Route::post('/post', [ExampleController::class, 'post']);
Route::put('/put', [ExampleController::class, 'put']);
Route::patch('/patch', [ExampleController::class, 'patch']);
Route::delete('/delete', [ExampleController::class, 'delete']);

```

```PHP
Example API Route

use miqoo1996\routing\Core\Route;
use miqoo1996\routing\Http\Controllers\BooksController;

Route::initializeRESTApi();

Route::get('/book', [BooksController::class, 'retrieve']);
Route::post('/book', [BooksController::class, 'store']);
Route::delete('/book', [BooksController::class, 'delete']);
Route::put('/book', [BooksController::class, 'update']);
Route::patch('/book', [BooksController::class, 'update']);

```

```php
Controller Example
namespace miqoo1996\routing\Http\Controllers;


class BooksController
{
    public function retrieve()
    {

    }

    public function store()
    {

    }

    public function update()
    {

    }

    public function delete()
    {

    }
}
```

Additional
-----------

* Make .htaccess file to redirect all page to index.php if you dont have.

```.htaccess
<IfModule mod_rewrite.c>
    <IfModule mod_negotiation.c>
        Options -MultiViews -Indexes
    </IfModule>

    RewriteEngine On

    # Handle Authorization Header
    RewriteCond %{HTTP:Authorization} .
    RewriteRule .* - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization}]

    # Redirect Trailing Slashes If Not A Folder...
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_URI} (.+)/$
    RewriteRule ^ %1 [L,R=301]

    # Send Requests To Front Controller...
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteRule ^ index.php [L]
</IfModule>
```