<?php
/**
 * Tests for DockAsset
 */

use PHPUnit\Framework\TestCase;
use Dockasset\Dockasset;

class DockassetTest extends TestCase {
    private Dockasset $instance;

    protected function setUp(): void {
        $this->instance = new Dockasset(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Dockasset::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
