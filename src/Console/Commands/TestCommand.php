<?php

namespace Khapu\LaravelCurd\Console\Commands;

use Illuminate\Console\Command;

class TestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
     protected $signature = 'khapu';
    
     /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
     * @return int
     */
    public function handle()
    {   
        $string_1 = "khanhphungdai@admicro.vn";
        $string_2 = "khanhphungdai@admicro.vn";
        $string_3 = "khanhphungdai@admicro.vn";
        if(strcmp($string_1,$string_3) ===0){
            echo "giống nhau";
        }else{
            echo "không giống";
        }
        return ;
    }
}
