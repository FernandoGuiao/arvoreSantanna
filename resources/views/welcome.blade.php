<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Árvore Coelho Sant'Anna</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *,
        :after,
        :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg,
        video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --bg-opacity: 1;
            background-color: #fff;
            background-color: rgba(255, 255, 255, var(--bg-opacity))
        }

        .bg-gray-100 {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity))
        }

        .border-gray-200 {
            --border-opacity: 1;
            border-color: #edf2f7;
            border-color: rgba(237, 242, 247, var(--border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --text-opacity: 1;
            color: #edf2f7;
            color: rgba(237, 242, 247, var(--text-opacity))
        }

        .text-gray-300 {
            --text-opacity: 1;
            color: #e2e8f0;
            color: rgba(226, 232, 240, var(--text-opacity))
        }

        .text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }

        .text-gray-500 {
            --text-opacity: 1;
            color: #a0aec0;
            color: rgba(160, 174, 192, var(--text-opacity))
        }

        .text-gray-600 {
            --text-opacity: 1;
            color: #718096;
            color: rgba(113, 128, 150, var(--text-opacity))
        }

        .text-gray-700 {
            --text-opacity: 1;
            color: #4a5568;
            color: rgba(74, 85, 104, var(--text-opacity))
        }

        .text-gray-900 {
            --text-opacity: 1;
            color: #1a202c;
            color: rgba(26, 32, 44, var(--text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        @media (min-width:640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width:768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width:1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme:dark) {
            .dark\:bg-gray-800 {
                --bg-opacity: 1;
                background-color: #2d3748;
                background-color: rgba(45, 55, 72, var(--bg-opacity))
            }

            .dark\:bg-gray-900 {
                --bg-opacity: 1;
                background-color: #1a202c;
                background-color: rgba(26, 32, 44, var(--bg-opacity))
            }

            .dark\:border-gray-700 {
                --border-opacity: 1;
                border-color: #4a5568;
                border-color: rgba(74, 85, 104, var(--border-opacity))
            }

            .dark\:text-white {
                --text-opacity: 1;
                color: #fff;
                color: rgba(255, 255, 255, var(--text-opacity))
            }

            .dark\:text-gray-400 {
                --text-opacity: 1;
                color: #cbd5e0;
                color: rgba(203, 213, 224, var(--text-opacity))
            }

            .dark\:text-gray-500 {
                --tw-text-opacity: 1;
                color: #6b7280;
                color: rgba(107, 114, 128, var(--tw-text-opacity))
            }
        }

    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

    </style>
</head>

<body class="antialiased">
    <div
        class="relative  items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
            <div class="relative flex items-top justify-center">
                @auth
                    <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Registre-se</a>
                    @endif
                @endauth
            </div>
            <br>
        @endif
        <div
            class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0"
                    style="align-items: center; margin-bottom: 30px;">

                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="80px" height="80px"
                        viewBox="0 0 582.545 582.545" style="enable-background:new 0 0 582.545 582.545;"
                        xml:space="preserve">
                        <g>
                            <g>
                                <path d="M75.162,572.608c3.097-1.165,6.426-2.549,10.129-3.846c3.837-1.071,7.791-2.54,12.185-3.712
     c8.807-2.326,18.746-4.706,29.795-6.604c2.751-0.493,5.557-0.994,8.421-1.509c2.886-0.419,5.826-0.845,8.816-1.279
     c5.949-0.945,12.167-1.686,18.543-2.43c6.353-0.826,12.968-1.353,19.658-2.068c6.744-0.486,13.599-1.193,20.6-1.652
     c14.012-0.912,28.492-1.731,43.241-2.19c14.74-0.512,29.731-0.734,44.719-0.766c14.988,0.027,29.982,0.229,44.722,0.744
     c14.752,0.428,29.229,1.288,43.244,2.172c7,0.469,13.857,1.157,20.602,1.646c6.693,0.716,13.307,1.258,19.662,2.068
     c6.377,0.741,12.592,1.497,18.543,2.43c2.99,0.435,5.93,0.863,8.816,1.285c2.861,0.512,5.67,1.017,8.42,1.506
     c11.051,1.9,20.992,4.287,29.795,6.615c4.393,1.179,8.348,2.642,12.186,3.719c3.703,1.3,7.031,2.687,10.125,3.855
     c5.75,2.77,10.637,4.813,13.574,7.007c3.078,1.913,4.719,2.932,4.719,2.932s-1.242-1.478-3.568-4.247
     c-1.201-1.355-2.529-3.124-4.596-4.838c-1.977-1.766-4.277-3.975-7.047-6.062c-2.797-1.962-5.879-4.266-9.361-6.573
     c-3.543-2.121-7.422-4.468-11.67-6.711c-8.541-4.354-18.451-8.821-29.541-12.727c-2.781-0.97-5.619-1.958-8.51-2.965
     c-2.92-0.891-5.895-1.796-8.918-2.721c-6.053-1.921-12.389-3.427-18.9-5.082c-3.254-0.875-6.57-1.595-9.936-2.271
     c-3.367-0.704-6.775-1.417-10.221-2.136c-6.9-1.325-13.988-2.494-21.197-3.617c-7.213-1.022-14.562-2.124-22.02-2.827
     c-3.73-0.398-7.479-0.796-11.248-1.197c-3.773-0.339-7.57-0.562-11.383-0.854c-8.734-0.7-17.559-1.089-26.42-1.34
     c-0.965-16.903-6.598-33.7-14.225-49.942c-5.367-11.426-11.242-22.764-16.582-34.192c-2.172-4.66-7.279-11.249-5.777-16.025
     c0.961-3.045,1.628-6.12,2.262-9.192c2.885-14.049,3.675-32.583,22.251-42.913c-13.833,4.651-22.466,13.779-27.432,22.402
     c4.826-23.99,6.071-46.702-4.229-70.258c-9.605-21.986-23.384-43.525-28.109-66.191c-4.453-21.359-0.055-43.59,15.327-63.134
     c3.642-4.603,7.834-9.033,12.436-13.308c2.831-2.638,2.928-4.667,8.562-3.626c3.721,0.686,7.372,1.438,11.297,0.756
     c13.583-2.289,23.188-10.588,27.86-18.177c-8.588,4.501-24.344,11.157-36.477,11.157c45.002-22.381,79.336-57.669,91.417-91.904
     c3.363-9.547,5.205-19.293,5.484-29.061c0.125-4.424-0.404-8.853-0.605-13.28c-0.605-13.28-3.854-7.481-3.854-7.481
     c0.23,3.675,0.713,7.316,0.641,10.988c-0.127,6.383-1.148,12.745-2.486,19.073c-7.664-6.903-16.287-13.237-19.947-21.411
     c2.252,12.879,15.881,24.866,14.102,37.938c-1.674,12.255-12.078,24.917-21.881,35.533c-19.752,21.389-50.076,37.442-74.397,56.72
     c-47.586,37.727-50.398,84.444-30.995,128.851c-11.475-4.59-26.659-4.245-37.644-9.612c9.446,6.448,19.021,12.819,29.4,18.826
     c4.719,2.714,10.529,4.853,14.474,8.029c4.648,3.733,5.627,8.815,7.204,13.253c3.604,10.116,6,20.435,5.101,30.802
     c-1.815,21.126-16.754,41.279-13.36,62.669c5.563,35.594,35.667,67.589,46.91,102.369c-14.382,0.199-28.752,0.523-42.883,1.661
     c-3.81,0.282-7.607,0.561-11.383,0.842c-3.77,0.4-7.521,0.802-11.252,1.199c-7.457,0.716-14.807,1.793-22.022,2.821
     c-7.209,1.133-14.299,2.283-21.197,3.614c-6.888,1.521-13.647,2.678-20.156,4.406c-6.512,1.655-12.849,3.173-18.905,5.083
     c-3.023,0.924-5.998,1.833-8.917,2.727c-2.892,1.006-5.731,1.994-8.513,2.965c-11.089,3.91-21.004,8.381-29.541,12.738
     c-4.245,2.252-8.13,4.594-11.671,6.717c-3.482,2.313-6.564,4.618-9.357,6.582c-5.386,4.367-9.345,7.993-11.631,10.906
     c-2.329,2.778-3.571,4.26-3.571,4.26s1.64-1.017,4.715-2.923C64.424,577.502,69.323,575.424,75.162,572.608z" />
                                <path
                                    d="M346.248,323.941c2.309-1.47,4.506-3.131,6.477-5.04c3.406-3.299,6.926-8.082,6.885-13.082
     c-9.975,12.225-28.068,10.377-41.328,16.188c-10.244,4.492-18.369,13.066-23.824,22.712c-0.846,1.499-8.562,20.152-4.627,20.281
     c0.976,0.03,2.038-4.89,2.295-5.615c0.914-2.576,2.527-4.835,4.424-6.796c3.914-4.042,9.139-6.595,14.535-7.999
     c9.914-2.583,23.088-2.83,29.967-11.641c1.426-1.829,2.408-4.191,2.1-6.548C342.971,325.033,345.213,324.599,346.248,323.941z" />
                                <path
                                    d="M155.71,238.769c1.034,0.661,3.277,1.095,3.097,2.457c-0.312,2.356,0.673,4.719,2.099,6.548
     c6.876,8.813,20.049,9.061,29.967,11.64c5.398,1.405,10.621,3.957,14.535,7.999c1.9,1.961,3.51,4.22,4.425,6.796
     c0.257,0.725,1.319,5.646,2.295,5.615c3.938-0.128-3.779-18.782-4.627-20.281c-5.456-9.646-13.577-18.223-23.825-22.711
     c-13.259-5.811-31.35-3.963-41.328-16.188c-0.04,5,3.476,9.783,6.885,13.082C151.203,235.639,153.4,237.3,155.71,238.769z" />
                                <path
                                    d="M371.107,89.569c0.596,0.104,1.67-2.821,1.891-3.244c0.783-1.5,1.965-2.745,3.299-3.782
     c2.744-2.139,6.166-3.253,9.592-3.648c6.299-0.728,14.389,0.257,19.361-4.55c1.031-0.997,1.836-2.359,1.852-3.831
     c0.006-0.851,1.416-0.924,2.107-1.239c1.543-0.701,3.033-1.53,4.404-2.527c2.371-1.729,4.938-4.354,5.346-7.42
     c-7.166,6.631-18.092,3.938-26.715,6.355c-6.664,1.87-12.377,6.423-16.551,11.86C375.039,78.388,368.705,89.15,371.107,89.569z" />
                                <path
                                    d="M337.875,167.823c-5.773-3.819-12.957-5.159-19.801-4.758c-1.062,0.064-13.348,2.313-12.094,4.403
     c0.312,0.517,3.225-0.581,3.689-0.691c1.646-0.389,3.361-0.309,5.02,0.019c3.414,0.676,6.492,2.533,9.035,4.868
     c4.67,4.287,9.221,11.05,16.109,11.665c1.428,0.129,2.986-0.153,4.105-1.107c0.648-0.551,1.625,0.468,2.316,0.783
     c1.539,0.707,3.141,1.292,4.793,1.674c2.857,0.664,6.523,0.887,9.109-0.814C350.457,182.786,345.344,172.765,337.875,167.823z" />
                                <path
                                    d="M335.975,12.108c0.588,0.48,1.934,0.912,1.723,1.735c-0.363,1.426,0.068,2.947,0.811,4.177
     c3.58,5.915,11.656,7.029,17.559,9.339c3.213,1.258,6.236,3.207,8.346,5.977c1.023,1.343,1.848,2.849,2.221,4.498
     c0.104,0.465,0.398,3.565,1,3.617c2.43,0.208-0.951-11.815-1.361-12.797c-2.646-6.325-7.01-12.185-12.977-15.691
     C345.574,8.424,334.322,8.241,329.086,0c-0.391,3.069,1.424,6.264,3.275,8.541C333.436,9.854,334.664,11.038,335.975,12.108z" />
                                <path
                                    d="M311.141,79.542c-0.311,6.909,5.785,12.322,9.408,17.521c1.975,2.831,3.402,6.129,3.617,9.605
     c0.104,1.686-0.045,3.396-0.652,4.976c-0.17,0.443-1.648,3.185-1.178,3.564c1.904,1.521,5.775-10.352,5.98-11.396
     c1.312-6.729,0.941-14.027-2.072-20.257c-3.898-8.063-13.148-14.468-12.926-24.226c-2.031,2.334-2.299,5.998-2.023,8.92
     c0.16,1.689,0.527,3.354,1.02,4.973c0.221,0.725,1.102,1.833,0.469,2.399C311.693,76.601,311.207,78.106,311.141,79.542z" />
                                <path d="M150.627,372.09c2.76,2.011,5.762,3.679,8.865,5.092c1.393,0.634,4.232,0.78,4.244,2.494
     c0.024,2.962,1.649,5.704,3.724,7.711c10.012,9.676,26.304,7.696,38.981,9.162c6.9,0.795,13.785,3.038,19.314,7.344
     c2.684,2.09,5.062,4.596,6.637,7.616c0.444,0.851,2.607,6.735,3.807,6.53c4.835-0.845-7.919-22.513-9.223-24.214
     c-8.403-10.952-19.908-20.119-33.327-23.883c-17.362-4.866-39.357,0.551-53.786-12.797
     C140.683,363.326,145.851,368.614,150.627,372.09z" />
                            </g>
                        </g>
                    </svg>
                    <div>Árvore Coelho Sant'Anna</div>

                </div>
            </div>
        </div>
    </div>
</body>

</html>
