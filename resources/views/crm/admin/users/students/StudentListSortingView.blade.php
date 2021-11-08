@if($StudentData)
    @php $i=1; @endphp
    @foreach($StudentData as $data)
    <tr>
        <td>{{$i}}</td>
        <td>{{$data->name}}</td>
        <td>{{$data->phone_no}}</td>
        <td>{{$data->email}}</td>
        <td>{{$data->created_at}}</td>
        <td>{{$data->id}}</td>
    </tr>
    @php $i++; @endphp
    @endforeach
@else
    <tr class="text-center">
       <td colspan="6">No Students Added Yet</td>
    </tr>
@endif
