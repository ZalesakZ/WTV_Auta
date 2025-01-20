<x-guest-layout>
    <main>
        <section id="text">
            <h1>Top 3 nejoblíbenější auta</h1>
        </section>
        <br>
        <table>
            <thead>
                <tr>
                    <th>Pořadí oblíbenosti</th>
                    <th>Název a hodnocení auta</th>
                    <th>Obrázek</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($topCars as $index => $car)
                    <tr>
                        <td class="text-4xl">{{ $index + 1 }}.</td>
                        <td>
                            {{ $car->jmeno }}</br>
                            {{ number_format($car->average_rating, 1) }}⭐
                        </td>
                        <td> 
                            <img
                                src="img/{{$car->fixni_ID}}.png"
                                alt="{{$car ->jmeno}}"
                            >
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </main>
</x-guest-layout>