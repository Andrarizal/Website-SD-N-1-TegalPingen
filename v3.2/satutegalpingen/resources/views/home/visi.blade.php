@extends('layout.user-master')
@section('content')
<section id="visi_misi">
        <div class="container">
        <br>
            <h2>Visi & Misi SD N 1 TegalPingen</h2>
            <br>
            @foreach($vimi as $vm)
            <div class="row">
                <div class="col-md-6">
                <div class="col-md-6 pl-4 ">
                    <h3>{{$vm->title}}</h3>                    
                   <!--  <p>Unggul dalam prestasi, terampil dalam berkarya, santun dalam perilaku</p> -->
                   <p>{{$vm->deskripsi}}</p>                  
                </div>
                </div>
                <!-- <div class="col-md-6 pl-4 "> 
                    @if ($vm->title == 'misi')
                    <h3>Misi</h3>
                    <p>{{$vm->deskripsi}}</p>
                    @endif
                </div> -->
            @endforeach
            </div>
        </div>
    </section>
    @endsection