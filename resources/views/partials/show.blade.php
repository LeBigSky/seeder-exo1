<section>
    <button type="button" class="btn btn-warning my-3"><a style="text-decoration: none; color: black;" href="{{ route('home') }}"> &#x21A9;
        STEP BACK</a></button>

    <div class="mt-5"> 
      
        <div class="container w-50 border d-flex flex-column align-items-center align-middle gap-3">
            <h2 class="my-3"> {{ $personne['nom'] }}</h2> 
            <p class="d-flex justify-content-center" style= "text-align: center" > Age: {{ $personne['age'] }}</p>
            <p class="d-flex justify-content-center" style= "text-align: center" > Age: {{ $personne['email'] }}</p>
            <p class="d-flex justify-content-center" style= "text-align: center" > Age: {{ $personne['telephone'] }}</p>
        </div>
        <div class="d-flex justify-content-center gap-5 mt-5">
           <a href="/edit/{{ $personne->id }}"><button class="btn btn-info">EDIT</button> </a>
           <a href="/delete/{{ $personne->id }}"><button class="btn btn-danger">DELETE</button></a>
        </div>
        
    </div>
</section>