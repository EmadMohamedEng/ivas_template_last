<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ImportBackup extends Command
{
    
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'backup:import {filename}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import a backup to database, it takes sql file path as parameter';

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
        $imported_path = $database_base_path.$this->argument('filename'); 

        if(! file_exists($imported_path))
        {
            \Log::info('database not found') ; 
            return ;
        }

        $database_name = env('DB_DATABASE') ;
        $database_password = env('DB_PASSWORD') ;
        $database_username = env('DB_USERNAME') ;
        if($database_password)
            $database_password = "-p".$database_password ; 
        else 
            $database_password = "" ; 

        // $mysqldump_command = "E:/XAMPP/mysql/bin/mysql" ;  // for windows
        $mysqldump_command = "mysql" ;    // for linux server 
        
        $command = "$mysqldump_command -u $database_username $database_password $database_name < ".$imported_path ;
        $command = str_replace("\\","/",$command) ;   
        // exec($command) ;
        shell_exec($command); 
        \Log::info('database imported') ; 
    }
}
