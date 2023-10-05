<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="config('midtrans.client_key')"></script>
    <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->
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
                <p class="font-bold text-xl mb-2">Detail Pesanan</p>
                <tr>
                    <p>
                        <td>Nama Waifu</td>
                        <td> : Keqing</td>
                    </p>
                </tr>
                <tr>
                    <p>
                        <td>Deskripsi Waifu</td>
                        <td> : Cewek cantik tsundere gampang bikin sange.</td>
                    </p>
                </tr>
                <tr>
                    <p>
                        <td>Nama Pembeli</td>
                        <td> : {{ $order->name }}</td>
                    </p>
                </tr>
                <tr>
                    <p>
                        <td>Alamat</td>
                        <td> : {{ $order->address }}</td>
                    </p>
                </tr>
                <tr>
                    <p>
                        <td>No. Telepon</td>
                        <td> : {{ $order->phone }}</td>
                    </p>
                </tr>
                <tr>
                    <p>
                        <td>Total Harga</td>
                        <td> : {{ $order->price }}</td>
                    </p>
                </tr>
                <tr>
                    <p>
                        <td>Jumlah Waifu</td>
                        <td> : {{ $order->qty }}</td>
                    </p>
                </tr>
                <button type="submit" id="pay-button"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">bayar
                    Sekarang</button>



            </div>
    </section>

    </div>
    <script type="text/javascript">
        // For example trigger on button clicked, or any time you need
        var payButton = document.getElementById('pay-button');
        payButton.addEventListener('click', function() {
            // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
            window.snap.pay('{{ $snapToken }}', {
                onSuccess: function(result) {
                    /* You may add your own implementation here */
                    alert("payment success!");
                    console.log(result);
                },
                onPending: function(result) {
                    /* You may add your own implementation here */
                    alert("wating your payment!");
                    console.log(result);
                },
                onError: function(result) {
                    /* You may add your own implementation here */
                    alert("payment failed!");
                    console.log(result);
                },
                onClose: function() {
                    /* You may add your own implementation here */
                    alert('you closed the popup without finishing the payment');
                }
            })
        });
    </script>
</body>

</html>
