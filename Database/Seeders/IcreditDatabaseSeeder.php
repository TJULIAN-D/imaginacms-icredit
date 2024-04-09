<?php

namespace Modules\Icredit\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Icommerce\Entities\PaymentMethod;
use Modules\Isite\Jobs\ProcessSeeds;

class IcreditDatabaseSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Model::unguard();
    ProcessSeeds::dispatch([
      "baseClass" => "\Modules\Icredit\Database\Seeders",
      "seeds" => ["IcreditModuleTableSeeder", "WithdrawalfundsFormTableSeeder", "InstallIcreditPaymentMethodTableSeeder"]
    ]);

  }

}
