<div class="modal fade" id="editShopping" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form action="{{ url('/carShopping') }}" method="post">
        @csrf

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="titleModal">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    {{-- inputs --}}
                    <input type="text" value="" id="id_productInputModal" name="product_id" hidden>
                    <input type="text" value="0"  name="status" hidden>

                    <input type="number" value=""  name="quantity">

                    <p id="priceModal"></p>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    {{-- <button type="su" class="btn btn-primary">Save changes</button> --}}
                    <button type="submit">editar</button>
                </div>
            </div>
        </div>

    </form>
</div>
