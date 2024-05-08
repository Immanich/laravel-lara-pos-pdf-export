@extends('layout')
@section('content')

<div class="container">
    <div class="heading">
        <h1>Create Products</h1>
    </div>
    <div class="form">
        <form action="/product-create" @submit.prevent="submit">
        <div class="wrapper">
            <div class="mini-container">
                <label for="name">Name
                    <input type="text" id="name">
                </label>
            </div>
            <div class="mini-container">
                <label for="description">Description
                    <input type="text" id="description">
                </label>
            </div>
            <div class="mini-container">
                <label for="category_id">Category ID
                    <input type="text" id="category_id" value="">
                </label>
            </div>
            <div class="mini-container">
                <label for="price">Price
                    <input type="number" min="0" minlength="0" max="999999" id="price">
                </label>
            </div>
            <div class="mini-container">
                <label for="remarks">Remarks
                    {{-- <input type="text" id="remarks"> --}}
                </label>
            </div>
        </div>
    </form>
    </div>
</div>

@endsection