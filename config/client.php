<?php

return [

  /*
  |--------------------------------------------------------------------------
  | Company name
  |--------------------------------------------------------------------------
  |
  */

  'company' => env('FANTOCHE_COMPANY_NAME', 'FANTOCHE | 21. INTERNATIONALES FESTIVAL FÜR ANIMATIONSFILM'),

  /*
  |--------------------------------------------------------------------------
  | E-Mail settings
  |--------------------------------------------------------------------------
  |
  */

  'email' => [
    'from' => env('FANTOCHE_MAIL_FROM', 'marcel@jamon.digital'),
    'recipient' => env('FANTOCHE_MAIL_RECIPIENT', 'm@marceli.to'),
    'bcc' => env('FANTOCHE_MAIL_BCC', 'info@forum-architektur.ch'),
    'recipient_test' => env('FANTOCHE_MAIL_RECIPIENT_TEST', 'm@marceli.to')
  ],

  /*
  |--------------------------------------------------------------------------
  | Domain
  |--------------------------------------------------------------------------
  |
  */

  'domain' => env('FANTOCHE_DOMAIN', 'https://forum-architektur.ch'),

  /*
  |--------------------------------------------------------------------------
  | Chunk size for cron jobs
  |--------------------------------------------------------------------------
  |
  */

  'cron_chunk_size' => 3,
]
?>