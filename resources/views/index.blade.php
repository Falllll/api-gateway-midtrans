<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test Toko</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-900">
    <section>
        <div class="relative isolate overflow-hidden pt-5 pb-5">
            <div class="mx-2 px-6 lg:px-8">
                <div class="mx-2 lg:mx-0">
                    <h2 class="text-4xl font-bold tracking-tight text-white sm:text-6xl">Toko Waifu</h2>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="max-w-sm rounded overflow-hidden bg-white shadow-lg my-5 mx-5">
            <img class="w-full" src="/img/waifu/keqing.jpg" alt="Sunset in the mountains">
            <div class="px-6 pt-4">
                <div class="font-bold text-xl mb-2">Keqing</div>
                <p class="text-gray-700 text-base">
                    Cewek cantik tsundere gampang bikin sange.
                </p>
                <p class="mt-5 text-gray-600">$5000</p>
            </div>
            <form action="/checkout" method="POST">
                @csrf
                <div class="relative z-0 mx-5 my-6 group">
                    <div class="relative z-0 my-6 group">
                        <input type="number" name="qty" id="qty"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder="" required />
                        <label for="qty"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Quantity</label>
                    </div>
                    <div class="relative z-0 my-6 group">
                        <input type="text" name="name" id="name"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " required />
                        <label for="name"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Name</label>
                    </div>
                    <div class="relative z-0 my-6 group">
                        <input type="text" name="phone" id="phone"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " required />
                        <label for="phone"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Phone</label>
                    </div>
                    <div class="relative z-0 my-6 group">
                        <textarea type="text" name="address" id="address"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " required /></textarea>
                        <label for="address"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Address</label>
                    </div>
                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Checkout</button>
            </form>


        </div>
    </section>

    </div>
</body>

</html>
