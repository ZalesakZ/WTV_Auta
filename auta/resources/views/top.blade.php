<x-guest-layout>
<main>
        <h1>Žebříček</h1>
        <br>
        <table>
            <thead>
                <tr>
                    <th>Pořadí oblíbenosti</th>
                    <th>Jméno auta</th>
                    <th>Obrázek</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($topCars as $index => $car)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>
                                    {{ $car->jmeno }}</br>
                                    {{ number_format($car->average_rating, 2) }}
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