<x-app-layout>
    <div class="album py-5 bg-light">
        <div class="container">
    
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <div class="col">
              <div class="card shadow-sm">
                <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">{{$user->name}}</text></svg>
                <div class="card-body">
                    <p><label>email :</label><input type='text'disabled="diabled" name='email'  value={{$user->email}}></p>
                    <p><label>phone :</label><input type='text'disabled="diabled" name='phone' value={{$user->phone}}></p>
                    <p><label>adresse :</label><input type='text'disabled="diabled" name='adresse' value={{$user->adresse}}></p>
                    <p><label>nbCommande :</label><input type='text' disabled="diabled"name='nbCommande' value={{$user->nbCommande}}></p>
                    <p><label>Role :</label><input type='text'disabled="diabled" name='Role' value={{$user->Role}}></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
</x-app-layout>