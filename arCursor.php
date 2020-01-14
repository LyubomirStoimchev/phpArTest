<?php
echo '
    <a-entity camera position="" rotation="" scale="" visible="">
        <a-entity 
            animation__click="property: scale; 
                startEvents: click; 
                easing: easeInCubic; 
                dur: 150; 
                from: 0.01 0.01 0.01; 
                to: 0.03 0.03 0.03" 
            animation__fusing="property: scale; 
                startEvents: fusing; 
                easing: easeInCubic; 
                dur: 1500; 
                from: 0.03 0.03 0.03; 
                to: 0.01 0.01 0.01" 
            animation__mouseleave="property: scale; 
                startEvents: mouseleave; 
                easing: easeInCubic; 
                dur: 500; 
                to: 0.03 0.03 0.03" 
            cursor="fuse: true;" 
            scale="0.03 0.03 0.03" 
            material="color: black; shader: flat" 
            position="0 0 -3" 
            geometry="primitive: ring">
        </a-entity>
    </a-entity>';
