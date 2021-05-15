<?php

namespace Tiptap\Tests\HTMLOutput;

use Tiptap\Editor;

class ConfiguredMarksTest extends TestCase
{
    /** @test */
    public function bold_is_enabled_by_default()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
        // $json = [
        //     'type' => 'doc',
        //     'content' => [
        //         [
        //             'type' => 'text',
        //             'text' => 'Example Text',
        //             'marks' => [
        //                 [
        //                     'type' => 'bold',
        //                 ],
        //             ],
        //         ],
        //     ],
        // ];

        // $html = '<strong>Example Text</strong>';

        // $this->assertEquals($html, (new Editor)->setContent($json)->getHTML());
    }

    /** @test */
    public function bold_is_enabled_explicitly()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
        // $json = [
        //     'type' => 'doc',
        //     'content' => [
        //         [
        //             'type' => 'text',
        //             'text' => 'Example Text',
        //             'marks' => [
        //                 [
        //                     'type' => 'bold',
        //                 ],
        //             ],
        //         ],
        //     ],
        // ];

        // $html = '<strong>Example Text</strong>';

        // $this->assertEquals($html, (new Renderer)->withMarks([
        //     \Tiptap\HTMLOutput\Marks\Bold::class,
        // ])->render($json));
    }

    /** @test */
    public function all_marks_are_disabled()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
        // $json = [
        //     'type' => 'doc',
        //     'content' => [
        //         [
        //             'type' => 'text',
        //             'text' => 'Example Text',
        //             'marks' => [
        //                 [
        //                     'type' => 'bold',
        //                 ],
        //             ],
        //         ],
        //     ],
        // ];

        // $html = 'Example Text';

        // $this->assertEquals($html, (new Renderer)->withMarks([])->render($json));
    }

    /** @test */
    public function bold_is_replaced_with_a_custom_integration()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
        // $json = [
        //     'type' => 'doc',
        //     'content' => [
        //         [
        //             'type' => 'text',
        //             'text' => 'Example Text',
        //             'marks' => [
        //                 [
        //                     'type' => 'bold',
        //                 ],
        //             ],
        //         ],
        //     ],
        // ];

        // $html = '<b>Example Text</b>';

        // $this->assertEquals($html, (new Renderer)->replaceMark(
        //     \Tiptap\HTMLOutput\Marks\Bold::class,
        //     \Tiptap\Tests\HTMLOutput\Marks\Custom\Bold::class
        // )->render($json));
    }
}