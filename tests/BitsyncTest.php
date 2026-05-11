<?php
/**
 * Tests for BitSync
 */

use PHPUnit\Framework\TestCase;
use Bitsync\Bitsync;

class BitsyncTest extends TestCase {
    private Bitsync $instance;

    protected function setUp(): void {
        $this->instance = new Bitsync(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Bitsync::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
