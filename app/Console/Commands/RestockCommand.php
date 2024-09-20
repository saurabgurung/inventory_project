<?php

namespace App\Console\Commands;

use App\Jobs\CheckProductStockJob;
use App\Models\Products;
use App\Models\ReorderStock;
use Illuminate\Console\Command;

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
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {


        $products = Products::where('quantity_in_stock', '<', 10)->get();
        foreach ($products as $product) {
            ReorderStock::updateOrCreate(
                ['product_id' => $product->id],
                [
                    'product_id' => $product->id,
                    'quantity'   => $product->quantity_in_stock,
                    'created_at' => now(),
                ]
            );
        }




    }
}
