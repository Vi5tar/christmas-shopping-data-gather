<div>
    @foreach ($users as $user)
        <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
            <table class="table-fixed w-full">
                <thead>
                    <tr>
                        <th class="w-1/2 px-4 py-2">{{"$user->name Wishes"}}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($user->wishes as $wish)
                        <tr>
                            <td class="border px-4 py-2">{{ $wish->title }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endforeach
</div>
