<?php

namespace App\Console\Commands;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class CreateSuperAdminUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'install:super-admin';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This Command will the super admin user to the System';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(User $users)
    {
        parent::__construct();
        $this->users = $users;
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $users = new User([            
            'name'=>'Super Admin',
            'email'=>'crm@vivarttana.com',
            'email_verified_at'=>Carbon::now(),
            'phone_no'=>'9999999999',            
            'password'=>Hash::make('@Vivarttana(AT)2021$'),            
            'user_type'=>'1',           
        ]);
        if ($users->save()) {
            $this->info('Hurrah! Super Admin Installed Successfully!');
        }else{
            $this->info('Oh Oh! something went wrong');
        }    
    }
}
