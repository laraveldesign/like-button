@php
$rand = "angry_id_". rand(0,10000);
@endphp
<svg {{$attributes}} xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1500 1500" width="2500" height="2500">
    <style>


        .st2 {
            fill: none;
            stroke: #262c38;
            stroke-width: 60;
            stroke-linecap: round;
            stroke-linejoin: round;
            stroke-miterlimit: 10
        }</style>
    <linearGradient id="SVGID_1_{{$rand}}" gradientUnits="userSpaceOnUse" x1="750" y1="1501.519" x2="750" y2="4.759"
                    gradientTransform="matrix(1 0 0 -1 0 1499.72)">
        <stop offset=".098" stop-color="#f05766"/>
        <stop offset=".25" stop-color="#f3766a"/>
        <stop offset=".826" stop-color="#ffda6b"/>
    </linearGradient>
    <circle  style="fill:url(#SVGID_1_{{$rand}})" cx="750" cy="750" r="750"/>
    <circle fill="#262c38" cx="416.7" cy="947" r="73.7"/>
    <circle fill="#262c38" cx="1082.7" cy="947" r="73.7"/>
    <path class="st2" d="M205.9 805.1s120.5 93.7 423.4 93.7M1291.9 805.1s-120.5 93.7-423.4 93.7"/>
    <path fill="#262c38"
          d="M987.6 1211.4c0 41.7-106.7 43.3-238.4 43.3s-238.4-1.7-238.4-43.3c0-36.8 109.9-54.6 241.5-54.6s235.3 17.7 235.3 54.6z"/>
</svg>
