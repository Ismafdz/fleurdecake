<x-app-layout>
    <div class="flex min-h-screen bg-[#FFF8E1]">
        <!-- Sidebar -->
        <div class="w-64 p-6 space-y-4 hidden md:block">
             <!-- Buttons -->
             <a href="{{ route('dashboard') }}" class="block w-full text-center py-2 px-4 bg-[#795548] text-white rounded-full font-bold hover:bg-[#5D4037]">Back</a>
             <a href="{{ route('profile.edit') }}" class="block w-full text-center py-2 px-4 bg-[#795548] text-white rounded-full font-bold hover:bg-[#5D4037]">My Profile</a>
             <a href="{{ route('transactions.index') }}" class="block w-full text-center py-2 px-4 bg-[#795548] text-white rounded-full font-bold hover:bg-[#5D4037]">Transaction History</a>
        </div>

        <!-- Main Content -->
        <div class="flex-1 p-6 flex justify-center items-start">
            <div class="bg-[#5D4037] rounded-3xl p-8 w-full max-w-4xl text-white relative shadow-xl">
                <h2 class="text-2xl font-bold mb-6 text-center">Transaction History</h2>

                @if($transactions->isEmpty())
                    <p class="text-center text-gray-200">You have no transactions yet.</p>
                @else
                    <div class="overflow-x-auto">
                        <table class="w-full text-left text-white">
                            <thead class="border-b border-[#795548]">
                                <tr>
                                    <th class="px-4 py-2">Date</th>
                                    <th class="px-4 py-2">Package</th>
                                    <th class="px-4 py-2">People</th>
                                    <th class="px-4 py-2">Total Price</th>
                                    <th class="px-4 py-2">Status</th>
                                    <th class="px-4 py-2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($transactions as $transaction)
                                    <tr class="border-b border-[#6D4C41] hover:bg-[#6D4C41]">
                                        <td class="px-4 py-3">{{ \Carbon\Carbon::parse($transaction->visit_date)->format('d M Y') }}</td>
                                        <td class="px-4 py-3">{{ $transaction->package_name }}</td>
                                        <td class="px-4 py-3">{{ $transaction->number_of_people }}</td>
                                        <td class="px-4 py-3">Rp {{ number_format($transaction->total_price, 0, ',', '.') }}</td>
                                        <td class="px-4 py-3">
                                            <span class="px-2 py-1 rounded-full text-xs font-bold
                                                @if($transaction->status == 'paid') bg-green-500
                                                @elseif($transaction->status == 'pending') bg-yellow-500 text-black
                                                @elseif($transaction->status == 'cancelled') bg-red-500
                                                @else bg-gray-500 @endif">
                                                {{ ucfirst($transaction->status) }}
                                            </span>
                                        </td>
                                        <td class="px-4 py-3">
                                            <a href="{{ route('transactions.show', $transaction) }}" class="text-[#FFAB91] hover:text-white underline text-sm">View Detail</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
