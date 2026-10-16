@extends('admin.layouts.app')
@section('title','chat')
@section('content')
<div class="contrainer mt-3 py-3">
    <div class="col-md-3">
        <form wire:submit.prevent="submit">
            <label>name:</label>
            <input type="text" name="name" class="form-control" wire:model="name"/>
            @error("name") 
            <span class="text-danger">{{$message}}</span>
            @enderror
            <label>Price:</label>
            <input type="text" name="price" class="form-control" wire:model="price"/>
            @error("price") 
            <span class="text-danger">{{$message}}</span>
            @enderror
            <label>details:</label>
            <textarea type="details" name="details" class="form-control" wire:modal="details"> </textarea>
            <button class="btn btn-success mt-3">Submit</button>
        </form>
    </div>
</div>
@endsection