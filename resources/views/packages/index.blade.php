@extends('master.layout')

@section('content')
<style>
    .package-box{
        background: rgba(255, 255, 255, 1);
        padding: 30px 30px;
        margin: 10px;
        border-radius: 8px;
        width: 420px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
    }
    .title-text{
        font-size: 36px;
        padding-bottom: 5px;
        margin-bottom: 20px;
        text-align: center;
        border-bottom: 1.5px solid #eeeeee;
    }
    .price-text{
        font-size: 30px;
        text-align: center;
        margin-top: 10px;
        margin-bottom: 15px;
        font-weight: bold;
        color: #01038b;
    }

    .desc-text{
        color: #565555;
        font-size: 18px;
    }

    .btn-box{
        margin-top: 30px;
        text-align: center;
        display: flex;
        align-items : center;
        justify-content: center;
        gap: 10px;
    }

    .btn-box a{
        display: block;
        width: fit-content;
    }
</style>
<div style="background-image: url('{{ asset('img/hero/hero-2.jpg') }}'); background-size: cover; background-position: center; padding: 70px 20px; min-height: 100vh;">
    <!-- Adjust the heading position -->
    <h1 style="text-align: center; color: white; margin-bottom: 50px; padding-top: 20px;">List of Packages</h1>

    <!-- Center the package cards -->
    <div class="packages d-flex flex-wrap justify-content-center" style="margin-bottom: 50px;">
        @foreach($packages as $package)
        <div class="package-box">
            <h2 class="title-text">{{ $package->name }} [{{$package->id}}]</h2>

            <p class="desc-text">{!! nl2br(e($package->description)) !!}</p>
            <p class="price-text"><strong> RM {{ $package->price }} </strong></p>
            <div class="btn-box">
                <a href="{{ route('packages.edit', $package->id) }}" class="btn btn-primary" style="background-color: blue; color: white; font-weight: bold; font-family: 'Arial Black', Gadget, sans-serif;">Edit</a>
                <form action="{{ route('packages.destroy', $package->id) }}" method="POST" style="display:inline; margin-bottom: 0;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" style="background-color: red; color: white; font-weight: bold; font-family: 'Arial Black', Gadget, sans-serif;">Delete</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Center and adjust the Add Package button -->
    <div style="text-align: center; margin-top: 20px;">
        <a href="{{ route('packages.create') }}" class="btn btn-success" style="background-color: green; color: white; padding: 10px 20px; font-size: 18px; font-weight: bold; font-family: 'Arial Black', Gadget, sans-serif;">Add Package</a>
    </div>
</div>
@endsection
