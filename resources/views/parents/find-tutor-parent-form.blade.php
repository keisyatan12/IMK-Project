@extends('parents.layout.main-parent')

@section('title', 'Cari Tutor')

@section('content')

<div class="max-w-4xl mx-auto mt-10 p-6">
  <div class=" mb-8">
      <h1 class="text-xl lg:text-3xl font-bold">Find Tutor</h1>
      <p class="text-sm lg:text-base">Isi Form berikut untuk mencari tutor yang anda</p>
  </div>
    <form class=" mx-auto">
      <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
          <div>
              <label for="jumlah-anak" class="block text-sm font-medium">Jumlah anak</label>
              <input type="number" id="jumlah-anak" name="jumlah-anak" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
          </div>

          <div>
              <label for="student-level" class="block text-sm font-medium">Student level</label>
              <input type="text" id="student-level" name="student-level" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
          </div>

          <div>
              <label for="student-class" class="block text-sm font-medium">Student class</label>
              <input type="text" id="student-class" name="student-class" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
          </div>

          <div>
              <label for="student-school" class="block text-sm font-medium">Student school</label>
              <input type="text" id="student-school" name="student-school" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
          </div>

          <div>
              <label for="subject" class="block text-sm font-medium">Subject need to be teach</label>
              <input type="text" id="subject" name="subject" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
          </div>

          <div>
              <label for="day" class="block text-sm font-medium">Day</label>
              <input type="text" id="day" name="day" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
          </div>

          <div>
              <label for="time" class="block text-sm font-medium">Time</label>
              <input type="text" id="time" name="time" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
          </div>

          <div>
              <label for="fee" class="block text-sm font-medium">Fee /month</label>
              <input type="text" id="fee" name="fee" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
          </div>

          <div class="col-span-2">
              <label for="address" class="block text-sm font-medium">Address</label>
              <input type="text" id="address" name="address" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
          </div>

          <div class="col-span-2">
              <label for="additional-notes" class="block text-sm font-medium">Additional notes</label>
              <textarea id="additional-notes" name="additional-notes" rows="3" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2"></textarea>
          </div>
      </div>

      <div class="mt-6 flex justify-end">
          <button type="button" class="bg-gray-500 text-white px-4 py-2 rounded-md mr-2">Cancel</button>
          <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md">Submit</button>
      </div>
  </form>
</div>


@endsection
