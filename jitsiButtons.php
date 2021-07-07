<?php

    $userType = $_GET['userType'];

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

    return $userType;

?>