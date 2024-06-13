@extends('operator.layout.main-operator')

@section('title', 'Operator - Tutor Review') 

@section('content')

<div class="my-4 w-full mr-10 md:mr-20">
    <div class="flex justify-between items-end">
        <div>
            <h1 class="lg:text-3xl text-xl font-bold">Tutor Management</h1>
            <p class="text-sm lg:text-base">You can manage all section related to private tutor here</p>

            <h2 class="mt-6 text-lg lg:text-xl font-semibold">Tutor Review</h2>
        </div>
       
    </div>
   <div class="flex flex-col gap-3 mt-3">
        <div class="flex justify-between items-center">
            <p>Date reported</p>
            <div class="flex items-center gap-2">
                <span> : </span>
                <input type="text" class="py-1 px-4 w-40 md:w-56 text-black lg:w-[440px] block" value="123"></input>
            </div>
        </div>
          <div class="flex justify-between items-center">
            <p>Province</p>
            <div class="flex items-center gap-2">
                <span> : </span>
                <input type="text" value="SMP" class="py-1 px-4  w-40 md:w-56 text-black lg:w-[440px] block"></input>
            </div>
        </div>
          <div class="flex justify-between items-center">
            <p>From parents</p>
            <div class="flex items-center gap-2">
                <span> : </span>
                <input type="text" value="abcdefg" class="py-1 px-4 w-40 md:w-56 text-black lg:w-[440px] block"></input>
            </div>
        </div>
          <div class="flex justify-between items-center">
            <p>Tutor reported</p>
            <div class="flex items-center gap-2">
                <span> : </span>
                <input type="text" value="abcdefg" class="py-1 px-4 w-40 md:w-56 text-black lg:w-[440px] block"></input> 
            </div>
        </div>
          <div class="flex justify-between items-center">
            <p>Grade</p>
            <div class="flex items-center gap-2">
                <span> : </span>
                <input type="text" value="abcdefg" class="py-1 px-4 w-40 md:w-56 text-black lg:w-[440px] block"></input>
            </div>
        </div>
          <div class="flex justify-between items-center">
            <p>Address</p>
            <div class="flex items-center gap-2">
                <span> : </span>
                <input type="text" value="Jl. Sei kera komplek ABC block a-A17, medan kota, sumatera utara" class="py-1 px-4  w-40 md:w-56 lg:w-[440px] block text-black"></input>
            </div>
        </div>
          <div class="flex justify-between items-center">
            <p>Review</p>
            <div class="flex items-center gap-2">
                <span> : </span>
                <textarea type="text" class="py-1 px-4  text-black   w-40 md:w-56 lg:w-[440px] block">Tutor sering datang telat, dan nilai anak saya ga berubah walaupun sudah diajarkan oleh tutor tersebut</textarea>
            </div>
        </div>
        <div class="mt-4 lg:mt-6 mb-4 flex flex-row justify-end gap-3">
            <button class="py-2 px-4 rounded-md border border-blue-700">Back</button>
            <button class="py-2 px-4 rounded-md border bg-red-800 text-white">STOP</button>
        </div>

        
    </div> 
</div>

@endsection
    