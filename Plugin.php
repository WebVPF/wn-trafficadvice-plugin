<?php namespace WebVPF\TrafficAdvice;

use Backend\Models\UserRole;
use System\Classes\PluginBase;
use System\Classes\SettingsManager;

class Plugin extends PluginBase
{
    public function pluginDetails(): array
    {
        return [
            'name'        => 'webvpf.trafficadvice::lang.plugin.name',
            'description' => 'webvpf.trafficadvice::lang.plugin.description',
            'author'      => 'WebVPF',
            'icon'        => 'icon-traffic-light'
        ];
    }

    public function registerPermissions(): array
    {
        return []; // Remove this line to activate

        return [
            'webvpf.trafficadvice.some_permission' => [
                'tab' => 'webvpf.trafficadvice::lang.plugin.name',
                'label' => 'webvpf.trafficadvice::lang.permissions.some_permission',
                'roles' => [UserRole::CODE_DEVELOPER, UserRole::CODE_PUBLISHER],
            ],
        ];
    }

    public function registerSettings(): array
    {
        return [
            'txt' => [
                'label'       => 'webvpf.trafficadvice::lang.plugin.name',
                'description' => 'webvpf.trafficadvice::lang.settings.menu_desc',
                'category'    => SettingsManager::CATEGORY_CMS,
                'icon'        => 'icon-traffic-light',
                'class'       => \WebVPF\TrafficAdvice\Models\Settings::class,
                'order'       => 299,
                'keywords'    => 'seo',
                'permissions' => ['webvpf.trafficadvice'],
            ],
        ];
    }
}
