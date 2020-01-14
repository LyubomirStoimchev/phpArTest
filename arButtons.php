<?php
echo '
<a-entity 
    navigate-on-click="url: '.$websiteUrl.'" 
    scale="0.4 0.4 0.4" 
    material="src:#websiteTexture" 
    position="-0.7 0 0" 
    radius="2" 
    segments-height="84" 
    rotation="0 0 0" 
    geometry="" 
    animation__mouseenter="property: rotation;
        startEvents: mouseenter;
        dur: 2000;
        easing: linear;
        from: 0 0 0;
        to: 360 360 360;
        fill: backwards;">
</a-entity>

<a-entity 
    cursor-listener 
    scale="0.4 0.4 0.4" 
    material="src:#messageTexture" 
    position="0 0 0" 
    radius="2" 
    segments-height="84" 
    rotation="0 0 0" 
    geometry="" 
    animation__mouseenter="property: rotation;
        startEvents: mouseenter;
        dur: 2000;
        easing: linear;
        from: 0 0 0;
        to: 360 360 360;
        fill: backwards;">
</a-entity>

<a-entity 
    audiohandler 
    scale="0.4 0.4 0.4" 
    material="src:#playButtonTexture" 
    position="0.7 0 0" 
    radius="2" 
    segments-height="84" 
    rotation="0 0 0" 
    geometry="" 
    animation__mouseenter="property: rotation;
        startEvents: mouseenter;
        dur: 2000;
        easing: linear;
        from: 0 0 0;
        to: 360 360 360;
        fill: backwards;">
</a-entity>';
