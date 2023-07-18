<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class AnnouncementsController extends Controller
{
    public function announcement_detail($slug)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://cms.depok.go.id/ViewPortal/get_content?siteId='.config("constants.siteId").'&status=ST01&kanalType=K008&limit=&offset=&category=&slug='.$slug.'&key=');
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
        $announcementDetails = json_decode($response, TRUE);

        return view('pages.publications.announcement-detail', compact('announcementDetails'));
    }
}
