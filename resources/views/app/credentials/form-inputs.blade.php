@php $editing = isset($credential) @endphp

<div class="flex flex-wrap">
    <x-inputs.group class="w-full">
        <x-inputs.text
            name="email"
            label="Email"
            maxlength="255"
            placeholder="Email"
            :required="!$editing"
            :value="old('email', ($editing ? $credential->email : ''))"
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="w-full">
        <x-inputs.text
            name="password"
            label="Password"
            maxlength="255"
            placeholder="Password"
            :required="!$editing"
            :value="old('password', ($editing ? $credential->password : ''))"
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="w-full">
        <x-inputs.text
            name="2fa_code"
            label="2fa Code"
            :value="old('2fa_code', ($editing ? $credential->{'2fa_code'} : ''))"
            maxlength="255"
            placeholder="2fa Code"
        ></x-inputs.text>
    </x-inputs.group>

</div>
