<?php

namespace App\Tags;

use Statamic\Tags\Tags;

class BackUrl extends Tags
{
  public function index()
  {
    $referrer = request()->headers->get('referer');
    $currentHost = request()->getHost();
    $fallbackUrl = $this->params->get('fallback', '/');

    // Check if referrer exists and is from the same domain
    if ($referrer && parse_url($referrer, PHP_URL_HOST) === $currentHost) {
      // Referrer is from same site, use javascript:history.back()
      return 'javascript:history.back()';
    }

    // No referrer or external referrer, use fallback URL
    return $fallbackUrl;
  }
}
