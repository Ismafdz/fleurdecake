<x-app-layout>
    <div class="min-h-screen bg-[#FFF8E1] py-12">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Header Title -->
            <h1 class="text-4xl font-bold text-center text-[#5D4037] mb-8 uppercase tracking-wide">Detail Kelas</h1>

            <!-- Main Card -->
            <div class="bg-[#CDB599] rounded-3xl p-8 shadow-lg relative">
                
                <!-- Section 1: Ringkasan Pemesanan -->
                <div class="mb-8">
                    <h2 class="text-xl font-bold text-[#5D4037] mb-2 border-b border-[#5D4037] pb-1 inline-block w-full">Ringkasan Pemesanan:</h2>
                    
                    <div class="bg-[#6D4C41] rounded-2xl p-6 mt-4 text-white space-y-3 shadow-inner">
                        <div class="flex justify-between items-center border-b border-[#8D6E63] pb-2">
                            <span class="font-bold">Nama Pemesan:</span>
                            <span>{{ $transaction->user->name }}</span>
                        </div>
                        <div class="flex justify-between items-center border-b border-[#8D6E63] pb-2">
                            <span class="font-bold">Email:</span>
                            <span>{{ $transaction->user->email }}</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="font-bold">Nomor Telepon:</span>
                            <span>{{ $transaction->user->nomor_telepon ?? '-' }}</span>
                        </div>
                    </div>
                </div>

                <!-- Section 2: Informasi Kelas -->
                <div class="mb-8">
                    <h2 class="text-xl font-bold text-[#5D4037] mb-2 border-b border-[#5D4037] pb-1 inline-block w-full">Informasi Kelas:</h2>
                    
                    <div class="bg-[#6D4C41] rounded-2xl p-6 mt-4 text-white space-y-3 shadow-inner">
                        <div class="flex justify-between items-center border-b border-[#8D6E63] pb-2">
                            <span class="font-bold">Jenis Kelas:</span>
                            <span>{{ $transaction->package_name }}</span>
                        </div>
                        <div class="flex justify-between items-center border-b border-[#8D6E63] pb-2">
                            <span class="font-bold">Tanggal:</span>
                            <span>{{ \Carbon\Carbon::parse($transaction->visit_date)->translatedFormat('d F Y') }}</span>
                        </div>
                        <div class="flex justify-between items-center border-b border-[#8D6E63] pb-2">
                            <span class="font-bold">Jumlah Tiket:</span>
                            <span>{{ $transaction->number_of_people }}</span>
                        </div>
                        <div class="flex justify-between items-center border-b border-[#8D6E63] pb-2">
                            <span class="font-bold">Harga per Tiket:</span>
                            <span>Rp. {{ number_format($transaction->total_price / $transaction->number_of_people, 0, ',', '.') }}</span>
                        </div>
                        <div class="flex justify-between items-center pt-1">
                            <span class="font-bold">Total Pembayaran:</span>
                            <span class="font-bold text-lg">Rp. {{ number_format($transaction->total_price, 0, ',', '.') }}</span>
                        </div>
                    </div>
                </div>

                <!-- Back Button -->
                <div class="text-center mt-8">
                    <a href="{{ route('transactions.index') }}" class="inline-block bg-[#6D4C41] text-white font-bold py-3 px-8 rounded-full hover:bg-[#5D4037] transition duration-300 shadow-md border-2 border-[#8D6E63]">
                        Kembali ke Daftar Tiket
                    </a>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
