use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;

Route::get('/api/search', [SearchController::class, 'search']);
