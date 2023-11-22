<?php

namespace Traits;

// Pastikan trait hanya didefinisikan sekali dalam satu namespace
if (!trait_exists('Traits\Greet')) {
    trait Greet {
        public function greet()
        {
            return "Hallo! ";
        }
    }
}
