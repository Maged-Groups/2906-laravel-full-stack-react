@extends('layout.inner')

@section('content')
    <x-alert variant="danger">
        <x-title text='Data Not Accepted!!!' />
        <p>Please check your data and try again</p>
    </x-alert>

    <x-alert variant="success">
        <x-title text='Data Accepted' />
        <p>Your data has been accepted successfully</p>
    </x-alert>

    <x-card-component title='This is a short text title' />

    <x-card-component title='This is another short text title' />

    <x-card-component />

    <x-card-component title='This is a long text title created to test the length' />

    @auth
        <x-form action="{{ route('posts.store') }}" method='post'>

            <x-form-element label='Username' type='text' />

            <x-form-element label='User Email' type='email' />

            <x-form-element label='Phone' type='text' />

            <x-form-element label='Age' type='number' />
        </x-form>
    @endauth
@endsection
