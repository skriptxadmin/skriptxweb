<?php

$router->get('/', '\App\Controllers\HomeController@index');
$router->get('/products', '\App\Controllers\ProductsController@index');
$router->get('/projects', '\App\Controllers\ProjectsController@index');
$router->get('/services', '\App\Controllers\ServicesController@index');
$router->get('/services/training', '\App\Controllers\ServicesController@training');
$router->get('/services/placement', '\App\Controllers\ServicesController@placement');
$router->get('/services/software', '\App\Controllers\ServicesController@software');
$router->get('/services/internship', '\App\Controllers\ServicesController@internship');
$router->get('/services/open-source', '\App\Controllers\ServicesController@open_source');
$router->get('/about-us', '\App\Controllers\AboutUsController@index');
$router->get('/contact-us', '\App\Controllers\ContactUsController@index');
$router->get('/careers', '\App\Controllers\CareersController@index');
$router->get('/careers/fulltime', '\App\Controllers\CareersController@fulltime');
$router->get('/careers/parttime', '\App\Controllers\CareersController@parttime');
$router->get('/careers/internship', '\App\Controllers\CareersController@internship');
$router->get('/careers/apply', '\App\Controllers\CareersController@apply');
$router->get('/jd/{id}', '\App\Controllers\JobDescriptionsController@index');

$router->get('/internship/course-plan', '\App\Controllers\InternshipController@course_plan');

$router->get('workshops', '\App\Controllers\WorkshopsController@index');
$router->get('workshops/book', '\App\Controllers\WorkshopsController@book');
$router->get('workshops/notify', '\App\Controllers\WorkshopsController@notify');

$router->get('privacy-policy', '\App\Controllers\GeneralController@privacy_policy');
$router->get('refund-and-cancellation-policy', '\App\Controllers\GeneralController@refund_and_cancellation_policy');
$router->get('terms-and-conditions', '\App\Controllers\GeneralController@terms_and_conditions');


