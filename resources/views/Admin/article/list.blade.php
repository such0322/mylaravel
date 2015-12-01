@extends('Admin/layout')

@section('content')
<div class="row">
    <div class="col-md-10 col-md-offset-1">  
        <table class="table">
            <tr>
                <td>$ko</td>
                <td>id</td>
                <td>title</td>
                <td>intro</td>
                <td>created_at</td>
                <td>updated_at</td>
                <td>status</td>
            </tr>
            @foreach($rslist['data'] as $ko=> $vo)
            <tr>
                <td>{{$ko}}</td>
                <td>{{$vo['id']}}</td>
                <td>{{$vo['title']}}</td>
                <td>{{$vo['intro']}}</td>
                <td>{{$vo['created_at']}}</td>
                <td>{{$vo['updated_at']}}</td>
                <td>{{$vo['status']}}</td>
            </tr>
            @endforeach
        </table>
        <nav class="pull-right">
            {!! $pages->render() !!}
        </nav>
        
    </div>
</div>
@endsection