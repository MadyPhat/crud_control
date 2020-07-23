@extends('base')
@section('main')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-5">Contacts</h1> 
    <p>View all user contact information below!</p> 
    <div>
    <a style="margin: 0px 0px 10px 0px;" href="{{ route('contacts.create')}}" class="btn btn-outline-success btn-sm">New contact</a>
</div>  
  <table class="table table-borderless table-hover">
    <thead>
        <tr>
          <td>ID</td>
          <td>Name</td>
          <td>Email</td>
          <td>Job Title</td>
          <td>City</td>
          <td>Country</td>
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    
    <tbody>
        @foreach($contacts as $contact)
        <tr>
            <td>{{$contact->id}}</td>
            <td>{{$contact->first_name}} {{$contact->last_name}}</td>
            <td>{{$contact->email}}</td>
            <td>{{$contact->job_title}}</td>
            <td>{{$contact->city}}</td>
            <td>{{$contact->country}}</td>
            <td>
                <a href="{{ route('contacts.edit',$contact->id)}}" class="btn btn-primary btn-sm inline">Edit</a>
                <form action="{{ route('contacts.destroy', $contact->id)}}" method="post" class="inline">
                @csrf
                  @method('DELETE')
                  <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
<div class="col-sm-12">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
      <img src="https://i.pinimg.com/originals/13/48/12/1348129181a7bd86b41b3e077ab8c305.png" alt="congratulations" width="25px;" height="25px;">
    </div>
  @endif
</div>
</div>
@endsection