<?php

    namespace App\Mail;

    use App\Models\Setting;
    use Illuminate\Bus\Queueable;
    use Illuminate\Mail\Mailable;
    use Illuminate\Queue\SerializesModels;

    class FormEmail extends Mailable
    {
        use Queueable, SerializesModels;

        private $data;

        public function __construct($data)
        {
            $this->data = $data;
        }

        public function build()
        {
            $settings = Setting::first();
            return $this
                ->from($settings['email'], 'Заявка с сайта')
                ->to($settings['email'])
                ->subject('Заявка с сайта')
                ->view('mails', ['data' => $this->data]);
        }
    }
