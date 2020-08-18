<?php

use Illuminate\Database\Seeder;
use App\Truck;
class TruckSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $truckFleetNumbers = [
            ['fleet_number'=>'KTS022'],
            ['fleet_number'=>'CFA001'],
            ['fleet_number'=>'Z153'],
            ['fleet_number'=>'CON001'],
            ['fleet_number'=>'CON002'],
            ['fleet_number'=>'CON003'],
            ['fleet_number'=>'CON004'],
            ['fleet_number'=>'CON005'],
            ['fleet_number'=>'CON006'],
            ['fleet_number'=>'TBU'],
            ['fleet_number'=>'CKHE 13'],
            ['fleet_number'=>'CKHE 14'],
            ['fleet_number'=>'CKHE 17'],
            ['fleet_number'=>'CKHE 19'],
            ['fleet_number'=>'CKHE 20'],
            ['fleet_number'=>'CKHE 21'],
            ['fleet_number'=>'CKHE 22'],
            ['fleet_number'=>'CKHE 24'],
            ['fleet_number'=>'CBS005'],
            ['fleet_number'=>'CBS006'],
            ['fleet_number'=>'CBS007'],
            ['fleet_number'=>'JLV292MP TBU'],
            ['fleet_number'=>'JHZ467MP TBU'],
            ['fleet_number'=>'JLZ102MP TBU'],
            ['fleet_number'=>'JVK285MP TBU'],
            ['fleet_number'=>'HWB904MP TBU'],
            ['fleet_number'=>'JLV614MP TBU'],
            ['fleet_number'=>'WZB307GP TBU'],
            ['fleet_number'=>'FH45XSGP TBU'],
            ['fleet_number'=>'WZB307MP TBU'],
            ['fleet_number'=>'JVK385MP TBU'],
            ['fleet_number'=>'JZL102MP TBU'],
            ['fleet_number'=>'JPH871MP TBU'],
        ];

        foreach($truckFleetNumbers as $key => $value){

            Truck::create($value);           

        }
    }
}
