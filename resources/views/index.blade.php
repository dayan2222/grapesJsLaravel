@extends('welcome')

@section('bodyTag')

<div class="container">

<a href="{{url('/')}}" class="btn btn-primary">Add New</a>

<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">WebPage Name</th>
        <th scope="col" colspan=2>Action</th>
      </tr>
    </thead>
    <tbody>
        
        <?php    
            $i = 1;    
        ?>
        
        @foreach($webPages as $webPage)  
        <tr>
            <th scope="row">{{$i}}</th>
            <td>{{$webPage->name}}</td>
            <td>
                <a class="btn btn-info" href="{{route('webpage.edit',$webPage->id)}}">Edit</a>
            </td>
            <td>
                <form action="{{route('webpage.destroy',$webPage->id)}}" method="post">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>    
        </tr>
        <?php $i++;?>
        @endforeach
      
    </tbody>
  </table>

</div>


@endsection