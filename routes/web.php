<?php

use App\Charts\UserChart;
use App\Http\Controllers\Booking;
use App\Http\Controllers\HomeController;
use \App\Http\Controllers\Hall;
use App\Http\Controllers\Ratting;
use App\Models\Bookings;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\AllowedInclude;
use Spatie\QueryBuilder\QueryBuilder;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Spatie\QueryBuilder\Filters\Filter;
use Illuminate\Database\Eloquent\Builder;

class RattingCustomFilter implements Filter
{
    public function __invoke(Builder $query, $value, string $property)
    {
        return $query->where('ratting', '>=', $value);
    }
}

//authRoutes
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    // return Auth::user()->roles;
    // return view('dashboard');
    switch (Auth::user()->roles[0]->name){
        case 'administrator': {
            $totalBookings = \App\Models\Bookings::with(['hall'])->get();

            $pendingBookings = \App\Models\Bookings::where(['status'=>0])->with(['hall'])->get();

            $approvedBookings= \App\Models\Bookings::where(['status'=>1])->with(['hall'])->get();

            $rejectedBookings= \App\Models\Bookings::where(['status'=>2])->with(['hall'])->get();

            $todayBookings= \App\Models\Bookings::whereDate('created_at', Carbon::today())->with(['hall'])->get();


            $totalHalls = \App\Models\hall::with(['bookings'])->get();

            $total_reviews = \App\Models\Ratting::with(['hall'])->get();

            $total_approved_reviews = \App\Models\Ratting::where(['status'=>1])->with(['hall'])->get();

            $total_rejected_reviews = \App\Models\Ratting::where(['status'=>2])->with(['hall'])->get();

            $total_pending_reviews =  \App\Models\Ratting::where(['status'=>0])->with(['hall'])->get();
            $usersChart = new UserChart;
            $datasets = [];
            foreach (
                $totalHalls as $request
            ){


                $datasets[] = count($request->bookings);

                $usersChart->dataset($request->name, 'line', $datasets);


            }

            $total_users = User::all();

            $total_managers_roles = \App\Models\User::whereHas('roles', function ($q) {
                return $q->where('name', '=', 'manager');
            })->with(['roles'])->get();

            $total_users_role =   \App\Models\User::whereHas('roles', function ($q) {
                return $q->where('name', '=', 'user');
            })->with(['roles'])->get();

            $total_admins_roles =   \App\Models\User::whereHas('roles', function ($q) {
                return $q->where('name', '=', 'administrator');
            })->with(['roles'])->get();

            return view('manager.dashboard',

                [
                    'total_halls'=>count($totalHalls),
                    'total_bookings'=>count($totalBookings),
                    'today_bookings' =>count($todayBookings),
                    'pending_bookings'=>count($pendingBookings),
                    'rejected_bookings'=>count($rejectedBookings),
                    'approved_booking'=>count($approvedBookings),
                    'total_reviews' => count($total_reviews),
                    'total_approved_reviews' =>  count($total_approved_reviews),
                    'total_rejected_reviews' => count($total_rejected_reviews),
                    'total_pending_reviews' => count($total_pending_reviews),
                    'usersChart' => $usersChart,
                    'role' => 'administrator',
                    'total_users' => count($total_users),
                    'total_managers_role' => count($total_managers_roles),
                    'total_users_role' => count($total_users_role),
                                        'total_admins_role' => count($total_admins_roles)



                ]

            );
        }
        case 'manager' :  {


            $totalBookings = \App\Models\Bookings::whereHas('hall', function ($q) {
                return $q->where('user_id', '=', Auth::user()->id);
            })->with(['hall'])->get();

            $pendingBookings = \App\Models\Bookings::where(['status'=>0])->whereHas('hall', function ($q) {
                return $q->where('user_id', '=', Auth::user()->id);
            })->with(['hall'])->get();

            $approvedBookings= \App\Models\Bookings::where(['status'=>1])->whereHas('hall', function ($q) {
                return $q->where('user_id', '=', Auth::user()->id);
            })->with(['hall'])->get();

            $rejectedBookings= \App\Models\Bookings::where(['status'=>2])->whereHas('hall', function ($q) {
                return $q->where('user_id', '=', Auth::user()->id);
            })->with(['hall'])->get();

            $todayBookings= \App\Models\Bookings::whereDate('created_at', Carbon::today())->whereHas('hall', function ($q) {
                return $q->where('user_id', '=', Auth::user()->id);
            })->with(['hall'])->get();

           // $totalHalls= \App\Models\hall::where('user_id', '=', Auth::user()->id)->get();
            $totalHalls = \App\Models\hall::where('user_id', '=', Auth::user()->id)->with(['bookings'])->get();

        $total_reviews = \App\Models\Ratting::whereHas('hall', function ($q) {
                return $q->where('user_id', '=', Auth::user()->id);
            })->with(['hall'])->get();

            $total_approved_reviews = \App\Models\Ratting::where(['status'=>1])->whereHas('hall', function ($q) {
                return $q->where('user_id', '=', Auth::user()->id);
            })->with(['hall'])->get();

            $total_rejected_reviews = \App\Models\Ratting::where(['status'=>2])->whereHas('hall', function ($q) {
                return $q->where('user_id', '=', Auth::user()->id);
            })->with(['hall'])->get();

            $total_pending_reviews = \App\Models\Ratting::where(['status'=>0])->whereHas('hall', function ($q) {
                return $q->where('user_id', '=', Auth::user()->id);
            })->with(['hall'])->get();

           $usersChart = new UserChart;
                $datasets = [];
if(count($totalHalls) <= 0) {
    $datasets[] = [0];
    $usersChart->dataset('NO HALLS ADDED', 'line', $datasets);
}
          else {
              foreach (
                  $totalHalls as $request
              ){


                  $datasets[] = count($request->bookings);

                  $usersChart->dataset($request->name, 'line', $datasets);


              }
          }







            return view('manager.dashboard',

                [
                'total_halls'=>count($totalHalls),
                'total_bookings'=>count($totalBookings),
                'today_bookings' =>count($todayBookings),
                'pending_bookings'=>count($pendingBookings),
                'rejected_bookings'=>count($rejectedBookings),
                'approved_booking'=>count($approvedBookings),
                    'total_reviews' => count($total_reviews),
                    'total_approved_reviews' =>  count($total_approved_reviews),
                    'total_rejected_reviews' => count($total_rejected_reviews),
                    'total_pending_reviews' => count($total_pending_reviews),
                    'usersChart' => $usersChart,
                    'role' => 'manager'
                ]

            );
        }
        case 'user' : {
            $bookings = \App\Models\Bookings::where(['users_id' => Auth::user()->id])->with(['hall'])->get();

//return $bookings;
            return view('frontend.bookings',['bookings'=>$bookings]);
        }
    }
})->name('dashboard');


