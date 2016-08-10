<?php

namespace App\Jobs;

use App\Jobs\Job;
use Illuminate\Contracts\Bus\SelfHandling

class ChangeLocale extends Job implements SelfHandling
{
    /**
     * execute  the Job
     * Permet d'executer la commande
     * @return void
     */
    public function handle()
    {
	session()->set('locale', $this->lang);
    }
}

