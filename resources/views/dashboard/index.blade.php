@extends('layouts.app') {{-- MEMANGGIL LAYOUT.APP UNTUK TEMPLATE HALAMAN --}}
@section('header')
    {{--  MEMANGGIL SECTION HEADER UNTUK TEMPLATE HEADER --}}
    DASHBOARD
@endsection
@section('content')
    {{-- MEMANGGIL SECTION CONTENT UNTUK TEMPLATE LOKASI KONTEN DALAM HALAMAN --}}
    <div class="container py-4">
        <div class="row">
            <div class="col-12 d-flex flex-column gap-3">
                <div class="bg-white shadow rounded p-3">
                    <div class="d-flex align-items-center gap-3">
                        <div class="avatar rounded-circle bg-dark d-flex justify-content-center align-items-center" style="width: 40px; height: 40px;">
                            <div class="h-16 w-16 bg-gray-500 flex justify-center items-center rounded-full">
                                <p class="text-white font-semibold text-center">
                                </p>
                            </div>
                        </div>
                        <div>
                            <p class="h5 font-weight-bold mb-1">
                                Welcome, {{ Auth::user()->name }}
                            </p>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();" class="text-secondary">
                                    {{ __('Sign Out') }}
                                </a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
