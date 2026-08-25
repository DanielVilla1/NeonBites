<?php

use PHPUnit\Framework\TestCase;

/**
 * @internal
 */
final class LandingPageTest extends TestCase
{
    public function testLandingPageContainsSiteName(): void
    {
        $controller = new \App\Controllers\Home();
        $output = $controller->index();
        $this->assertStringContainsString('NeonBites', $output);
        $this->assertStringContainsString('Cyber Flavor. Real Bites.', $output);
    }
}
