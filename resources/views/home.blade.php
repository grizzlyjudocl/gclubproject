@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-end mb-2 mr-1">
        <a href="{{ route('printAllLocations') }}" class="btn btn-primary">PDF</a>
    </div>
    <div class="row justify-content-center">
        <div class="col-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Placówka</th>
                        <th>Osoba</th>
                        <th>Rodzic</th>
                        <th>Rok</th>
                        <th>Waga</th>
                        <th>Wzrost</th>
                        <th>Kontakt</th>
                        <th>Opłacił</th>
                        <th>Spam</th>
                        <th>Usuń</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $item => $value)
                        <tr>
                            <td>{{ $item+1 }}</td>
                            <td>{{ $value->loc->name }}</td>
                            <td>{{ $value->name }} {{ $value->surname }}</td>
                            <td>{{ $value->parent_name }} {{ $value->parent_surname }}</td>
                            <td>{{ $value->birth_year }}</td>
                            <td>{{ $value->weight }}</td>
                            <td>{{ $value->height }}</td>
                            <td><b>tel:</b>{{ $value->phone }}<br><b>email:</b>{{ $value->email }}</td>
                            <td class="text-center">
                                <a href="{{ route('togglePaid', ['locationData'=>$value->getKey()]) }}">
                                    @if($value->paid)
                                        <i class="fas fa-2x fa-check-square"></i>
                                    @else
                                        <i class="far fa-2x fa-square"></i>
                                    @endif
                                </a>
                            </td>
                            <td class="text-center">
                                <a href="{{ route('toggleNewsletter', ['locationData'=>$value->getKey()]) }}">
                                    @if($value->newsletter)
                                        <i class="fas fa-2x fa-check-square"></i>
                                    @else
                                        <i class="far fa-2x fa-square"></i>
                                    @endif
                                </a>
                            </td>
                            <td class="text-center">
                                <a href="{{ route('removeLocation', ['locationData'=>$value->getKey()]) }}">
                                    <i class="fas fa-2x fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
