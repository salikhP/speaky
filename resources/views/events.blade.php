@extends('layout')

@section('title', 'О нас')

@section('content')
    <div class="container events-text">

        <div class="row mt-4 align-items-center">
            <div class="col">
                <p>
                    {{--<i class="bi bi-bus-front"></i>--}}
                    Мы посетили детскую школу глухонемых в городе Шымкент. Узнали о самочувствии детей,
                    протестировали наши устройства и провели несколько интервью.
                </p>
            </div>
            <div class="col">
                <img style="width: 600px; height: 350px" src="{{ asset('images/shym_01.jpg') }}" alt="Image 1">
            </div>
        </div>
        <div class="row mt-3 align-items-center">
            <div class="col ">
                <img style="width: 600px; height: 350px" src="{{ asset('images/shym_02.jpg') }}" alt="Image 1">
            </div>
            <div class="col">
                <p class="mt-4">
                    Посещение школы помогло нам искренне прочуствовать всю боль и проблему наших детей.
                </p>
            </div>
        </div>
        <div class="row mt-5 align-items-center">
            <div class="col text-start">
                <p style="vertical-align: center">
                    {{--<i class="bi bi-bus-front"></i>--}}
                    Мы получили не только бесценный отзыв о наших продуктах
                    но и удвоенную мотивацию воплотить нашу идею в жизнь
                </p>
            </div>
            <div class="col">
                <img style="width: 600px; height: 350px" src="{{ asset('images/shym_03.jpg') }}" alt="Image 1">
            </div>
        </div>
        <div class="row mt-4">
            <div class="col">
                <p class="mt-5">
                    Одним из важнейших событий нашего мероприятие
                    было интервью и отзыв завуча по воспитательной работе – Айгуль Бейсенбаевой.
                </p>
                <div class="video-container">
                    <iframe src="https://www.youtube.com/embed/3bwQ4vDMOqE" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        {{-- culture home --}}
        <div class="row mt-5 align-items-center">
            <div class="col">
                <p>
                    Следующим не менее важным местом, посещенным нашей командой было - Казахское Общество Глухонемых города Алматы.
                </p>
            </div>
            <div class="col">
                <img style="width: 600px; height: 350px" src="{{ asset('images/alma_01.jpg') }}" alt="Image 1">
            </div>
        </div>
        <div class="row mt-3 align-items-center">
            <div class="col ">
                <img style="width: 600px; height: 350px" src="{{ asset('images/alma_02.png') }}" alt="Image 1">
            </div>
            <div class="col">
                <p class="mt-4">
                    Мы презентовали наш проект, провели коммуникацию с людьми и задали ряд интересующих нас вопросов.
                </p>
            </div>
        </div>
        <div class="row mt-5 align-items-center">
            <div class="col text-start">
                <p style="vertical-align: center">
                    Впоследствии проведенной работы, мы получили объективный фидбэк и узнали больше о проблеме глухонемых людей в Казахстане.
                </p>
            </div>
            <div class="col">
                <img style="width: 600px; height: 350px" src="{{ asset('images/alma_03.png') }}" alt="Image 1">
            </div>
        </div>
        <div class="row mt-4">
            <div class="col">
                <p class="mt-5">
                    Отзыв о нашем проекте.
                </p>
                <div class="video-container">
                    <iframe src="https://www.youtube.com/embed/mHNiqC0b3rI" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection


