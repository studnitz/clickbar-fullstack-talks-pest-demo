<?php

test('persons can be viewed', function () {
    $response = $this->get('/persons');

    $response->assertOk();
});
