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


TODO
-----
- [ ] Test the code
- [ ] Write documentation!
