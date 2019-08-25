@extends('layout/main')

@section('title', 'Daftar Siswa')

@section('container')
   <div class="container">
      <div class="row">
         <div class="col-6">
            <hr>
            <h1 class="mt-3">DAFTAR SISWA  </h1>
            <hr>
             <a href="/students/create" class="btn btn-info my-4">TAMBAH DATA SISWA</a>

              @if (session('status'))
               <div class="alert alert-dark">
               {{ session('status') }}
               </div>
               @endif

              <ul class="list-group">
                @foreach( $student as $stdn)
               <li class="list-group-item d-flex justify-content-between align-items-center">
                  {{ $stdn->nama }} 
               <a href="/students/{{ $stdn->id }} " class="badge badge-warning">DETAIL</a>
              </li>
               @endforeach
            </ul>
         </div>
      </div>
   </div>
@endsection
