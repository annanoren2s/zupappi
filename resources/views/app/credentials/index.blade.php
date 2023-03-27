<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @lang('crud.credentials.index_title')
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-partials.card>

                <livewire:show-credentials/>
            </x-partials.card>
        </div>
    </div>



@push('scripts')
    <script>
        // window.onload = function() {
        //     var anchors = document.getElementsByClassName('copy_content');
        //     for(var i = 0; i < anchors.length; i++) {
        //         var anchor = anchors[i];
        //         anchor.onclick = function() {
        //             copyToClipboard(anchors[i])
        //         }
        //     }
        // }

const unsecuredCopyToClipboard = (text) => { const textArea = document.createElement("textarea"); textArea.value=text; document.body.appendChild(textArea); textArea.focus();textArea.select(); try{document.execCommand('copy')}catch(err){console.error('Unable to copy to clipboard',err)}document.body.removeChild(textArea)};

        function copyToClipboard(value) {
            if (window.isSecureContext && navigator.clipboard) {
                navigator.clipboard.writeText(value);
            } else {
                unsecuredCopyToClipboard(value);
            }

            var notyf = new Notyf({
                dismissible: true,
                position: {
                    x: 'center',
                    y: 'top',
                },
            })
            notyf.success('Copied!')
        }
    </script>

@endpush
</x-app-layout>
