@extends('layouts.app2')

@section('title', 'dashboard')
@section('content')
<section class="content">
		  <div class="row">
<div class="col-12">
			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Mes Entrees</h3>
				  <span class="float-right">
                    <a class="modal-effect btn btn-primary " data-effect="effect-newspaper" data-toggle="modal" href="#modaldemo8">Ajouter</a>
                    </span>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example5" class="table table-bordered table-striped" style="width:100%">
						<thead>
							<tr>
								<th>id</th>
								<th>reference</th>
								<th>categorie</th>
								<th>fornisseur</th>
								<th>prix</th>
								<th>quantite</th>
								<th>total</th>
								<th>date</th>
								<th>action</th>
							</tr>
						</thead>
						<tbody>
						@if(count($entrees))
							@foreach($entrees as $et)
							<tr>
								<td>{{$et->id}}</td>
								<td>{{$et->reference}}</td>
								<td>{{$et->categorie}}</td>
								<td>{{$et->fornisseur}}</td>
								<td><span class="badge badge-info">{{$et->prix}} DH</span></td>
								<td><span class="badge badge-success">{{$et->quantite}} pieces</span></td>
								<td><span class="badge badge-light">{{$et->total}} DH</span></td>
								<td>{{$et->created_at}}</td>
								<td>
									<form action="{{ route('entree.destroy', [$et->id]) }}" method="POST">
										@csrf
										@method('DELETE')
										<button class="btn btn-danger rounded-10 h-40 w-40" onclick="return confirm('Are you sure?')"><i class="far fa-trash-alt"></i></button>
									</form>
								</td>
							</tr>
							@endforeach
						@else
						<tr id="x_contentStock1" class="x_contentStock1">
                        	<td colspan="10" style="text-align: center">n'a pas de entrees</td>
                    	</tr>
						@endif
						</tbody>
						<tfoot>
							<tr>
								<th>id</th>
								<th>refrence</th>
								<th>categorie</th>
								<th>fornisseur</th>
								<th>prix</th>
								<th>quantite</th>
								<th>total</th>
								<th>date</th>
								<th>action</th>
							</tr>
						</tfoot>
					</table>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->      
			</div> 
            </div>
		</section>



<!-- Modal -->
<div class="modal modal-right fade" id="modaldemo8" tabindex="-1">
	  <div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title">Ajouter une entree</h5>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		  </div>
		  <form action="{{route('entree.store')}}" method="post">
    	@csrf
		<div class="modal-body">
			<div class="">
				<div class="form-group">
					<label for="reference" class="form-label">reference</label>
					<select class="form-control" id="reference" name="reference" required>
						@foreach($stocks as $sk)
						<option value="{{$sk->reference}}">{{$sk->reference}}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<label for="prix" class="form-label">prix</label>
					<input type="number" class="form-control" id="prix" name="prix" required>
				</div>
				<div class="form-group">
					<label for="quantite" class="form-label">quantite</label>
					<input type="number" class="form-control" id="quantite" name="quantite" required>
				</div>
			</div>      
		</div>
		<div class="modal-footer modal-footer-uniform">
			<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
			<button type="submit" class="btn btn-primary float-end">Ajouter</button>
		  </div>
    </form>
		</div>
	  </div>
	</div>
<!-- /.modal -->
@endsection


@section('JS2')
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
<script>
    $(document).ready( function () {
    $('#example5').DataTable();
} );
</script>
@endsection