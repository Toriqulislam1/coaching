@extends('admin.layout.layout')
@push('css')
<!-- Select2 -->
<link rel="stylesheet" href="{{asset('public/assets')}}/select2/css/select2.min.css">
<link rel="stylesheet" href="{{asset('public/assets')}}/select2-bootstrap4-theme/select2-bootstrap4.min.css">
@endpush
@section('content')
<section class="content">
    <div class="container-fluid">
        <!-- /.card -->
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="card-title">{{$page_title}}</h3>
                <div class="pull-right box-tools">
                    <div class="float-right mt-1">
                        <a class="btn btn-primary uppercase text-bold" href="{{ route('package.index') }}"> Back</a>
                    </div>
                </div>
            </div>
              @if (session('success'))
              <div class="alert alert-success">
                  {{ session('success') }}
              </div>
              @endif

            <h3 class="card-title">Total amount: {{$total_balance}}</h3>
            <div class="card-body">
                <Form action="{{ route('withdraw-store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Withdraw Amount<code>*</code></label>
                                <input type="text" class="form-control" name="withdraw_amount" value="{{old('')}}" required placeholder="withdraw amount">
                            </div>
                        </div>
                    </div>

                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary float-right">Submit</button>
                    </div>
                </form>
            </div>
            <!-- /.card -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.container-fluid -->
</section>
@endsection
@push('js')


<script src="{{asset('public/assets')}}/select2/js/select2.full.min.js"></script>

@endpush


