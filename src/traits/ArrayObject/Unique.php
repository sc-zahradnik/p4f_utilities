<?php
namespace P4F\Components\Utilities\traits\ArrayObject;

use P4F\Components\Utilities\Arrays;

trait Unique{
    /**
     * Odebere duplicitní hodnoty v poli.
     * Nastaví aktuápozici na začátek pole.
     * Vytvoří nové pole klíčů.
     * @return void
     */
    public function unique(){
        $this->data = Arrays::unique($this->toArray(), SORT_REGULAR);
        $this->rewind();
        $this->keys = $this->keys();
    }
}
