<?php


namespace EasySwoole\WeChat\OfficialAccount;


use EasySwoole\WeChat\Kernel\ServiceContainer;

/**
 * Class ServiceProvider
 *
 * @package EasySwoole\WeChat\OfficialAccount
 * @property Auth\AccessToken $accessToken
 * @property AutoReplay\Client $autoReplay
 * @property Base\Client $base
 * @property Server\Guard $server
 * @property Wifi\Client $wifi
 * @property WiFi\CardClient $wifiCard
 * @property WiFi\DeviceClient $wifiDevice
 * @property WiFi\ShopClient $wifiShop
 * @property User\UserClient $user
 * @property User\TagClient $userTag
 * @property TemplateMessage\Client $templateMessage
 * @property Store\Client $store
 * @property ShakeAround\ShakeAround $shakeAround
 */
class Application extends ServiceContainer
{
    const Base = 'base';
    const Server = 'server';
    const AutoReplay = 'autoReplay';
    const Broadcasting = 'broadcasting';
    const Wifi = 'wifi';
    const WifiCard = 'wifiCard';
    const WifiDevice = 'wifiDevice';
    const WifiShop = 'wifShop';
    const User = 'user';
    const UserTag = 'userTag';
    const TemplateMessage = 'templateMessage';
    const Store = 'store';
    const ShakeAround = 'shakeAround';

    protected $providers = [
        Auth\ServiceProvider::class,
        AutoReplay\ServiceProvider::class,
        Broadcasting\ServiceProvider::class,
        Base\ServiceProvider::class,
        Server\ServiceProvider::class,
        WiFi\ServiceProvider::class,
        User\ServiceProvider::class,
        TemplateMessage\ServiceProvider::class,
        Store\ServiceProvider::class,
        ShakeAround\ServiceProvider::class
    ];
}