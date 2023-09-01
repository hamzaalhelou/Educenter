<?php

namespace App\Notifications;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewUserNotification extends Notification
{
    use Queueable;
    protected $post_id;
    protected $user_create;
    protected $title;
    protected $body;

    /**
     * Create a new notification instance.
     */
    public function __construct($user_create,$title,$body,$post_id)
    {
        $this->user_create = $user_create;
        $this->title = $title;
        $this->body = $body;
        $this->post_id = $post_id;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
                    ->greeting('Hello')
                    ->line('The introduction to the notification.')
                    ->action('Notification Action',route('site.home'))
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toDatabase(object $notifiable): array
    {
        return [
            'post_id'=>$this->post_id,
            'user_create'=>$this->user_create,
            'title'=>$this->title,
            'body'=>$this->body,


        ];
    }
}
