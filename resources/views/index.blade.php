<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
    @livewireStyles
</head>

<body>

<!-- Inspired by slack ui clone https://tailwindcomponents.com/component/slack-clone-1 -->

<div class="font-sans antialiased h-screen flex">
    <!-- Sidebar / channel list -->

    <div class="bg-gray-800 text-purple-lighter flex-none w-64 pb-6 hidden md:block">

        <div class="text-white mb-2 mt-3 px-4 flex justify-between py-3 border-b border-gray-700">
            <div class="flex-auto">
                <h1 class="font-semibold text-xl leading-tight mb-1 truncate">
                    <a href="/">Jet Panda</a>
                </h1>
            </div>
        </div>

        <div class="mb-8">
            <div class="px-4 mb-2 text-white flex justify-between items-center">
                <a href="{{ route('invoice') }}">Счета</a>
            </div>
        </div>

        <div class="mb-8">
            <div class="px-4 mb-2 text-white flex justify-between items-center">
                <a href="{{ route('company') }}">Организации</a>
            </div>
        </div>

    </div> <!-- End Of Sidebar -->


    <!-- Chat content -->
    <div class="flex-1 flex flex-col bg-gray-100 overflow-hidden">
        <!-- Top bar -->
        <div class="flex px-6 items-center flex-none border-b border-gray-200"
             style="padding-top: 17px; padding-bottom: 16px;">
            <div class="flex flex-col">
                <p class="text-white text-sm text-gray-800">
                    {{ Auth::user()->name }}
                </p>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit">LogOut</button>
                </form>

            </div>
        </div>

        <!-- CONTENT -->
        <div class="px-6 py-4 flex-1 overflow-auto">
            @yield('content')
        </div> <!-- END CONTENT -->

        <div class="pb-6 px-4 flex-none text-right">
            <h6 class="text-sm">© 2022 Jet Panda</h6>
        </div>

    </div>

</div>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css"/>
<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
{{--<script src="./tw-elements/dist/js/index.min.js"></script>--}}

@livewireScripts
</body>

</html>
