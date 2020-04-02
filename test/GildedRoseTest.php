<?php

namespace App;

class GildedRoseTest extends \PHPUnit\Framework\TestCase {

    /** @test 
     *  @dataProvider Items
     */ 
    public function massTest($expected_sell_in, $expected_quality, $testing_items) {
        // Create testing item object
        $items      = [new Item($testing_items[0], $testing_items[1], $testing_items[2])];
        // Create glidedRose object
        $gildedRose = new GildedRose($items);
        
        // Go through one day iteration.
        $gildedRose->updateQuality();

        // Compare expected sell_in and quality to one day iteration values.
        $this->assertEquals(
            [$expected_sell_in, $expected_quality],
            [$items[0]->sell_in, $items[0]->quality]
        );
    }
    /**
     * expected sell_in, expected quality, [name, sell_in, quality]
     * 
     * @return array 
     */
    public function Items(): array {
        return [
            [9, 19, ['+5 Dexterity Vest', 10, 20]],
            [-1, 8, ['Aged Brie', 2, 0]],
            [-6, -1, ['Elixir of the Mongoose', 5, 7]],
            [2, 2, ['Sulfuras, Hand of Ragnaros', 2, 2]],
            [2, 2, ['Sulfuras, Hand of Ragnaros', -1, 80]],
            [2, 2, ['Backstage passes to a TAFKAL80ETC concert', 15, 20]],
            [2, 2, ['Backstage passes to a TAFKAL80ETC concert', 10, 49]],
            [1, 1, ['Backstage passes to a TAFKAL80ETC concert', 5, 49]],
            [3, 3, ['Conjured Mana Cake', 3, 6]]
        ];
    }
}
