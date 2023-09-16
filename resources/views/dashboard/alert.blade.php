@if ($errors->any())
              <div class="alert alert-danger" id="alertMessage">
                <ul>
                  @foreach ($errors->all() as $item)
                      <li>{{ $item }}</li>
                  @endforeach
                </ul>
              </div>
              
@endif

@if (Session::has('success'))
    <div class="alert alert-success" id="alertMessage">
        {{ Session::get('success') }}
    </div>
@endif