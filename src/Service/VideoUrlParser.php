<?php

namespace App\Service;

use Exception;

use function PHPUnit\Framework\isEmpty;
use function PHPUnit\Framework\stringContains;
use function PHPUnit\Framework\throwException;

class VideoUrlParser {

    private const YOUTUBE = [
        'youtube.com/',
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
        $returnUrl = 'https://www.youtube.com/embed/';
        if(str_contains($url, 'youtu.be/')) {
            $videoId = str_replace('/', '' ,parse_url( $url, PHP_URL_PATH));
            if(empty($videoId)) {
                throw new Exception('this video doesn\'t exists');
            } 
            return $returnUrl . $videoId;
        } 
        if(str_contains($url, 'embed')) {
            $videoId = str_replace('embed', '' ,parse_url( $url, PHP_URL_PATH));
            $videoId = str_replace('/', '', $videoId);
            if(empty($videoId)) {
                throw new Exception('this video doesn\'t exists');
            } 
            return $returnUrl . $videoId;
        } else {
            parse_str(parse_url( $url, PHP_URL_QUERY), $vars);
            if(empty($vars['v'])) {
                throw new Exception('this video doesn\'t exists');
            } 
            return $returnUrl . $vars['v'];
        }
        throw new Exception('Bad Url');
    }

    private function dailymotion(string $url) : string {
        $returnUrl = 'https://www.dailymotion.com/embed/video/';
        if(str_contains($url, 'dai.ly')) {
            $videoId = str_replace('/', '' ,parse_url( $url, PHP_URL_PATH ));
            if(empty($videoId)) {
                throw new Exception('this video doesn\'t exists');
            } 
            return $returnUrl . $videoId;
        } else {
            $videoId = str_replace('video', '' ,parse_url( $url, PHP_URL_PATH ));
            $videoId = str_replace('/', '', $videoId);
            if(empty($videoId)) {
                throw new Exception('this video doesn\'t exists');
            } 
            return $returnUrl . $videoId;
        }
        //dd($vars);
        throw new Exception('Bad Url');
    }

    private function vimeo(string $url) : string {
        $returnUrl = 'https://player.vimeo.com/video/';
        if(str_contains($url, 'player')) {
            $videoId = str_replace('video', '' ,parse_url( $url, PHP_URL_PATH ));
            $videoId = str_replace('/', '', $videoId);
            if(empty($videoId)) {
                throw new Exception('this video doesn\'t exists');
            } 
            return $returnUrl . $videoId;
        } else {
            return $returnUrl . str_replace('/', '' ,parse_url( $url, PHP_URL_PATH ));
        }

        throw new Exception('Bad Url');
    }

}
