<?php

namespace App\Jobs;

use App\Jobs\Job;
use Request;

/*************************************************
*
* On fait une action simple : définir la locale selon l’utilisateur.
* - Si on a déjà une valeur dans la session on l’utilise,
* - sinon on pioche l’information dans la requête avec la méthode getPreferredLanguage.
*  Ensuite on définit la locale de l’application.
*
*
**************************************************/



class SetLocale extends Job
{
    /**
     * Execute the command.
     *
     * @return void
     */
    public function handle()
    {
	if(!session()->has('locale'))
	{
	    session()->put('locale', Request::getPreferredLanguage(config('app.languages')));
	}
	app()->setLocale(session('locale'));
    }
}
