@extends('admin.layouts.form')

@section('form_title','Добавить сервер')

@section('form')
    <form>
        <div class="form-group mb-4">
            <select id="inputState" class="form-control">
                <option selected="">Выберите тип сервера</option>
                <option>...</option>
            </select>
        </div>

        <div class="form-group mb-4">
            <select id="inputState" class="form-control">
                <option selected="">Выберите цель сервера</option>
                <option>...</option>
            </select>
        </div>

        <div class="form-group mb-4">
            <select id="inputState" class="form-control">
                <option selected="">Выберите провайдера</option>
                <option>...</option>
            </select>
        </div>

        <div class="form-group mb-3">
            <input type="number" class="form-control"   placeholder="Цена сервера">
        </div>

        <div class="form-group mb-3">
            <input type="number" class="form-control"   placeholder="Цена IpsManager">
            <small id="emailHelp1" class="form-text text-muted">Если есть IpsManager.</small>
        </div>

        <div class="form-group form-check pl-0">
            <div class="custom-control custom-checkbox checkbox-info">
                <input type="checkbox" class="custom-control-input" id="sChkbox">
                <label class="custom-control-label" for="sChkbox">Есть IpsManager</label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Добавить</button>
    </form>
@endsection
