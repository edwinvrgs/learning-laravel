<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class NoteExerciseTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_notes_summary_and_notes_details()
    {
        $text = 'Begin of the note. ';
        $text .= 'Rerum ratione ut et et exercitationem. Sequi illum ut nobis assumenda laborum ab omnis. Atque in dolores aspernatur molestiae. Hic odit sit aliquid ducimus eos aliquid.';
        $text .= 'End of the note';

        $note = Note::create(['note' => $text]);

        $this->visit('notes')
            ->see('Begin of the note')
            ->seeInElement('.label', 'Others')
            ->dontSee('End of the note')
            ->seeLink('View note')
            ->click('View note')
            ->see($text);
    }
}
