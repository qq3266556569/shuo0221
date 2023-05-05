<html style="font-size: 100px;">
    <!-- This web page is copied by the "https://www.aaym.net" -->
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <style type="text/css">
            .swal-icon--error {
                border-color: #f27474;
                -webkit-animation: animateErrorIcon .5s;
                animation: animateErrorIcon .5s
            }

            .swal-icon--error__x-mark {
                position: relative;
                display: block;
                -webkit-animation: animateXMark .5s;
                animation: animateXMark .5s
            }

            .swal-icon--error__line {
                position: absolute;
                height: 5px;
                width: 47px;
                background-color: #f27474;
                display: block;
                top: 37px;
                border-radius: 2px
            }

            .swal-icon--error__line--left {
                -webkit-transform: rotate(45deg);
                transform: rotate(45deg);
                left: 17px
            }

            .swal-icon--error__line--right {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg);
                right: 16px
            }

            @-webkit-keyframes animateErrorIcon {
                0% {
                    -webkit-transform: rotateX(100deg);
                    transform: rotateX(100deg);
                    opacity: 0
                }

                to {
                    -webkit-transform: rotateX(0deg);
                    transform: rotateX(0deg);
                    opacity: 1
                }
            }

            @keyframes animateErrorIcon {
                0% {
                    -webkit-transform: rotateX(100deg);
                    transform: rotateX(100deg);
                    opacity: 0
                }

                to {
                    -webkit-transform: rotateX(0deg);
                    transform: rotateX(0deg);
                    opacity: 1
                }
            }

            @-webkit-keyframes animateXMark {
                0% {
                    -webkit-transform: scale(.4);
                    transform: scale(.4);
                    margin-top: 26px;
                    opacity: 0
                }

                50% {
                    -webkit-transform: scale(.4);
                    transform: scale(.4);
                    margin-top: 26px;
                    opacity: 0
                }

                80% {
                    -webkit-transform: scale(1.15);
                    transform: scale(1.15);
                    margin-top: -6px
                }

                to {
                    -webkit-transform: scale(1);
                    transform: scale(1);
                    margin-top: 0;
                    opacity: 1
                }
            }

            @keyframes animateXMark {
                0% {
                    -webkit-transform: scale(.4);
                    transform: scale(.4);
                    margin-top: 26px;
                    opacity: 0
                }

                50% {
                    -webkit-transform: scale(.4);
                    transform: scale(.4);
                    margin-top: 26px;
                    opacity: 0
                }

                80% {
                    -webkit-transform: scale(1.15);
                    transform: scale(1.15);
                    margin-top: -6px
                }

                to {
                    -webkit-transform: scale(1);
                    transform: scale(1);
                    margin-top: 0;
                    opacity: 1
                }
            }

            .swal-icon--warning {
                border-color: #f8bb86;
                -webkit-animation: pulseWarning .75s infinite alternate;
                animation: pulseWarning .75s infinite alternate
            }

            .swal-icon--warning__body {
                width: 5px;
                height: 47px;
                top: 10px;
                border-radius: 2px;
                margin-left: -2px
            }

            .swal-icon--warning__body,.swal-icon--warning__dot {
                position: absolute;
                left: 50%;
                background-color: #f8bb86
            }

            .swal-icon--warning__dot {
                width: 7px;
                height: 7px;
                border-radius: 50%;
                margin-left: -4px;
                bottom: -11px
            }

            @-webkit-keyframes pulseWarning {
                0% {
                    border-color: #f8d486
                }

                to {
                    border-color: #f8bb86
                }
            }

            @keyframes pulseWarning {
                0% {
                    border-color: #f8d486
                }

                to {
                    border-color: #f8bb86
                }
            }

            .swal-icon--success {
                border-color: #a5dc86
            }

            .swal-icon--success:after,.swal-icon--success:before {
                content: &quot;
                &quot;;border-radius: 50%;
                position: absolute;
                width: 60px;
                height: 120px;
                background: #fff;
                -webkit-transform: rotate(45deg);
                transform: rotate(45deg)
            }

            .swal-icon--success:before {
                border-radius: 120px 0 0 120px;
                top: -7px;
                left: -33px;
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg);
                -webkit-transform-origin: 60px 60px;
                transform-origin: 60px 60px
            }

            .swal-icon--success:after {
                border-radius: 0 120px 120px 0;
                top: -11px;
                left: 30px;
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg);
                -webkit-transform-origin: 0 60px;
                transform-origin: 0 60px;
                -webkit-animation: rotatePlaceholder 4.25s ease-in;
                animation: rotatePlaceholder 4.25s ease-in
            }

            .swal-icon--success__ring {
                width: 80px;
                height: 80px;
                border: 4px solid hsla(98,55%,69%,.2);
                border-radius: 50%;
                box-sizing: content-box;
                position: absolute;
                left: -4px;
                top: -4px;
                z-index: 2
            }

            .swal-icon--success__hide-corners {
                width: 5px;
                height: 90px;
                background-color: #fff;
                padding: 1px;
                position: absolute;
                left: 28px;
                top: 8px;
                z-index: 1;
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg)
            }

            .swal-icon--success__line {
                height: 5px;
                background-color: #a5dc86;
                display: block;
                border-radius: 2px;
                position: absolute;
                z-index: 2
            }

            .swal-icon--success__line--tip {
                width: 25px;
                left: 14px;
                top: 46px;
                -webkit-transform: rotate(45deg);
                transform: rotate(45deg);
                -webkit-animation: animateSuccessTip .75s;
                animation: animateSuccessTip .75s
            }

            .swal-icon--success__line--long {
                width: 47px;
                right: 8px;
                top: 38px;
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg);
                -webkit-animation: animateSuccessLong .75s;
                animation: animateSuccessLong .75s
            }

            @-webkit-keyframes rotatePlaceholder {
                0% {
                    -webkit-transform: rotate(-45deg);
                    transform: rotate(-45deg)
                }

                5% {
                    -webkit-transform: rotate(-45deg);
                    transform: rotate(-45deg)
                }

                12% {
                    -webkit-transform: rotate(-405deg);
                    transform: rotate(-405deg)
                }

                to {
                    -webkit-transform: rotate(-405deg);
                    transform: rotate(-405deg)
                }
            }

            @keyframes rotatePlaceholder {
                0% {
                    -webkit-transform: rotate(-45deg);
                    transform: rotate(-45deg)
                }

                5% {
                    -webkit-transform: rotate(-45deg);
                    transform: rotate(-45deg)
                }

                12% {
                    -webkit-transform: rotate(-405deg);
                    transform: rotate(-405deg)
                }

                to {
                    -webkit-transform: rotate(-405deg);
                    transform: rotate(-405deg)
                }
            }

            @-webkit-keyframes animateSuccessTip {
                0% {
                    width: 0;
                    left: 1px;
                    top: 19px
                }

                54% {
                    width: 0;
                    left: 1px;
                    top: 19px
                }

                70% {
                    width: 50px;
                    left: -8px;
                    top: 37px
                }

                84% {
                    width: 17px;
                    left: 21px;
                    top: 48px
                }

                to {
                    width: 25px;
                    left: 14px;
                    top: 45px
                }
            }

            @keyframes animateSuccessTip {
                0% {
                    width: 0;
                    left: 1px;
                    top: 19px
                }

                54% {
                    width: 0;
                    left: 1px;
                    top: 19px
                }

                70% {
                    width: 50px;
                    left: -8px;
                    top: 37px
                }

                84% {
                    width: 17px;
                    left: 21px;
                    top: 48px
                }

                to {
                    width: 25px;
                    left: 14px;
                    top: 45px
                }
            }

            @-webkit-keyframes animateSuccessLong {
                0% {
                    width: 0;
                    right: 46px;
                    top: 54px
                }

                65% {
                    width: 0;
                    right: 46px;
                    top: 54px
                }

                84% {
                    width: 55px;
                    right: 0;
                    top: 35px
                }

                to {
                    width: 47px;
                    right: 8px;
                    top: 38px
                }
            }

            @keyframes animateSuccessLong {
                0% {
                    width: 0;
                    right: 46px;
                    top: 54px
                }

                65% {
                    width: 0;
                    right: 46px;
                    top: 54px
                }

                84% {
                    width: 55px;
                    right: 0;
                    top: 35px
                }

                to {
                    width: 47px;
                    right: 8px;
                    top: 38px
                }
            }

            .swal-icon--info {
                border-color: #c9dae1
            }

            .swal-icon--info:before {
                width: 5px;
                height: 29px;
                bottom: 17px;
                border-radius: 2px;
                margin-left: -2px
            }

            .swal-icon--info:after,.swal-icon--info:before {
                content: &quot;
                &quot;;position: absolute;
                left: 50%;
                background-color: #c9dae1
            }

            .swal-icon--info:after {
                width: 7px;
                height: 7px;
                border-radius: 50%;
                margin-left: -3px;
                top: 19px
            }

            .swal-icon {
                width: 80px;
                height: 80px;
                border-width: 4px;
                border-style: solid;
                border-radius: 50%;
                padding: 0;
                position: relative;
                box-sizing: content-box;
                margin: 20px auto
            }

            .swal-icon:first-child {
                margin-top: 32px
            }

            .swal-icon--custom {
                width: auto;
                height: auto;
                max-width: 100%;
                border: none;
                border-radius: 0
            }

            .swal-icon img {
                max-width: 100%;
                max-height: 100%
            }

            .swal-title {
                color: rgba(0,0,0,.65);
                font-weight: 600;
                text-transform: none;
                position: relative;
                display: block;
                padding: 13px 16px;
                font-size: 27px;
                line-height: normal;
                text-align: center;
                margin-bottom: 0
            }

            .swal-title:first-child {
                margin-top: 26px
            }

            .swal-title:not(:first-child) {
                padding-bottom: 0
            }

            .swal-title:not(:last-child) {
                margin-bottom: 13px
            }

            .swal-text {
                font-size: 16px;
                position: relative;
                float: none;
                line-height: normal;
                vertical-align: top;
                text-align: left;
                display: inline-block;
                margin: 0;
                padding: 0 10px;
                font-weight: 400;
                color: rgba(0,0,0,.64);
                max-width: calc(100% - 20px);
                overflow-wrap: break-word;
                box-sizing: border-box
            }

            .swal-text:first-child {
                margin-top: 45px
            }

            .swal-text:last-child {
                margin-bottom: 45px
            }

            .swal-footer {
                text-align: right;
                padding-top: 13px;
                margin-top: 13px;
                padding: 13px 16px;
                border-radius: inherit;
                border-top-left-radius: 0;
                border-top-right-radius: 0
            }

            .swal-button-container {
                margin: 5px;
                display: inline-block;
                position: relative
            }

            .swal-button {
                background-color: #7cd1f9;
                color: #fff;
                border: none;
                box-shadow: none;
                border-radius: 5px;
                font-weight: 600;
                font-size: 14px;
                padding: 10px 24px;
                margin: 0;
                cursor: pointer
            }

            .swal-button:not([disabled]):hover {
                background-color: #78cbf2
            }

            .swal-button:active {
                background-color: #70bce0
            }

            .swal-button:focus {
                outline: none;
                box-shadow: 0 0 0 1px #fff,0 0 0 3px rgba(43,114,165,.29)
            }

            .swal-button[disabled] {
                opacity: .5;
                cursor: default
            }

            .swal-button::-moz-focus-inner {
                border: 0
            }

            .swal-button--cancel {
                color: #555;
                background-color: #efefef
            }

            .swal-button--cancel:not([disabled]):hover {
                background-color: #e8e8e8
            }

            .swal-button--cancel:active {
                background-color: #d7d7d7
            }

            .swal-button--cancel:focus {
                box-shadow: 0 0 0 1px #fff,0 0 0 3px rgba(116,136,150,.29)
            }

            .swal-button--danger {
                background-color: #e64942
            }

            .swal-button--danger:not([disabled]):hover {
                background-color: #df4740
            }

            .swal-button--danger:active {
                background-color: #cf423b
            }

            .swal-button--danger:focus {
                box-shadow: 0 0 0 1px #fff,0 0 0 3px rgba(165,43,43,.29)
            }

            .swal-content {
                padding: 0 20px;
                margin-top: 20px;
                font-size: medium
            }

            .swal-content:last-child {
                margin-bottom: 20px
            }

            .swal-content__input,.swal-content__textarea {
                -webkit-appearance: none;
                background-color: #fff;
                border: none;
                font-size: 14px;
                display: block;
                box-sizing: border-box;
                width: 100%;
                border: 1px solid rgba(0,0,0,.14);
                padding: 10px 13px;
                border-radius: 2px;
                transition: border-color .2s
            }

            .swal-content__input:focus,.swal-content__textarea:focus {
                outline: none;
                border-color: #6db8ff
            }

            .swal-content__textarea {
                resize: vertical
            }

            .swal-button--loading {
                color: transparent
            }

            .swal-button--loading~.swal-button__loader {
                opacity: 1
            }

            .swal-button__loader {
                position: absolute;
                height: auto;
                width: 43px;
                z-index: 2;
                left: 50%;
                top: 50%;
                -webkit-transform: translateX(-50%) translateY(-50%);
                transform: translateX(-50%) translateY(-50%);
                text-align: center;
                pointer-events: none;
                opacity: 0
            }

            .swal-button__loader div {
                display: inline-block;
                float: none;
                vertical-align: baseline;
                width: 9px;
                height: 9px;
                padding: 0;
                border: none;
                margin: 2px;
                opacity: .4;
                border-radius: 7px;
                background-color: hsla(0,0%,100%,.9);
                transition: background .2s;
                -webkit-animation: swal-loading-anim 1s infinite;
                animation: swal-loading-anim 1s infinite
            }

            .swal-button__loader div:nth-child(3n+2) {
                -webkit-animation-delay: .15s;
                animation-delay: .15s
            }

            .swal-button__loader div:nth-child(3n+3) {
                -webkit-animation-delay: .3s;
                animation-delay: .3s
            }

            @-webkit-keyframes swal-loading-anim {
                0% {
                    opacity: .4
                }

                20% {
                    opacity: .4
                }

                50% {
                    opacity: 1
                }

                to {
                    opacity: .4
                }
            }

            @keyframes swal-loading-anim {
                0% {
                    opacity: .4
                }

                20% {
                    opacity: .4
                }

                50% {
                    opacity: 1
                }

                to {
                    opacity: .4
                }
            }

            .swal-overlay {
                position: fixed;
                top: 0;
                bottom: 0;
                left: 0;
                right: 0;
                text-align: center;
                font-size: 0;
                overflow-y: auto;
                background-color: rgba(0,0,0,.4);
                z-index: 10000;
                pointer-events: none;
                opacity: 0;
                transition: opacity .3s
            }

            .swal-overlay:before {
                content: &quot;
                &quot;;display: inline-block;
                vertical-align: middle;
                height: 100%
            }

            .swal-overlay--show-modal {
                opacity: 1;
                pointer-events: auto
            }

            .swal-overlay--show-modal .swal-modal {
                opacity: 1;
                pointer-events: auto;
                box-sizing: border-box;
                -webkit-animation: showSweetAlert .3s;
                animation: showSweetAlert .3s;
                will-change: transform
            }

            .swal-modal {
                width: 478px;
                opacity: 0;
                pointer-events: none;
                background-color: #fff;
                text-align: center;
                border-radius: 5px;
                position: static;
                margin: 20px auto;
                display: inline-block;
                vertical-align: middle;
                -webkit-transform: scale(1);
                transform: scale(1);
                -webkit-transform-origin: 50% 50%;
                transform-origin: 50% 50%;
                z-index: 10001;
                transition: opacity .2s,-webkit-transform .3s;
                transition: transform .3s,opacity .2s;
                transition: transform .3s,opacity .2s,-webkit-transform .3s
            }

            @media (max-width: 500px) {
                .swal-modal {
                    width:calc(100% - 20px)
                }
            }

            @-webkit-keyframes showSweetAlert {
                0% {
                    -webkit-transform: scale(1);
                    transform: scale(1)
                }

                1% {
                    -webkit-transform: scale(.5);
                    transform: scale(.5)
                }

                45% {
                    -webkit-transform: scale(1.05);
                    transform: scale(1.05)
                }

                80% {
                    -webkit-transform: scale(.95);
                    transform: scale(.95)
                }

                to {
                    -webkit-transform: scale(1);
                    transform: scale(1)
                }
            }

            @keyframes showSweetAlert {
                0% {
                    -webkit-transform: scale(1);
                    transform: scale(1)
                }

                1% {
                    -webkit-transform: scale(.5);
                    transform: scale(.5)
                }

                45% {
                    -webkit-transform: scale(1.05);
                    transform: scale(1.05)
                }

                80% {
                    -webkit-transform: scale(.95);
                    transform: scale(.95)
                }

                to {
                    -webkit-transform: scale(1);
                    transform: scale(1)
                }
            }
        </style>
        <style type="text/css">
            .swal-icon--error {
                border-color: #f27474;
                -webkit-animation: animateErrorIcon .5s;
                animation: animateErrorIcon .5s
            }

            .swal-icon--error__x-mark {
                position: relative;
                display: block;
                -webkit-animation: animateXMark .5s;
                animation: animateXMark .5s
            }

            .swal-icon--error__line {
                position: absolute;
                height: 5px;
                width: 47px;
                background-color: #f27474;
                display: block;
                top: 37px;
                border-radius: 2px
            }

            .swal-icon--error__line--left {
                -webkit-transform: rotate(45deg);
                transform: rotate(45deg);
                left: 17px
            }

            .swal-icon--error__line--right {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg);
                right: 16px
            }

            @-webkit-keyframes animateErrorIcon {
                0% {
                    -webkit-transform: rotateX(100deg);
                    transform: rotateX(100deg);
                    opacity: 0
                }

                to {
                    -webkit-transform: rotateX(0deg);
                    transform: rotateX(0deg);
                    opacity: 1
                }
            }

            @keyframes animateErrorIcon {
                0% {
                    -webkit-transform: rotateX(100deg);
                    transform: rotateX(100deg);
                    opacity: 0
                }

                to {
                    -webkit-transform: rotateX(0deg);
                    transform: rotateX(0deg);
                    opacity: 1
                }
            }

            @-webkit-keyframes animateXMark {
                0% {
                    -webkit-transform: scale(.4);
                    transform: scale(.4);
                    margin-top: 26px;
                    opacity: 0
                }

                50% {
                    -webkit-transform: scale(.4);
                    transform: scale(.4);
                    margin-top: 26px;
                    opacity: 0
                }

                80% {
                    -webkit-transform: scale(1.15);
                    transform: scale(1.15);
                    margin-top: -6px
                }

                to {
                    -webkit-transform: scale(1);
                    transform: scale(1);
                    margin-top: 0;
                    opacity: 1
                }
            }

            @keyframes animateXMark {
                0% {
                    -webkit-transform: scale(.4);
                    transform: scale(.4);
                    margin-top: 26px;
                    opacity: 0
                }

                50% {
                    -webkit-transform: scale(.4);
                    transform: scale(.4);
                    margin-top: 26px;
                    opacity: 0
                }

                80% {
                    -webkit-transform: scale(1.15);
                    transform: scale(1.15);
                    margin-top: -6px
                }

                to {
                    -webkit-transform: scale(1);
                    transform: scale(1);
                    margin-top: 0;
                    opacity: 1
                }
            }

            .swal-icon--warning {
                border-color: #f8bb86;
                -webkit-animation: pulseWarning .75s infinite alternate;
                animation: pulseWarning .75s infinite alternate
            }

            .swal-icon--warning__body {
                width: 5px;
                height: 47px;
                top: 10px;
                border-radius: 2px;
                margin-left: -2px
            }

            .swal-icon--warning__body,.swal-icon--warning__dot {
                position: absolute;
                left: 50%;
                background-color: #f8bb86
            }

            .swal-icon--warning__dot {
                width: 7px;
                height: 7px;
                border-radius: 50%;
                margin-left: -4px;
                bottom: -11px
            }

            @-webkit-keyframes pulseWarning {
                0% {
                    border-color: #f8d486
                }

                to {
                    border-color: #f8bb86
                }
            }

            @keyframes pulseWarning {
                0% {
                    border-color: #f8d486
                }

                to {
                    border-color: #f8bb86
                }
            }

            .swal-icon--success {
                border-color: #a5dc86
            }

            .swal-icon--success:after,.swal-icon--success:before {
                content: &quot;
                &quot;;border-radius: 50%;
                position: absolute;
                width: 60px;
                height: 120px;
                background: #fff;
                -webkit-transform: rotate(45deg);
                transform: rotate(45deg)
            }

            .swal-icon--success:before {
                border-radius: 120px 0 0 120px;
                top: -7px;
                left: -33px;
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg);
                -webkit-transform-origin: 60px 60px;
                transform-origin: 60px 60px
            }

            .swal-icon--success:after {
                border-radius: 0 120px 120px 0;
                top: -11px;
                left: 30px;
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg);
                -webkit-transform-origin: 0 60px;
                transform-origin: 0 60px;
                -webkit-animation: rotatePlaceholder 4.25s ease-in;
                animation: rotatePlaceholder 4.25s ease-in
            }

            .swal-icon--success__ring {
                width: 80px;
                height: 80px;
                border: 4px solid hsla(98,55%,69%,.2);
                border-radius: 50%;
                box-sizing: content-box;
                position: absolute;
                left: -4px;
                top: -4px;
                z-index: 2
            }

            .swal-icon--success__hide-corners {
                width: 5px;
                height: 90px;
                background-color: #fff;
                padding: 1px;
                position: absolute;
                left: 28px;
                top: 8px;
                z-index: 1;
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg)
            }

            .swal-icon--success__line {
                height: 5px;
                background-color: #a5dc86;
                display: block;
                border-radius: 2px;
                position: absolute;
                z-index: 2
            }

            .swal-icon--success__line--tip {
                width: 25px;
                left: 14px;
                top: 46px;
                -webkit-transform: rotate(45deg);
                transform: rotate(45deg);
                -webkit-animation: animateSuccessTip .75s;
                animation: animateSuccessTip .75s
            }

            .swal-icon--success__line--long {
                width: 47px;
                right: 8px;
                top: 38px;
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg);
                -webkit-animation: animateSuccessLong .75s;
                animation: animateSuccessLong .75s
            }

            @-webkit-keyframes rotatePlaceholder {
                0% {
                    -webkit-transform: rotate(-45deg);
                    transform: rotate(-45deg)
                }

                5% {
                    -webkit-transform: rotate(-45deg);
                    transform: rotate(-45deg)
                }

                12% {
                    -webkit-transform: rotate(-405deg);
                    transform: rotate(-405deg)
                }

                to {
                    -webkit-transform: rotate(-405deg);
                    transform: rotate(-405deg)
                }
            }

            @keyframes rotatePlaceholder {
                0% {
                    -webkit-transform: rotate(-45deg);
                    transform: rotate(-45deg)
                }

                5% {
                    -webkit-transform: rotate(-45deg);
                    transform: rotate(-45deg)
                }

                12% {
                    -webkit-transform: rotate(-405deg);
                    transform: rotate(-405deg)
                }

                to {
                    -webkit-transform: rotate(-405deg);
                    transform: rotate(-405deg)
                }
            }

            @-webkit-keyframes animateSuccessTip {
                0% {
                    width: 0;
                    left: 1px;
                    top: 19px
                }

                54% {
                    width: 0;
                    left: 1px;
                    top: 19px
                }

                70% {
                    width: 50px;
                    left: -8px;
                    top: 37px
                }

                84% {
                    width: 17px;
                    left: 21px;
                    top: 48px
                }

                to {
                    width: 25px;
                    left: 14px;
                    top: 45px
                }
            }

            @keyframes animateSuccessTip {
                0% {
                    width: 0;
                    left: 1px;
                    top: 19px
                }

                54% {
                    width: 0;
                    left: 1px;
                    top: 19px
                }

                70% {
                    width: 50px;
                    left: -8px;
                    top: 37px
                }

                84% {
                    width: 17px;
                    left: 21px;
                    top: 48px
                }

                to {
                    width: 25px;
                    left: 14px;
                    top: 45px
                }
            }

            @-webkit-keyframes animateSuccessLong {
                0% {
                    width: 0;
                    right: 46px;
                    top: 54px
                }

                65% {
                    width: 0;
                    right: 46px;
                    top: 54px
                }

                84% {
                    width: 55px;
                    right: 0;
                    top: 35px
                }

                to {
                    width: 47px;
                    right: 8px;
                    top: 38px
                }
            }

            @keyframes animateSuccessLong {
                0% {
                    width: 0;
                    right: 46px;
                    top: 54px
                }

                65% {
                    width: 0;
                    right: 46px;
                    top: 54px
                }

                84% {
                    width: 55px;
                    right: 0;
                    top: 35px
                }

                to {
                    width: 47px;
                    right: 8px;
                    top: 38px
                }
            }

            .swal-icon--info {
                border-color: #c9dae1
            }

            .swal-icon--info:before {
                width: 5px;
                height: 29px;
                bottom: 17px;
                border-radius: 2px;
                margin-left: -2px
            }

            .swal-icon--info:after,.swal-icon--info:before {
                content: &quot;
                &quot;;position: absolute;
                left: 50%;
                background-color: #c9dae1
            }

            .swal-icon--info:after {
                width: 7px;
                height: 7px;
                border-radius: 50%;
                margin-left: -3px;
                top: 19px
            }

            .swal-icon {
                width: 80px;
                height: 80px;
                border-width: 4px;
                border-style: solid;
                border-radius: 50%;
                padding: 0;
                position: relative;
                box-sizing: content-box;
                margin: 20px auto
            }

            .swal-icon:first-child {
                margin-top: 32px
            }

            .swal-icon--custom {
                width: auto;
                height: auto;
                max-width: 100%;
                border: none;
                border-radius: 0
            }

            .swal-icon img {
                max-width: 100%;
                max-height: 100%
            }

            .swal-title {
                color: rgba(0,0,0,.65);
                font-weight: 600;
                text-transform: none;
                position: relative;
                display: block;
                padding: 13px 16px;
                font-size: 27px;
                line-height: normal;
                text-align: center;
                margin-bottom: 0
            }

            .swal-title:first-child {
                margin-top: 26px
            }

            .swal-title:not(:first-child) {
                padding-bottom: 0
            }

            .swal-title:not(:last-child) {
                margin-bottom: 13px
            }

            .swal-text {
                font-size: 16px;
                position: relative;
                float: none;
                line-height: normal;
                vertical-align: top;
                text-align: left;
                display: inline-block;
                margin: 0;
                padding: 0 10px;
                font-weight: 400;
                color: rgba(0,0,0,.64);
                max-width: calc(100% - 20px);
                overflow-wrap: break-word;
                box-sizing: border-box
            }

            .swal-text:first-child {
                margin-top: 45px
            }

            .swal-text:last-child {
                margin-bottom: 45px
            }

            .swal-footer {
                text-align: right;
                padding-top: 13px;
                margin-top: 13px;
                padding: 13px 16px;
                border-radius: inherit;
                border-top-left-radius: 0;
                border-top-right-radius: 0
            }

            .swal-button-container {
                margin: 5px;
                display: inline-block;
                position: relative
            }

            .swal-button {
                background-color: #7cd1f9;
                color: #fff;
                border: none;
                box-shadow: none;
                border-radius: 5px;
                font-weight: 600;
                font-size: 14px;
                padding: 10px 24px;
                margin: 0;
                cursor: pointer
            }

            .swal-button:not([disabled]):hover {
                background-color: #78cbf2
            }

            .swal-button:active {
                background-color: #70bce0
            }

            .swal-button:focus {
                outline: none;
                box-shadow: 0 0 0 1px #fff,0 0 0 3px rgba(43,114,165,.29)
            }

            .swal-button[disabled] {
                opacity: .5;
                cursor: default
            }

            .swal-button::-moz-focus-inner {
                border: 0
            }

            .swal-button--cancel {
                color: #555;
                background-color: #efefef
            }

            .swal-button--cancel:not([disabled]):hover {
                background-color: #e8e8e8
            }

            .swal-button--cancel:active {
                background-color: #d7d7d7
            }

            .swal-button--cancel:focus {
                box-shadow: 0 0 0 1px #fff,0 0 0 3px rgba(116,136,150,.29)
            }

            .swal-button--danger {
                background-color: #e64942
            }

            .swal-button--danger:not([disabled]):hover {
                background-color: #df4740
            }

            .swal-button--danger:active {
                background-color: #cf423b
            }

            .swal-button--danger:focus {
                box-shadow: 0 0 0 1px #fff,0 0 0 3px rgba(165,43,43,.29)
            }

            .swal-content {
                padding: 0 20px;
                margin-top: 20px;
                font-size: medium
            }

            .swal-content:last-child {
                margin-bottom: 20px
            }

            .swal-content__input,.swal-content__textarea {
                -webkit-appearance: none;
                background-color: #fff;
                border: none;
                font-size: 14px;
                display: block;
                box-sizing: border-box;
                width: 100%;
                border: 1px solid rgba(0,0,0,.14);
                padding: 10px 13px;
                border-radius: 2px;
                transition: border-color .2s
            }

            .swal-content__input:focus,.swal-content__textarea:focus {
                outline: none;
                border-color: #6db8ff
            }

            .swal-content__textarea {
                resize: vertical
            }

            .swal-button--loading {
                color: transparent
            }

            .swal-button--loading~.swal-button__loader {
                opacity: 1
            }

            .swal-button__loader {
                position: absolute;
                height: auto;
                width: 43px;
                z-index: 2;
                left: 50%;
                top: 50%;
                -webkit-transform: translateX(-50%) translateY(-50%);
                transform: translateX(-50%) translateY(-50%);
                text-align: center;
                pointer-events: none;
                opacity: 0
            }

            .swal-button__loader div {
                display: inline-block;
                float: none;
                vertical-align: baseline;
                width: 9px;
                height: 9px;
                padding: 0;
                border: none;
                margin: 2px;
                opacity: .4;
                border-radius: 7px;
                background-color: hsla(0,0%,100%,.9);
                transition: background .2s;
                -webkit-animation: swal-loading-anim 1s infinite;
                animation: swal-loading-anim 1s infinite
            }

            .swal-button__loader div:nth-child(3n+2) {
                -webkit-animation-delay: .15s;
                animation-delay: .15s
            }

            .swal-button__loader div:nth-child(3n+3) {
                -webkit-animation-delay: .3s;
                animation-delay: .3s
            }

            @-webkit-keyframes swal-loading-anim {
                0% {
                    opacity: .4
                }

                20% {
                    opacity: .4
                }

                50% {
                    opacity: 1
                }

                to {
                    opacity: .4
                }
            }

            @keyframes swal-loading-anim {
                0% {
                    opacity: .4
                }

                20% {
                    opacity: .4
                }

                50% {
                    opacity: 1
                }

                to {
                    opacity: .4
                }
            }

            .swal-overlay {
                position: fixed;
                top: 0;
                bottom: 0;
                left: 0;
                right: 0;
                text-align: center;
                font-size: 0;
                overflow-y: auto;
                background-color: rgba(0,0,0,.4);
                z-index: 10000;
                pointer-events: none;
                opacity: 0;
                transition: opacity .3s
            }

            .swal-overlay:before {
                content: &quot;
                &quot;;display: inline-block;
                vertical-align: middle;
                height: 100%
            }

            .swal-overlay--show-modal {
                opacity: 1;
                pointer-events: auto
            }

            .swal-overlay--show-modal .swal-modal {
                opacity: 1;
                pointer-events: auto;
                box-sizing: border-box;
                -webkit-animation: showSweetAlert .3s;
                animation: showSweetAlert .3s;
                will-change: transform
            }

            .swal-modal {
                width: 478px;
                opacity: 0;
                pointer-events: none;
                background-color: #fff;
                text-align: center;
                border-radius: 5px;
                position: static;
                margin: 20px auto;
                display: inline-block;
                vertical-align: middle;
                -webkit-transform: scale(1);
                transform: scale(1);
                -webkit-transform-origin: 50% 50%;
                transform-origin: 50% 50%;
                z-index: 10001;
                transition: opacity .2s,-webkit-transform .3s;
                transition: transform .3s,opacity .2s;
                transition: transform .3s,opacity .2s,-webkit-transform .3s
            }

            @media (max-width: 500px) {
                .swal-modal {
                    width:calc(100% - 20px)
                }
            }

            @-webkit-keyframes showSweetAlert {
                0% {
                    -webkit-transform: scale(1);
                    transform: scale(1)
                }

                1% {
                    -webkit-transform: scale(.5);
                    transform: scale(.5)
                }

                45% {
                    -webkit-transform: scale(1.05);
                    transform: scale(1.05)
                }

                80% {
                    -webkit-transform: scale(.95);
                    transform: scale(.95)
                }

                to {
                    -webkit-transform: scale(1);
                    transform: scale(1)
                }
            }

            @keyframes showSweetAlert {
                0% {
                    -webkit-transform: scale(1);
                    transform: scale(1)
                }

                1% {
                    -webkit-transform: scale(.5);
                    transform: scale(.5)
                }

                45% {
                    -webkit-transform: scale(1.05);
                    transform: scale(1.05)
                }

                80% {
                    -webkit-transform: scale(.95);
                    transform: scale(.95)
                }

                to {
                    -webkit-transform: scale(1);
                    transform: scale(1)
                }
            }
        </style>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>阿夜导航</title>
        <meta name="keywords" content="阿夜导航,个人网址导航页">
        <meta name="description" content="阿夜个人网址导航页">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="static/css/amazeui.min.css">
        <link rel="stylesheet" href="static/css/swiper.min.css">
        <script src="static/js/hm.js.js"></script>
        <script src="static/js/hm.js(1).js"></script>
        <script src="static/js/jquery.min.js.js"></script>
        <link href="static/css/sweetalert.min.css" rel="stylesheet">
        <script src="static/js/sweetalert.min.js.js"></script>
        <script src="static/js/swiper.min.js.js"></script>
        <link rel="stylesheet" href="static/css/mh_style.css">
        <link rel="stylesheet" href="static/css/style.css">
        <link rel="stylesheet" href="static/css/iconfont.css">
        <script type="text/javascript">
            var baseUrl = '${base}';
            adaptation(750);
            function adaptation(size) {
                if (document.documentElement.clientWidth > size) {
                    document.documentElement.style.fontSize = size / 7.5 + "px"
                } else {
                    document.documentElement.style.fontSize = document.documentElement.clientWidth / 7.5 + "px"
                }
            }
        </script>
        <div class="warp" id="all">
            <div id="content-wrapper" class="container">
                <div class="container text-center" style="line-height:30px;"></div>
                <div class="container">
                    <div class="grid-6 text-center">
                        <div>
                            <div class="gg_cont">
                                <div align="right"></div>
                                <img src="static/picture/200.png" class="box8">
                                <ul>
                                    <ul>
                                        <h2>
                                            <a href="JavaScript:void(0)" onclick="$('.tzgg').show()">
                                                <marquee behavior="alternate">
                                                    <span style="color:red">❤️ 请按Ctrl+D保存到收藏 以便下次更新使用️ ❤️</span>
                                                </marquee>
                                            </a>
                                        </h2>
                                    </ul>
                                    <strong>
                                        <strong>
                                            <div>
                                                <a style="background-color:Yellow; border:2px solid #000;border-radius: 15px;"<a target="_blank" href="https://www.aaym.net/" class="btn btn-primary btn-lg" onclick=><b>
                                                    <font color="red">
                                                        该资源由AA源码网整理并分享<font color="Black">☞点我进入
													</font>
                                                </b>
