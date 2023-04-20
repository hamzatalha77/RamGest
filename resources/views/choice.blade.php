@extends('layouts.app2')

@section('title', 'dashboard')
@section('content')
<section class="content">
    <div class="row">
        <div class="col-lg-4">
					<div class="box box-inverse bg-gradient-primary" >
            <div class="box-body text-center">
              <h5 class="text-uppercase text-muted">Facture Entree</h5>
              <br>
              <hr>
              <form action="{{route('facture_entree')}}" method="post">
            @csrf
                  <div class="form-group row">
                      <label for="example-date-input" class="col-sm-2 col-form-label"><strong>Date Debut</strong></label>
                      <div class="col-sm-10">
                      <input class="form-control" type="date"  name="date_debut" id="example-date-input" reauired>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="example-date-input" class="col-sm-2 col-form-label"><strong></strong></label>
                      <div class="col-sm-10">
                      </div>
                  </div>
              <br><br>
              <br>
              <button type="submit" class="btn btn-outline btn-white">Valider</button>
              </form>
            </div>
					</div>
				</div>

				  <div class="col-lg-4" style="height:100px;">
					<div class="box card-shadowed box-inverse bg-gradient-danger">
					  <div class="box-body text-center">
						<h5 class="text-uppercase text-muted">Facture Sortie</h5>
						<br>
						<hr>
            <form action="{{route('facture_sortie')}}" method="post">
            @csrf
              <div class="form-group row">
                  <label for="example-date-input" class="col-sm-2 col-form-label"><strong>Date Debut</strong></label>
                  <div class="col-sm-10">
                  <input class="form-control" type="date"  name="date_debut" id="example-date-input" required>
                  </div>
              </div>
              <div class="form-group row">
                  <label for="example-date-input" class="col-sm-2 col-form-label"><strong>Client</strong></label>
                  <div class="col-sm-10">
                  <select class="form-control" id="client" name="client" required>
                      @foreach($clients as $ct)
                      <option value="{{$ct->client}}">{{$ct->client}}</option>
                      @endforeach
                  </select>
                  </div>
              </div>
						<br><br>
            <button type="submit" class="btn btn-outline btn-white">Valider</button>
            </form>
					  </div>
					</div>
				  </div>

				  <div class="col-lg-4" style="height:100px;">
					<div class="box box-inverse bg-gradient-success">
					  <div class="box-body text-center">
						<h5 class="text-uppercase text-muted">Facture Reteur</h5>
						<br>
            <hr>
            <form action="{{route('facture_reteur')}}" method="post">
                @csrf
						<div class="form-group row">
            
                            <label for="example-date-input" class="col-sm-2 col-form-label"><strong>Date Debut</strong></label>
                            <div class="col-sm-10">
                            <input class="form-control" type="date"  name="date_debut" id="example-date-input" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-date-input" class="col-sm-2 col-form-label"><strong>Client</strong></label>
                            <div class="col-sm-10">
                            <select class="form-control" id="client" name="client" required>
                                @foreach($clients as $ct)
                                <option value="{{$ct->client}}">{{$ct->client}}</option>
                                @endforeach
                            </select>
                            </div>
                        </div>
						<br><br>
            <button type="submit" class="btn btn-outline btn-white">Valider</button>
            </form>
					  </div>
					</div>
				  </div>

				</div>

				<br><br><br>
    </div>
</section>
@endsection


@section('JS2')
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
<script>
    $(document).ready( function () {
    $('#example5').DataTable();
} );
</script>
@endsection