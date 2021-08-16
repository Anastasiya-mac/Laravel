@extends('layouts.main')
@section('header')
<x-header_feedback></x-header_feedback>
@endsection
@section('content')
<!-- Main Content-->
<p class="section-heading">Запрос на публикацию</p>
<div class="my-5">
    <form id="contactForm" data-sb-form-api-token="API_TOKEN">
        @csrf
        <div class="form-floating">
            <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
            <label for="name">ФИО</label>
            <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
        </div>
        <div class="form-floating">
            <input class="form-control" id="email" type="email" placeholder="Enter your email..." data-sb-validations="required,email" />
            <label for="email">Электроннная почта</label>
            <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
            <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
        </div>
        <div class="form-floating">
            <input class="form-control" id="phone" type="tel" placeholder="Enter your phone number..." data-sb-validations="required" />
            <label for="phone">Номер телефона</label>
            <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
        </div>
        <div class="form-floating">
            <textarea class="form-control" id="message" placeholder="Enter your message here..." style="height: 12rem" data-sb-validations="required"></textarea>
            <label for="message">Аннотация к статье</label>
            <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
        </div>
        <br />
        <div class="form-floating">
            <input type="hidden" name="MAX_FILE_SIZE" value="30000"/>
            <input name="userfile" type="file"/>
        </div>
        <br />
        <!-- Submit Button-->
        <button class="btn btn-primary text-uppercase" id="submitButton" type="submit">Отправить</button>
    </form>
</div>
@endsection