<nav class=" navbar-dark bg-dark">
    <!-- Navbar content -->
    <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Tienda</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="">Mis Compras</a>
        </li>
        {{-- <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="/about"><i class="fas fa-shopping-cart"></i></a>
      </li> --}}
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-shopping-cart"></i>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="width: 400px !important; ">
                <form action="" method="post">
                    @csrf
                    @foreach ($carProducts as $carProduct)
                        @if ($carProduct->status != 1)

                            <li style="padding:5px;">

                                <div class="card text-white bg-dark" style="">
                                    <div class="card-header">
                                        {{ $carProduct->product->name }}&nbsp;&nbsp;
                                        {{-- <a onclick="editProduct( {{ $carProduct->product->id }})">

                                            <i style="color: #89a9e9;" class="fas fa-pencil-alt"></i>
                                        </a> --}}
                                        <button type="button" class="btn btn-sm"  data-bs-toggle="modal" data-bs-target="#editShopping" onclick="editProduct( {{ $carProduct->product->id }})">
                            <i style="color: #89a9e9;" class="fas fa-pencil-alt"></i>
                        </button>

                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">{{ $carProduct->product->price }}</p>
                                        <h6>Cantidad</h6>
                                        <p> {{ $carProduct->quantity }}</p>
                                    </div>
                                    <div class="card-footer text-muted">

                                        <button type="button" style="border-color:#ffde90; color:#ffde90 "
                                            class="btn btn-sm" data-bs-toggle="modal" data-bs-target="#shoppingModal">
                                            Launch demo modal
                                        </button>

                                    </div>
                                </div>
                                {{-- <button type="" style="border-color:#ffde90; color:#ffde90 " class="btn btn-sm"
                    data-bs-toggle="modal" data-bs-target="#shoppingModal">
                    Comprar
                </button> --}}
                <br>
                                <button type="button" onclick="buyProduct( {{ $carProduct->product->id }})"class="btn btn-primary btn-sm">
                                    Comprar
                                </button>
                            </li>
                        @endif
                    @endforeach
                </form>

            </ul>

        </div>
    </ul>
</nav>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
<script>
    function buyProduct(id) {
        var token = '{{ csrf_token() }}';
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': token,
                'X-Requested-With': 'XMLHttpRequest',
            }
        });

        var id = id;
        console.log(id);
        // ajax
        $.ajax({
            type: "post",
            url: "{{ url('buyProduct') }}",
            data: {
                id: id
            },
            dataType: 'json',
            success: function(res) {

                console.log(res);


            }
        });


        location.reload();
    }


    function editProduct(id) {
        var token = '{{ csrf_token() }}';
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': token,
                'X-Requested-With': 'XMLHttpRequest',
            }
        });

        var id = id;
        console.log(id);
        // ajax
        $.ajax({
            type: "post",
            url: "{{ url('editProduct') }}",
            data: {
                id: id
            },
            dataType: 'json',
            success: function(res) {

                console.log('edit',res);


            }
        });

    }
</script>
