<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\AboutUsAlterController;
use App\Http\Controllers\Frontend\AboutUsController;
use App\Http\Controllers\Frontend\BitcoinController;
use App\Http\Controllers\Frontend\BitcoinDatacenterController;
use App\Http\Controllers\Frontend\BitcoinPricingController;
use App\Http\Controllers\Frontend\BitcoinSignupController;
use App\Http\Controllers\Frontend\CareersController;
use App\Http\Controllers\Frontend\CarouselController;
use App\Http\Controllers\Frontend\CaseStudyDetialsController;
use App\Http\Controllers\Frontend\CaseStudyListsController;
use App\Http\Controllers\Frontend\ClientsController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\ContactExtendController;
use App\Http\Controllers\Frontend\Error404Controller;
use App\Http\Controllers\Frontend\FaqsController;
use App\Http\Controllers\Frontend\GalleryController;
use App\Http\Controllers\Frontend\GetAQuoteController;
use App\Http\Controllers\Frontend\HistoryController;
use App\Http\Controllers\Frontend\IndexBitcoinController;
use App\Http\Controllers\Frontend\IndexCivilController;
use App\Http\Controllers\Frontend\IndexConstructionController;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Frontend\IndexEnergyController;
use App\Http\Controllers\Frontend\IndexFullscreenController;
use App\Http\Controllers\Frontend\IndexMinningController;
use App\Http\Controllers\Frontend\IndexOilController;
use App\Http\Controllers\Frontend\IndexOnepageBitcoinController;
use App\Http\Controllers\Frontend\IndexOnepageIndustryController;
use App\Http\Controllers\Frontend\IndexSimpleController;
use App\Http\Controllers\Frontend\IndexWeldingController;
use App\Http\Controllers\Frontend\InvestorRelationsController;
use App\Http\Controllers\Frontend\InvestorsController;
use App\Http\Controllers\Frontend\MegamenuController;
use App\Http\Controllers\Frontend\NewsController;
use App\Http\Controllers\Frontend\NewsDetailsController;
use App\Http\Controllers\Frontend\PricingAlterController;
use App\Http\Controllers\Frontend\PricingController;
use App\Http\Controllers\Frontend\ProductsAlterController;
use App\Http\Controllers\Frontend\ProductsController;
use App\Http\Controllers\Frontend\ProductSingleController;
use App\Http\Controllers\Frontend\ProjectsAlterController;
use App\Http\Controllers\Frontend\ProjectsController;
use App\Http\Controllers\Frontend\ProjectsExtendController;
use App\Http\Controllers\Frontend\ProjectSingleController;
use App\Http\Controllers\Frontend\ResourcesController;
use App\Http\Controllers\Frontend\ResponsibiltyController;
use App\Http\Controllers\Frontend\SolutionsAlterController;
use App\Http\Controllers\Frontend\SolutionsController;
use App\Http\Controllers\Frontend\SolutionsExtendController;
use App\Http\Controllers\Frontend\SolutionSingleAlterController;
use App\Http\Controllers\Frontend\SolutionSingleController;
use App\Http\Controllers\Frontend\SolutionSingleExtendController;
use App\Http\Controllers\Frontend\TeamsAlterController;
use App\Http\Controllers\Frontend\TeamsController;
use App\Http\Controllers\Frontend\TestimonialAlterController;
use App\Http\Controllers\Frontend\TestimonialController;
use App\Http\Controllers\Frontend\TypographyController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [IndexController::class, 'index']);
