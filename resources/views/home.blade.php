@extends('layouts.layout')

@section('maria')
    <div class="row">
        @foreach ($holiday as $key=>$item)
        
    
            <div class="card text-bg-primary mb-3" style="max-width: 18rem;">
                <div class="card-header">{{ $item->nome }}</div>
                <div class="card-body">
                    <h5 class="card-title">{{ $item->destinazione }}</h5>
                    <p class="card-text">{{ $item->costo }}</p>
                    <p class="card-text">{{ $item->data_di_partenza }}</p>
                    <p class="card-text">{{ $item->data_di_ritorno }}</p>
                    <p class="card-text">{{ $item->tipo }}</p>
                    <p class="card-text">{{ $item->tipo_di_pensione }}</p>
                    <p class="card-text">{{ $item->tassa_di_soggiorno }}</p>
                </div>
            </div>          
    

        @endforeach
        </div>
@endsection