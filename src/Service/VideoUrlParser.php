<?php

namespace App\Service;

use Exception;

use function PHPUnit\Framework\stringContains;
use function PHPUnit\Framework\throwException;

class VideoUrlParser {

    private const YOUTUBE = [
        'youtube.com/watch?v=',
        'youtu.be/',
    ];

    private const VIMEO = [
        'vimeo.com/',
    ];

    private const DAILYMOTION = [
        'dailymotion.com/video/',
        'dai.ly',
    ];

    public function parse(string $url) : string {        
        return $this->detectPlatform($url);
    }

    private function detectPlatform(string $url) : string {
        foreach(self::YOUTUBE as $youtube) {
            if(str_contains($url, $youtube)) {
                return $this->youtube($url);
            }
        }
        foreach(self::VIMEO as $vimeo) {
            if(str_contains($url, $vimeo)) {
                return $this->vimeo($url);
            }
        }
        foreach(self::DAILYMOTION as $dailymotion) {
            if(str_contains($url, $dailymotion)) {
                return $this->dailymotion($url);
            }
        }
        throw new Exception('Platform not supported');
    }

    private function youtube(string $url) : string {
        if(str_contains($url, 'youtu.be/')) {
            $vars= ['v' => str_replace('/', '' ,parse_url( $url, PHP_URL_PATH ))];
        } elseif(str_contains($url, 'embed')) {
            $vars= ['v' => str_replace('/embed/', '' ,parse_url( $url, PHP_URL_PATH ))];
        } else {
            parse_str( parse_url( $url, PHP_URL_QUERY ), $vars );
        }
        return 'https://www.youtube.com/embed/'.$vars['v'];
    }

    private function dailymotion(string $url) : string {
        if(str_contains($url, 'dai.ly')) {
            $vars= ['v' => str_replace('/', '' ,parse_url( $url, PHP_URL_PATH ))];
        } else {
            $vars= ['v' => str_replace('/video/', '' ,parse_url( $url, PHP_URL_PATH ))];
        }
        //dd($vars);
        return 'https://www.dailymotion.com/embed/video/'.$vars['v'];
    }

    private function vimeo(string $url) : string {
        
        if(str_contains($url, 'player')) {
            $vars= ['v' => str_replace('/video/', '' ,parse_url( $url, PHP_URL_PATH ))];
        } else {
            $vars= ['v' => str_replace('/', '' ,parse_url( $url, PHP_URL_PATH ))];
        }

        return 'https://player.vimeo.com/video/'.$vars['v'];
    }

}
