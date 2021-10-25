<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;

class Inquiry
{
    use Notifiable;
    
    
    private string $last_name;
    private string $first_name;
    private string $last_name_kana;
    private string $first_name_kana;
    private string $email;
    private string $phone;
    private string $contact_detail;


    /**
     * 
     *
     * @param array $attributes
     */
    public function __construct(array $attributes)
    {
        foreach ($attributes as $key => $value) {
            $this->$key = $value;
        }
    }

    /**
     * 
     *
     * @param  \Illuminate\Notifications\Notification  $notification
     * @return string
     */
    public function routeNotificationForSlack($notification): string
    {
        return config('services.slack.inquiry');
    }

    /**
     * @param string $name
     * @return mixed
     */
    public function __get(string $last_name)
    {
        if (!property_exists($this, $last_name)) {
            throw new \Exception("Not found '${last_name}'.");
        }

        return $this->$last_name;
    }
}
