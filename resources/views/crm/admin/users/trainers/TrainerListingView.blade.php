@extends('crm.admin.dashboard.home')
@section('dashboard_custom_css')
@endsection
@section('dashboard_content')
    @section('page_header')
        <h5 class="h5">Trainer</h5>
    @endsection
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @if(session()->has('message'))
                    <div class="alert alert-info alert-dismissible fade show" id="statusalert">
                        {{session()->get('message')}}
                    </div>
                @endif
                <div class="card">
                    <div class="card-header">                                                                            
                            <a class="btn btn-outline-dark" href="{{route('crm.admin.user.trainer.add')}}">Add Trainer</a>                                    
                    </div> 
                    <table class="table table-hover align-middle text-center" style="width: 100%">
                        <tr>
                            <th>#</th>
                            <th>Trainer Name</th>
                            <th>Trainer Mobile No.</th>
                            <th>Trainer Email</th>
                            {{-- <th>Date of Joining</th> --}}
                            <th>Action</th>
                        </tr>
                        @include('crm.admin.users.trainers.TrainerListSortingView')
                    </table>
                           {{-- Pagination --}}
                    <div class="d-flex justify-content-center">
                        {!! $TrainerData->links() !!}
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection