<?php

namespace App\Notifications;

use App\SmsSetting;
use App\Traits\SmsSettings;
use App\Traits\SmtpSettings;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;
use App\User;
use Illuminate\Notifications\Messages\NexmoMessage;

class LicenseExpireBefore extends Notification
{
    use Queueable, SmtpSettings, SmsSettings;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {

        $this->user = $user;
        $this->smsSetting = SmsSetting::first();

        $this->setMailConfigs();
        $this->setSmsConfigs();
    }

    /**
     * Get the notification's delivery channels.
     *t('mail::layout')
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        $via = ['mail'];

        if ($this->smsSetting->nexmo_status == 'active' && $notifiable->mobile_verified == 1) {
            array_push($via, 'nexmo');
        }

        return $via;
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {//
        return (new MailMessage)
            ->subject(__('email.licenceExpireBefore.subject').' '.config('app.name').'!')
            ->greeting(__('email.hello').' '.ucwords($notifiable->name).'!')
            ->line(__('email.licenceExpireBefore.text'))
            ->action(__('email.loginDashboard'), getDomainSpecificUrl(url('/'), $notifiable->company))
            ->line(__('email.thankyouNote'));

    }
    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return $notifiable->toArray();
    }

    /**
     * Get the Nexmo / SMS representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return NexmoMessage
     */
    public function toNexmo($notifiable)
    {
        return (new NexmoMessage)
                    ->content(
                        __('email.licenceExpireBefore.text')
                    )->unicode();
    }
}
