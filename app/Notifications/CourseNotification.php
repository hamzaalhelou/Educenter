<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Models\Course;

class CourseNotification extends Notification
{
    use Queueable;
    protected $course;

    /**
     * Create a new notification instance.
     */
    public function __construct(Course $course)
    {
        $this->course = $course;
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
    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toDatabase (object $notifiable): array
    {
        return [
            'id'=>$this->course->id,
            'title'=>'New Course',
            'content'=>'A new course has been added',
            'url'=>route('site.courses')

        ];
    }
}
