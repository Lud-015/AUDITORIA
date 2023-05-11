
<div class="col-md-3">
    <button type="button" class="btn btn-block btn-secondary mb-3" data-toggle="modal" data-target="#modal-default"><i class="ni ni-cart"></i> &nbsp; Carrito</button>
    <div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered modal-" role="document">
        <div class="modal-content">
          <div class="modal-header">
            
            <h6 class="modal-title" id="modal-title-default">Carrito  </span></h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true"></span>
            </button>
          </div>
          <div class="modal-body">
            <table id="cart" class="table table-hover table-condensed">
              <thead>
                  <tr>
                      <th style="width:50%">Product</th>
                      <th style="width:10%">Price</th>
                      <th style="width:8%">Quantity</th>
                      <th style="width:22%" class="text-center">Subtotal</th>
                      <th style="width:10%"></th>
                  </tr>
              </thead>
              <tbody>
                  @php $total = 0 @endphp
                  @if(session('cart'))
                      @foreach(session('cart') as $id => $details)
                          @php $total += $details['price'] * $details['quantity'] @endphp
                          <form action="{{route('facturar')}}" method="post">
                            @csrf

                            <tr data-id="{{ $id - 0}}">
                              
                              <input type="text" value="{{$id}}" name="productos[{{$id}}][product_id]" hidden>
                              <td data-th="Product">
                                <div class="row">
                                  <div class="col-sm-3 hidden-xs"><img src="../products/{{ $details['content'] }}" width="100" height="100" class="img-responsive"/></div>
                                      <div class="col-sm-9">
                                          <h4 class="nomargin">{{ $details['name'] }}</h4>
                                      </div>
                                    </div>
                                  </td>
                                  <td data-th="Price">${{ $details['price'] }}</td>
                                  <input type="text" value="{{ $details['price'] }}" name="productos[{{$id}}][unit_price]" hidden>
                              <td data-th="Quantity">
                                <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity cart_update" min="1" name="productos[{{$id}}][quantity]" />
                              </td>
                              <td data-th="Subtotal" class="text-center">${{ $details['price'] * $details['quantity'] }}</td>
                              <input type="text" value="{{ $details['price'] * $details['quantity'] }}" name="productos[{{$id}}][subtotal_price]" hidden>

                              <td class="actions" data-th="">
                                <button class="btn btn-danger btn-sm cart_remove"><i class="fa fa-trash-o"></i> Borrar</button>
                              </td>
                            </tr>
                            @endforeach
                            @endif
                          </tbody>
                          
                        </table>
                        
                        
                        
                        <script type="text/javascript">
             
             $(".cart_update").change(function (e) {
               e.preventDefault();
               
               var ele = $(this);
             
                  $.ajax({
                      url: '{{ route('update_cart') }}',
                      method: "patch",
                      data: {
                          _token: '{{ csrf_token() }}', 
                          id: ele.parents("tr").attr("data-id"), 
                          quantity: ele.parents("tr").find(".quantity").val()
                      },
                      success: function (response) {
                        window.location.reload();
                      }
                    });
                  });
             
              $(".cart_remove").click(function (e) {
                  e.preventDefault();
             
                  var ele = $(this);
                  
                  if(confirm("Do you really want to remove?")) {
                      $.ajax({
                          url: '{{ route('remove_from_cart') }}',
                          method: "DELETE",
                          data: {
                            _token: '{{ csrf_token() }}', 
                            id: ele.parents("tr").attr("data-id")
                          },
                          success: function (response) {
                            window.location.reload();
                          }
                        });
                  }
                });
             
          </script>
         
         <p>

           
          </div>
          <div class="modal-footer">
            <tfoot>
              <tr>
                  <td colspan="5" class="text-right"><h3><strong>Total ${{ $total }}</strong></h3></td>
                  <input type="text" value="{{ $total }}" name="total_paid" hidden>
              </tr>
              <tr>
                <td colspan="5" class="text-right">
                  <a href="{{ route('productos') }}" class="btn btn-danger"> <i class="fa fa-arrow-left"></i> Continuar Comprando</a>
                  <button type="submit" class="btn btn-success"><i class="fa fa-money"></i> Generar Factura</button>
                </td>
              </tr>
            </tfoot>
          </form>
          </div>
        </div>
      </div>
    </div>
  </div>

