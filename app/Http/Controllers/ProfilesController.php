<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ProfilesController extends Controller
{
    public function about()
    {
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
            $response = curl_error($ch);
        curl_close($ch);
        $about = json_decode($response, TRUE);

        return view('pages.profiles.about', compact('about'));
    }

    public function vision()
    {
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
            $response = curl_error($ch);
        curl_close($ch);
        $about = json_decode($response, TRUE);

        return view('pages.profiles.vision', compact('about'));
    }

    public function legal()
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://cms.depok.go.id/ViewPortal/get_content?siteId='.config("constants.siteId").'&status=ST01&kanalType=K003&limit=&offset=&category=726&slug=&key=');
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
        $legal = json_decode($response, TRUE);

        return view('pages.profiles.legal', compact('legal'));
    }

    public function organization()
    {
        $key = 'CMSDataWaReHoUsepEgAwAi';
        $date = date('Ymd');
        $keydate = $key.$date;
        $auth = md5($keydate);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://cms.depok.go.id/Api/Pegawai?Auth='.$auth.'&instansi=DINAS%20KOMUNIKASI%20DAN%20INFORMATIKA&jabatan=&Limit=&Offset=');
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
        $organization = json_decode($response, TRUE);

        return view('pages.profiles.organization', compact('organization'));
    }

    public function duty()
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://cms.depok.go.id/ViewPortal/GetJabatan?siteId='.config("constants.siteId").'&status=ST01&kanalType=K001&limit=&offset=&categoryId=&slug=&key=');
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
        $duty = json_decode($response, TRUE);

        return view('pages.profiles.duty', compact('duty'));
    }
}
