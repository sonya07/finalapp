<?php

use Illuminate\Database\Seeder;

class GuestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('guest')->insert([ 
            'id'=> 89231,
            'first_name'=> 'Eric',
            'last_name'=> 'Bobo',
            'address_1'=> '762 B Putnam Blvd',
            'address_2'=> '',
            'city'=> 'Wallingford',
            'state'=> 'PA',
            'zip'=> '19086',
            'phone'=> '610-209-6765',
            'fax'=> '',
            'email'=> '',
            'credit'=> 0.0,
            'leg_custnum'=> 1205,
            'leg_work_phone'=> '',
            'leg_cell'=> '',
            'leg_start_date'=> '2005-03-30 00:00:00',
            'leg_checksum'=> '198402aef623a5c085bbb85550f84e02',
            'created_at'=> '2016-03-04 12:01:57',
            'updated_at'=> '2016-03-04 12:01:57',
            'guest_type'=> 1,
            'mail_list'=> 1,
            'email_list'=> 1,
            'dob'=>'2018-04-30 12:01:57',
            'does_exist'=> 1,
            'country'=> '',
          ]);
          DB::table('guest')->insert([ 
            'id'=> 89232,
            'first_name'=> 'Harold',
            'last_name'=> 'Fredericks',
            'address_1'=> '515 North 4th St',
            'address_2'=> '',
            'city'=> 'Telford',
            'state'=> 'PA',
            'zip'=> '18969',
            'phone'=> '215-723-2555',
            'fax'=> '',
            'email'=> '',
            'credit'=> 0.0,
            'leg_custnum'=> 1207,
            'leg_work_phone'=> '',
            'leg_cell'=> '',
            'leg_start_date'=> '2005-03-21 00:00:00',
            'leg_checksum'=> 'dfaa15a853a8ab006e989a2b0ef456ba',
            'created_at'=> '2016-03-04 12:01:57',
            'updated_at'=> '2016-03-04 12:01:57',
            'guest_type'=> 1,
            'mail_list'=> 1,
            'email_list'=> 1,
            'dob'=>'2018-04-30 12:01:57',
            'does_exist'=> 1,
            'country'=> '',
          ]);
          DB::table('guest')->insert([ 
            'id'=> 89233,
            'first_name'=> 'Betty lou',
            'last_name'=> 'Cox',
            'address_1'=> '1405 Old Freehold Rd',
            'address_2'=> '',
            'city'=> 'Toms River',
            'state'=> 'NJ',
            'zip'=> '08753',
            'phone'=> '732-349-4499',
            'fax'=> '',
            'email'=> '',
            'credit'=> 0.0,
            'leg_custnum'=> 1208,
            'leg_work_phone'=> '',
            'leg_cell'=> '',
            'leg_start_date'=> '2004-05-16 00:00:00',
            'leg_checksum'=> 'ddcebd2a150f21088a1a6785aa68a5ce',
            'created_at'=> '2017-03-04 12:01:57',
            'updated_at'=> '2016-03-04 12:01:57',
            'guest_type'=> 1,
            'mail_list'=> 1,
            'email_list'=> 1,
            'dob'=>'2018-04-30 12:01:57',
            'does_exist'=> 1,
            'country'=> '',
          ]);
          DB::table('guest')->insert([ 
            'id'=> 89234,
            'first_name'=> 'Conner',
            'last_name'=> 'Lynch',
            'address_1'=> '19 Canterbury Lane',
            'address_2'=> '',
            'city'=> 'Lebanon',
            'state'=> 'NJ',
            'zip'=> '08833',
            'phone'=> '908-735-6299',
            'fax'=> '908-730-5996',
            'email'=> '',
            'credit'=> 0.0,
            'leg_custnum'=> 1213,
            'leg_work_phone'=> '908-968-7496',
            'leg_cell'=> '',
            'leg_start_date'=> '2005-05-11 00:00:00',
            'leg_checksum'=> 'a85a6615bee2e7103a9cd4ddc93d1c05',
            'created_at'=> '2017-03-04 12:01:57',
            'updated_at'=> '2016-03-04 12:01:57',
            'guest_type'=> 1,
            'mail_list'=> 1,
            'email_list'=> 1,
            'dob'=>'2018-04-30 12:01:57',
            'does_exist'=> 1,
            'country'=> '',
          ]);
          DB::table('guest')->insert([ 
            'id'=> 89235,
            'first_name'=> 'Candy',
            'last_name'=> 'James',
            'address_1'=> 'Po Box 324',
            'address_2'=> '',
            'city'=> 'Heislerville',
            'state'=> 'NJ',
            'zip'=> '08324',
            'phone'=> '856-785-2267',
            'fax'=> '',
            'email'=> '',
            'credit'=> 0.0,
            'leg_custnum'=> 1217,
            'leg_work_phone'=> '856-696-1600',
            'leg_cell'=> '',
            'leg_start_date'=> '2004-05-24 00:00:00',
            'leg_checksum'=> '3f2ca263aa0cd062cb697d884ef63577',
            'created_at'=> '2017-03-04 12:01:57',
            'updated_at'=> '2016-03-04 12:01:57',
            'guest_type'=> 1,
            'mail_list'=> 1,
            'email_list'=> 1,
            'dob'=>'2018-04-30 12:01:57',
            'does_exist'=> 1,
            'country'=> '',
          ]);
          DB::table('guest')->insert([ 
            'id'=> 89236,
            'first_name'=> 'Wayne',
            'last_name'=> 'Riker',
            'address_1'=> '9 Ferndale Dr',
            'address_2'=> '',
            'city'=> 'Parsippany',
            'state'=> 'NJ',
            'zip'=> '07054',
            'phone'=> '973-263-3330',
            'fax'=> '',
            'email'=> '',
            'credit'=> 0.0,
            'leg_custnum'=> 1234,
            'leg_work_phone'=> '973-723-6954',
            'leg_cell'=> '',
            'leg_start_date'=> '2003-05-24 00:00:00',
            'leg_checksum'=> '98a091c53c024260011bcbef0659a920',
            'created_at'=> '2018-03-04 12:01:57',
            'updated_at'=> '2016-03-04 12:01:57',
            'guest_type'=> 1,
            'mail_list'=> 1,
            'email_list'=> 1,
            'dob'=>'2018-04-30 12:01:57',
            'does_exist'=> 1,
            'country'=> '',
          ]);
          DB::table('guest')->insert([ 
            'id'=> 89237,
            'first_name'=> 'Robert',
            'last_name'=> 'Walakovitz',
            'address_1'=> '155 North 9th St',
            'address_2'=> '',
            'city'=> 'Coplay',
            'state'=> 'PA',
            'zip'=> '18037',
            'phone'=> '',
            'fax'=> '',
            'email'=> '',
            'credit'=> 0.0,
            'leg_custnum'=> 1239,
            'leg_work_phone'=> '610-262-9542',
            'leg_cell'=> '',
            'leg_start_date'=> '2004-04-14 00:00:00',
            'leg_checksum'=> '4a577bed4f37c3f45ee6e261fe836fd1',
            'created_at'=> '2018-03-04 12:01:57',
            'updated_at'=> '2016-03-04 12:01:57',
            'guest_type'=> 1,
            'mail_list'=> 1,
            'email_list'=> 1,
            'dob'=>'2018-04-30 12:01:57',
            'does_exist'=> 1,
            'country'=> '',
          ]);
          DB::table('guest')->insert([ 
            'id'=> 89238,
            'first_name'=> 'Cindy',
            'last_name'=> 'Murphy',
            'address_1'=> '8 East Maple St',
            'address_2'=> '',
            'city'=> 'Mifflinburg',
            'state'=> 'PA',
            'zip'=> '17844',
            'phone'=> '570-966-8853',
            'fax'=> '',
            'email'=> '',
            'credit'=> 0.0,
            'leg_custnum'=> 1314,
            'leg_work_phone'=> '570-966-1183',
            'leg_cell'=> '',
            'leg_start_date'=> '2003-04-30 00:00:00',
            'leg_checksum'=> '9fb0b92a5f78a2eb56f2b3882783f037',
            'created_at'=> '2016-03-04 12:01:57',
            'updated_at'=> '2016-03-04 12:01:57',
            'guest_type'=> 1,
            'mail_list'=> 1,
            'email_list'=> 1,
            'dob'=>'2018-04-30 12:01:57',
            'does_exist'=> 1,
            'country'=> '',
          ]);
          DB::table('guest')->insert([ 
            'id'=> 89239,
            'first_name'=> 'Frank',
            'last_name'=> 'Yuhas',
            'address_1'=> '81 Seymour Ave',
            'address_2'=> '',
            'city'=> 'Edison',
            'state'=> 'NJ',
            'zip'=> '08817',
            'phone'=> '732-985-2913',
            'fax'=> '',
            'email'=> '',
            'credit'=> 0.0,
            'leg_custnum'=> 1317,
            'leg_work_phone'=> '732-985-5063',
            'leg_cell'=> '',
            'leg_start_date'=> '2004-05-29 00:00:00',
            'leg_checksum'=> '236f32c583147bce7096e36818ba1d53',
            'created_at'=> '2014-03-04 12:01:57',
            'updated_at'=> '2016-03-04 12:01:57',
            'guest_type'=> 1,
            'mail_list'=> 1,
            'email_list'=> 1,
            'dob'=>'2018-04-30 12:01:57',
            'does_exist'=> 1,
            'country'=> '',
          ]);
          DB::table('guest')->insert([ 
            'id'=> 89240,
            'first_name'=> 'Dr charles',
            'last_name'=> 'Knapp',
            'address_1'=> '23-02 Maple Ave',
            'address_2'=> '',
            'city'=> 'Fairlawn',
            'state'=> 'NJ',
            'zip'=> '07410',
            'phone'=> '201-791-4161',
            'fax'=> '',
            'email'=> '',
            'credit'=> 0.0,
            'leg_custnum'=> 1330,
            'leg_work_phone'=> '',
            'leg_cell'=> '',
            'leg_start_date'=> '2008-05-16 00:00:00',
            'leg_checksum'=> '2e64b22fb6632c0636c58f5e04b02df3',
            'created_at'=> '2014-03-04 12:01:57',
            'updated_at'=> '2016-03-04 12:01:57',
            'guest_type'=> 1,
            'mail_list'=> 1,
            'email_list'=> 1,
            'dob'=>'2018-04-30 12:01:57',
            'does_exist'=> 1,
            'country'=> '',
          ]);
    }
}