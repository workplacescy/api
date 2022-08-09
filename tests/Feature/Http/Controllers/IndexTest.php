<?php

declare(strict_types=1);

use Spectator\Spectator;
use Symfony\Component\HttpFoundation\Response;

beforeEach(function (): void {
    $this->endpoint = route('index');
});

test('can process request method', function (string $method, int $status): void {
    $this->$method($this->endpoint)->assertStatus($status);
})->with('Request methods');

test('can list places', function (): void {
    Spectator::using($this->apiSchema);

    $this->getJson($this->endpoint)->assertValidRequest()->assertValidResponse(Response::HTTP_OK);
});
