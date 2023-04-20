@extends('layouts.app2')

@section('title', 'dashboard')
@section('content')
<section class="content">
		  <div class="row">
<div class="col-12">
			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Mes Categories</h3>
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
								<th>categorie name</th>
								<th>description</th>
								<th>date</th>
								<th>action</th>
							</tr>
						</thead>
						<tbody>
						@if(count($categories))
							@foreach($categories as $ct)
							<tr>
								<td>{{$ct->categorie_name}}</td>
								<td>{{$ct->description}}</td>
								<td>{{$ct->created_at}}</td>
								<td>
									<form action="{{ route('categorie.destroy', [$ct->categorie_name]) }}" method="POST">
										@csrf
										@method('DELETE')
										<button class="btn btn-danger rounded-10 h-40 w-40" onclick="return confirm('Are you sure?')"><i class="far fa-trash-alt"></i></button>
									</form>
								</td>
							</tr>
							@endforeach
						@else
						<tr id="x_contentStock1" class="x_contentStock1">
                        	<td colspan="10" style="text-align: center">n'a pas de categories</td>
                    	</tr>
						@endif
						</tbody>
						<tfoot>
							<tr>
								<th>categorie name</th>
								<th>description</th>
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
			<h5 class="modal-title">Ajouter une categorie</h5>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		  </div>
		  <form action="{{route('categorie.store')}}" method="post">
    	@csrf
		<div class="modal-body">
			<div class="">
				<div class="form-group">
					<label for="categorie_name" class="form-label">categorie name</label>
					<input type="text" class="form-control" id="categorie_name" name="categorie_name" required>
				</div>
				<div class="form-group">
					<label for="description" class="form-label">description</label>
					<input type="text" class="form-control" id="description" name="description" required>
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