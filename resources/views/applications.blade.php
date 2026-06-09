@extends('app')

@section('title', 'Список заявок')

@section('content')
<h1 class="section-title">Список заявок</h1>

@if($applications->isEmpty())
<p style="text-align: center; color: #666; margin-top: 40px;">Пока нет ни одной заявки</p>

@else
<table>
    <thead>
        <tr>
            <th>Имя</th>
            <th>Email</th>
            <th>Сообщение</th>
            <th>Дата</th>
        </tr>
    </thead>
    <tbody>
        @foreach($applications as $application)
        <tr>
            <td>{{ $application->name }}</td>
            <td>{{ $application->email }}</td>
            <td>{{ $application->message }}</td>
            <td>{{ $application->created_at->format('d.m.Y H:i') }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endif

@endsection

@push('styles')
<style>
    table {
        width: 100%;
        border-collapse: collapse;
        background: #fff;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    th,
    td {
        padding: 12px 15px;
        text-align: left;
        border-bottom: 1px solid #eee;
    }

    th {
        background: #2c3e50;
        color: #fff;
    }

    tr:hover {
        background: #f8f9fa;
    }

    @media (max-width: 768px) {
        table {
            font-size: 14px;
        }

        th,
        td {
            padding: 8px 10px;
        }
    }
</style>
@endpush