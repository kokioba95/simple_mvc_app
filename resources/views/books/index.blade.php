@extends('master')

@section('content')

<div>
       <table class="table">
           <thead>
               <tr>
                   <th class="text-center">ID</th>
                   <th class="text-center">Title</th>
                   <th class="text-center">Description</th>
               </tr>
           </thead>
           <tbody>
               @foreach ($books as $book)
               <tr>
                   <td class="text-center">{{ $book->id }}</td>
                   <td class="text-center">{{ $book->title }}</td>
                   <td class="text-center">{{ $book->description }}</td>
               </tr>
               @endforeach
           </tbody>
       </table>
   </div>
</div>

@endsection

