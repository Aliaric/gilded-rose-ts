<?php

namespace App;

class GildedRoseTest extends \PHPUnit\Framework\TestCase
{

    /** @test
     *  @dataProvider Items
     */
    public function massTest($expected_sell_in, $expected_quality, $testing_items)
    {
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
    public function Items(): array
    {
        return [
            [4, 9, ['+5 Dexterity Vest', 5, 10]],
            [48, 7, ['Aged Brie', 49, 6]],
            [-6, 8, ['Elixir of the Mongoose', -5, 10]],
            [2, 2, ['Sulfuras, Hand of Ragnaros', 2, 2]],
            [2, 2, ['Sulfuras, Hand of Ragnaros', -1, 80]],
            [14, 21, ['Backstage passes to a TAFKAL80ETC concert', 15, 20]],
            [9, 50, ['Backstage passes to a TAFKAL80ETC concert', 10, 49]],
            [4, 33, ['Backstage passes to a TAFKAL80ETC concert', 5, 30]],
            [2, 4, ['Conjured Mana Cake', 3, 6]]
        ];
    }
}