</a></div>
<font color="white">
    <div style="width:100%;">
        <a style="background-color:Yellow; border:2px solid #000;border-radius: 15px;width:49.3%"<a target="_blank" href="https://www.86dhw.com" class="btn btn-primary btn-lg" onclick=><b>
            <font color="">
                <font color="red">86导航网</font>
        </b>
</a>
<a style="background-color:Yellow; border:2px solid #000;border-radius: 15px;width:49.3%"<a target="_blank" href="https://www.aaym.net" class="btn btn-primary btn-lg" onclick=><b>
    <font color="">
        <font color="red">AA源码网</font>
</b>
</a>
<div class="lb2 gonggao">
    <div class="gg_cont">
        <font color="Yellow">【86导航网】：</font>
        <font color="white">
            限时免费收录网站
<br>
            <font color="Yellow">[极速收录] [超强SEO] [人工审核] [绿色平台] [增加外链]</font>
    </div>
</div>
<h1>
    <div style="width:100%;">
        <a style="background-color:red; border:2px solid #000;border-radius: 15px;width:49.3%"<a target="_blank" href="https://www.aaym.net" class="btn btn-primary btn-lg" onclick=><b>
            <font color="Yellow">AA源码网</font>
        </b>
</a>
<a style="background-color:red; border:2px solid #000;border-radius: 15px;width:49.3%"<a target="_blank" href="https://www.86dhw.com" class="btn btn-primary btn-lg" onclick=><b>
    <font color="Yellow">86导航网</font>
