<tr>
    <td class="text-center">{{Form::input('checkbox','delete',$quote->id,array('data-url'=> URL::route('admin.idezet.destroy',array('id'=>$quote->id))))}}</td>
    <td>{{$quote->id}}</td>
    <td>{{$quote->quote}}</td>
    <td>{{$quote->author}}</td>
    <td>{{$quote->picture}}</td>
    <td>{{str_replace('-','.',$quote->created_at)}}</td>
    <td>{{str_replace('-','.',$quote->updated_at)}}</td>
    <td class="text-center">{{HTML::decode(HTML::linkRoute('admin.idezet.edit','<i class="fa fa-edit"></i> Módosítás',array('id'=>$quote->id),array('class'=>'btn btn-sm btn-default')))}}</td>
</tr>