//guest routes//
Route::get('/',[HomeController::class, 'index'])->name('home');
Route::resource('/hall', Hall::class)->only(
    ['show','index']
);

Route::resource('/review', Ratting::class,)->only(
    ['store']
)->name('store','publicReviewPost');

Route::get('/search',function () {
    $halls = QueryBuilder::for(\App\Models\hall::class)
        ->allowedFilters(['name', AllowedFilter::exact('city_id'),'venuetype_id','guest_range','price_per_guest', AllowedFilter::custom('ratting', new RattingCustomFilter),])->with(['photos','venuetype','rattings'=>function($q){
            return $q->where(['status' => 1]);
        }
      ])
        ->get();

//return $halls;
    //$rattingfnf = number_format((float)$ratting, 1, '.', '');



   return view('frontend.search',['halls' => $halls,'venue_types' => \App\Models\VenueTypes::all(),'cities'=>\App\Models\Cities::all()]);
});



//super admin routes
Route::middleware(['auth:sanctum', 'verified','isAdmin'])->group(function (){
    Route::resource('/admin/bookings',Booking::class);
    Route::resource('/admin/review', Ratting::class);
    Route::resource('/admin/users', \App\Http\Controllers\User::class);
    Route::resource('/admin/hall', Hall::class);
    Route::put('/admin/bookings/{bookingId}/approve',[Booking::class, 'approve'])->name('adminBookingsApprove');
    Route::put('/admin/bookings/{bookingId}/reject',[Booking::class, 'reject'])->name('adminBookingsReject');
    Route::put('/admin/review/{reviewId}/approve',[Ratting::class, 'approve'])->name('adminReviewApprove');
    Route::put('/admin/review/{reviewId}/reject',[Ratting::class, 'reject'])->name('adminReviewReject');
    Route::put('/admin/hall/{hallId}/approve',[Hall::class, 'approve'])->name('adminhallApprove');
    Route::put('/admin/hall/{hallId}/reject',[Hall::class, 'reject'])->name('adminhallReject');

});



//manager Routes//
Route::middleware(['auth:sanctum', 'verified','isManager'])->group(function (){
    Route::get('/manager/bookings',[Booking::class, 'index'])->name('managerBookings');
    Route::get('/manager/bookings/{bookingId}',[Booking::class, 'show'])->name('managerBookingsShow');
    Route::get('/manager/bookings/{bookingId}/edit',[Booking::class, 'edit'])->name('managerBookingsEdit');
    Route::put('/manager/bookings/{bookingId}/approve',[Booking::class, 'approve'])->name('managerBookingsApprove');
    Route::put('/manager/bookings/{bookingId}/reject',[Booking::class, 'reject'])->name('managerBookingsReject');

    Route::put('/manager/review/{reviewId}/approve',[Ratting::class, 'approve'])->name('managerReviewApprove');
    Route::put('/manager/review/{reviewId}/reject',[Ratting::class, 'reject'])->name('managerReviewReject');

    Route::get('/manager/hall', [Hall::class,'showManagerHalls'])->name(
        'showManagerHalls'
    );
    Route::resource('/manager/hall', Hall::class)->only(['store'])->name('store','managerStoreHall');
    Route::resource('/manager/hall', Hall::class)->only(['create'])->name('create','managerAddHall');


    Route::get('/manager/review', [Ratting::class,'showManagerReviews'])->name(
        'showManagerReview'
    );
});


//user Routes//
Route::middleware(['auth:sanctum', 'verified','isUser'])->group(function (){
    Route::get('/user/bookings',[Booking::class, 'index'])->name('userBookings');
    Route::get('/user/bookings/{bookingId}',[Booking::class, 'show'])->name('userBookingsShow');
    Route::get('/user/bookings/{bookingId}/edit',[Booking::class, 'edit'])->name('userBookingsEdit');
    Route::put('/user/bookings/{bookingId}',[Booking::class, 'update'])->name('userBookingsUpdate');
    Route::post('/user/bookings',[Booking::class, 'store'])->name('userBookingsadd');

});


