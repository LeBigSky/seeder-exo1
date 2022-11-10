<section>
    <h1> Ajouter une personne</h1>
        <div class="container d-flex justify-content-center gap-2">
            
            <form class="d-flex gap-2" action="{{ route('store.personne') }}" method="POST">
            @csrf
            <div>
                <label for="nom">Nom</label>
                <input type="text" name="nom" id="nom">
            </div>
         
            <div>
                <label for="age">Age</label>
                <input type="number" name="age" id="age">
            </div>  
            <div>
                <label for="age">Telephone</label>
                <input type="number" name="telephone" id="telephone">
            </div>  
            <div>
                <label for="age">Email</label>
                <input type="number" name="email" id="email">
            </div>
          
            <button type="submit">Ajouter le membre</button> 
            </form>
    </div>
    </section>