<section>
    <div class="container">
        <button type="button" class="btn btn-warning my-3" ><a style="text-decoration: none; color: black;" href="{{ route('create') }}">CREER  &#10133;</a></button>
        <button type="button" class="btn btn-danger my-3" ><a style="text-decoration: none; color: white;" href="{{ route('nuke') }}">NUKE THEM ALL </a></button>
        <table class="table align-middle mb-0 bg-white">
            <thead class="bg-light">
              <tr>
                  <th>Nom</th>
                  <th>Age</th>
                  <th>Email</th>
                  <th>Telephone</th>
                  <th>Show</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($personnes as $personne ) 
              <tr>
                <td>
                  <div class="d-flex align-items-center">
                    <div class="ms-3">
                      <h4>{{ $personne['nom'] }}</h4>
                    </div>
                  </div>
                </td>
                <td>
                  <p class="fw-normal mb-1">{{ $personne['age'] }}</p>
                </td>
                <td>
                    <p class="fw-normal mb-1">{{ $personne['telephone'] }}</p>
                  </td>
                  <td>
                    <p class="fw-normal mb-1">{{ $personne['email'] }}</p>
                  </td>
                <td>
                    <a class="text-white" style="text-decoration: none" href={{ "show/".$personne->id }}>
                  <button type="button" class="btn btn-info btn-sm btn-rounded">
                    Show
                  </button>
                    </a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
    
</section>