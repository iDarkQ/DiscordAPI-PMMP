<?php

declare(strict_types=1);

namespace DiscordAPI\webhook\types;

use DiscordAPI\webhook\Webhook;

class Embed extends Webhook {

    public function __construct(string $title = "", string $description = "", array $fields = [], string $footer = "", string $thumbnail = "", int $color = 0xCC33FF) {
        $this->data = [
            "title" => $title,
            "description" => $description,
            "color" => $color,
            "fields" => [],
            "footer" => []
        ];

        if($fields != null)
            $this->data["fields"] = $fields;

        if($thumbnail != null)
            $this->data["thumbnail"]["url"] = $thumbnail;

        $this->data["footer"]["text"] = $footer;
    }

    public function setTitle(string $title) : void{
        $this->data["title"] = $title;
    }

    public function setDescription(string $description) : void{
        $this->data["description"] = $description;
    }

    public function setColor(int $color) : void{
        $this->data["color"] = $color;
    }

    public function setFooter(string $footer) : void{
        $this->data["footer"][] = $footer;
    }

    public function setThumbnail(string $thumbnail) : void{
        $this->data["thumbnail"]["url"] = $thumbnail;
    }

    public function addField(string $name, string $value, $inLine = false) : void{
        $this->data["fields"][] = [
            "name" => $name,
            "value" => $value,
            "inline" => $inLine
        ];
    }
}