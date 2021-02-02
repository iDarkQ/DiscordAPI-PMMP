<?php

declare(strict_types=1);

namespace DiscordAPI\webhook;

use JsonSerializable;

class Webhook implements JsonSerializable {

    protected array $data = [];

    public function jsonSerialize() : array {
        return $this->data;
    }
}