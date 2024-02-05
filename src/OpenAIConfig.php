<?php

namespace LLPhant;

use OpenAI\Client;

class OpenAIConfig
{
    public string $apiKey;

    public ?Client $client = null;

    public string $model;

    public ?string $temperature = null;

    public ?int $maxTokens = null;

    public ?float $topP = null;

    public ?float $frequencyPenalty = null;

    public ?float $presencePenalty = null;

    public ?string $stop = null;
}
