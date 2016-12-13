PHP Plaid API Client
=====================
> _with Laravel extras_

This is a fairly robust set of classes that attempts to adhere strictly to the [Plaid API documentation](https://plaid.com/docs/api).

-------------------------

Installation
-------------

`composer require oldtimeguitarguy/plaid`

### _Laravel Only_

> Just to reiterate... **LARAVEL IS NOT REQUIRED TO USE THIS API CLIENT**

1. Add the following line to `config/app.php@providers`: `OldTimeGuitarGuy\Plaid\Laravel\PlaidServiceProvider::class,`

2. For facade access, add the following line to `config/app.php@aliases`: `'Plaid' => OldTimeGuitarGuy\Plaid\Laravel\PlaidFacade::class,`

3. Run `php artisan vendor:publish`

4. Reference the config file copied to `config/plaid.php`

USAGE
------

> I still need to write usage instructions. In the meantime, please reference the tests.
> Everything should be fairly straight-forward.
>
> **ALSO**, check out my response to [this issue question](https://github.com/oldtimeguitarguy/plaid/issues/1)

TESTS
------
```
AuthService
 [x] Add user
 [x] User step
 [x] Update user
 [x] Delete user
 [x] Get data

BalanceService
 [x] Get balance

CategoriesService
 [x] Get all categories
 [x] Get category by id

ConnectService
 [x] Add user
 [x] User step
 [x] Update user
 [x] Delete user
 [x] Get data

IncomeService
 [x] Add user
 [x] User step
 [x] Update user
 [x] Delete user
 [x] Get data

InfoService
 [x] Add user
 [x] User step
 [x] Update user
 [x] Delete user
 [x] Get data

InstitutionsService
 [x] Get all institutions
 [x] Get institution by type
 [x] Get institution by id
 [x] Search institutions
 [x] Search institutions by id
 [x] Get longtail institutions

PlaidExceptionResponse
 [x] Bad requests throw plaid request exception
 [x] Plaid request exception provides plaid response

Response
 [x] Iterate through arrayable top level contents

RiskService
 [x] Add user
 [x] User step
 [x] Update user
 [x] Delete user
 [x] Get data

UpgradeService
 [x] Upgrade user
```
