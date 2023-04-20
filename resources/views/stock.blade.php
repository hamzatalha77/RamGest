@extends('layouts.app2')

@section('title', 'dashboard')
@section('content')
<section class="content">
<div class="row">
				<div class="col-xl-3 col-lg-6 col-12">
					<div class="box">
						<div class="box-body">
							<div class="d-flex justify-content-between">
								<h2 class="my-0 fw-600 text-primary">{{$pieces}} PIECE</h2>
								<div class="w-40 h-40 bg-primary rounded-circle text-center fs-24 l-h-40"><i class="fa fa-inbox"></i></div>
							</div>
							<p class="fs-18 mt-10">Total du pieces</p>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-6 col-12">
					<div class="box">
						<div class="box-body">
							<div class="d-flex justify-content-between">
								<h2 class="my-0 fw-600 text-warning">{{$montant->total}} DH </h2>
								<div class="w-40 h-40 bg-warning rounded-circle text-center fs-24 l-h-40"><i class="fa fa-dollar"></i></div>
							</div>
							<p class="fs-18 mt-10">Montant Stock</p>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-6 col-12">
					<div class="box">
						<div class="box-body">
							<div class="d-flex justify-content-between">
								<h2 class="my-0 fw-600 text-info">{{$sortie_pieces}}</h2>
								<div class="w-40 h-40 bg-info rounded-circle text-center fs-24 l-h-40"><i class="fa fa-shopping-bag"></i></div>
							</div>
							<p class="fs-18 mt-10">Piece sortie aujourd'hui</p>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-6 col-12">
					<div class="box">
						<div class="box-body">
							<div class="d-flex justify-content-between">
								<h2 class="my-0 fw-600 text-danger">{{$entree_pieces}}</h2>
								<div class="w-40 h-40 bg-danger rounded-circle text-center fs-24 l-h-40"><i class="fa fa-shopping-bag"></i></div>
							</div>
							<p class="fs-18 mt-10">Piece entree aujourd'hui</p>
						</div>
					</div>
				</div>				
				
			</div>
		  <div class="row">
<div class="col-12">
			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Mon Stock</h3>
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
								<th>reference</th>
								<th>categorie</th>
								<th>fornisseur</th>
								<th>prix</th>
								<th>quantite</th>
								<th>date</th>
								<th>action</th>
							</tr>
						</thead>
						<tbody>
						@if(count($stocks))
							@foreach($stocks as $sk)
							<tr>
								<td>{{$sk->reference}}</td>
								<td>{{$sk->categorie_name}}</td>
								<td>{{$sk->fornisseur_name}}</td>
								<td><span class="badge badge-info">{{$sk->prix}} DH</span></td>
								<td>
									@if($sk->quantite>10)
									<span class="badge badge-success">{{$sk->quantite}} pieces</span>
									@else
									<span class="badge badge-danger">{{$sk->quantite}} pieces</span>
									@endif
								</td>
								<td>{{$sk->created_at}}</td>
								<td>
									<form action="{{ route('stock.destroy', [$sk->reference]) }}" method="POST">
										@csrf
										@method('DELETE')
										<button class="btn btn-danger rounded-10 h-40 w-40" onclick="return confirm('Are you sure?')"><i class="far fa-trash-alt"></i></button>
										<a  class="modal-effect btn btn-warning rounded-10 h-40 w-40 mr-1"  data-effect="effect-newspaper" data-toggle="modal" href="#demo{{$sk->reference}}"><i class="far fa-edit"></i></a>
                        			</form>
								</td>
							</tr>
							<!-- Modal -->
							<div class="modal modal-right fade" id="demo{{$sk->reference}}" tabindex="-1">
								<div class="modal-dialog">
									<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title">Modifier Ce reference</h5>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>
									<form action="{{route('stock.update',$sk->reference)}}" method="post">
									@csrf
              						@method('put')
									<div class="modal-body">
										<div class="">
											<div class="form-group">
												<label for="reference" class="form-label">reference</label>
												<input type="text" class="form-control" id="reference" name="reference" value="{{$sk->reference}}" disabled>
											</div>
											<div class="form-group">
												<label for="categorie_name" class="form-label">categorie</label>
												<select class="form-control" id="categorie_name" name="categorie_name" required>
													@foreach($categories as $ct)
													<option value="{{$ct->categorie_name}}" @if($sk->categorie_name == $ct->categorie_name) selected @endif>{{$ct->categorie_name}}</option>
													@endforeach
												</select>
											</div>
											<div class="form-group">
												<label for="fornisseur_name" class="form-label">fornisseur</label>
												<select class="form-control" id="fornisseur_name" name="fornisseur_name" required>
													@foreach($fornisseurs as $fr)
													<option value="{{$fr->fornisseur_name}}" @if($sk->fornisseur_name == $fr->fornisseur_name) selected @endif>{{$fr->fornisseur_name}}</option>
													@endforeach
												</select>
											</div>
											<div class="form-group">
												<label for="prix" class="form-label">prix</label>
												<input type="number" class="form-control" id="prix" name="prix" value="{{$sk->prix}}" required>
											</div>
											<div class="form-group">
												<label for="quantite" class="form-label">quantite</label>
												<input type="number" class="form-control" id="adresse" name="quantite" value="{{$sk->quantite}}" required>
											</div>
										</div>      
									</div>
									<div class="modal-footer modal-footer-uniform">
										<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
										<button type="submit" class="btn btn-primary float-end">Modifier</button>
									</div>
								</form>
									</div>
								</div>
								</div>
							<!-- /.modal -->
							@endforeach
						@else
						<tr id="x_contentStock1" class="x_contentStock1">
                        	<td colspan="10" style="text-align: center">n'a pas de stocks</td>
                    	</tr>
						@endif
						</tbody>
						<tfoot>
							<tr>
								<th>refrence</th>
								<th>categorie</th>
								<th>fornisseur</th>
								<th>prix</th>
								<th>quantite</th>
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
			<h5 class="modal-title">Ajouter une reference</h5>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		  </div>
		  <form action="{{route('stock.store')}}" method="post">
    	@csrf
		<div class="modal-body">
			<div class="">
				<div class="form-group">
					<label for="reference" class="form-label">reference</label>
					<input type="text" class="form-control" id="reference" name="reference" required>
				</div>
				<div class="form-group">
					<label for="categorie_name" class="form-label">categorie</label>
					<select class="form-control" id="categorie_name" name="categorie_name" required>
						@foreach($categories as $ct)
						<option value="{{$ct->categorie_name}}">{{$ct->categorie_name}}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<label for="fornisseur_name" class="form-label">fornisseur</label>
					<select class="form-control" id="fornisseur_name" name="fornisseur_name" required>
						@foreach($fornisseurs as $fr)
						<option value="{{$fr->fornisseur_name}}">{{$fr->fornisseur_name}}</option>
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