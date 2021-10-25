<?php

namespace App\Notifications;

use App\Models\Inquiry;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\SlackMessage;
use Illuminate\Notifications\Notification;

class Inquired extends Notification
{
    use Queueable;

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['slack'];
    }

    /**
     * 
     *
     * @param  Inquiry  $inquiry
     * @return SlackMessage
     */
    public function toSlack(Inquiry $inquiry)
    {
        return (new SlackMessage)
                ->success()
                ->content(sprintf("%s%sさんから問い合わせがありました。内容はこちら↓", $inquiry->last_name,$inquiry->first_name))
                ->attachment(function ($attachment) use ($inquiry) {
                    $attachment->title('お問い合わせ内容')
                    ->fields([
                        '姓' => $inquiry->last_name,
                        'かな' => $inquiry->last_name_kana,
                        '名' => $inquiry->first_name,
                        'よみ' => $inquiry->first_name_kana,
                        '電話番号' => $inquiry->phone,
                        'メールアドレス' => $inquiry->email,
                        'メッセージ' => $inquiry->contact_detail,
                    ]);
                });
    }
}