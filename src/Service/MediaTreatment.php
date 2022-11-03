<?php

namespace App\Service;

use App\Entity\Media;
use Symfony\Component\Uid\Uuid;
use Exception;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class MediaTreatment {

    public const IMAGE = 'image';
    public const VIDEO = 'video';

    public function __construct() {

    }
    
    public function fileTreatment(mixed $media, string $type, string $directory = null) {
        
        if($type === self::IMAGE) {
            return $this->image($media, $directory);
        } 
        if($type === self::VIDEO) {
            return $this->video($media);
        }

        throw new Exception('File type not supported');
    }

    private function image(mixed $media, string $directory) : Media {
        $filename = Uuid::v4().'.'. $media->guessExtension();
        $media->move(
            $directory,
            $filename,
        );
        $image = new Media();
        $image->setFilename($filename);
        $image->setType(self::IMAGE);
        return $image;
    }

    private function video(mixed $media) : Media {
        $videoParser = new VideoUrlParser();
        $video = new Media();
        $video
            ->setFilename($videoParser->parse($media))
            ->setType('video');
        return $video;
    }


}