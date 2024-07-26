<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class InventoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'user_id' => 'required|exists:users,id',
            'device_type_id' => 'required|exists:device_types,id',
            'device_name' => 'required',
            'brand_id' => 'required|exists:brands,id',
            'serial_number' => 'required',
            'mac_address' => 'required',
            'device_photo' => 'required',
            'stock' => 'required',
            'unit_id' => 'required|exists:units,id',
            'device_status' => 'required',
        ];
    }
}
