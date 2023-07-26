<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

class PublicationsController extends Controller
{
    public function photo()
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://cms.depok.go.id/ViewPortal/GetGallery?siteId='.config("constants.siteId").'&status=ST01&kanalType=K001&limit=&offset=&categoryId=&slug=&key=');
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
        $photo = json_decode($response, TRUE);
        $photo = $this->array_pagination($photo);
        
        return view('pages.publications.photo', compact('photo'));
    }

    public function video()
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://cms.depok.go.id/ViewPortal/GetGallery?siteId='.config("constants.siteId").'&status=ST01&kanalType=K001&limit=&offset=&categoryId=&slug=&key=');
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
        $video = json_decode($response, TRUE);
        $video = $this->array_pagination($video);

        return view('pages.publications.video', compact('video'));
    }

    public function announcement()
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://cms.depok.go.id/ViewPortal/get_content?siteId='.config("constants.siteId").'&status=ST01&kanalType=K008&limit=&offset=&category=&slug=&key=');
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
        $announcement = json_decode($response, TRUE);
        $announcement = $this->array_pagination($announcement);
        
        return view('pages.publications.announcement', compact('announcement'));
    }

    public function news()
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://cms.depok.go.id/ViewPortal/get_content?siteId='.config("constants.siteId").'&status=ST01&kanalType=K001&limit=1&offset=&category=&slug=&key=');
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
        $latestNews = json_decode($response, TRUE);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://cms.depok.go.id/ViewPortal/get_content?siteId='.config("constants.siteId").'&status=ST01&kanalType=K001&limit=&offset=1&category=&slug=&key=');
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
        $news = json_decode($response, TRUE);
        $news = $this->array_pagination($news);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://cms.depok.go.id/ViewPortal/get_content?siteId='.config("constants.siteId").'&status=ST01&kanalType=K001&limit=&offset=&category=&slug=&key=');
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
        $allNews = json_decode($response, TRUE);
        $allNews = $this->array_pagination($allNews);

        return view('pages.publications.news', compact('news', 'latestNews', 'allNews'));
    }

    private function array_pagination($items, $perPage = 4, $page = null, $options = [])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, array('path' => Paginator::resolveCurrentPath()), $options);
    }
}
