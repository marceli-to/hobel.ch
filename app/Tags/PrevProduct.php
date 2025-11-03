<?php

namespace App\Tags;

use Statamic\Facades\Entry;
use Statamic\Tags\Tags;

class PrevProduct extends Tags
{
    /**
     * Get the previous product in the collection.
     *
     * Usage: {{ prev_product :id="id" }}
     */
    public function index()
    {
        $currentId = $this->params->get('id');

        if (! $currentId) {
            return null;
        }

        // Get all products ordered by collection order
        $products = Entry::query()
            ->where('collection', 'products')
            ->where('published', true)
            ->get()
            ->sortBy('order')
            ->values();

        // Find current product index
        $currentIndex = $products->search(function ($entry) use ($currentId) {
            return $entry->id() === $currentId;
        });

        // Return previous product (or last product if on first)
        if ($currentIndex !== false) {
            if ($currentIndex > 0) {
                // Get previous product
                $prevProduct = $products->get($currentIndex - 1);
            } else {
                // We're on first product, wrap to last product
                $prevProduct = $products->last();
            }

            return $prevProduct ? $prevProduct->toArray() : null;
        }

        return null;
    }
}
