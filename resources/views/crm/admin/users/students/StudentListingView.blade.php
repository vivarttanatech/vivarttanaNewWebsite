@extends('crm.admin.dashboard.home')
@section('dashboard_custom_css')
@endsection
@section('dashboard_content')
    @section('page_header')
        <h5 class="h5">Students</h5>
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
                            <a class="btn btn-outline-dark" href="{{route('crm.admin.user.student.add')}}">Add Student</a>                                    
                    </div> 
                    <table class="table table-hover align-middle text-center" style="width: 100%">
                        <tr>
                            <th>#</th>
                            <th>Student Name</th>
                            <th>Student Mobile No.</th>
                            <th>Student Email</th>
                            <th>Date of Joining</th>
                            <th>Action</th>
                        </tr>
                        @include('crm.admin.users.students.StudentListSortingView')
                    </table>
                           {{-- Pagination --}}
                    <div class="d-flex justify-content-center">
                        {!! $StudentData->links() !!}
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection