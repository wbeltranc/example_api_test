<?php

namespace BeltranC\Models;

class CallSoap
{
    public function call($url, $id)
    {
        $client = new \SoapClient($url);

        $resp = $client->FindPerson(['id' => $id]);

        return $resp->FindPersonResult;
    }
}