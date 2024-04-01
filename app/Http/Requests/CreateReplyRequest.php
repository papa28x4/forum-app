<?php

namespace App\Http\Requests;

use App\Contracts\ReplyAble;
use App\Models\Thread;
use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;

class CreateReplyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'body' => ['required'],
            'replayAble_id' => ['sometimes'],
            'replayAble_type' => ['sometimes', 'in:' . Thread::TABLE]
        ];
        
    }

    public function replyAble():ReplyAble
    {
        return $this->findReplyAble($this->get('replyAble_id'), $this->get('replyAble_type'));
    }

    private function findReplyAble(int $id, string $type): ReplyAble
    {
        switch ($type){
            case Thread::TABLE:
                return Thread::find($id);
        }
        abort(404);
    }

    public function author(): User
    {
        return $this->user();
    }

    public function body(): string
    {
        return $this->get('body');
    }
}