</b>
</a></b></a>
<div class="lb2 gonggao">
    <div class="gg_cont">
        <font color="Yellow">【86导航网】：</font>
        <font color="white">日ip 1000+，接受任意广告位互换

    </div>
</div>
<div style="width:100%;">
    <a style="background-color:#7840F3; border:2px solid #000;border-radius: 15px;width:49.3%"<a target="_blank" href="https://www.aaym.net
" class="btn btn-primary btn-lg" onclick=><b>
        <font color="Yellow">AA源码网</font>
    </b>
</a>
<a style="background-color:#7840F3; border:2px solid #000;border-radius: 15px;width:49.3%"<a target="_blank" href="https://www.aaym.net" class="btn btn-primary btn-lg" onclick=><b>
    <font color="">AA源码网</font>
</b>
</a>
<div style="width:100%;">
    <a style="background-color:#7840F3; border:2px solid #000;border-radius: 15px;width:49.3%"<a target="_blank" href="https://www.86dhw.com" class="btn btn-primary btn-lg" onclick=><b>
        <font color="">86导航网</font>
    </b>
</a>
<a style="background-color:#7840F3; border:2px solid #000;border-radius: 15px;width:49.3%"<a target="_blank" href="https://www.86dhw.com" class="btn btn-primary btn-lg" onclick=><b>
    <font color="">86导航网</font>
