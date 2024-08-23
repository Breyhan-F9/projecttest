@extends('layout.main')

@section('container')

<div class="mt-20 ml-72 max-w-2xl">
  <h2 class="mb-4 text-4xl font-bold text-gray-50">Create A New Post</h2>

  <div>
    <a href="/createpost">
      <button class="bg-green-500  hover:bg-green-400 text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center" type="button">Create New Post</button>
    </a>
  </div>


  <div class="mt-5">
    <div class="relative overflow-x-auto w-[800px]">
    <table class="w-full text-sm text-left rtl:text-right text-gray-400">
      <thead class="text-xs  uppercase bg-gray-700 text-gray-400">
          <tr>
              <th scope="col" class="px-6 py-3">
                  Judul Post
              </th>
              <th scope="col" class="px-20 py-3">
                  Content
              </th>
              <th scope="col" class="px-6 py-3">
                  Actions
              </th>
              <th scope="col" class="px-6 py-3">
                Dibuat Oleh
            </th>
            <th scope="col" class="px-6 py-3">
              Dibuat Tanggal
          </th>
          </tr>
        </thead>
        <tbody>
            {{-- @foreach ($formatLaporan as $formats)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="font-bold px-6 py-4  text-gray-900 whitespace-nowrap dark:text-white">
                {{ $formats->nama_format }}
                </th>
                <td class="font-medium text-gray-900 px-6 py-4">
                    {{ $formats->tipe_format }}
                </td>
                @if (auth()->user()->role == 'admin')
                <td class="px-6">
                    <a href="{{ route('format.download', $formats->id) }}" target="_blank">
                        <button class="inline-flex rounded-md bg-green-500 text-white p-2" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mt-0.5 lucide lucide-arrow-down-to-line">
                                <path d="M12 17V3"/>
                                <path d="m6 11 6 6 6-6"/>
                                <path d="M19 21H5"/>
                            </svg>
                            <p class="font-bold m-1">
                                Download Format
                            </p>
                        </button>
                    </a>
                </td>
                @else
                <td class="px-6 inline-flex py-8">
                  <a href="{{ route('format.edit', $formats->id) }}" >
                      <button class="" type="button">
                       <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-pencil">
                         <path d="M17 3a2.85 2.83 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5Z"/>
                         <path d="m15 5 4 4"/>
                       </svg>
                      </button>
                  </a>
                  <form action="{{ route('format.destroy', $formats->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="" type="submit" onclick="return confirm('Are you sure?')">
                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trash-2">
                       <path d="M3 6h18"/>
                       <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"/>
                       <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"/>
                       <line x1="10" x2="10" y1="11" y2="17"/>
                       <line x1="14" x2="14" y1="11" y2="17"/>
                     </svg>
                    </button>
                  </form>
                </td>
                @endif
                <td class="px-7">
                    {{ date('d-m-Y', strtotime($formats->created_at ))}}
                </td>
            </tr>
            @endforeach --}}
      </tbody>
    </table>
  </div>
  </div>
</div>

@endsection