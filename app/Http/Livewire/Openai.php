<?php

namespace App\Http\Livewire;

use Livewire\Component;
use OpenAI\Laravel\Facades\OpenAI as OpenaiFacade;

class Openai extends Component
{

    public string $prompt;

    public string $result = 'Result will go here';

    public function mount()
    {

    }

    public function submit()
    {
        $resultObj = OpenaiFacade::completions()->create([
            'model' => 'text-davinci-003',
            'prompt' => $this->prompt,
            'instruction' => 'Fix the spelling mistakes',
        ]);

        $this->result = $resultObj['choices'][0]['text'];
    }




    public function render()
    {
        return view('livewire.openai');
    }
}
