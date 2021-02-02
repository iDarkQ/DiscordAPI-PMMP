<?php

declare(strict_types=1);

namespace DiscordAPI\manager;

use DiscordAPI\webhook\Webhook;

class WebhookManager {

    public static function sendWebhook(Webhook $webhook, string $url) : void {
        $handle = curl_init($url);
        curl_setopt($handle, CURLOPT_POSTFIELDS, json_encode($webhook));
        curl_setopt($handle, CURLOPT_POST, true);
        curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($handle, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($handle, CURLOPT_HTTPHEADER, ["Content-Type: application/json"]);
        curl_exec($handle);
        curl_close($handle);
    }
}