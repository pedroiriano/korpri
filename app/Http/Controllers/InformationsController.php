<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

class InformationsController extends Controller
{
    public function product()
    {
        $ch = curl_init();
        // curl_setopt($ch, CURLOPT_URL, 'https://cms.depok.go.id/ViewPortal/get_content?siteId='.config("constants.siteId").'&status=ST01&kanalType=K010&limit=10&offset=&category=369&slug=&key=');
        curl_setopt($ch, CURLOPT_URL, 'https://cms.depok.go.id/ViewPortal/get_content?siteId='.config("constants.siteId").'&status=ST01&kanalType=K010&limit=&offset=&category=&slug=&key=');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        $httpCode = curl_getinfo($ch , CURLINFO_HTTP_CODE);
        $response = curl_exec($ch);
        if ($response === false)
            $response = curl_error($ch);
        curl_close($ch);
        $product = json_decode($response, TRUE);

        return view('pages.informations.product', compact('product'));
    }

    public function featured()
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://cms.depok.go.id/ViewPortal/get_content?siteId='.config("constants.siteId").'&status=ST01&kanalType=K005&limit=&offset=&category=&slug=&key=');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        $httpCode = curl_getinfo($ch , CURLINFO_HTTP_CODE);
        $response = curl_exec($ch);
        if ($response === false)
            $response = curl_error($ch);
        curl_close($ch);
        $featured = json_decode($response, TRUE);
        $featured = $this->array_pagination($featured);

        return view('pages.informations.featured', compact('featured'));
    }

    public function innovation()
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://cms.depok.go.id/ViewPortal/get_content?siteId='.config("constants.siteId").'&status=ST01&kanalType=K003&limit=&offset=&category=728&slug=&key=');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        $httpCode = curl_getinfo($ch , CURLINFO_HTTP_CODE);
        $response = curl_exec($ch);
        if ($response === false)
            $response = curl_error($ch);
        curl_close($ch);
        $innovation = json_decode($response, TRUE);
        $innovation = $this->array_pagination($innovation);

        return view('pages.informations.innovation', compact('innovation'));
    }

    public function agenda()
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://cms.depok.go.id/ViewPortal/GetEvent?siteId='.config("constants.siteId").'&type=AG01&status=ST01&kanalType=K001&limit=&offset=&categoryId=659&slug=&key=');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        $httpCode = curl_getinfo($ch , CURLINFO_HTTP_CODE);
        $response = curl_exec($ch);
        if ($response === false)
            $response = curl_error($ch);
        curl_close($ch);
        $generalAgenda = json_decode($response, TRUE);
        $generalAgenda = $this->array_pagination($generalAgenda);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://cms.depok.go.id/ViewPortal/GetEvent?siteId='.config("constants.siteId").'&type=AG02&status=ST01&kanalType=K001&limit=&offset=&categoryId=659&slug=&key=');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        $httpCode = curl_getinfo($ch , CURLINFO_HTTP_CODE);
        $response = curl_exec($ch);
        if ($response === false)
            $response = curl_error($ch);
        curl_close($ch);
        $specialAgenda = json_decode($response, TRUE);
        $specialAgenda = $this->array_pagination($specialAgenda);

        return view('pages.informations.agenda', compact('generalAgenda', 'specialAgenda'));
    }

    private function array_pagination($items, $perPage = 5, $page = null, $options = [])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, array('path' => Paginator::resolveCurrentPath()), $options);
    }
}
