<?php
$data = ['message' => 'Hello world.'];
header("Content-Type: application/json; charset=UTF-8");

//If allow cross domain and not configration in Ngix/Apache
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Accept-Encoding, X-Requested-With, Content-Type, Origin, Accept, Authenticationtoken");

echo json_encode($data);

    // if ($userType == 'student') {
    //     $toolbarButtons: array(
    //         'microphone', 'camera', 'fullscreen',
    //         'hangup', 'chat', 'raisehand',
    //         'videoquality', 'feedback', 'stats',
    //         'tileview', 'select-background', 'download'
    //     );  
    // } else {
    //     $toolbarButtons: array(
    //         'microphone', 'camera', 'closedcaptions', 'desktop', 'embedmeeting', 'fullscreen',
    //         'fodeviceselection', 'hangup', 'profile', 'chat', 'recording',
    //         'livestreaming', 'etherpad', 'sharedvideo', 'shareaudio', 'settings', 'raisehand',
    //         'videoquality', 'filmstrip', 'invite', 'feedback', 'stats', 'shortcuts',
    //         'tileview', 'select-background', 'download', 'help', 'mute-everyone', 'mute-video-everyone', 'security'
    //     );  
    // }
