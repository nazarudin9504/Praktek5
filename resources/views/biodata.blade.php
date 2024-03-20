@extends('layout.main')
@section('content')
<!-- cards -->
<div class="w-full px-6 py-6 mx-auto">
  <!-- row 1 -->
    <div class="flex flex-wrap -mx-3">
        <h1>Biodata</h1>
        <div class="flex flex-wrap mt-6 -mx-3 justify-center items-center h-screen">
            <div class="w-full px-3 mb-6 lg:mb-0 lg:w-7/12 lg:flex-none">
                <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                    <div class="flex-auto p-4">
                        <div class="flex flex-wrap -mx-3">
                            <div class="max-w-full px-3 lg:w-1/2 lg:flex-none">
                                <div class="flex flex-col h-full">
                                    <h4 class="font-bold">Nama</h4>
                                    <p class="mb-5">Nazarudin</p>
                                    <h4 class="font-bold">Jurusan</h4>
                                    <p class="mb-5">Sistem Informasi</p>
                                    <h4 class="font-bold">Instansi</h4>
                                    <p class="mb-5">Universitas Tanjungpura</p>
                                    <a class="mt-auto mb-0 text-sm font-semibold leading-normal group text-slate-500" href="javascript:;">
                                        Read More
                                        <i class="fas fa-arrow-right ease-bounce text-sm group-hover:translate-x-1.25 ml-1 leading-normal transition-all duration-200"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="max-w-full px-3 mt-12 ml-auto text-center lg:mt-0 lg:w-5/12 lg:flex-none">
                                <div class="h-full bg-gradient-to-tl from-white-700 to-white-500 rounded-xl">
                                    <img src="./assets/img/shapes/waves-white.svg" class="absolute top-0 hidden w-1/2 h-full lg:block" alt="waves" />
                                    <div class="relative flex items-center justify-center h-full">
                                        <img class="h-full rounded-2xl" src="https://fbi.cults3d.com/uploaders/25184636/illustration-file/62638f23-cfaf-4f13-8625-ab1a6caf697f/Photo.png" alt="ayam" width="100%"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end cards -->
@endsection
