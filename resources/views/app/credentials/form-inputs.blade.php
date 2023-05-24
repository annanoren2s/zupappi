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



    <x-inputs.group class="w-full">
        <x-inputs.text
            name="general_information"
            label="general_information"
            :value="old('general_information', ($editing ? $credential->{'general_information'} : ''))"
            maxlength="255"
            placeholder="general_information"
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="w-full">
        <x-inputs.text
            name="full_name"
            label="full_name"
            :value="old('full_name', ($editing ? $credential->{'full_name'} : ''))"
            maxlength="255"
            placeholder="full_name"
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="w-full">
        <x-inputs.text
            name="business_email_address"
            label="business_email_address"
            :value="old('business_email_address', ($editing ? $credential->{'business_email_address'} : ''))"
            maxlength="255"
            placeholder="business_email_address"
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="w-full">
        <x-inputs.text
            name="personal_email_address"
            label="personal_email_address"
            :value="old('personal_email_address', ($editing ? $credential->{'personal_email_address'} : ''))"
            maxlength="255"
            placeholder="personal_email_address"
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="w-full">
        <x-inputs.text
            name="mobile_phone_number"
            label="mobile_phone_number"
            :value="old('mobile_phone_number', ($editing ? $credential->{'mobile_phone_number'} : ''))"
            maxlength="255"
            placeholder="mobile_phone_number"
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="w-full">
        <x-inputs.text
            name="facebook_page_name"
            label="facebook_page_name"
            :value="old('facebook_page_name', ($editing ? $credential->{'facebook_page_name'} : ''))"
            maxlength="255"
            placeholder="facebook_page_name"
        ></x-inputs.text>
    </x-inputs.group>

</div>
