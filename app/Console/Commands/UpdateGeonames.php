<?php

namespace App\Console\Commands;

use App\Http\Controllers\GeoNamesController;
use Illuminate\Console\Command;

class UpdateGeonames extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'UpdateGeonames:update-geonames';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update Geo Names';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $geaonames = new GeoNamesController();
        $geaonames->getAndUpdateGeoNames();
    }
}
