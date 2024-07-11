<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## subscription with laravel cashier and stripe

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [install laravel](https://laravel.com/docs/11.x#creating-a-laravel-project).
- [install breeze for authentication](https://laravel.com/docs/11.x/starter-kits#laravel-breeze).
- [install cashier](https://laravel.com/docs/11.x/billing#main-content).
- [configure cashier and user model](https://laravel.com/docs/11.x/billing#configuration).
- [configure stripe webhook](https://laravel.com/docs/11.x/billing#handling-stripe-webhooks)
- [create stripe product and pricing](https://laravel.com/docs/eloquent).
- [create pricing product](https://laravel.com/docs/migrations).
- [checkout with stripe](https://laravel.com/docs/queues).
- [check user subscription](https://laravel.com/docs/broadcasting).



## install laravel


## install laravel Breeze for authentication

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

## install laravel cashier


## configure stripe webhook
- go to [the stripe cli](https://docs.stripe.com/stripe-cli) this link.
- install the stripe cli . [here is github link ](https://github.com/stripe/stripe-cli/releases/tag/v1.21.0).
- after download stipe.exe .
- run this strip.exe file in cmd .
- after run it cmd 
- C:\Users\arifu>C:\Users\arifu\Downloads\stripe_1.21.0_windows_x86_64\stripe.exe login
- it will give u a link like this [create pricing product](https://dashboard.stripe.com/stripecli/confirm_auth?t=RkgD8ALLAi6yt9q9tnjs0Ljz4kSS8Dcg)](https://dashboard.stripe.com/stripecli/confirm_auth?t=RkgD8ALLAi6yt9q9tnjs0Ljz4kSS8Dcg) like this .
- when click this link it will redirect you stripe dashboad for allow access . then you will allow it 
- when in our project terminal we will write php artisan cashier:webhook
- before this command we have to change our .env file to this APP_URL=http://stripe.test
- we will get this message The Stripe webhook was created successfully. Retrieve the webhook secret in your Stripe dashboard and define it as an environment variable.
- after that you will go to cmd again and write this 
- listen --forward-to http://stripe.test/stripe/webhook
- it will give a secrect key like this Your webhook signing secret is whsec_0fcfgf1b997a14345443jlefd80e08e0d2286b4f8354805bf1jlj22911eb2547580f60db547c8cc18
- copy this key and go to .env file and write STRIPE_WEBHOOK_SECRET="key will go here"
 
 this is configuration of webhook stripe 

## create stripe product and pricing.

- php artisan make:view pricing
- this way i will create a pricng page
  
  ```code
     <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    
     <!-- Pricing -->
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <!-- Title -->
        <div class="max-w-2xl mx-auto text-center mb-10 lg:mb-14">
            <h2 class="text-2xl font-bold md:text-4xl md:leading-tight dark:text-white">Subscription Plans</h2>
            <p class="mt-1 text-gray-600 dark:text-gray-400">Choose the plan that better fits your needs.</p>
        </div>
        <!-- End Title -->

        <!-- Grid -->
        <div class="mt-12 grid sm:grid-cols-1 lg:grid-cols-3 gap-6 lg:items-center">
            <!-- Card -->
            <div class="flex flex-col border border-gray-200 text-center rounded-xl p-8 dark:border-gray-700">
                <h4 class="font-medium text-lg text-gray-800 dark:text-gray-200">Monthly</h4>
                <span class="mt-5 font-bold text-5xl text-gray-800 dark:text-gray-200">
                    <span class="font-bold text-2xl -me-2">$</span>
                    4.99
                </span>
                <p class="mt-2 text-sm text-gray-500">No commitments. Cancel anytime.</p>

                <a href="{{ route('checkout', ['plan' => 'premium_monthly']) }}" class="mt-5 py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-indigo-100 text-indigo-800 hover:bg-indigo-200 disabled:opacity-50 disabled:pointer-events-none dark:hover:bg-indigo-900 dark:text-indigo-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" >
                    Sign up
                </a>
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="flex flex-col border-2 border-indigo-600 text-center shadow-xl rounded-xl p-8 dark:border-indigo-700">
                <p class="mb-3"><span class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-lg text-xs uppercase font-semibold bg-indigo-100 text-indigo-800 dark:bg-indigo-600 dark:text-white">Most popular</span></p>
                <h4 class="font-medium text-lg text-gray-800 dark:text-gray-200">Yearly</h4>
                <span class="mt-5 font-bold text-5xl text-gray-800 dark:text-gray-200">
                    <span class="font-bold text-2xl -me-2">$</span>
                    34.99
                </span>
                <p class="mt-2 text-sm text-gray-500">Save 30% with full access for 1 year.</p>

                <a href="{{ route('checkout', ['plan' => 'premium_yearly']) }}" class="mt-5 py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-indigo-600 text-white hover:bg-indigo-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" >
                    Sign up
                </a>
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="flex flex-col border border-gray-200 text-center rounded-xl p-8 dark:border-gray-700">
                <h4 class="font-medium text-lg text-gray-800 dark:text-gray-200">Lifetime</h4>
                <span class="mt-5 font-bold text-5xl text-gray-800 dark:text-gray-200">
                    <span class="font-bold text-2xl -me-2">$</span>
                    174.99
                </span>
                <p class="mt-2 text-sm text-gray-500">Pay once. Lifetime access.</p>

                <a href="{{ route('checkout', ['plan' => 'premium_lifetime']) }}" class="mt-5 py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-indigo-100 text-indigo-800 hover:bg-indigo-200 disabled:opacity-50 disabled:pointer-events-none dark:hover:bg-indigo-900 dark:text-indigo-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" >
                    Sign up
                </a>
            </div>
            <!-- End Card -->
        </div>
        <!-- End Grid -->
    </div>
   <!-- End Pricing -->
   
     </x-app-layout>
  ```



  ## web.php

```code
   Route::get('/pricing', function () {
    return view('pricing');
})->middleware(['auth', 'verified'])->name('pricing');

Route::get('/checkout', function () {
    return view('checkout');
})->middleware(['auth', 'verified'])->name('checkout');
  
  ```


### set product in stripe

- go to [dashboard.stripe.com](https://dashboard.stripe.com/test/products?active=true)
- add product in product category
- copy price id 
- go to pricing.blade.php page and add price id with route
  ``` <a href="{{ route('checkout', ['plan' => 'premium_monthly']) }}" ```
  this will be change
  ``` <a href="{{ route('checkout', ['plan' => 'price_1PZy6XRp02nYW9h7UIowDuJO']) }}"  ```

  similliarly i will change yearly and lifetime also

- make a controller  
  ``` php artisan make:controller checkoutController --invokable ``` 
  The __invoke method allows the controller to be called like a function. When a request is made to the route /user, the __invoke method will handle the request.

Example Use Case:
If you want a controller to handle a form submission to update a user's profile, you could use an invokable controller to keep the code simple and focused on this 

- then go to the [selling subscription](https://laravel.com/docs/11.x/billing#quickstart-selling-subscriptions) its in quikstart 

``` use Illuminate\Http\Request;
 
Route::get('/subscription-checkout', function (Request $request) {
    return $request->user()
        ->newSubscription('default', 'price_basic_monthly')
        ->trialDays(5)
        ->allowPromotionCodes()
        ->checkout([
            'success_url' => route('your-success-route'),
            'cancel_url' => route('your-cancel-route'),
        ]);
});
```
we will take some code form here what we need .now only whatever return that we will copy
 ```  
    return $request->user()
        ->newSubscription('default', 'price_basic_monthly')
        ->trialDays(5)
        ->allowPromotionCodes()
        ->checkout([
            'success_url' => route('your-success-route'),
            'cancel_url' => route('your-cancel-route'),
        ]);

 ```


- past it our checkoutController
    
```
    <?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class checkoutController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return $request->user()
        ->newSubscription('default', 'price_basic_monthly')
        ->trialDays(5)
        ->allowPromotionCodes()
        ->checkout([
            'success_url' => route('your-success-route'),
            'cancel_url' => route('your-cancel-route'),
        ]);
    }
 }

 ```
 
 - we then set default value ``` ->newSubscription('default', 'price_basic_monthly') ``` 

- we will get this default value from out [stripe page](https://dashboard.stripe.com/test/products/prod_QQpgrMiIJngBT3) from this page we will get our #####product id 
   prod_QQpgrMiIJngBT3  copy it and past it in defalut value .

- 

``` 
   class checkoutController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return $request->user()
        ->newSubscription('prod_QQpgrMiIJngBT3', 'price_basic_monthly')
        ->trialDays(5)
        ->allowPromotionCodes()
        ->checkout([
            'success_url' => route('your-success-route'),
            'cancel_url' => route('your-cancel-route'),
        ]);
    }
}
```   

-  ``` public function __invoke(Request $request, string $plan) ```
  
- if you dont give $plan id than you set yearly price id 
     ```
    public function __invoke(Request $request, string $plan = "price_1PZy11Rp02nYW9h77sWpkpUN")

     ```


 - then we set than $plan in newSubscription() method 

    ```
    class checkoutController extends Controller
    {
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, string $plan = "price_1PZy11Rp02nYW9h77sWpkpUN")
    {
        return $request->user()
        ->newSubscription('prod_QQpgrMiIJngBT3', $plan)
        ->trialDays(5)
        ->allowPromotionCodes()
        ->checkout([
            'success_url' => route('your-success-route'),
            'cancel_url' => route('your-cancel-route'),
        ]);
    }
    }
  
    ```    


 - now i will not use ```trialDays(5)``` and ```allowPromotionCodes()``` this method 

    
    ```
       class checkoutController extends Controller
      {
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, string $plan = "price_1PZy11Rp02nYW9h77sWpkpUN")
    {
        return $request->user()
        ->newSubscription('prod_QQpgrMiIJngBT3', $plan)
        ->checkout([
            'success_url' => route('your-success-route'),
            'cancel_url' => route('your-cancel-route'),
        ]);
    }
       }

    ```


 - change the route name 
    ```
        public function __invoke(Request $request, string $plan = "price_1PZy11Rp02nYW9h77sWpkpUN")
      {
          return $request->user()
          ->newSubscription('prod_QQpgrMiIJngBT3', $plan)
          ->checkout([
              'success_url' => route('sucess'),
              'cancel_url' => route('dashboard'),
          ]);
      }
    ```

 - create route in web.php 

     ```
       Route::get('/success', function () {
         return view('success');
       })->middleware(['auth', 'verified'])->name('success');
     ```   


- create view for success ``` php artisan make:view success ```

- in success.blade.php
   ```
     <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're sucessfully subscribe to premium!") }}
                </div>
            </div>
        </div>
    </div>
     </x-app-layout>
   ```

- add checkoutController in  our checkout route in web.php
  ``` Route::get('/checkout/{$plan?}', [checkoutController::class])->name('checkout'); ```
     
  
