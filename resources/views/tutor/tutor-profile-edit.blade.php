@extends('tutor.layout.maintutor')
@section('title','Tutor - EditProfil')
@section('content')
<div class="w-full my-4 mr-10 lg:mr-20 flex flex-col">
    <div class="my-4 w-full mr-10 md:mr-20">
        <div class="flex justify-center md:items-end flex-col md:flex-row">
            <h1 class=" text-xl lg:text-3xl font-bold">Edit Profil</h1>
        </div>
    </div>
    {{-- Foto Profil --}}
    <div class="flex flex-col items-center">
        <div class="flex items-center justify-center w-[212px] h-[212px] rounded-full bg-gray-600 overflow-hidden">
            <img src="{{('images/profiluser.jpg')}}" alt="Profile Picture" class="w-full h-full object-cover">
        </div>
        <label for="file-upload"
            class="flex items-center justify-center w-[212px] h-[212px] rounded-full bg-gray-400 overflow-hidden absolute opacity-35 hover:opacity-75">
            <input id="file-upload" name="file-upload" type="file" class="sr-only">
            <img src="{{('images/camera.png')}}" alt="camera" class=" w-9/12 h-9/12 object-cover">
        </label>
    </div>

    <form>
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-5 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="first-name" class="block text-sm font-medium leading-6">Nama
                            Lengkap</label>
                        <div class="mt-2">
                            <input type="text" name="first-name" id="first-name" autocomplete="given-name"
                                class="block w-full rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:col-span-4">
                        <label for="birthDate" class="block text-sm font-medium leading-6">Tanggal
                            Lahir</label>
                        <div class="mt-2">
                            <input type="text" name="birthDate" id="birthDate" autocomplete=""
                                class="block w-full rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:col-span-4">
                        <label for="email" class="block text-sm font-medium leading-6">Alamat
                            Email</label>
                        <div class="mt-2">
                            <input id="email" name="email" type="email" autocomplete="email"
                                class="block w-full rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:col-span-4">
                        <label for="email" class="block text-sm font-medium leading-6">No. Telepon</label>
                        <div class="mt-2">
                            <input id="email" name="email" type="email" autocomplete="email"
                                class="block w-full rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:col-span-4">
                        <label for="street-address" class="block text-sm font-medium leading-6">Alamat
                            Domisili</label>
                        <div class="mt-2">
                            <input type="text" name="street-address" id="street-address" autocomplete="street-address"
                                class="block w-full rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:col-span-2 sm:col-start-1">
                        <label for="city" class="block text-sm font-medium leading-6">Kota/Kabupaten</label>
                        <div class="mt-2">
                            <input type="text" name="city" id="city" autocomplete="address-level2"
                                class="block w-full rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:col-span-2">
                        <label for="region" class="block text-sm font-medium leading-6">Provinsi</label>
                        <div class="mt-2">
                            <input type="text" name="region" id="region" autocomplete="address-level1"
                                class="block w-full rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div class="sm:col-span-4 mt-9">
                        <p class="font-bold text-2xl">Curriculum Vitae</p>
                    </div>
                    <div class="sm:col-span-4">
                        <label for="TingkatPendidikan" class="block text-sm font-medium leading-6">Tingkat
                            Pendidikan</label>
                        <div class="mt-2">
                            <input type="text" name="TingkatPendidikan" id="TingkatPendidikan"
                                autocomplete="TingkatPendidikan"
                                class="block w-full rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div class="sm:col-span-4">
                        <label for="sekolah" class="block text-sm font-medium leading-6">Sekolah/Almamater</label>
                        <div class="mt-2">
                            <input type="text" name="sekolah" id="sekolah" autocomplete="sekolah"
                                class="block w-full rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div class="sm:col-span-4">
                        <label for="lulus" class="block text-sm font-medium leading-6">Lulus</label>
                        <div class="mt-2">
                            <input type="text" name="lulus" id="lulus" autocomplete="lulus"
                                class="block w-full rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div class="sm:col-span-4">
                        <label for="organisasi" class="block text-sm font-medium leading-6">Pengalaman
                            Organisasi</label>
                        <div class="mt-2">
                            <input type="text" name="organisasi" id="organisasi" autocomplete="organisasi"
                                class="block w-full rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div class="sm:col-span-4">
                        <label for="cv" class="block text-sm font-medium leading-6">Curriculum Vitae</label>
                        <div class="mt-2">
                            <input type="file" name="cv" id="cv" autocomplete="cv"
                                class="block w-full rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="text-sm font-semibold leading-6">Cancel</button>
            <button type="submit"
                class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
        </div>
    </form>
</div>

@endsection