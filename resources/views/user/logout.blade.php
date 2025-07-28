@extends('user.layouts.app')

@section('userContent')
    <form action="{{ route('logout') }}" method="POST" style="display: inline;">
    @csrf
    {{-- <button type="submit" class="btn btn-danger">Logout</button> --}}
</form>
@endsection
