PHP Plaid API Client
=====================
> _with Laravel extras_

This is a fairly robust set of classes that attempts
to adhere strictly to the [Plaid API documentation](https://plaid.com/docs/api).

It's not quite finished, but I've organized the code structure
with expansion in mind. I have a list of service implementations below.

-------------------------

Installation
-------------

`composer require oldtimeguitarguy/plaid`

### _Laravel Only_

1. Add the following line to `config/app.php@providers`: `OldTimeGuitarGuy\Plaid\Laravel\PlaidServiceProvider::class,`

2. For facade access, add the following line to `config/app.php@aliases`: `'Plaid' => OldTimeGuitarGuy\Plaid\Laravel\PlaidFacade::class,`

3. Run `php artisan vendor:publish`

4. Reference the config file copied to `config/plaid.php`

> ### Non-Laravel Users
>
> `OldTimeGuitarGuy\Plaid\Plaid` requires an instance of `OldTimeGuitarGuy\Plaid\Contracts\Http\Request`,
> which has an implementation here: `OldTimeGuitarGuy\Plaid\Http\Request`.
> That implementation requires an instance of `GuzzleHttp\ClientInterface`,
> which you might rightly guess is typically implemented as `GuzzleHttp\Client`.

Usage
-----

> While `OldTimeGuitarGuy\Plaid\Plaid` is the main entry point, it doesn't necessarily _have to be_.
> You can use any of the services individually if you choose.
> You can find the services under the services namespace: `OldTimeGuitarGuy\Plaid\Services`.
> They are named according to the [documentation](https://plaid.com/docs/api).

**The services are nicely documented in the code, so you shouldn't have much of an issue using them.**
**Each method on the services also includes a link to the [official Plaid documentation](https://plaid.com/docs/api) it references.**

```php

// Grab an instance of OldTimeGuitarGuy\Plaid\Plaid
$plaid = new Plaid(<OldTimeGuitarGuy\Plaid\Contracts\Http\Request>);

// Use the connect service via a method or property call
$plaid->connect->addUser(...);
$plaid->connect()->addUser(...);

// Laravel users may use the facade if they choose
Plaid::connect()->addUser(...);

```

All Plaid requests return Plaid responses (surprise!).
They may also throw a Plaid request exception.
You can access the Plaid response on the Plaid exception instance.

In addition to this, there are two useful interfaces to translate response codes:

`OldTimeGuitarGuy\Plaid\Contracts\Http\Codes\ResponseCodes`
`OldTimeGuitarGuy\Plaid\Contracts\Http\Codes\ErrorCodeDetails`

Please see the example below.

```php

try {
    // Perform a Plaid request & get a Plaid response
    $success = $plaid->connect->addUser(...);
}

// Catch the Plaid request exception
catch(PlaidRequestException $e) {
    // Get the Plaid response from the exception instance
    $error = $e->response();

    // Check the response status code
    if ( $error->statusCode() === ResponseCodes::REQUEST_FAILED ) {
        switch ($error->code) {
            case ErrorCodeDetails::INVALID_CREDENTIALS:
                ...
                break;

            case ErrorCodeDetails::INVALID_MFA:
                ...
                break;

            etc...
        }
    }
}

// Get the status code
$success->statusCode();

// You can reference the response properties directly on this instance.
// The top layer of properties can be optionally referenced as methods.
// Again, please reference the [documentation](https://plaid.com/docs/api) for more information.

$success->accounts;
$success->accounts();

$success->transactions[1]->meta->location->coordinates->lat;
$success->transactions()[1]->meta->location->coordinates->lat;

$success->access_code;
$success->access_code();

```

-------------------------

Services Implemented
---------------------

- [x] Connect
- [ ] Auth
- [ ] Info
- [ ] Income
- [ ] Risk
- [ ] Balance
- [ ] Upgrade
- [ ] Institutions
- [ ] Categories

Contributing
-------------

You are more than welcome to contribute. Please try to adhere to the general code style.
If you are making a service implementation, please reference the Connect service implementation
as a formatting and documentation guide.
