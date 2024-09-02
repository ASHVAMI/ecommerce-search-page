namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ClothingItem;

class ClothingItemSeeder extends Seeder
{
    public function run()
    {
        $items = [
            'T-Shirt',
            'Jeans',
            'Jacket',
            'Sweater',
            'Dress',
            'Skirt',
            'Shorts',
            'Cap',
            'Socks',
            'Gloves'
        ];

        foreach ($items as $item) {
            ClothingItem::create(['name' => $item]);
        }
    }
}
