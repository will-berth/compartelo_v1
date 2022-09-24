<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ComparteloSoporte extends Notification
{
    use Queueable;

    protected $password;
    protected $tipo;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(String $password, Int $tipo)
    {
        $this->password = $password;
        $this->tipo = $tipo;
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
        // 1-Reenviar verificación de correo, 2-Recuperar contraseña
        switch ($this->tipo) {
            case 1:
                return (new MailMessage)
                    ->line('Confirma tu correo para poder usar nuestra aplicación.')
                    ->action('Verificar correo', url('/'))
                    ->line('No responder a este correo');
                break;
            case 2:
                return (new MailMessage)
                    ->line('Se restablecio tu contraseña:')
                    ->line('Tu nueva contraseña es: ' . $this->password)
                    ->line('No responder a este correo');
                break;

            case 3:
                return (new MailMessage)
                    ->line('usuario rechazado:')
                    ->line($this->password)
                    ->line('No responder a este correo');
                break;

            case 5:
                return (new MailMessage)
                    ->line('fue aceptado tu solicitud:')
                    ->line($this->password)
                    ->line('No responder a este correo');
                break;
        }
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
