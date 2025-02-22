@extends('layouts.utama')

@section('content')
<div class="container mx-auto">
    <h1 class="text-4xl font-bold -mt-2">Selamat Datang</h1>
    <p class="text-lg mb-5">Pada sistem informasi penjadwalan</p>

    <div class="container bg-baseColor pl-4 pt-4 rounded-xl ">
        <h2 class="text-xl font-bold mb-2">Informasi</h2>

        <div class="grid grid-cols-4 grid-rows-2 text-left">
            <div class="bg-spanishRedColor rounded-lg p-4 w-60 h-52">
                <span class="text-4xl font-bold text-white">{{ $usersCount }}</span>
                <p class="text-white -mt-2">Akun</p>
                <i class="material-icons text-white text-4xl mt-16 ">account_circle</i>
            </div>

            <div class="bg-orangeColor rounded-lg p-4 w-60 h-52">
                <span class="text-4xl font-bold text-white">{{ $rolesCount }}</span>
                <p class="text-white -mt-2">Role</p>
                <i class="material-icons text-white text-4xl mt-16">person_pin</i>
            </div>

            <div class="bg-amazonColor rounded-lg p-4 w-60 h-52">
                <span class="text-4xl font-bold text-white">{{ $guruCount }}</span>
                <p class="text-white -mt-2">Guru</p>
                <i class="material-icons text-white text-4xl mt-16">group</i>
            </div>

            <div class="bg-golfGreenColor green-500 rounded-lg p-4 w-60 h-52">
                <span class="text-4xl font-bold text-white">{{ $mapelCount }}</span>
                <p class="text-white -mt-2">Mata Pelajaran</p>
                <i class="material-icons text-white text-4xl mt-16">class</i>
            </div>
            <div class="bg-skypeColor rounded-lg p-4 w-60 h-52 mt-3 mb-4">
                <span class="text-4xl font-bold text-white">{{ $kelasCount }}</span>
                <p class="text-white -mt-2">Kelas</p>
                <i class="material-icons text-white text-4xl mt-16 ">school</i>
            </div>
        </div>
    </div>
</div>


@endsection
