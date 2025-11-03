<?php

namespace App\Tags;

use Statamic\Facades\Entry;
use Statamic\Tags\Tags;

class NextProduct extends Tags
{
    /**
     * Get the next product in the collection.
     *
     * Usage: {{ next_product :id="id" }}
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

        // Return next product (or first product if on last)
        if ($currentIndex !== false) {
            if ($currentIndex < $products->count() - 1) {
                // Get next product
                $nextProduct = $products->get($currentIndex + 1);
            } else {
                // We're on last product, wrap to first product
                $nextProduct = $products->first();
            }

            return $nextProduct ? $nextProduct->toArray() : null;
        }

        return null;
    }
}
