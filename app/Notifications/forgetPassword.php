<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Str;
use App\User;

class forgetPassword extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    protected $mail_data;
    public function __construct($data)
    {
        $user_data = User::where('id',$data['user_id'])->first();
        $this->mail_data = $user_data;
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
        $user = User::find($notifiable->id);
        if(!$user)
          return false;
        
        $token = Str::random(32);
        $user->forget_token = $token; 
        $user->save();
        //$user->remember_token = $tokens;
        if($notifiable->email != ""){
            return (new MailMessage)
                ->from('admin@listeo.com', 'Admin')
                ->subject('Reset Password')
                ->markdown('mail.user.forgetpassword', ['mail_data' => $this->mail_data,'token' => $token]);
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