</b>
</a></h1>
<div style="width:100%;">
    <a style="background-color:#7840F3; border:2px solid #000;border-radius: 15px;width:32.4%"<a target="_blank" href="tencent://message/?uin=QQ号" class="btn btn-primary btn-lg" onclick=><b>
        <font color="Yellow">ＱＱ客服</font>
    </b>
</a>
<a style="background-color:#7840F3; border:2px solid #000;border-radius: 15px;width:32.4%"<a target="_blank" href="/" class="btn btn-primary btn-lg" onclick=><b>
    <font color="Yellow">微信客服</font>
</b>
</a>
<a style="background-color:#7840F3; border:2px solid #000;border-radius: 15px;width:32.4%"<a target="_blank" href="/" class="btn btn-primary btn-lg" onclick=><b>
    <font color="Yellow">APP下载</font>
</b>
</a>
<!-- 运行时间 -->
<center>
    <span style="color:#ff0000">本站已顽强运行了</span>
    <span id="span_dt_dt" style="color: #228B22;"></span>
    <script language="javascript">
        function show_date_time() {
            window.setTimeout("show_date_time()", 1000);
            BirthDay = new Date("2/12/2016 16:56:09");
            today = new Date();
            timeold = (today.getTime() - BirthDay.getTime());
            sectimeold = timeold / 1000
            secondsold = Math.floor(sectimeold);
            msPerDay = 24 * 60 * 60 * 1000
            e_daysold = timeold / msPerDay
            daysold = Math.floor(e_daysold);
            e_hrsold = (e_daysold - daysold) * 24;
            hrsold = Math.floor(e_hrsold);
            e_minsold = (e_hrsold - hrsold) * 60;
            minsold = Math.floor((e_hrsold - hrsold) * 60);
            seconds = Math.floor((e_minsold - minsold) * 60);
            span_dt_dt.innerHTML = '<font style=color:#FF0000>' + daysold + '</font> 天 <font style=color:#FF0000>' + hrsold + '</font> 时 <font style=color:#FF0000>' + minsold + '</font> 分 <font style=color:#FF0000>' + seconds + '</font> 秒';
        }
        show_date_time();
    </script>
