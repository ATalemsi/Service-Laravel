@extends('layouts.app')
@section('content')
    <div class="flex justify-between items-center mb-4 px-4">
        <h1 class="text-3xl font-semibold text-gray-800 mx-4">Services</h1>
        <a href="{{ route('service.create') }}" class="inline-flex items-center px-6 py-2 ml-4 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
            Create Service
            <svg class="rtl:rotate-180 w-4 h-4 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
        </a>
    </div>
    <div class="flex flex-wrap justify-center">
        @foreach($services as $service)
            <div class="max-w-md w-full md:w-1/2 lg:w-1/3 xl:w-1/4 mx-4 my-4">
                <div class="bg-white border border-gray-200 rounded-lg shadow-lg p-6">
                    <a href="#">
                        <h5 class="mb-4 text-xl font-bold tracking-tight text-gray-900">{{$service->title}}</h5>
                    </a>
                    <p class="mb-6 font-normal text-gray-700">{{$service->description}}</p>
                    <p class="mb-6 font-bold text-blue-700">{{$service->cost}}</p>
                    <a href="{{ route('service.show',['service'=>$service->id])}}" class="inline-flex items-center justify-center w-full px-4 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                        Read more
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
    {{$services->links()}}
@endsection
