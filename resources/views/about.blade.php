@extends('layout')

@section('title', 'О нас')

@section('content')
    <div class="content-container">
        <table class="table">
            <tr>
                <td>
                    <div class="d-flex ms-5 mt-3">
                        <img alt="person1" src="{{ asset('images/dias.jpg') }}" width="235px" height="280px">
                        <div class="p-4">
                            <h2>КТО МЫ?</h2>
                            <p class="about-we pt-2" style="width: 900px">
                                Всем Привет!<br>
                                Меня зовут Диас, я ученик НИШ 10-го класса.<br><br>
                                Мы, при поддержке моего ментора, решили создать уникальный в своем роде социальный проект,
                                целью которого является упрощение коммуникации глухонемых людей с окружающим их миром;
                            </p>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="d-flex">
                        <div class="p-4">
                            <h2>НАША МИССИЯ...</h2>
                            <p class="about-we pt-2">
                                "Я ходил во многие места в поисках работы.
                                Все отказывают, говорят, что мест нет.
                                Когда видят, что я не слышу и не могу говорить, на работу не берут.
                                Говорят, что с нами тяжело общаться."
                                <br>- Житель Алматы, Александр Ковалев
                                <a class="text-dark" href="https://rus.azattyq.org/a/kazakhstan-deaf-mutes-situation/29767359.html">(rus.azattyq.org)</a>
                                <br><br>
                                Главная проблема глухонемых - коммуникация с окружающим миром. Наше решение - устройства
                                <a href="{{ route('products') }}" class="btn btn-secondary">Speaky</a>
                            </p>
                        </div>
                        <img alt="person2" src="{{ asset('images/glasses-lateral.png') }}" width="200px" height="300px">
                    </div>
                </td>
            </tr>
        </table>
    </div>
@endsection
