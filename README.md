# DiscordAPI-PMMP

Easy to use api to create a webhook and upload it to discord servers!

## Making simple message

```php
$webhook = new Message();
$webhook->setContent("");
$webhook->setAvatar("https://i.ibb.co/9vyMQ0C/logoDM2.png");
$webhook->setUserName("Example username");
```

## Making simple embed

```php
$embed = new Embed();
$embed->setTitle("SIMPLE TITLE");
$embed->setDescription("Description");

# you can find the colors here https://www.w3schools.com/colors/colors_picker.asp
# Always add 0x before the color!

$embed->setColor(0xCC33FF);
$embed->setFooter("Footer");
$embed->setThumbnail("https://i.ibb.co/9vyMQ0C/logoDM2.png");
$embed->addField("name", "value");

$webhook->setEmbed($embed);
```

## Sending embed

```php
#example webhook link: https://discord.com/api/webhooks/00000000/xxxxxx
WebhookManager::sendWebhook($webhook, "webhook link");
```

## Full code

```php
$webhook = new Message();
$webhook->setContent("content message");
$webhook->setAvatar("https://i.ibb.co/9vyMQ0C/logoDM2.png");
$webhook->setUserName("Example username");

$embed = new Embed();
$embed->setTitle("SIMPLE TITLE");
$embed->setDescription("Description");

# you can find the colors here https://www.w3schools.com/colors/colors_picker.asp
# Always add 0x before the color!

$embed->setColor(0xCC33FF);
$embed->setFooter("Footer");
$embed->setThumbnail("https://i.ibb.co/9vyMQ0C/logoDM2.png");
$embed->addField("name", "value");

$webhook->setEmbed($embed);

WebhookManager::sendWebhook($webhook, "webhook link");
```

## Screenshot

![](/images/example/example.png?raw=true "Discord Webhook")
