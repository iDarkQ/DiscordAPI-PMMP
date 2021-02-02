<?php

declare(strict_types=1);

namespace DiscordAPI\webhook\types;

use DiscordAPI\webhook\Webhook;

class Message extends Webhook {
    public function __construct(string $content = "", string $userName = "", string $url = "", Embed $embed = null) {
        $this->data = [
            "content" => $content,
            "username" => $userName,
            "avatar_url" => $url,
        ];

        if(!empty($embed))
            $this->data["embeds"][] = $embed;
    }

    public function setContent(string $content) : void{
        $this->data["content"] = $content;
    }

    public function setUserName(string $userName) : void{
        $this->data["username"] = $userName;
    }

    public function setAvatar(string $url) : void{
        $this->data["avatar_url"] = $url;
    }

    public function setEmbed(Embed $embed) : void{
        $this->data["embeds"][] = $embed;
    }
}