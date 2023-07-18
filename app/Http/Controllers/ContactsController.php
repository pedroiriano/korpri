<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

class ContactsController extends Controller
{
    public function contactUs()
    {
        /* $ch = curl_init();
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
        $contactUs = json_decode($response, TRUE);

        return view('pages.contacts.contact-us', compact('contactUs')); */
        return view('pages.contacts.contact-us');
    }

    public function importantContact()
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://cms.depok.go.id/ViewPortal/getContact?siteId='.config("constants.siteId").'&organisasiId=&contactId=&userId=&limit=');
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
        $importantContacts = json_decode($response, TRUE);
        $importantContacts = $this->array_pagination($importantContacts);

        return view('pages.contacts.important-contact', compact('importantContacts'));
    }

    private function array_pagination($items, $perPage = 6, $page = null, $options = [])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, array('path' => Paginator::resolveCurrentPath()), $options);
    }
}
