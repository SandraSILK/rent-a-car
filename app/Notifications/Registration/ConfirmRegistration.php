<?php

namespace App\Notifications\Registration;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\HtmlString;

class ConfirmRegistration extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line(sprintf('Witaj %s %s', $notifiable->first_name, $notifiable->last_name))
                    ->line(new HtmlString('Chcemy przywitać Ciebie w naszym serwisie <strong>Rent A Car</strong>.'))
                    ->line('Aby w pełni móc cieszyć się pełnym dostępem do konta, musisz potwierdzić jego założenie.')
                    ->action('Aktywuj konto!', route('register.confirm', $notifiable->api_token))
                    ->line('Jeżeli nie byłeś adresatem niniejszej wiadomości, zignoruj ją.')
                    ->salutation(new HtmlString('Pozdrawimy, <br> Zespół Rent A Car!'));
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
