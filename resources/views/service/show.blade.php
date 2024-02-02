@extends('layouts.app')
@section('content')
    <div class="flex flex-wrap justify-center">

            <div class="max-w-xs w-full md:w-1/2 lg:w-1/3 xl:w-3/4 px-6 py-4">
                <div class="bg-white border border-gray-200 rounded-lg shadow p-6">
                    <a href="#">
                        <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900">{{ $service->title}}</h5>
                    </a>
                    <p class="mb-3  font-normal text-gray-700">{{ $service->description}}</p>
                    <p class="mb-3 font-bold text-gray-700"> Category: {{ $service->Category->name}}</p>
                    <p class="mb-3 font-bold text-blue-700">{{ $service->cost}}</p>
                </div>
            </div>
    </div>
@endsection
