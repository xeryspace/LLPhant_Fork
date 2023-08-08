<?php

namespace LLPhant\Embeddings;

use LLPhant\Embeddings\DataReader\Document;

interface Embeddings
{
    /**
     * @return float[]
     */
    public function embedText(string $text): array;

    /**
     * @return float[]
     */
    public function embedDocument(Document $document): array;
}
