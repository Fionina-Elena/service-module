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
            <td data-label="Имя">{{ $application->name }}</td>
            <td data-label="Email">{{ $application->email }}</td>
            <td data-label="Сообщение">{{ $application->message }}</td>
            <td data-label="Дата">{{ $application->created_at->format('d.m.Y H:i') }}</td>
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

        table,
        thead,
        tbody,
        th,
        td,
        tr {
            display: block;
        }

        thead {
            display: none;
        }

        tr {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 12px;
            margin-bottom: 12px;
            box-shadow: 0 1px 5px rgba(0, 0, 0, 0.08);
        }

        td {
            padding: 6px 0;
            border: none;
            text-align: right;
        }

        td::before {
            content: attr(data-label);
            float: left;
            font-weight: bold;
            color: #2c3e50;
        }
    }
</style>
@endpush