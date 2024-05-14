use App\Http\Controllers\SearchHistoryController;

Route::get('/search-histories', [SearchHistoryController::class, 'index']);