</center>
<!-- 统计代码-->

<!-- 统计代码结束-->
<!-- 底部收藏 -->
<h1>
    <center>
        <div class="panel panel-default">
            <div class="panel-body">
                <b>
                    <font color="#C00000">本</font>
                    <font color="#B5000B">站</font>
                    <font color="#AA0016">地</font>
                    <font color="#9F0021">址</font>
                    <font color="#94002C">：</font>
                    <font color="red">
                        <script language="javascript">
                            host = window.location.host;
                            document.write("" + host)
                        </script>
                    </font>
                    <font color="#890037">（</font>
                    <font color="#7E0042">建</font>
                    <font color="#73004D">议</font>
                    <font color="#680058">收</font>
                    <font color="#5D0063">藏</font>
                    <font color="#52006E">)</font>
                    <font color="#470079"></font>
                </b>
            </div>
        </div>
    </center>
</h1>
<!-- 统计代码-->

<!-- 统计代码结束-->
<!-- 禁止12代码 -->
<script>
    function fuckyou() {
        window.close();
        //关闭当前窗口(防抽)
        window.location = "";
        //将当前窗口跳转置空白页
    }
    function ck() {
        console.profile();
        console.profileEnd();
        //我们判断一下profiles里面有没有东西，如果有，肯定有人按F12了，没错！！
        if (console.clear) {
            console.clear()
        }
        ;if (typeof console.profiles == "object") {
            return console.profiles.length > 0;
        }
    }
    function hehe() {
        if ((window.console && (console.firebug || console.table && /firebug/i.test(console.table()))) || (typeof opera == 'object' && typeof opera.postError == 'function' && console.profile.length > 0)) {
            fuckyou();
        }
        if (typeof console.profiles == "object" && console.profiles.length > 0) {
            fuckyou();
        }
    }
    hehe();
    window.onresize = function() {
        if ((window.outerHeight - window.innerHeight) > 200)
            //判断当前窗口内页高度和窗口高度，如果差值大于200，那么呵呵
            fuckyou();
    }
</script>
<script>
    document.oncontextmenu = function() {
        alert('求大佬不要扒我了，购买本站源码只需38元！');
        return false;
    }
    ;
    document.onkeydown = function() {
        if (window.event && window.event.keyCode == 123) {
            event.keyCode = 0;
            event.returnValue = false;
            alert('求大佬不要扒我了，购买本站源码只需38元！');
            return false;
        }
    }
    ;
</script>
