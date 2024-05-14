namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SearchHistory;

class SearchHistoryController extends Controller
{
    public function index()
    {
        $searchHistories = SearchHistory::all();
        return response()->json($searchHistories);
    }

}
