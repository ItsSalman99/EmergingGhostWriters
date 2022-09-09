<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Error!</title>

    <style>
        .error-contain {
            width: 80%;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            border: 1px solid blue;
        }

        .error-info {
            width: 50%;
            float: left;
        }

        .error-image {
            display: block;
            width: 50%;
            float: right;
            position: relative;
        }

        body {
            background: #fff;
        }

        .icon {
            position: relative;
            margin: 0 auto;

            /* 	top: 50%;
 left: 50%;
 transform: translate(-50%,-50%); */
            width: 600px;
            height: 600px;
        }

        .bg {
            position: absolute;
            top: 20%;
            left: 30%;
            transform: scale(2);
            filter: drop-shadow(2px 4px 0px #f0f5ff);
        }

        .boy {
            height: 300px;
            width: 300px;

            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            filter: drop-shadow(5px 3px 0px rgba(0, 0, 0, 0.1));
        }

        .boy-head {
            position: absolute;
            left: 25px;
            top: 40px;
        }

        .boy-shirt {
            width: 215px;
            position: absolute;
            height: 150px;
            bottom: 3px;
            background: #b8d3ff;
            left: 50%;
            transform: translate(-50%, 0);
            border-radius: 50px 50px 0 0;
        }

        .boy-badge {
            width: 35px;
            height: 50px;
            border-radius: 5px;
            background: #16304f;
            position: absolute;
            top: 85px;
            left: 65px;
            filter: drop-shadow(3px 2px 0px #a0bff2);
        }

        .boy-badge::before {
            content: '';
            width: 10px;
            height: 15px;
            background: #aaa;
            position: absolute;
            border-radius: 3px;
            left: 50%;
            top: -8px;
            transform: translate(-50%, 0);
        }

        .image {
            width: 100%;
            height: 20px;
            background: white;
            position: absolute;
            top: 10px
        }

        .image i {
            margin-left: 5px;
            margin-top: 3px;
        }


        .boy-face {
            transform: scale3d(3.5, 3.5, 3.5);
            position: absolute;
            top: 130px;
            left: 135px;
            filter: drop-shadow(0px 2px 0px #a0bff2);
        }

        .boy-hair {
            z-index: 5;
            transform: scale3d(3.8, 3.8, 3.8);
            position: absolute;
            top: 140px;
            left: 143px;
            filter: drop-shadow(0px 1px 0px rgba(0, 0, 0, 0.2));
        }

        .boy-hair-lick-1,
        .boy-hair-lick-2 {
            position: absolute;
        }

        .boy-hair-lick-1 {
            transform: scale3d(1.5, 1.5, 1.5) rotate(15deg);
            left: 130px;
            top: -30px;
        }

        .boy-hair-lick-2 {
            transform: rotate(-20deg);
            left: 122px;
            top: -47px;
        }

        .boy-mouth {
            height: 3px;
            width: 20px;
            background: #222;
            position: absolute;
            left: 115px;
            top: 130px;
            border-radius: 3px;
        }

        .boy-eyes {
            height: 15px;
            width: 100px;
            position: absolute;
            z-index: 6;
            left: 75px;
            top: 85px;
        }

        .left-eye,
        .right-eye {
            width: 15px;
            height: 15px;
            background: #000;
            position: absolute;
            border-radius: 50%;
            animation-name: blink;
            animation-duration: 5s;
            animation-timing-function: linear;
            animation-iteration-count: infinite;
        }

        .left-eye {
            left: 0;
        }

        .right-eye {
            right: 0;
        }

        @keyframes blink {
            18% {
                height: 15px;
                top: 0;
            }

            20% {
                height: 3px;
                top: 5px;
            }

            22% {
                top: 0;
                height: 15px;
            }
        }

        .boy-brows {
            height: 15px;
            width: 100px;
            position: absolute;
            z-index: 2;
            left: 75px;
            top: 65px;
        }

        .left-brow,
        .right-brow {
            width: 30px;
            height: 10px;
            background: #111;
            position: absolute;
            top: 5px;
            border-radius: 3px;
            animation-duration: 5s;
            animation-timing-function: linear;
            animation-iteration-count: infinite;
        }

        .left-brow {
            left: 0;
            transform: rotate(0);
            animation-name: left-brow;
        }

        .right-brow {
            right: 0;
            transform: rotate(0);
            animation-name: right-brow;
        }

        @keyframes left-brow {
            10% {
                transform: rotate(0);
            }

            15% {
                transform: rotate(-15deg);
            }

            60% {
                transform: rotate(-15deg);
            }

            65% {
                transform: rotate(0);
            }
        }

        @keyframes right-brow {
            10% {
                transform: rotate(0);
            }

            15% {
                transform: rotate(15deg);
            }

            60% {
                transform: rotate(15deg);
            }

            65% {
                transform: rotate(0);
            }
        }

        .boy-ears {
            width: 170px;
            height: 30px;
            position: absolute;
            top: 85px;
            left: 40px;
        }

        .left-ear,
        .right-ear {
            height: 30px;
            width: 20px;
            background: #f2daa0;
            position: absolute;
        }

        .left-ear {
            left: 0;
            border-radius: 50% 0 50% 50%;
        }

        .right-ear {
            right: 2px;
            border-radius: 0 50% 50% 50%;
        }

        .boy-stache {
            position: absolute;
            left: 88px;
            top: 93px;
            transform: scale(0.5);
        }

        .palm-left,
        .palm-right {
            position: absolute;
            bottom: 20px;
            width: 70px;
            height: 50px;
            border-radius: 10px 10px 50% 50%;
            background: #dbc07b;
            z-index: 5;
        }

        .palm-left {
            left: 176px;
            bottom: 150px;
        }

        .palm-right {
            right: 176px;
            bottom: 150px;
        }

        ul {
            padding: 0;
            position: absolute;
            bottom: 73px;
            list-style-type: none;
        }

        .fingers-left {
            bottom: 203px;
            left: 176px;
        }

        .fingers-right {
            bottom: 203px;
            right: 176px;
        }

        li::before {
            content: '';
            position: absolute;
            height: 2px;
            background: #e8cd8b;
            left: 3px;
            right: 3px;
            top: 0px;
        }

        li {
            display: inline;
            position: absolute;
            width: 15px;
            height: 35px;
            background: #f2daa0;
            border-radius: 15px;
            border: 1px solid #f2daa0;
            border-top: 2px solid #fff4d9;
            animation-duration: 2s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
            top: 10px;
            overflow: hidden;
            z-index: 5;
        }

        li::after {
            content: '';
            position: absolute;
            bottom: 3px;
            right: 2px;
            left: 2px;
            height: 8px;
            background: #ffeab8;
            border-radius: 0 0 50% 50%;
            border-top: 1px solid #e8cd8b;

        }

        li:nth-child(5)::after,
        li:nth-child(5)::before {
            display: none;
        }

        .fingers-left li:nth-child(1) {
            width: 10px;
            height: 30px;
            top: 15px;
            animation-name: l-fin-1;
        }

        .fingers-left li:nth-child(2) {
            left: 14px;
            animation-name: l-fin-2;
        }

        .fingers-left li:nth-child(3) {
            left: 33px;
            animation-name: l-fin-3;
        }

        .fingers-left li:nth-child(4) {
            left: 52px;
            animation-name: l-fin-4;
        }

        .fingers-left li:nth-child(5) {
            left: 60px;
            height: 15px;
            width: 35px;
            top: 35px;
            animation-name: l-fin-5;
            transform: rotate(-25deg);
            z-index: 4;
            background: #dbc07b;
        }


        .fingers-right li:nth-child(1) {
            width: 10px;
            height: 30px;
            top: 15px;
            right: 0;
            animation-name: r-fin-1;
        }

        .fingers-right li:nth-child(2) {
            right: 14px;
            animation-name: r-fin-2;
        }

        .fingers-right li:nth-child(3) {
            right: 33px;
            animation-name: r-fin-3;
        }

        .fingers-right li:nth-child(4) {
            right: 52px;
            animation-name: r-fin-4;
        }

        .fingers-right li:nth-child(5) {
            right: 60px;
            height: 15px;
            width: 35px;
            top: 35px;
            animation-name: r-fin-5;
            transform: rotate(25deg);
            z-index: 4;
            background: #dbc07b;
        }



        .keyboard {
            height: 30px;
            width: 260px;
            left: 50%;
            transform: translate(-50%, 0);
            bottom: 130px;
            background: #222;
            position: absolute;
            border-radius: 5px;
            border-bottom: 3px solid #111;
            z-index: 6;
        }

        .keyboard .key {
            position: absolute;
            top: -5px;
            height: 10px;
            width: 15px;
            background: #222;
            border-radius: 3px;
            animation-duration: 2s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
            border-top: 2px solid #333;
        }

        .keyboard .key:first-child {
            animation-name: key-1;
            left: 3px;
        }

        .keyboard .key:nth-child(2) {
            animation-name: key-2;
            left: 21px;
        }

        .keyboard .key:nth-child(3) {
            animation-name: key-3;
            left: 40px;
        }

        .keyboard .key:nth-child(4) {
            animation-name: key-4;
            left: 59px;
        }

        .keyboard .key:nth-child(5) {
            animation-name: key-5;
            left: 80px;
            width: 100px;
        }

        .keyboard .key:nth-child(6) {
            right: 59px;
            animation-name: key-6;
        }

        .keyboard .key:nth-child(7) {
            animation-name: key-7;
            right: 40px;
        }

        .keyboard .key:nth-child(8) {
            animation-name: key-8;
            right: 21px;
        }

        .keyboard .key:nth-child(9) {
            animation-name: key-9;
            right: 3px;
        }

        .keyboard .key:nth-child(10) {
            animation-name: key-10;
        }

        .keyboard .key:nth-child(11) {
            animation-name: key-11;
        }

        .keyboard .key:nth-child(12) {
            animation-name: key-12;
        }

        .keyboard .key:nth-child(13) {
            animation-name: key-13;
        }


        @keyframes r-fin-3 {
            4% {
                top: 10px;
            }

            5% {
                top: 15px;
            }

            10% {
                top: 10px;
            }
        }

        @keyframes key-7 {
            7% {
                top: -5px;
            }

            8% {
                top: -1px;
            }

            13% {
                top: -5px;
            }
        }

        @keyframes l-fin-2 {
            9% {
                top: 10px;
            }

            10% {
                top: 15px;
            }

            15% {
                top: 10px;
            }
        }

        @keyframes key-2 {
            12% {
                top: -5px;
            }

            13% {
                top: -1px;
            }

            17% {
                top: -5px;
            }
        }


        @keyframes r-fin-2 {
            14% {
                top: 10px;
            }

            15% {
                top: 15px;
            }

            20% {
                top: 10px;
            }
        }

        @keyframes key-8 {
            17% {
                top: -5px;
            }

            18% {
                top: -1px;
            }

            22% {
                top: -5px;
            }
        }

        @keyframes l-fin-3 {
            19% {
                top: 10px;
            }

            20% {
                top: 15px;
            }

            25% {
                top: 10px;
            }
        }

        @keyframes key-3 {
            22% {
                top: -5px;
            }

            23% {
                top: -1px;
            }

            27% {
                top: -5px;
            }
        }

        @keyframes r-fin-5 {
            24% {
                top: 35px;
            }

            25% {
                top: 40px;
            }

            30% {
                top: 35px;
            }
        }

        @keyframes key-5 {
            27% {
                top: -5px;
                transform: rotate(0);
            }

            28% {
                top: -2px;
                transform: rotate(3deg);
            }

            32% {
                top: -5px;
                transform: rotate(0);
            }

            42% {
                top: -5px;
                transform: rotate(0);
            }

            43% {
                top: -2px;
                transform: rotate(-3deg);
            }

            47% {
                top: -5px;
                transform: rotate(0);
            }
        }

        @keyframes l-fin-4 {
            29% {
                top: 10px;
            }

            30% {
                top: 15px;
            }

            35% {
                top: 10px;
            }
        }

        @keyframes key-4 {
            32% {
                top: -5px;
            }

            33% {
                top: -1px;
            }

            37% {
                top: -5px;
            }
        }

        @keyframes r-fin-4 {
            34% {
                top: 10px;
            }

            35% {
                top: 15px;
            }

            40% {
                top: 10px;
            }
        }

        @keyframes key-6 {
            37% {
                top: -5px;
            }

            38% {
                top: -1px;
            }

            42% {
                top: -5px;
            }
        }

        @keyframes l-fin-5 {
            39% {
                top: 35px;
            }

            40% {
                top: 40px;
            }

            45% {
                top: 35px;
            }
        }

        @keyframes r-fin-1 {
            44% {
                top: 15px;
            }

            45% {
                top: 20px;
            }

            50% {
                top: 15px;
            }
        }

        @keyframes key-9 {
            47% {
                top: -5px;
            }

            48% {
                top: -1px;
            }

            52% {
                top: -5px;
            }
        }

        @keyframes l-fin-1 {
            49% {
                top: 15px;
            }

            50% {
                top: 20px;
            }

            55% {
                top: 15px;
            }
        }

        @keyframes key-1 {
            52% {
                top: -5px;
            }

            53% {
                top: -1px;
            }

            57% {
                top: -5px;
            }
        }


        .tear {
            transform: scale(0.5);
            position: absolute;
            top: 60px;
            right: 20px;
            z-index: 5;
            animation-name: tear-fall;
            animation-duration: 3s;
            animation-timing-function: linear;
            animation-iteration-count: infinite;
            opacity: 0;
        }

        @keyframes tear-fall {
            50% {
                opacity: 0;
                top: 60px;
            }

            60% {
                opacity: 1;
                top: 75px;
            }

            80% {
                top: 100px;
            }

            85% {
                top: 100px;
            }

            90% {
                opacity: 0;
            }
        }

        .server {
            width: 100px;
            height: 200px;
            background: #222;
            position: absolute;
            right: 120px;
            top: 50%;
            transform: translate(0, -50%);
            border-radius: 5px;
        }

        .server-disc {
            position: absolute;
            height: 20px;
            background: #333;
            top: 30px;
            left: 5px;
            right: 5px;
            border-radius: 3px;
            border-bottom: 2px solid #111;
            border-top: 1px solid #444;
        }

        .server-disc::before {
            width: 10px;
            height: 10px;
            content: '';
            position: absolute;
            top: 5px;
            left: 5px;
            border-radius: 50%;
            background: #222;
        }

        .server-disc::after {
            width: 20px;
            height: 10px;
            content: '';
            position: absolute;
            top: 5px;
            right: 5px;
            border-radius: 3px;
            background: #222;
        }

        .server-shock {
            position: absolute;
            top: -75px;
            left: -20px;
        }

        .server-lights {
            position: absolute;
            height: 60px;
            background: #333;
            top: 70px;
            left: 5px;
            right: 5px;
        }

        .server-lights span {
            width: 5px;
            height: 5px;
            position: absolute;
            background: #4aff71;
            right: 5px;
            border-radius: 50%;
            opacity: 1;
            animation-timing-function: linear;
            animation-iteration-count: infinite;
        }

        .server-lights span:nth-child(1) {
            background: #4aff71;
            animation-name: blink-1;
            animation-duration: 2s;
            top: 5px;
        }

        .server-lights span:nth-child(2) {
            background: #ff4a65;
            animation-name: blink-2;
            animation-duration: 3s;
            top: 15px;
        }

        @keyframes blink-1 {
            50% {
                opacity: 0;
            }
        }

        @keyframes blink-2 {
            50% {
                opacity: 0;
            }
        }

        .mo-fire {
            width: 200px;
            height: auto;
            position: absolute;
            left: 30px;
            margin-left: -100px;
            bottom: -50px;
            transform: scale(0.8) rotate(20deg);
        }

        .mo-fire svg {
            width: 100%;
            height: auto;
            position: relative;
            filter: drop-shadow(2px 4px 16px rgba(255, 119, 0, 0.5));
        }

        .flame {
            animation-name: flamefly;
            animation-duration: 1s;
            animation-timing-function: linear;
            animation-iteration-count: infinite;
            opacity: 0;
            transform-origin: 50% 50% 0;
        }

        .flame.one {
            animation-delay: 1s;
            animation-duration: 2s;
        }

        .flame3.two {
            animation-duration: 4s;
            animation-delay: 1s;
        }

        .flame-main {
            animation-name: flameWobble;
            animation-duration: 2s;
            animation-timing-function: linear;
            animation-iteration-count: infinite;
        }

        .flame-main.one {
            animation-duration: 3s;
            animation-delay: 1s;
        }

        .flame-main.two {
            animation-duration: 2s;
            animation-delay: 1s;
        }

        .flame-main.three {
            animation-duration: 1s;
            animation-delay: 2s;
        }

        .flame-main.four {
            animation-duration: 2s;
            animation-delay: 3s;
        }

        .flame-main.five {
            animation-duration: 1s;
            animation-delay: 3s;
        }

        @keyframes flameWobble {
            50% {
                transform: scale(1, 1.2) translate(0, -30px) rotate(-2deg);
            }
        }

        @keyframes flamefly {
            0% {
                transform: translate(0) rotate(180deg);
            }

            50% {
                opacity: 1;
            }

            100% {
                transform: translate(-20px, -100px) rotate(180deg);
                opacity: 0;
            }
        }



        .icon-bg {
            position: absolute;
            top: 55%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 500px;
            height: 500px;
        }

        .icon-bg svg {
            position: absolute;
            top: 0%;
            left: 0%;
            filter: drop-shadow(3px 3px 0px #f0f5ff)
        }
    </style>

</head>

<body>


    <div class="icon">
        <div class="icon-bg" width="500" height="500">
            <svg width="500" height="500" viewBox="0 0 500 500">
                <g transform="translate(300, 250)">
                    <path
                        d="M75,-77.8C98.9,-29.8,121.1,1.4,119.7,35.2C118.2,69,93.2,105.2,53.4,132.8C13.600000000000001,160.4,-40.9,179.3,-68.2,159.4C-95.5,139.4,-95.5,80.6,-115.2,19.200000000000003C-134.8,-42.2,-174.1,-106.2,-158.2,-152.3C-142.3,-198.5,-71.1,-226.7,-22.8,-208.6C25.5,-190.4,51.1,-125.7,75,-77.8Z"
                        fill="#D9E3F8" stroke="none" stroke-width="0"></path>
                </g>
                <g transform="translate(250, 250)">
                    <path
                        d="M153.8,-195C192,-183.9,210.6,-129.2,213.1,-79.2C215.6,-29.3,201.9,16,173.1,41.3C144.3,66.7,100.4,72.2,69,91C37.6,109.8,18.8,141.9,-12.7,159.4C-44.3,176.9,-88.6,179.9,-105.7,156.5C-122.8,133,-112.8,83.2,-124.2,41.8C-135.7,0.4,-168.7,-32.5,-177.7,-74.1C-186.7,-115.7,-171.8,-165.8,-138.2,-178.4C-104.6,-191,-52.3,-166,2.7,-169.8C57.8,-173.6,115.6,-206.1,153.8,-195Z"
                        fill="#E8EFFF" stroke="none" stroke-width="0"></path>
                </g>
            </svg>
        </div>
        <div class="server">
            <svg class="server-shock" width="200">
                <path d="m 160 30 l 13 2 l -11 14 l 7 5 l -12 13 l 6 -11 l -9 -5 z " style="transform: rotate(20deg);"
                    fill="#d4ddff"></path>
                <path d="m 90 -10 l 12 -2 l -2 12 l 5 0 l -9 17 l 3 -12 l -5 0 z "
                    style="transform: rotate(20deg); position: absolute; top: -10px;" fill="#d4ddff"></path>
                <path d="m -20 60 l 15 -3 l -5 24 l -8 -2 l 3 14 l -11 -20 l 9 2 z "
                    style="transform: rotate(-30deg) scale(0.8);" fill="#d4ddff"></path>
            </svg>
            <div class="server-disc"></div>
            <div class="server-lights">
                <span></span>
                <span></span>
            </div>
            <div class="server-cool"></div>

            <div class="mo-fire">
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="125px"
                    height="189.864px" viewBox="0 0 125 189.864" enable-background="new 0 0 125 189.864"
                    xml:space="preserve">
                    <path class="flame-main" fill="#F36E21"
                        d="M76.553,186.09c0,0-10.178-2.976-15.325-8.226s-9.278-16.82-9.278-16.82s-0.241-6.647-4.136-18.465
																									 c0,0,3.357,4.969,5.103,9.938c0,0-5.305-21.086,1.712-30.418c7.017-9.333,0.571-35.654-2.25-37.534c0,0,13.07,5.64,19.875,47.54
																									 c6.806,41.899,16.831,45.301,6.088,53.985" />
                    <path class="flame-main one" fill="#F6891F"
                        d="M61.693,122.257c4.117-15.4,12.097-14.487-11.589-60.872c0,0,32.016,10.223,52.601,63.123
																											 c20.585,52.899-19.848,61.045-19.643,61.582c0.206,0.537-19.401-0.269-14.835-18.532S57.576,137.656,61.693,122.257z" />
                    <path class="flame-main two" fill="#FFD04A"
                        d="M81.657,79.192c0,0,11.549,24.845,3.626,40.02c-7.924,15.175-21.126,41.899-0.425,64.998
																											 C84.858,184.21,125.705,150.905,81.657,79.192z" />
                    <path class="flame-main three" fill="#FDBA16"
                        d="M99.92,101.754c0,0-23.208,47.027-12.043,80.072c0,0,32.741-16.073,20.108-45.79
																												 C95.354,106.319,99.92,114.108,99.92,101.754z" />
                    <path class="flame-main four" fill="#F36E21"
                        d="M103.143,105.917c0,0,8.927,30.753-1.043,46.868c-9.969,16.115-14.799,29.041-14.799,29.041
																												S134.387,164.603,103.143,105.917z" />
                    <path class="flame-main five" fill="#FDBA16"
                        d="M62.049,104.171c0,0-15.645,67.588,10.529,77.655C98.753,191.894,69.033,130.761,62.049,104.171z" />
                    <path class="flame" fill="#F36E21"
                        d="M101.011,112.926c0,0,8.973,10.519,4.556,16.543C99.37,129.735,106.752,117.406,101.011,112.926z" />
                    <path class="flame one" fill="#F36E21"
                        d="M55.592,126.854c0,0-3.819,13.29,2.699,16.945C64.038,141.48,55.907,132.263,55.592,126.854z" />
                    <path class="flame two" fill="#F36E21"
                        d="M54.918,104.595c0,0-3.959,6.109-1.24,8.949C56.93,113.256,52.228,107.329,54.918,104.595z" />
                </svg>
            </div>
        </div>

        <div class="boy">
            <span class="boy-shirt">
                <div class="boy-badge">
                    <div class="image">
                        <i class="fas fa-align-left"></i>
                    </div>
                </div>
            </span>
            <div class="boy-head">
                <svg height="150" width="150" class="boy-face">
                    <path d="m 50 10 q 25 0 23 30 q -3 19 -23 20 q -19 -1 -22 -20 q -2 -30 22 -30" stroke="none"
                        stroke-width="1" fill="#f2daa0" />
                </svg>
                <svg height="150" width="150" class="boy-hair">
                    <path
                        d="m 50 40 q 8 0 15 -12 q 5 5 5 15 q 5 -25 -10 -30 q -10 -3 -20 0 q -14 5 -10 30 q 0 -5 3 -10 q 2 2 2 5 q 3 -1 5 -5 q 2 3 2 7 q 4 0 7 -7 q 2 3 0 7 z "
                        stroke="#222" stroke-width="1" fill="#222" width="150" height="150" />
                </svg>
                <svg height="50" width="50" class="boy-hair-lick-1">
                    <path d="m 0 0 q 10 2 10 10 q 0 5 -5 10 q 3 -7 -5 -20 z" stroke="#222" stroke-width="1"
                        fill="#222" />
                </svg>
                <svg height="50" width="50" class="boy-hair-lick-2">
                    <path d="m 0 0 q 10 2 10 10 q 0 5 -5 10 q 3 -7 -5 -20 z" stroke="#222" stroke-width="1"
                        fill="#222" />
                </svg>
                <div class="boy-ears">
                    <span class="left-ear"></span>
                    <span class="right-ear"></span>
                </div>
                <!-- 			<svg height="100" width="100" class="tear">
   <path d="m 20 0 q 0 5 5 15 q 8 14 -5 15 q -13 -1 -5 -15 q 3 -6 5 -15 z " stroke="#bad9ff" stroke-width="2" fill="#bad9ff" />
  </svg> -->
                <div class="boy-eyes">
                    <span class="left-eye"></span>
                    <span class="right-eye"></span>
                </div>
                <div class="boy-brows">
                    <span class="left-brow"></span>
                    <span class="right-brow"></span>
                </div>
                <div class="boy-mouth"></div>
                <!-- 			<svg height="100" width="100" class="boy-stache">
   <path d="m 5 10 c 5 10 15 -15 30 0 c 15 -15 25 10 30 0 c -5 15 -30 5 -30 5 c -10 5 -30 5 -30 -5" stroke="#222" stroke-width="1" fill="#222"/>
  </svg> -->
            </div>

        </div>
        <div class="palm-left"></div>
        <div class="palm-right"></div>
        <ul class="fingers-left">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li><span></span></li>
        </ul>
        <ul class="fingers-right">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li><span></span></li>
        </ul>
        <div class="keyboard">
            <span class="key"></span>
            <span class="key"></span>
            <span class="key"></span>
            <span class="key"></span>
            <span class="key"></span>
            <span class="key"></span>
            <span class="key"></span>
            <span class="key"></span>
            <span class="key"></span>
        </div>
    </div>

    <div style="text-align: center; width: 50%; margin: 0 auto;">
        <h1>500 Server Error!</h1>
        <h2 style="font-family: cursive; font-size: 30px;">
            OOP's Something went wrong!!
        </h2>
    </div>



</body>

</html>
