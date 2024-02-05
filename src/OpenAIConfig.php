<?php

namespace LLPhant;

use OpenAI\Client;

class OpenAIConfig
{
    #test
    public string $apiKey;

    public ?Client $client = null;

    public string $model;
}
