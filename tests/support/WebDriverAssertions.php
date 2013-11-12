<?php
trait WebDriverAssertions {

    public function assertElementNotFound($by)
    {
        try {
            $this->webDriver->findElement($by);
        } catch (\NoSuchElementWebDriverError $e) {
            $this->assertTrue(true);
            return;
        }
        $this->fail("Element not found");
        
    }
    
}