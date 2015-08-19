<?php
namespace larvata\videojs;
use yii\web\AssetBundle;

class VideojsAsset extends AssetBundle{
    public $sourcePath="@vendor/larvata/videojs";

    public $css=[
            "assets/css/video-js.css"
        ];

    public $js = []
            "assets/js/video.js",
            "assets/js/videojs-media-sources.js",
            "assets/js/videojs.hls.js"
        ;
}

?>
