<?php

namespace App;

final class GildedRose
{
    private $items = [];

    public function __construct($items)
    {
        $this->items = $items;
    }

    public function updateQuality()
    {
        foreach ($this->items as $item) {
            switch ($item->name) {
                case 'Aged Brie':
                    // At the end of each day our system lowers both values for every item
                    $item->sell_in -= 1;
                    // "Aged Brie" actually increases in Quality the older it gets
                    $item->quality += 1;

                    // "Aged Brie" actually increases in Quality the older it gets
                    // Once the sell by date has passed, Quality increaces twice as fast (probably)
                    if ($item->sell_in <= 0) {
                        $item->quality += 1;
                    }
                    // The Quality of an item is never more than 50
                    if ($item->quality > 50) {
                        $item->quality = 50;
                    }
                    break;
                case 'Backstage passes to a TAFKAL80ETC concert':
                    // "Backstage passes", like aged brie, increases in Quality as its SellIn value approaches;
                    $item->quality += 1;

                    // Quality increases by 2 when there are 10 days or less
                    if ($item->sell_in <= 10) {
                        $item->quality += 1;
                    }
                    // Quality increases by 3 when there are 5 days or less
                    if ($item->sell_in <= 5) {
                        $item->quality += 1;
                    }
                    // Quality drops to 0 after the concert
                    if ($item->sell_in <= 0) {
                        $item->quality = 0;
                    }
                    // The Quality of an item is never more than 50
                    if ($item->quality > 50) {
                        $item->quality = 50;
                    }

                    $item->sell_in -= 1;
                    break;
                case 'Sulfuras, Hand of Ragnaros':
                    // "Sulfuras", being a legendary item, never has to be sold or decreases in Quality
                    break;
                case 'Conjured Mana Cake':
                    $item->sell_in -= 1;
                    // "Conjured" items degrade in Quality twice as fast as normal items
                    $item->quality -= 2;

                    // Once the sell by date has passed, Quality degrades twice as fast
                    // "Conjured" items degrade in Quality twice as fast as normal items
                    if ($item->sell_in <= 0) {
                        $item->quality -= 2;
                    }
                    // The Quality of an item is never negative
                    if ($item->quality < 0) {
                        $item->quality = 0;
                    }
                    break;
                default:
                    // At the end of each day our system lowers both values for every item
                    $item->sell_in -= 1;
                    $item->quality -= 1;

                    // Once the sell by date has passed, Quality degrades twice as fast
                    if ($item->sell_in <= 0) {
                        $item->quality -= 1;
                    }
                    // The Quality of an item is never more than 50
                    if ($item->quality > 50) {
                        $item->quality = 50;
                    }
                    // The Quality of an item is never negative
                    if ($item->quality < 0) {
                        $item->quality = 0;
                    }
                    break;
            }
        }
    }
}
