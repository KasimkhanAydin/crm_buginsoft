@extends('admin.layouts.form')

@section('form_title','Добавить тип сервер')

@section('form')
    <form>
        <div class="form-group mb-3">
            <input type="number" class="form-control"   placeholder="Название">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Добавить</button>
    </form>
@endsection
