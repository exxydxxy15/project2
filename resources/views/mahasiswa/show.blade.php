<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detail Mahasiswa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">

                <dl class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <dt class="text-sm text-gray-500">NIM</dt>
                        <dd class="font-medium">{{ $mahasiswa->nim }}</dd>
                    </div>
                    <div>
                        <dt class="text-sm text-gray-500">Nama Mahasiswa</dt>
                        <dd class="font-medium">{{ $mahasiswa->nama_mahasiswa }}</dd>
                    </div>
                    <div>
                        <dt class="text-sm text-gray-500">Tempat Lahir</dt>
                        <dd class="font-medium">{{ $mahasiswa->tempat_lahir }}</dd>
                    </div>
                    <div>
                        <dt class="text-sm text-gray-500">Tanggal Lahir</dt>
                        <dd class="font-medium">{{ $mahasiswa->tanggal_lahir->format('d-m-Y') }}</dd>
                    </div>
                    <div>
                        <dt class="text-sm text-gray-500">Jenis Kelamin</dt>
                        <dd class="font-medium">{{ $mahasiswa->jenis_kelamin }}</dd>
                    </div>
                    <div>
                        <dt class="text-sm text-gray-500">Program Studi</dt>
                        <dd class="font-medium">{{ $mahasiswa->program_studi }}</dd>
                    </div>
                    <div>
                        <dt class="text-sm text-gray-500">Nomor HP</dt>
                        <dd class="font-medium">{{ $mahasiswa->no_hp }}</dd>
                    </div>
                    <div>
                        <dt class="text-sm text-gray-500">Email</dt>
                        <dd class="font-medium">{{ $mahasiswa->email }}</dd>
                    </div>
                    <div class="md:col-span-2">
                        <dt class="text-sm text-gray-500">Alamat</dt>
                        <dd class="font-medium">{{ $mahasiswa->alamat }}</dd>
                    </div>
                </dl>

                <div class="mt-6">
                    <a href="{{ route('mahasiswa.index') }}"
                        class="px-4 py-2 bg-gray-200 text-gray-800 rounded-md hover:bg-gray-300">
                        Kembali
                    </a>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>