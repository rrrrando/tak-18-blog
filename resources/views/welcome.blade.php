<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
        <title>Laravel</title>
            <body class="p-12">
                <table class="table-auto w-full">
                    <thead>
                        <tr>
                            <td class="px-4 py-2">Pealkiri</td>
                            <td class="px-4 py-2">Aasta</td>
                            <td class="px-4 py-2">Keel</td>
                            <td class="px-4 py-2">Hind</td>
                            <td class="px-4 py-2">Laoseis</td>
                            <td class="px-4 py-2">Lehekülgi</td>
                            <td class="px-4 py-2">Tüüp</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($books as $book)
                        <tr>
                            <td class="border px-4 py-2">{{ $book->title }}</td>
                            <td class="border px-4 py-2">{{ $book->release_date }}</td>
                            <td class="border px-4 py-2">{{ $book->language }}</td>
                            <td class="border px-4 py-2">{{ $book->price }}</td>
                            <td class="border px-4 py-2">{{ $book->stock_saldo }}</td>
                            <td class="border px-4 py-2">{{ $book->pages }}</td>
                            <td class="border px-4 py-2">{{ $book->type }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </body>
</html>
