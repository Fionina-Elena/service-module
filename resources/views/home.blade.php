@extends('app')

@section('title', 'Услуги')

@section('content')
<h1 class="section-title">Наши услуги</h1>
<p class="section-desc">Мы предлагаем широкий спектр услуг для вашего бизнеса</p>

<div class="services">
    <div class="service-card">
        <div class="service-icon">&#128187;</div>
        <h2>Веб-разработка</h2>
        <p>Создание современных веб-приложений и сайтов</p>
    </div>

    <div class="service-card">
        <div class="service-icon">&#128241;</div>
        <h2>Мобильные приложения</h2>
        <p>Создание цифрового продукта (iOS/Android) с нуля под ключ</p>
    </div>

    <div class="service-card">
        <div class="service-icon">&#128202;</div>
        <h2>Маркетинг</h2>
        <p>Комплекс стратегий и действий для привлечения пользователей</p>
    </div>
</div>

<div class="btn-center">
    <a href="#form" class="btn">Оставить заявку</a>
</div>

<div class="form-section" id="form">
    <h2>Оставьте заявку</h2>

    @if(session('message'))
    <div class="create-application">{{ session('message') }}</div>
    @endif

    <form action="/applications" method="POST">
        @csrf

        <div class="form-group">
            <label for="name">Имя</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}">
            @error('name')
            <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}">
            @error('email')
            <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="message">Сообщение</label>
            <textarea name="message" id="message">{{ old('message') }}</textarea>
            @error('message')
            <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn">Отправить</button>
    </form>
</div>
@endsection

@push('styles')
<style>
    .services {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
        margin-bottom: 60px;
    }

    .service-card {
        background: #fff;
        border-radius: 10px;
        padding: 30px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        text-align: center;
    }

    .service-card h2 {
        font-size: 20px;
        margin-bottom: 10px;
    }

    .service-card p {
        color: #666;
        font-size: 14px;
    }

    .service-icon {
        font-size: 40px;
        margin-bottom: 15px;
    }

    .btn {
        display: inline-block;
        background: #3498db;
        color: #fff;
        padding: 12px 30px;
        border-radius: 5px;
        text-decoration: none;
        border: none;
        cursor: pointer;
        font-size: 16px;
    }

    .btn:hover {
        background: #2980b9;
    }

    .btn-center {
        text-align: center;
        margin-bottom: 60px;
    }

    .form-section {
        background: #fff;
        border-radius: 10px;
        padding: 40px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        max-width: 600px;
        margin: 0 auto 60px;
    }

    .form-section h2 {
        text-align: center;
        margin-bottom: 30px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    .form-group input,
    .form-group textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
        font-size: 16px;
    }

    .form-group textarea {
        height: 120px;
        resize: vertical;
    }

    .form-group input:focus,
    .form-group textarea:focus {
        outline: none;
        border-color: #3498db;
    }

    .error {
        color: #e74c3c;
        font-size: 13px;
        margin-top: 5px;
    }

    .create-application {
        background: #d4edda;
        color: #155724;
        padding: 15px;
        border-radius: 5px;
        margin-bottom: 20px;
        text-align: center;
    }

    @media (max-width: 768px) {
        .services {
            grid-template-columns: 1fr;
        }

        .form-section {
            padding: 20px;
        }
    }
</style>
@endpush