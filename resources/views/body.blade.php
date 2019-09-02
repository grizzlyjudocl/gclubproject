@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ route('storeLocationData') }}">
    {{ csrf_field() }}
        <div class="info-judo">
        <p>
            Warunkiem zapisania dziecka na zajęcia jest wysłanie wypełnionego kwestionariusza i wysłanie potwierdzenia przelewu (w tym samym dniu co kwestionariusz).
            W tytule przelewu proszę wpisać imię dziecka i przedszkole do którego uczęszcza dziecko.W przypadku gdy dziecko nie znajdzie się na liście uczestników zajęć (np z powodu braku miejsc) to pieniądze zostaną zwrócone, a dziecko zostanie wpisane na listę rezerwową o czym zostaną Państwo poinformowani.</p>
            <p>
                Dane do przelewu:<br>
                G.J.K. Tomasz Gadacz<br>
                42-286 Koszęcin<br>
                ul. Mańki 18<br>
                Numer konta: 57 1600 1462 1825 5345 7000 0001<br>
                tel:+48722085756
                e-mail: <a href="mailto:grizzlyjudoclub@gmail">grizzlyjudoclub@gmail</a>
            </p>
    </div>
    <div class="row">
        <div class="col-2">
            <label for="location">Wybór placówki</label>
        </div>
        <div class="col-10">
            <select class="form-control" name="location" id="location">
                @foreach(\App\Location::orderByDesc('id')->get() as $location)
                    <option value="{{ $location->getKey() }}">{{ $location->name }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="row form-group">
        <div class="col-6">
            <label for="name">Imie</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Wprowadź imie">
        </div>
        <div class="col-6">
            <label for="surname">Nazwisko</label>
            <input type="text" class="form-control" name="surname" id="surname" placeholder="Wprowadź nazwisko">
        </div>
    </div>

    <div class="row form-group">
        <div class="col-6">
            <label for="parent_name">Imie rodzica</label>
            <input type="text" class="form-control" name="parent_name" id="parent_name" placeholder="Wprowadź imie rodzica">
        </div>
        <div class="col-6">
            <label for="parent_surname">Nazwisko rodzica</label>
            <input type="text" class="form-control" name="parent_surname" id="parent_surname" placeholder="Wprowadź nazwisko rodzica">
        </div>
    </div>

    <div class="form-group">
        <label for="birthday">Rok urodzenia</label>
        <input type="number" class="form-control col-3" name="birth_year" id="birth_year" placeholder="Wprowadź rok urodzenia">
    </div>

    <div class="row form-group">
        <div class="col-6">
            <label for="weight">Waga</label>
            <input type="number" class="form-control col-4" name="weight" id="weight" placeholder="Wprowadź wagę">
        </div>
        <div class="col-6">
            <label for="weight">Wzrost (cm)</label>
            <input type="number" class="form-control col-4" name="height" id="height" placeholder="Wprowadź wzrost">
        </div>
    </div>

    <div class="row form-group">
        <div class="col-6">
            <label for="weight">Numer kontaktowy</label>
            <input type="number" class="form-control col-4" name="phone" id="phone" placeholder="Wprowadź numer kontaktowy">
        </div>
        <div class="col-6">
            <label for="weight">Adres email</label>
            <input type="text" class="form-control col-4" name="email" id="email" placeholder="Wprowadź email">
        </div>
    </div>

    <div class="form-group">
        <input type="checkbox" name="rodo" id="rodo">
        <label for="rodo">RODO</label>
    </div>

    <div class="form-group">
        <input type="checkbox" name="newsletter" id="newsletter">
        <label for="newsletter">Zapis do newslettera</label>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Wyślij zgłoszenie</button>
    </div>
</form>
