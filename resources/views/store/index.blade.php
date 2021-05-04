<div class="row">
    @foreach ($allProducts as $allProduct)
        <div class="col-md-3">
            <div class="card text-white bg-dark" style="max-width: 18rem;">
                <div class="card-header">
                    {{ $allProduct->name }}&nbsp;&nbsp;


                </div>
                <div class="card-body">
                    <p class="card-text">{{ $allProduct->price }}.</p>
                </div>
                <div class="card-footer text-muted">

                        <button type="button" style="border-color:#ffde90; color:#ffde90 " class="btn btn-sm"
                            data-bs-toggle="modal" data-bs-target="#shoppingModal"
                            onclick="addproduct( {{ $allProduct->id }})">
                            Agregar al carrito
                        </button>

                </div>
            </div>
            <br>
        </div>
    @endforeach
</div>
<!-- Button trigger modal -->
<!-- Button trigger modal -->
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
<script>
    function addproduct(id) {
        var token = '{{ csrf_token() }}';
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': token,
                'X-Requested-With': 'XMLHttpRequest',
            }
        });

            var id = id;
            // ajax
            $.ajax({
                type: "post",
                url: "{{ url('shoppingModal') }}",
                data: {
                    id
                },
                dataType: 'json',
                success: function(res) {
                    let id_product = res.id;

                    let name = res.name;
                    let price = res.price;

                    // agregamos el valor a los input del modal name price y description correspondiente
                    $('#id_productInputModal').val(id_product)


                    $('#titleModal').text(name)
                    $('#priceModal').text(price)

                    console.log(res);


                }
            });

    }


</script>
