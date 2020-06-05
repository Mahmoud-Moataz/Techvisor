
@extends('layouts.app')
@section('content')

  <div class="content-wrapper">
  <div class="container">
  <div class="p-3" style="text-align:center">
  <h1 style="color:#3cb371"><strong>Edit Qestion</strong></h1>

      <form method="POST" action="{{route('questions.update',['question'=>$question->id])}}">
        @csrf
        <div class="form-group">
    <label for="exampleFormControlSelect1">Users</label>
    <select name="prof" class="form-control " value="{{ $question->prof ? $question->prof->name : 'not exist'}}">
        @foreach($users as $user)  
          <option value="{{$user->id}}">{{$user->name}}</option>
        @endforeach
        </select>
      </div>
          <div class="form-group">
              <label for="exampleFormControlTextarea1">Ask Your Question</label>
              <input type="hidden" class="form-control" name="id" value="{{$question->id}}">

              <textarea class="form-control" name="question" rows="3" >{{$question->question}}</textarea>
          </div>
          <div class="form-group">
          <label for="exampleFormControlSelect1">state</label>
          <select name="state"  class="form-control " value="{{$question->state}}">
              
                <option value="public">public</option>
                <option value="private">private</option>
            
              </select>
        </div>

        <button type="submit" class="btn btn-danger">Submit</button>
        
      </form>  
</div>  </div>
</div>
  <!-- /.content-wrapper -->

  @endsection

 



  