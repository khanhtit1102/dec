@extends('admin.dashboard')

@section('pagetitle',__('admin.post_list'))

@push('scripts')
    <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/dataTables.bootstrap4.min.js')}}"></script>    
    <script>
        $(document).ready(function() {
            //For data table
            $('#dataTable').DataTable({
                "order": [],
                "language": {
                                "decimal":        "",
                                "emptyTable":     "{{ __('admin.no_data') }}",
                                "info":           "{{ __('admin.datatable_show') }} _START_ {{ __('admin.datatable_to') }} _END_ of _TOTAL_ {{ __('admin.datatable_entries') }}",
                                "infoEmpty":      "{{ __('admin.datatable_show') }} 0 {{ __('admin.datatable_to') }} 0 {{ __('admin.datatable_of') }} 0 {{ __('admin.datatable_entries') }}",
                                "infoFiltered":   "({{ __('admin.filtered_from') }} _MAX_ {{ __('admin.datatable_entries') }})",
                                "infoPostFix":    "",
                                "thousands":      ",",
                                "lengthMenu":     "{{ __('admin.datatable_show') }} _MENU_ {{ __('admin.datatable_entries') }}",
                                "loadingRecords": "{{ __('admin.loading') }}",
                                "processing":     "{{ __('admin.processing') }}",
                                "search":         "{{ __('admin.search') }}:",
                                "zeroRecords":    "{{ __('admin.not_found') }}",
                                "paginate": {
                                    "first":      "{{ __('admin.paginate_first') }}",
                                    "last":       "{{ __('admin.paginate_last') }}",
                                    "next":       "{{ __('admin.paginate_next') }}",
                                    "previous":   "{{ __('admin.paginate_previous') }}"
                                },
                                "aria": {
                                    "sortAscending":  ": activate to sort column ascending",
                                    "sortDescending": ": activate to sort column descending"
                                }
                            }
            });
            //For delete modal
            $('#dataTable').on('click','.deleteButton',function() {
                var actionUrl = $(this).data('action');
                $('#deleteForm').attr('action',actionUrl);
            });
        });    
    </script>   
@endpush

@section('pageheading')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ __('admin.post_list') }}</h1>
        <div class="btnwrapper">
            <a href="{{ route('admin.usefulnews.create') }}" class="btn btn-sm btn-success shadow-sm"><i class="fas fa-users fa-sm text-white-50"></i> {{ __('admin.post_create') }}</a>
        </div>
    </div>    
@endsection

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">{{ __('admin.list') }}</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>{{ __('admin.name') }}</th>
                            <th>{{ __('admin.action') }}</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>{{ __('admin.name') }}</th>
                            <th>{{ __('admin.action') }}</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($items as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <h5>{{ $item->get_title() }}</h5>
                                <p>{{ strip_tags($item->get_description()) }}</p>
                            </td>
                            <td><button class="btn btn-outline-success">Duyệt</button></td>
                        </tr>
                        @endforeach
                    </tbody>    
                </table>
            </div>
        </div>
    </div>
@endsection