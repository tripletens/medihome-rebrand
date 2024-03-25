<x-landing-layout>
<div class="bg-dark d-flex align-items-center justify-content-center min-vh-100">
    <div class="container">
        <div class="p-5 m-5 text-center">
            <div class="box-content p-5 -mt-20">
                <img src="{{asset('images/401-error.png')}}" class="flex h-50 w-auto align-middle mx-auto justify-center" />
                <div class="-mt-8">
                          <h1 class="text-5xl">403</h1>
                <h4 class="text-5xl">Unauthorized Access</h4>
                <div class="mt-5">
                <a href="{{ url('/') }}" class="btn text-base rounded-5 p-2 text-white bg-blue-800 rounded-lg">Go Back Home</a>
</div>
                </div>
          
            </div>
        </div>
    </div>
</div>
</x-landing-layout>