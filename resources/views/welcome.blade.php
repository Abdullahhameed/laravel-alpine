<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel-Alpine</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

    @vite('resources/js/app.js')

    {{-- <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style> --}}
</head>

<body class="antialiased">
    <h3 class="text-2xl text-center font-bold text-orange-900 mt-3">X-Data</h3>
    <div x-data="{ name: 'Abdullah Hameed' }">
        <div class="bg-green-400 m-4 p-4 rounded">
            <span x-text="name"></span>
        </div>

        <div x-data="{ message: 'Hello World' }" class="bg-slate-200 m-4 p-4 rounded">
            <span x-text="message"></span> <br />
            <span x-text="name"></span>
        </div>
    </div>
    <h3 class="text-2xl text-center font-bold text-orange-900 mt-3">X-Bind</h3>
    <p class="p-4">X-Bind is a directive that allows you to dynamically bind an HTML element's attributes to
        JavaScript expressions or values</p>

    <div class="p-4 flex justify-start" x-data="{
        selectedImageUrl: 'https://images.unsplash.com/photo-1617854818583-09e7f077a156?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80',
        show: true,
        inputValue: 'Hello'
    }">
        <img class="h-75 w-2/6 pr-4" :class="{ 'hidden': !show }" :src="selectedImageUrl" />
        <input class="w-full form-control h-10 mt-8 border border-danger" type="text" :value="inputValue"
            :style="{ color: 'red' }" />
    </div>

    <h3 class="text-2xl text-center font-bold text-orange-900 mt-3">X-Model</h3>
    <p class="p-4">X-Model is a directive that allows you to create two-way data bindings between form inputs and
        your application's data.</p>

    <div class="p-4" x-data="{ message: 'Hello World' }">
        <input type="text" x-model="message">
        <p x-text="message" class="mt-2 p-2 bg-slate-200"></p>
    </div>
    <div class="max-w-md mx-auto space-y-2" x-data="{ myColor: 'gray' }">
        <div class="w-24 h-24 rounded" :class="'bg-' + myColor + '-500'"></div>
        <select x-model="myColor">
            <option value="gray">Gray</option>
            <option value="green">Green</option>
            <option value="blue">Blue</option>
            <option value="red">Red</option>
        </select>
    </div>

    <h3 class="text-2xl text-center font-bold text-orange-900 mt-3">X-Show and X-If</h3>
    <p class="p-4">
        => X-Show is a directive that allows you to conditionally show or hide an HTML element based on the value of a
        JavaScript expression or property. <br />
        => X-If is a directive that allows you to conditionally render an HTML element based on the value of a
        JavaScript expression or property.
    </p>

    <div class="p-4" x-data="{ show: true }">
        <button class="border border-red-500 px-2 py-2 rounded" @click="show = !show">toggle</button>
        <div x-show="show">
            This element will be shown or hide based on the show value
        </div>
    </div>
    <div class="p-4" x-data="{ showIfExample: false }">
        <button class="border border-pink-500 px-2 py-2 rounded" @click="showIfExample = !showIfExample">toggle</button>
        <template x-if="showIfExample">
            <div>
                This element will be shown or hide based on the show value
            </div>
        </template>
    </div>

    <h3 class="text-2xl text-center font-bold text-orange-900 mt-3">X-On and X-Ref</h3>
    <section class="p-4" x-data>
        <button @click="alert('Hello World!')">Say Hi</button>
    </section>

    <section x-data="{ isOpen: false }" class="p-4">

        <button @click="isOpen = ! isOpen" id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
            type="button">Dropdown button <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none"
                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg></button>
        <!-- Dropdown menu -->
        <div x-show="isOpen" id="dropdown" @click.outside="isOpen = false"
            class="z-10  bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                <li>
                    <a href="#"
                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                </li>
                <li>
                    <a href="#"
                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                </li>
                <li>
                    <a href="#"
                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                </li>
                <li>
                    <a href="#"
                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign
                        out</a>
                </li>
            </ul>
        </div>

    </section>
    <section class="p-4" x-data>
        <button @click="$refs.text.remove()">Remove Text</button>

        <span x-ref="text">Hello 👋</span>
    </section>
    <section class="p-4" x-data="{ maxLength: 100 }">

        <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your message</label>

        <textarea id="message" rows="4" x-ref="message" @keyup="maxLength = 100 - $refs.message.value.length"
            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="Write your thoughts here..."></textarea>
        <span x-text="maxLength + ' characters remaining'"></span>

    </section>
</body>

</html>
