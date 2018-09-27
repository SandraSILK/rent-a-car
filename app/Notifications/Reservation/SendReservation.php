<?php

namespace App\Notifications\Reservation;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\HtmlString;

class SendReservation extends Notification
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
                    ->subject(sprintf('Witaj %s %s', $notifiable->name, $notifiable->last_name))
                    ->line(sprintf('Dziękujemy za złożenie rezerwacji na pojazd %s.', $notifiable->car))
                    ->line(sprintf('Auto będzie na Ciebie czekać w naszym punkcie w dniu %s. Prosimy o jego terminowy zwrot dnia %s. Całkowity koszt wynajmu pojazdu wynosi %d zł.', $notifiable->date_from, $notifiable->date_to, $notifiable->price))
                    ->line(sprintf('Numer rezerwacji niezbędny do podjęcia auta to %s.', $notifiable->nr_reservation))
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
