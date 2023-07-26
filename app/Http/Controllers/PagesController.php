<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class PagesController extends Controller
{
    public function index()
    {
        /**
         * Datetime
         */
        $dt = Carbon::now();
        $dayNow = $dt->format('l');
        $dateNow = $dt->format('d F Y');
        $timeNow = $dt->format('H:i:s');

        if ($dayNow == 'Monday') {
            $dayNow = 'Senin';
        }
        else if ($dayNow == 'Tuesday') {
            $dayNow = 'Selasa';
        }
        else if ($dayNow == 'Wednesday') {
            $dayNow = 'Rabu';
        }
        else if ($dayNow == 'Thursday') {
            $dayNow = 'Kamis';
        }
        else if ($dayNow == 'Friday') {
            $dayNow = 'Jumat';
        }
        else if ($dayNow == 'Saturday') {
            $dayNow = 'Sabtu';
        }
        else if ($dayNow == 'Sunday') {
            $dayNow = 'Minggu';
        }
        else {
            $dayNow = 'Terjadi Kesalahan';
        }

        /**
         * Prayers
         */
        if ($timeNow > $this->prayer_time(1) && $timeNow < $this->prayer_time(2)) {
            $pt = $this->prayer_time(2);
            $prayerName = 'Salat Dhuha';
        } else if ($timeNow > $this->prayer_time(2) && $timeNow < $this->prayer_time(3)) {
            $pt = $this->prayer_time(3);
            $prayerName = 'Salat Zuhur';
        } else if ($timeNow > $this->prayer_time(3) && $timeNow < $this->prayer_time(4)) {
            $pt = $this->prayer_time(4);
            $prayerName = 'Salat Asar';
        } else if ($timeNow > $this->prayer_time(4) && $timeNow < $this->prayer_time(5)) {
            $pt = $this->prayer_time(5);
            $prayerName = 'Salat Magrib';
        } else if ($timeNow > $this->prayer_time(5) && $timeNow < $this->prayer_time(6)) {
            $pt = $this->prayer_time(6);
            $prayerName = 'Salat Isya';
        } else if ($timeNow > $this->prayer_time(6) || $timeNow < $this->prayer_time(1)) {
            $pt = $this->prayer_time(1);
            $prayerName = 'Salat Subuh';
        } else {
            $pt = 'Terjadi Kesalahan';
            $prayerName = 'Terjadi Kesalahan';
        }

        /**
         * Sliders
         */
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://cms.depok.go.id/ViewPortal/getSlider?siteId='.config("constants.siteId").'&typeId=SL01&status=&fileType=');
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
        $sliders = json_decode($response, TRUE);

        /**
         * Infographics
         */
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://cms.depok.go.id/ViewPortal/get_content?siteId=86&status=ST01&kanalType=K003&limit=1&offset=&category=722&slug=&key=');
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
        $infographics = json_decode($response, TRUE);

        /**
         * News
         */
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://cms.depok.go.id/ViewPortal/get_content?siteId='.config("constants.siteId").'&status=ST01&kanalType=K001&limit=3&offset=1&category=&slug=&key=');
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

        /**
         * Announcements
         */
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://cms.depok.go.id/ViewPortal/get_content?siteId='.config("constants.siteId").'&status=ST01&kanalType=K008&limit=3&offset=&category=&slug=&key=');
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
        $announcements = json_decode($response, TRUE);

        /**
         * Announcements Depok
         */
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://depok.go.id/api/pengumuman');
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
        $cityAnnouncements = json_decode($response, TRUE);

        /**
         * Agendas
         */
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://cms.depok.go.id/ViewPortal/GetEvent?siteId='.config("constants.siteId").'&status=ST01&kanalType=K001&limit=2&offset=&categoryId=659&slug=&key=');
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
        $agendas = json_decode($response, TRUE);

        /**
         * City News
         */
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://berita.depok.go.id/api/v1/berita');
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
        $cityNews = json_decode($response, TRUE);

        /**
         * External Link
         */
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://cms.depok.go.id/ViewPortal/GetExLink?siteId='.config("constants.siteId").'&status=ST01&kanalType=K001&limit=&offset=&categoryId=659&slug=&key=');
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
        $externalLinks = json_decode($response, TRUE);

        /**
         * Gallery
         */
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
        $galleries = json_decode($response, TRUE);

        return view('pages.index', [
            'dateNow' => $dateNow,
            'dayNow' => $dayNow,
            'sliders' => $sliders,
            'pt' => $pt,
            'prayerName' => $prayerName,
            'infographics' => $infographics,
            'news' => $news,
            'latestNews' => $latestNews,
            'announcements' => $announcements,
            'cityAnnouncements' => $cityAnnouncements,
            'agendas' => $agendas,
            'cityNews' => $cityNews,
            'externalLinks' => $externalLinks,
            'galleries' => $galleries,
            'string_limit' => [$this, 'string_limit'],
        ]);
    }

    private function sign($x)
    {
        if ($x == 0) return 0;
        else return $x / abs($x);
    }

    private function prayer_time($schedule)
    {
        $dateForPray = getdate();
        $J = $dateForPray['yday'];
        $H = 0;
        $Gd = 19.5;
        $Gn = 17.5;
        $B = - 6.3944475;
        $L = 106.8213664;
        $TZ = 7;
        $Sh = 1;
        $D = 0;
        $T = 0;
        $R = 0;
        $beta = 2 * pi() * $J / 365;
        $D = (180 / pi()) * (0.006918 - (0.399912 * cos($beta)) + (0.070257 * sin($beta)) - (0.006758 * cos(2 * $beta)) + (0.000907 * sin(2 * $beta)) - (0.002697 * cos(3 * $beta)) + (0.001480 * sin(3 * $beta)));
        $T = 229.18 * (0.000075 + (0.001868 * cos($beta)) - (0.032077 * sin($beta)) - (0.014615 * cos(2 * $beta)) - (0.040849 * sin(2 * $beta)));
        $R = 15 * $TZ;
        $G = 18;
        $Z = 12 + (($R - $L) / 15) - ($T / 60);
        $U = (180 / (15 * pi())) * acos((sin((-0.8333 - 0.0347 * $this->sign($H) * sqrt(abs($H))) * (pi() / 180)) - sin($D * (pi() / 180)) * sin($B * (pi() / 180))) / (cos($D * (pi() / 180)) * cos($B * (pi() / 180))));
        $Vd = (180 / (15 * pi())) * acos((-sin($Gd * (pi() / 180)) - sin($D * (pi() / 180)) * sin($B * (pi() / 180))) / (cos($D * (pi() / 180)) * cos($B * (pi() / 180))));
        $Vn = (180 / (15 * pi())) * acos((-sin($Gn * (pi() / 180)) - sin($D * (pi() / 180)) * sin($B * (pi() / 180))) / (cos($D * (pi() / 180)) * cos($B * (pi() / 180))));
        $W = (180 / (15 * pi())) * acos((sin(atan(1 / ($Sh + tan(abs($B - $D) * pi() / 180)))) - sin($D * pi() / 180) * sin($B * pi() / 180)) / (cos($D * pi() / 180) * cos($B * pi() / 180)));

        switch ($schedule) {
            case 1:
            $result = $Z - $Vd;
            break;
            case 2:
            $result = $Z - $U;
            break;
            case 3:
            $result = $Z;
            break;
            case 4:
            $result = $Z + $W;
            break;
            case 5:
            $result = $Z + $U;
            break;
            case 6:
            $result = $Z + $Vn;
            break;
        }

        $subuh = $Z - $Vd;
        $hour = floor($result);
        $minute = floor(($result - $hour) * 60);
        $second = floor(((($result - $hour) * 60) - $minute) * 60);
        if (strlen($hour) == 1) $hour = "0" . $hour;
        if (strlen($minute) == 1) $minute = "0" . $minute;
        if (strlen($second) == 1) $second = "0" . $second;
        $output = "$hour:$minute WIB";
        return $output;
    }

    public function string_limit($string, $limit)
    {
        $result = (strlen($string) > $limit)? substr(strip_tags($string), 0, $limit) . '...' : $string;
        return $result;
    }
}
