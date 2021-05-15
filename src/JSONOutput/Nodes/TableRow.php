<?php

namespace Tiptap\JSONOutput\Nodes;

class TableRow extends Node
{
    public function parseHTML()
    {
        return $this->DOMNode->nodeName === 'tr';
    }

    public function data()
    {
        return [
            'type' => 'table_row',
        ];
    }
}