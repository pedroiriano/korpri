<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Carbon;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        config(['app.locale' => 'id']);
	    Carbon::setLocale('id');

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://cms.depok.go.id/ViewPortal/profilsite?siteId='.config("constants.siteId"));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        $httpCode = curl_getinfo($ch , CURLINFO_HTTP_CODE);
        $response = curl_exec($ch);
        
        if ($response === false)
        {
            $response = curl_error($ch);
        }
        else
        {
            $generalInformations = json_decode($response, true);
        
            if (json_last_error() !== JSON_ERROR_NONE)
            {
                $generalInformations = [];
            }
        }
        curl_close($ch);

        $pagesData = array(
            'generalInformations' => $generalInformations,
            'longWorkUnits' => 'Korps Pegawai Republik Indonesia Kota Depok',
            'shortWorkUnits' => 'KORPRI',
            'webDescriptions' => 'Portal KORPRI Kota Depok merupakan Kanal Media Digital yang Memberikan Informasi mengenai KORPRI Kota Depok'
        );

        View::share($pagesData);
    }
}
