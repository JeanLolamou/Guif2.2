<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class RegisteredUser extends Notification
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
        ->success()
        ->greeting('Salut!')
        ->from('guif@apip.gov.gn','GUINEA INVESTMENT FORUM (GUIF)') 
        ->subject('Inscription sur GUIF.')
        ->line('Votre compte a bien été créé mais il doit etre confirmer, merci de cliquer sur le lien suivant.')
        ->action('Confirmer mon compte', url("/confirm/{$notifiable->id}/{$notifiable->confirmation_token}"))
        ->line('Si vous n\'etes pas à l\'origine de cette demande, vous pouvez ignorer ce mail!');
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
