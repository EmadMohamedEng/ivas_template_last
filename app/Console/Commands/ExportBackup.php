<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ExportBackup extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'backup:export';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Takes a backup from database';

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
        $database_base_path =  base_path()."/database/backups/" ; 
        if(!file_exists($database_base_path))
            mkdir($database_base_path, 0777, true) ;
     
        $database_name = env('DB_DATABASE') ;
        $database_password = env('DB_PASSWORD') ;
        $database_username = env('DB_USERNAME') ;
        if($database_password)
            $database_password = "-p".$database_password ; 
        else 
            $database_password = "" ; 

        // $mysqldump_command = "E:/XAMPP/mysql/bin/mysqldump" ; // for windows 
        $mysqldump_command = "mysqldump" ; // for linux server 
    
        $command = "$mysqldump_command -u $database_username $database_password $database_name > ".$database_base_path.date("Y-m-d_H-i-s").'.sql' ;
        $command = str_replace("\\","/",$command) ;   
        // exec($command) ; 
        shell_exec($command); 
        \Log::info('database exported') ; 
    }
}
