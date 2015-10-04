<?php

class WelcomeTest extends TestCase {

	public function testRootUri()
	{
		$response = $this->call('GET', '/');
		$this->assertEquals(302, $response->getStatusCode());
		$this->assertRedirectedTo('auth/login');
	}

	public function testHomeUri()
	{

	}
}
