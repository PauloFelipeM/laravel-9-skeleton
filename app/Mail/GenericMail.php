<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class GenericMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    protected function __construct(
        string $subject,
        string $view,
        array $viewData = [],
        array $diskAttachments = []
    ) {
        $this->subject = $subject;
        $this->view = $view;
        $this->viewData = $viewData;
        $this->diskAttachments = $diskAttachments;
    }

    public function build(): self
    {
        return $this;
    }

    public static function sendMail(
        $to,
        string $subject,
        string $view,
        array $viewData = [],
        $diskAttachments = []
    ) {
        $editedSubject = env('APP_NAME', 'laravel') . ': ' . $subject;
        return Mail::to($to)->queue(new static($editedSubject, $view, $viewData, $diskAttachments));
    }
}
