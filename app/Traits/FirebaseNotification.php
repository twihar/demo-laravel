<?php

namespace App\Traits;


use App\Models\MobileInformation;
use Illuminate\Support\Facades\Log;

trait FirebaseNotification
{

    public function sendFirebaseNotification($details, $ids)
    {
        $url = 'https://fcm.googleapis.com/fcm/send';
        $FcmTokens = MobileInformation::whereIn('salepoint_id', $ids)->pluck('device_key')->toArray();
        $serverKey = env('FIREBASE_SERVER_KEY');
        $details = [
            "registration_ids" => $FcmTokens,
            "data" => [
                "title" => [
                    'fr' => $details['title_fr'],
                    'en' => $details['title_en'],
                    'ar' => $details['title_ar'],
                ],
                "body" => [
                    'fr' => $details['body_fr'],
                    'en' => $details['body_en'],
                    'ar' => $details['body_ar'],
                ],
                "image" => $details['image'],
                'sound' => true,
            ]
        ];
        $encodedData = json_encode($details);
        $headers = [
            'Authorization:key=' . $serverKey,
            'Content-Type: application/json',
        ];
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $encodedData);
        $result = curl_exec($ch);
        if ($result === FALSE) {
            Log::error(curl_error($ch));
        }
        curl_close($ch);
        return $result;
    }

}
