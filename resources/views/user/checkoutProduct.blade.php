@extends('layouts.index')
@section('body')
<div class="container">
    
    <div class="row justify-content-center">
      <div class="col-6 mt-5">
        <h1 class="text-center mb-5">Checkout Form</h1>
    <form class="form-contact contact_form" action="/createNewOrder" method="POST">
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <input class="form-control w-100" name="firstName" id="name" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'first name'" placeholder=" first name"/>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <input class="form-control w-100" name="lastName" id="name" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'last name'" placeholder=" last name"/>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <input class="form-control valid" name="email" id="Email" type="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your email'" placeholder="Enter your email">
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <input class="form-control valid" name="adress1" id="adress" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your address 1'" placeholder="Adress1">
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <input class="form-control valid" name="adress2" id="adress" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your address 2'" placeholder="Adress2">
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <input class="form-control valid" name="phone" id="phone" type="Phone" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your phone number'" placeholder="phone number">
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                 <input type="text" class="form-control valid" name="contrie" value="Morocco" readonly>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <select name="city" id="">
                        Bni Bouayach
<option>Bni Drar</option>
<option>Bni Hadifa</option>
<option>Bni Tadjite</option>
<option>Bouarfa</option>
<option>Bou Craa (Bo Craa)</option>
<option>Bouanane</option>
<option>Boudnib</option>
<option>Boufakrane</option>
<option>Bouguedra</option>
<option>Bouizakarne</option>
<option>Boujad</option>
<option>Boujdour (Cabo Bojador)</option>
<option>Bouknadel</option>
<option>Boulemane</option>
<option>Bouskoura</option>
<option>Bouznika</option>
<option>Bradia</option>
<option>Brikcha</option>


<option>Casablanca ( Dar al-Beïda)</option>
<option>Chefchaouen</option>
<option>Chemaia</option>
<option>Chichaoua</option>


<option>Dakhla (Ad Dakhla, Villa Cisneros)</option>
<option>Dar Gueddari</option>
<option>Dar Kebdani</option>
<option>Demnate</option>
<option>Douar Bel Aguide (Bel air)</option>
<option>Driouch</option>


<option>El Aioun Sidi Mellouk</option>
<option>El Guerdane</option>
<option>El Hajeb</option>
<option>El Hanchane</option>
<option>El Jadida ( Mazagan)</option>
<option>Elkbab</option>
<option>El Menzel</option>
<option>El Ouatia</option>
<option>Erfoud (o Arfoud)</option>
<option>Errachidia (Ksar es-Souk)</option>
<option>Essaouira ( Mogador)</option>


<option>Farcia</option>
<option>Fès</option>
<option>Figuig</option>
<option>Fnideq</option>
<option>Fquih Ben Salah</option>
<option>Er-Rich</option>


<option>Guelmim</option>
<option>Goulmima</option>
<option>Guelta Zemmour</option>
<option>Guerguerat</option>
<option>Guisser</option>
<option>Guercif</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group mt-3">
            <button type="submit" class="button button-contactForm boxed-btn">Procced To Payement</button>
        </div>
    </form>
</div>
    </div>
</div>

@endsection