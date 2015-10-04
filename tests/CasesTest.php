<?php

class CasesTest extends TestCase
{
    public function testCasesUri()
    {
        $response = $this->call('GET', '/cases');
        $this->assertEquals(200, $response->getStatusCode());
    }

    public function testCasesCreate()
    {
        $response = $this->call('GET', '/cases/create');
        $this->assertEquals(200, $response->getStatusCode());
    }

    public function testCasesRead()
    {
        $response = $this->call('GET', '/cases/read');
        $this->assertEquals(200, $response->getStatusCode());
    }
}
