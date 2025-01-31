<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Congrats</title>
    <link rel="stylesheet" href="main.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
</head>
<body>

<div id="Container">
    <div id="myAnimation"></div>
    <div id="myAnimation1"></div>
</div>

    <h1>YOU ARE A WINNER</h1>

    <!-- specify a viewBox larger than the actual shape, to allocate space for the bomb as it gets scaled beyond its normal size -->
<svg viewBox="-30 -20 150 120" width="150" height="120">
    <!-- path used by anime.js to trace the movement of the fuse -->
    <path
        id="motion-path"
        fill="none"
        stroke="none"
        d="M 0 0 v 5 a 10 10 0 0 1 -20 0 a 18 18 0 0 0 -36 0 v 30">
    </path>

    <g>
        <g transform="translate(30 58)">
            <g id="rupee">
                <path
                    fill="#458588"
                    transform="scale(0.8)"
                    d="M 0 -24 l 12 12 v 20 l -12 12 l -12 -12 v -20 z">
                </path>
                <path
                    fill="#65b3b8"
                    transform="scale(0.5)"
                    d="M 0 -24 l 12 12 v 20 l -12 12 l -12 -12 v -20 z">
                </path>
            </g>
        </g>

        <g transform="translate(86 14)">
            <path
                id="fuse"
                fill="none"
                stroke="#458588"
                stroke-width="2"
                d="M 0 0 v 5 a 10 10 0 0 1 -20 0 a 18 18 0 0 0 -36 0 v 30">
            </path>
            <!-- translate the #spark group -->
            <g id="spark">
                <!-- scale the #ember path -->
                <path
                    id="ember"
                    transform="scale(1.75)"
                    stroke="#F3A37C"
                    stroke-width="1.25"
                    d="M -4.5 -1.5 h 3 l 1.5 -3 l 1.5 3 h 3 l -2.5 2.5 l 1.5 3.25 l -3.5 -2 l -3.5 2 l 1.5 -3.25 l -2.5 -2.5z"
                    fill="#FFF9EE">
                </path>
                <!-- scale #sparkles group -->
                <g
                    id="sparkles"
                    transform="scale(0)">
                    <g
                        fill="#F3A37C">
                        <circle
                            transform="rotate(10) translate(12 0)"
                            cx="0"
                            cy="0"
                            r="2">
                        </circle>
                        <circle
                            transform="rotate(170) translate(12 0)"
                            cx="0"
                            cy="0"
                            r="2">
                        </circle>
                        <circle
                            transform="rotate(90) translate(12 0)"
                            cx="0"
                            cy="0"
                            r="2">
                        </circle>
                        <circle
                            transform="rotate(-60) translate(13 0)"
                            cx="0"
                            cy="0"
                            r="2">
                        </circle>
                        <circle
                            transform="rotate(-120) translate(13 0)"
                            cx="0"
                            cy="0"
                            r="1.75">
                        </circle>
                    </g>
                </g>
            </g>
        </g>


        <g transform="translate(30 56)"><!-- translate to modify the transform origin and scale the bomb from its center -->
            <!-- scale the #bomb group -->
            <g
                id="bomb"
                fill="#0D3730">
                <circle
                    cx="0"
                    cy="0"
                    r="30">
                </circle>
                <path
                    fill="#092E2B"
                    transform="rotate(30)"
                    d="M 0 -30 a 30 30 0 0 1 0 60 a 31 31 0 0 0 0 -60">
                </path>

                <circle
                    fill="none"
                    stroke="#458588"
                    stroke-width="1.5"
                    cx="0"
                    cy="0"
                    r="15">
                </circle>
                <path
                    d="M 0 -8.5 l 8 14 h -16 z"
                    fill="#FFF9EE">
                </path>
                <path
                    transform="scale(0.5) rotate(180)"
                    d="M 0 -11 l 8 14 h -16 z"
                    fill="#0D3730">
                </path>

                <rect
                    x="-12"
                    y="-37"
                    width="24"
                    height="10">
                </rect>
            </g>
        </g>
    </g>
</svg>

<input type="range" min="0" max="100" value="0" />

<script src="winner.js"></script>
</body>
</html>