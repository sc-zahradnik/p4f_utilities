<?php
namespace P4F\Components\Utilities\traits;

use P4F\Components\Utilities\Arrays;

trait Iterator{
    /**
     * Vrátí klíč aktuální pozice.
     * @return number|string
     */
    public function key(){
        return $this->keys[$this->position];
    }

    /**
     * Vrátí data aktuální pozice v poli.
     * Jako zdroj dat používá vlastnost data.
     * V případě nastavené constanty RESOURCE použije jako zdroj dat nastavenou hodnotu.
     *   Příklad: const RESOURCE = "_SERVER"; = přístup k superglobální proměnné $_SERVER.
     *     Proměnnou nijak nepřebírá, ale pracuje přímo s ní. Nová a upravená data jsou tak stále přístupná přímím
     *     přístupe ($_SERVER).
     * @return mixed|null
     */
    public function current(){
        if (defined(get_class($this)."::RESOURCE")) {
            $resource = self::RESOURCE;
            global $$resource;
            $data = &$$resource;
        } else {
            $data = $this->data;
        }
        return ($this->valid())?$data[$this->keys[$this->position]]:null;
    }

    /**
     * Nastaví pozici na předchozí prvek a vrátí data.
     * @return mixed|null
     */
    public function previous(){
        --$this->position;
        return $this->current();
    }

    /**
     * Alias pro metodu previous.
     * @return mixed|null
     */
    public function prev(){
        return $this->previous();
    }

    /**
     * Nastaví pozici na následující prvek a vrátí data.
     * @return mixed|null
     */
    public function next(){
        ++$this->position;
        return $this->current();
    }

    /**
     * Nastaví pozici na první prvek v poli a vrátí data.
     * @return mixed|null
     */
    public function rewind(){
        $this->position = 0;
        return $this->current();
    }

    /**
     * Alias pro metodu rewind
     * @return mixed|null
     */
    public function first() {
        return $this->rewind();
    }

    /**
     * Nastaví pozici na poslední prvek a vrátí data.
     * @return mixed|null
     */
    public function last(){
        $this->position = Arrays::count($this->keys) - 1;
        return $this->current();
    }

    /**
     * Kontroluje zda je aktuální pozice validní.
     * @return bool
     */
    public function valid(): bool{
        if (defined(get_class($this)."::RESOURCE")) {
            $resource = self::RESOURCE;
            global $$resource;
            $data = &$$resource;
        } else {
            $data = $this->data;
        }
        return Arrays::keyExists($this->keys, $this->position) && Arrays::keyExists($data, $this->keys[$this->position]);
    }
}
