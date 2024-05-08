@extends('layout')

@section('content')
    <div class="container">
        <div class="heading">
            <h1>PRODUCT PDF</h1>
            <div class="wrapper">
                <table>
                    <thead>
                        <tr>
                            <td>QR CODE</td>
                            <td>NAME</td>
                            <td>CATEGORY ID</td>
                            <td>PRICE</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($product as $p)
                        <tr>
                            <img src="data:image/png;base64,{{ base64_encode(QrCode::size(50)->generate($prod->id)) }}" alt="QR Code">
                            <td>{{$p->name}}</td>
                            <td>{{$p->category_id}}</td>
                            <td>{{$p->price}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection