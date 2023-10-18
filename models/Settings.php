<?php namespace WebVPF\TrafficAdvice\Models;

use Model;

class Settings extends Model
{
    use \Winter\Storm\Database\Traits\Validation;

    /**
     * @var array Behaviors implemented by this model.
     */
    public $implement = [\System\Behaviors\SettingsModel::class];

    /**
     * @var string Unique code
     */
    public $settingsCode = 'webvpf_trafficadvice_settings';

    /**
     * @var mixed Settings form field definitions
     */
    public $settingsFields = 'fields.yaml';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'fraction' => 'required|numeric|min:0|max:1',
    ];

    public function initSettingsData()
    {
        $this->is_activated = true;
        $this->fraction = 1.0;
    }
}
