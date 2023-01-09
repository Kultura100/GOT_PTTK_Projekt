@props(['styles' => '', 'scripts' => ''])

<x-base-layout>
    <x-slot name="styles">
        <style type="text/css" media="screen">

            a {
                text-decoration: none;
                
            }

            a:visited {
                
            }

            .box::-webkit-scrollbar-track {
                -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
                background-color: #F5F5F5;
                border-radius: 5px
            }

            .box::-webkit-scrollbar {
                width: 10px;
                background-color: #F5F5F5;
                border-radius: 5px
            }

            .box::-webkit-scrollbar-thumb {
                background-color: black;
                border: 2px solid black;
                border-radius: 5px
            }

            h1 {
                float: left;
                padding: 10px 30px
            }

            .icons {
                display: inline;
                float: right
            }

            .notification {
                margin-top: 11px;
                position: relative;
                display: inline-block;
            }

            .number {
                height: 22px;
                width: 22px;
                background-color: #d63031;
                border-radius: 20px;
                color: white;
                text-align: center;
                position: absolute;
                left: 55px;
                top: -5px;
                border-width: 2px;
            }

            .number:empty {
                display: none;
            }

            .notBtn {
                transition: 0.5s;
                cursor: pointer
            }

            .fa-regular {
                font-size: 25pt;
                padding-bottom: 10px;
                color: black;
                font-size: 28px;
                margin-right: 10px;
                margin-left: 40px;
            }

            .box {
                width: 400px;
                height: 0px;
                border-radius: 10px;
                transition: 0.5s;
                position: absolute;
                overflow-y: scroll;
                padding: 0px;
                left: -300px;
                margin-top: 5px;
                background-color: #F4F4F4;
                -webkit-box-shadow: 10px 10px 23px 0px rgba(0, 0, 0, 0.2);
                -moz-box-shadow: 10px 10px 23px 0px rgba(0, 0, 0, 0.1);
                box-shadow: 10px 10px 23px 0px rgba(0, 0, 0, 0.1);
                cursor: context-menu;
            }

            .fa-regular:hover {
                color: #d63031;
            }

            .notBtn:hover>.box {
                height: 17vh
            }

            .content {
                padding: 20px;
                color: black;
                vertical-align: middle;
                text-align: left;
            }

            .gry {
                background-color: #F4F4F4;
            }

            .top {
                color: black;
                padding: 10px
            }

            .display {
                position: relative;
            }

            .cont {
                position: absolute;
                top: 0;
                width: 100%;
                height: 100%;
                background-color: #F4F4F4;
            }

            .cont:empty {
                display: none;
            }


            .cent {
                text-align: center;
                display: block;
            }

            .sec {
                padding: 25px 10px;
                background-color: #F4F4F4;
                transition: 0.5s;
            }

            .profCont {
                padding-left: 15px;
            }

            .profile {
                -webkit-clip-path: circle(50% at 50% 50%);
                clip-path: circle(50% at 50% 50%);
                width: 75px;
                float: left;
            }

            .txt {
                vertical-align: top;
                font-size: 1.25rem;
                padding: 5px 10px 0px 115px;
            }

            .sub {
                font-size: 1rem;
                color: grey;
            }

            .new {
                border-style: none none solid none;
                border-color: red;
            }

            .sec:hover {
                background-color: #BFBFBF;
            }

            footer{
                position: fixed;
                left: 0;
                bottom: 0;
                width: 100%;
                text-align: center;
                min-height: 20px;
                z-index: 999;
            }
    </style>
        {{ $styles }}
    </x-slot>

    @include('layouts.navigation')
    <div class="container" style="margin-bottom: 80px;">
    {{ $slot }}
    </div>

    <footer class="bg-dark text-light">
        <p class="py-4 mb-0 text-center">2022 &copy; Kawczyński Andrzej, Kociński Maciej, Owczarek Tomasz, Dudek Łukasz,
            Danielak Bartosz</p>
            <x-toasts/>
    </footer>

    <x-slot name="scripts">
        {{ $scripts }}
    </x-slot>
</x-base-layout>
