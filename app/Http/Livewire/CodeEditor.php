<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CodeEditor extends Component
{
    public $text;
    public $variables = [];

    public function render()
    {
        return view('livewire.code-editor')->layout('layouts.guest');
    }

    public function highlight()
    {
        $this->reset('variables');
        
        $regex = "/\{\{\s*([a-z_]+)\s*\}\}/";
        $highlightedText = preg_replace_callback($regex, function($matches) {
            $this->variables[] = $matches[0];
            return "<span class='code'>" . $matches[0] . "</span> ";
        }, $this->text);

        $this->text = $highlightedText;
    }

    public function updatedText()
    {
        $this->highlight();
    }

    public function isHighlighted()
    {
        
    }
}
