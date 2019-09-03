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
                e-mail: <a href="mailto:grizzlyjudoclub@gmail.com">grizzlyjudoclub@gmail.com</a>
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
        <label for="rodo">Zgoda na przetwarzanie danych osobowych</label>
        <a id="js--rodo-btn" class="js--rodo-btn" onclick="toggle()">Zobacz zgody</a>
        <div class="js--rodo" id="js--rodo">
            Zgoda na przetwarzanie danych osobowych:<br>


            W związku z realizacją wymogów Rozporządzenia Parlamentu Europejskiego i Rady Unii Europejskiej (2016/679 z dnia 27 kwietnia 2016r. w sprawie ochrony osób fizycznych w związku z przetwarzaniem danych osobowych i w sprawie swobodnego przepływu takich danych oraz uchylenia dyrektywy 95/46/WE (ogólnie rozporządzenie o ochronie danych), informujemy o zasadach przetwarzania Pani/Pana danych osobowych oraz Państwa dzieci danych osobowych oraz o przysługujących Panu/Pani prawach z tym związanych.
            Poniższe zasady stosuje się od 25 maja 2018r.<br>
            1.Administratorem Państwa danych osobowych jest G.J.K. Tomasz Gadacz, ul. Mańki 18, 42-286 Koszęcin. <br>
            2.Dane osobowe przetwarzane są w realizacji zawartej umowy dotyczącej uczestnictwa w zajęciach Judo.<br>
            3.Odbiorcami Pani/Pana i Państwa dzieci danych osobowych będą wyłącznie organy i podmioty uprawnione do uzyskania danych osobowych na podstawie przepisów powszechnie obowiązującego prawa.<br>
            4.Posiada Pan/Pani prawo dostępu do danych osobowych, w tym prawo do uzyskania kopii tych danych, prawo do ich sprostowania, prawo do żądania usunięcia danych osobowych, prawo do ograniczenia przetwarzania danych osobowych, prawo do przenoszenia danych osobowych, prawo do wniesienia sprzeciwu wobec przetwarzania danych osobowych, prawo do cofnięcia zgody w dowolnym momencie.<br>
            5.Ma Pan/Pani prawo do wniesienia skargi do organu nadzorczego właściwego w sprawach ochrony danych osobowych w przypadku niewłaściwego przetwarzania danych osobowych.<br>
            6.W sytuacji, gdy przetwarzanie danych osobowych odbywa się na podstawie zgody osoby której dane dotyczą, podanie przez Panią/Pana danych osobowych ma charakter dobrowolny.
            7.Podanie przez Panią/Pana danych osobowych jest obowiązkowe, w sytuacji gdy przesłankę przetwarzania danych osobowych stanowi przepis prawa lub zawarta między stronami umowa.<br> 
            8.Pani/Pana, Państwa dzieci dane osobowe nie będą przetwarzane w sposób zautomatyzowany i nie będą profilowane. <br>


            Zgoda na publikację wizerunku:<br>

            Informujemy, że podczas trwania zajęć Judo, jak również zawodów "Funny Judo", może mieć miejsce fotograficzne i filmowe rejestrowanie wizerunku Państwa dzieci na potrzeby reklamowe oraz informacyjne w mediach przez „G.J.K. Tomasz Gadacz”. Prosimy pamiętać, że zgodę zawsze mogą Państwo odwołać kontaktując się bezpośrednio z wykonawcą zajęć Judo.

        </div>
    </div>

    <div class="form-group">
        <input type="checkbox" name="newsletter" id="newsletter">
        <label for="newsletter">Zapis do newslettera</label>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Wyślij zgłoszenie</button>
    </div>
</form>
