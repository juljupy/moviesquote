<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>Movie Quotes</title>
</head>

<body>
    <div class="m-8">
        <div class="max-w-sm w-full lg:max-w-full lg:flex">
            <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden"
                style="background-image: url('https://miro.medium.com/max/1200/1*VytWprd2ulmw2eIwnHMNJQ.jpeg')"
                title="Woman holding a mug">
            </div>
            <div
                class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                <div class="mb-8">
                    <div class="text-gray-900 font-bold text-xl mb-2">{{ $quote['quote'] }}</div>
                    <p class="text-gray-700 text-base">{{ $quote['source'] }}</p>
                </div>
                <div class="flex items-center">
                    <img class="w-10 h-10 rounded-full mr-4"
                        src="https://miro.medium.com/max/1200/1*VytWprd2ulmw2eIwnHMNJQ.jpeg"
                        alt="Avatar of Jonathan Reinink">
                    <div class="text-sm">
                        <p class="text-gray-900 leading-none">{{ $quote['author'] }}</p>
                        <p class="text-gray-600">{{ $quote['type'] }} | {{ $quote['language'] }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
