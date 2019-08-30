<table style="width: 100%;" border="1">
    <thead>
        <tr  style="background-color: #adb5c5;">
            <th style="width: 15%;">Placówka</th>
            <th style="width: 19%;">Osoba</th>
            <th style="width: 19%;">Rodzic</th>
            <th style="width: 6%; text-align: right">Rok</th>
            <th style="width: 6%; text-align: right">Waga</th>
            <th style="width: 6%; text-align: right">Wzrost</th>
            <th style="width: 17%;">Kontakt</th>
            <th style="width: 6%; text-align: center;">Opłacił</th>
            <th style="width: 6%; text-align: center;">Spam</th>
        </tr>
    </thead>
    <tbody>
        @foreach($locations as $location)
            <tr>
                <td style="width: 15%;">{{ $location->loc->name }}</td>
                <td style="width: 19%;">{{ $location->name }} {{ $location->surname }}</td>
                <td style="width: 19%;">{{ $location->parent_name }} {{ $location->parent_surname }}</td>
                <td style="width: 6%; text-align: right">{{ $location->birth_year }}</td>
                <td style="width: 6%; text-align: right">{{ $location->weight }}</td>
                <td style="width: 6%; text-align: right">{{ $location->height }}</td>
                <td style="width: 17%;"><b>tel:</b><br>{{ $location->phone }}<br><b>mail:</b><br>{{ $location->email }}</td>
                <td style="width: 6%; text-align: center;">@if($location->paid) Tak @else Nie @endif</td>
                <td style="width: 6%; text-align: center;">@if($location->newsletter) Tak @else Nie @endif</td>
            </tr>
        @endforeach
    </tbody>
</table>
