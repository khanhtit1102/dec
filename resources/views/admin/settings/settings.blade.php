@extends('admin.dashboard')

@section('pagetitle','Cài đặt chung')

@push('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $('.form-control').on('focus',function() {
                $(this).removeClass('is-invalid');
            });    
        });
    </script>
@endpush

@section('pageheading')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">{{ 'Cài đặt chung' }}</h1>
</div>    
@endsection

@section('content')
<form action="{{ route('admin.updateSettings') }}" method="POST">
    @csrf
    <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">{{ __('admin.settings') }}</h6>
        </div>
        <div class="card-body">                
            <div class="form-row">
                <div class="form-group col">
                    <label for="formName">{{ __('admin.khaigiang_hn') }}</label>
                    <input type="date" name="khaigiang_HN" value="{{ $khaigiang->khaigiang_HN }}" class="form-control @error('khaigiang_HN') is-invalid @enderror" id="formName" aria-describedby="nameHelp" required autofocus>
                    {{-- <small id="nameHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="formAlias">{{ __('admin.khaigiang_hcm') }}</label>
                    <input type="date" name="khaigiang_HCM" value="{{ $khaigiang->khaigiang_HCM }}" class="form-control @error('khaigiang_HCM') is-invalid @enderror" id="formAlias" aria-describedby="aliasHelp">
                    {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button name="task" value="save" type="submit" class="btn btn-success"><i class="far fa-save text-white-50"></i> {{ __('admin.save') }}</button>
        </div>
    </div>
</form>
@endsection