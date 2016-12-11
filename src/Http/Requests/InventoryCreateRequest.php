<?php
namespace Scool\Inventory\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
/**
 * Class InventoryCreateRequest.
 *
 * @package Scool\Inventory\Http\Requests
 */
class InventoryCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
        ];
    }
}