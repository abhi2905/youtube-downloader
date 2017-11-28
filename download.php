<?php
require __DIR__ . '/vendor/autoload.php';

use YoutubeDl\YoutubeDl;
use YoutubeDl\Exception\CopyrightException;
use YoutubeDl\Exception\NotFoundException;
use YoutubeDl\Exception\PrivateVideoException;



if ($_POST['format']== "video") {
$dl = new YoutubeDl([
    'no-continue' => true, // force resume of partially downloaded files. By default, youtube-dl will resume downloads if possible.
    'format' => $_POST['quality'],
]);
// For more options go to https://github.com/rg3/youtube-dl#user-content-options

$dl->setDownloadPath('/var/www/html/utubehubsgi/videos');
// Enable debugging
/*$dl->debug(function ($type, $buffer) {
    if (\Symfony\Component\Process\Process::ERR === $type) {
        echo 'ERR > ' . $buffer;
    } else {
        echo 'OUT > ' . $buffer;
    }
});*/

$VideoID = $_POST['youtubeURL'];
try {
    $youtubeUrl =  "https://www.youtube.com/watch?v=$VideoID";

    $video = $dl->download($youtubeUrl);
    echo "Your video named '"."<u>".$video->getTitle()."</u>"."' has been downloaded."; // Will return video name
   $video->getFile();
 // \SplFileInfo instance of downloaded file

header('Refresh: 2; URL=http://localhost/utubehubsgi/front.php'); 
clearstatcache();

} catch (NotFoundException $e) {
    // Video not found
} catch (PrivateVideoException $e) {
    // Video is private
} catch (CopyrightException $e) {
    // The YouTube account associated with this video has been terminated due to multiple third-party notifications of copyright infringement
} catch (\Exception $e) {
    // Failed to download
}

}

if ($_POST['format'] == "audio") {
$dl = new YoutubeDl([
    'extract-audio' => true,
    'audio-format' => 'mp3',
    'audio-quality' => 0, // best
    
]);
$dl->setDownloadPath('/var/www/html/utubehubsgi/videos');

$VideoID = $_POST['youtubeURL'];
try {
$youtubeUrl =  "https://www.youtube.com/watch?v=$VideoID";
$video = $dl->download($youtubeUrl);

echo "Your audio named '"."<u>".$video->getTitle($youtubeUrl)."</u>"."' has been downloaded."; // Will return video name
$video->getFile();
header('Refresh: 2; URL=http://localhost/utubehubsgi/front.php'); 
clearstatcache();
} catch (NotFoundException $e) {
    // Video not found
} catch (PrivateVideoException $e) {
    // Video is private
} catch (CopyrightException $e) {
    // The YouTube account associated with this video has been terminated due to multiple third-party notifications of copyright infringement
} catch (\Exception $e) {
    // Failed to download
}
}
