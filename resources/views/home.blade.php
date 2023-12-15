@extends('layouts.app')

@section('content')
<style>
    body {
        background-color: #f8f9fa; /* Warna latar belakang */
    }

    .custom-card {
        background-color: #ffffff;
        color: #333;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .custom-header {
        padding: 20px;
        border-bottom: 1px solid #ddd; /* Garis bawah header */
        font-size: 24px;
        font-weight: bold;
        text-align: center;
        background-color: #007bff; /* Warna header */
        color: #ffffff; /* Warna teks header */
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }

    .custom-body {
        padding: 20px;
        text-align: justify; /* Justifikasi teks */
    }

    .welcome-message {
        font-size: 18px;
        line-height: 1.6;
        color: #333; /* Warna teks pesan selamat datang */
    }

    .alert-message {
        margin-top: 20px;
        font-size: 16px;
        color: #28a745; /* Warna teks pesan sukses */
    }

    .pln-info {
        margin-top: 20px;
        font-size: 16px;
        color: #17a2b8; /* Warna teks informasi PLN */
    }
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card custom-card">
                <div class="card-header custom-header">
                    Selamat Datang di Sistem PLN
                </div>

                <div class="card-body custom-body">
                    @if (session('status'))
                        <div class="alert alert-success alert-message" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p class="welcome-message">
                       Terima kasih sudah menjadi pelanggan setia kami. Kami sangat senang melayani Anda dan berharap pelayanan kami sesuai dengan ekspektasi Anda.
                    </p>

                    <p class="pln-info">
                        Kamu tahu apa yang menjadi kebanggaan kami? Yaitu kepuasan Anda!"
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
