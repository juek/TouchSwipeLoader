<?php
defined('is_running') or die('Not an entry point...');

class TouchSwipe{
  /* Typesetter Action hook */
  public static function GetHead(){
    global $page, $addonRelativeCode;
    $page->head_js[] = $addonRelativeCode . '/jquery.touchSwipe.min.js';
  }
}
