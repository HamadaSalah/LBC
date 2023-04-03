@extends('Admin.master')
@section('content')
<h2 style="padding-bottom: 35px;float: left;margin-top: 0">كل البرامج</h2>
<a href="{{route('admin.programs.create')}}">  
    <button class="btn btn-primary" style="float: right"><i class="fa fa-plus"> </i> برنامج جديد</button>
</a>
<div class="clearfix"></div>
<div class="clear"></div>
    @if ($cats->count() > 0)
    <div class="table-responsive">
        <table class="table user-table no-wrap" id="myDTable">
            <thead>
                <tr>
                    <th class="border-top-0">#</th>
                    <th class="border-top-0">الاسم</th>
                    <th class="border-top-0">الاجراء</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cats as $key => $cat)
                <tr>
                    <td>{{$cat->$key+1}}</td>
                    <td>{{$cat->name}}</td>
                    <td>
                        <form style="display: inline;" action="{{route('admin.programs.destroy', $cat->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i> حذف</button>
                        </form>
                        {{-- <a href="{{Route('admin.cats.edit', $cat->id)}} ">
                            <button class="btn btn-primary"><i class="fa fa-pencil-square-o"></i> Edit</button>
                        </a> --}}

                    </td>

                </tr>

                @endforeach
            </tbody>
        </table>
    </div>

    @else
        <div class="text-center">No Data Available</div> 
    @endif
@endsection
