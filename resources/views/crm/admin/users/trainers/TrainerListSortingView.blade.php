@if($TrainerData)
    @php $i=1; @endphp
    @foreach($TrainerData as $data)
    <tr>
        <td>{{$i}}</td>
        <td>{{$data->name}}</td>
        <td>{{$data->phone_no}}</td>
        <td>{{$data->email}}</td>
        {{-- <td>{{$data->created_at}}</td> --}}
        <td>
            <div class="dropdown">
                <span class="fa fa-bars dropdown"></span>
                <div class="dropdown-content">
                    <a href="{{route('crm.admin.user.trainer.edit',$data->id)}}"><span class="fa fa-pencil-square-o"></span>&nbsp;Edit</a>
                    <a href="{{route('crm.admin.user.trainer.delete',$data->id)}}"><span class="fa fa-trash"></span>&nbsp;Delete</a>
                </div>
            </div>
        </td>
    </tr>
    @php $i++; @endphp
    @endforeach
@else
    <tr class="text-center">
       <td colspan="6">No Students Added Yet</td>
    </tr>
@endif
