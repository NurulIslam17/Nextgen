@extends('fontend.master')

@section('title')
    Home
@endsection

@section('body')
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-6">
                <img src="{{asset('/')}}staticImage/about.png" style="height: 100%;width: 100%" alt="">
            </div>
            <div class="col-md-6">
                <h3 class="mt-5">About Us</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis ipsa mollitia tenetur veritatis? Aut doloremque ea, eveniet inventore laboriosam placeat?</p>
                <p>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet assumenda delectus illum ipsa maxime mollitia perferendis tenetur ullam veniam?, consecteLorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis ipsa mollitia tenetur veritatis? Aut doloremque ea, eveniet inventore laboriosam placeat?</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis ipsa mollitia tenetur veritatis? Aut doloremque ea, eveniet inventore laboriosam placeat?</p>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-6">
                <h3 class="mt-3">Why Us</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis ipsa mollitia tenetur veritatis? Aut doloremque ea, eveniet inventore laboriosam placeat?</p>
                <p>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet assumenda delectus illum ipsa maxime mollitia perferendis tenetur ullam veniam?, consecteLorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis ipsa mollitia tenetur veritatis? Aut doloremque ea, eveniet inventore laboriosam placeat?</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis ipsa mollitia tenetur veritatis? Aut doloremque ea, eveniet inventore laboriosam placeat?</p>
            </div>

            <div class="col-md-6">
                <img src="{{asset('/')}}staticImage/why.png" style="height: 100%;width: 100%" alt="">
            </div>
        </div>
    </div>

@endsection
