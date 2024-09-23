<?php

namespace App\Console\Commands;

use App\Jobs\CheckProductStockJob;
use App\Models\Products;
use App\Models\ReorderStock;
use Illuminate\Console\Command;
//use Illuminate\Support\Facades\Artisan;
//use Illuminate\Support\Facades\DB;

class RestockCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:restock-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Reorder stock for products with low inventory';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        ReorderStock::truncate();

        $products = Products::where('quantity_in_stock', '<', 10)->get()->toArray();

        $sortedProducts = $this->bubbleSort($products);

        foreach ($sortedProducts as $product) {
            ReorderStock::updateOrCreate(
                ['product_id' => $product['id']],
                [
                    'product_id' => $product['id'],
                    'quantity'   => $product['quantity_in_stock'],
                    'created_at' => now(),
                ]
            );
        }



        $this->info('Reorder stock process completed.');
    }

    /**
     * Bubble Sort function to sort products by quantity_in_stock
     *
     * @param array $products
     * @return array
     */
    public function bubbleSort(array $products)
    {
        $n = count($products);
        for ($i = 0; $i < $n - 1; $i++) {
            for ($j = 0; $j < $n - $i - 1; $j++) {
                if ($products[$j]['quantity_in_stock'] > $products[$j + 1]['quantity_in_stock']) {
                    $temp = $products[$j];
                    $products[$j] = $products[$j + 1];
                    $products[$j + 1] = $temp;
                }
            }
        }
        return $products;
    }
}
