<?php

use App\Http\Livewire\CodeEditor;
use function Pest\Livewire\livewire;
 
it('can see highlight', function () {
    livewire(CodeEditor::class)
        ->call('highlight')
        ->assertSee(1);
});

it('can highlight 1 variable', function () {
    livewire(CodeEditor::class)
        ->set('text', 'hello {{ world }}')
        ->assertSet('text', "hello <span class='code'>{{ world }}</span> ");
});

it('can highlight 2 variables', function () {
    livewire(CodeEditor::class)
        ->set('text', 'hello {{ world }} and {{ goodboye }} ')
        ->assertSet('text', "hello <span class='code'>{{ world }}</span>  and <span class='code'>{{ goodboye }}</span>  ");
});
 
 
