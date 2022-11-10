<section>
    <h1> Modifier une personne
    </h1>
        <div class="container d-flex justify-content-center gap-2">
            <form class="d-flex gap-2" action="/update/{{ $personne['id'] }}" method="POST">
            @csrf
            <div>
                <label for="espece">Nom</label>
                <input type="text" name="nom" id="nom" value="{{ $personne['nom'] }}">
            </div>
         
            <div>
                <label for="age">Age</label>
                <input type="number" name="age" id="age" value="{{ $personne['age'] }}">
            </div>
            <div>
                <label for="age">Telephone</label>
                <input type="number" name="telephone" id="telephone">
            </div>  
            <div>
                <label for="email">Email</label>
                <input type="text" name="email" id="email">
            </div>
            <button type="submit">Modifier la personne</button> 
            </form>
    </div>
    </section>