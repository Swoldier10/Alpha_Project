<div>
    @include('users.partials.header', [
        'title' => __('Customers'),
        'description' => __('Here you can see all your customers'),
        'class' => 'col-lg-7'
    ])
    <div>
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col"></th>
                <th scope="col">Nr.</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">E-Mail</th>
                <th>
                    <button type="button"
                            class="btn btn-outline-primary btn-sm"
                            style="color: white"
                            data-toggle="modal" data-target="#myModal2"
                    >
                        <i class="fa fa-plus" aria-hidden="true"></i> {{__('Add')}}
                    </button>
                </th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><i class="fa fa-user-circle" style="font-size: 2em" aria-hidden="true"></i></td>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <td><i class="fa fa-user-circle" style="font-size: 2em" aria-hidden="true"></i></td>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <td><i class="fa fa-user-circle" style="font-size: 2em" aria-hidden="true"></i></td>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
            </tr>
            </tbody>
        </table>
    </div>

    <div class="modal right fade" id="myModal2" role="dialog" aria-labelledby="myModalLabel2">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel2">Right Sidebar</h4>
                </div>

                <div class="modal-body">
                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </p>
                </div>

            </div><!-- modal-content -->
        </div><!-- modal-dialog -->
    </div><!-- modal -->
</div>
