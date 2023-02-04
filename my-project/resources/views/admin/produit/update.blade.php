<x-app-layout>
    <div class="album py-5 bg-light">
        <div class="container">
    <form method="POST" action="/admin/produit/update/{{$produit->id}}" >
        @csrf
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <div class="col">
              <div class="card shadow-sm">
                <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">{{$produit->nom}}</text></svg>
                <div class="card-body">
                  <p class="card-text"><label>Prix : </label><input type='text' name='prix' value={{$produit->prix}} €></label></p>
                  <p><label>Volume :</label><input type='text' name='volume' value={{$produit->volume}}></p>
                  <p><label>Poids :</label><input type='text'name='poids' value={{$produit->poids}}></p>
                  <p><label>Type :</label><input type='text' name='type' value={{$produit->type}}></p>
                  <div class="d-flex justify-content-between align-items-center">
                      <button type="submit">Sauvegarder</button>
                    <div class="btn-group">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </form>
</x-app-layout>