<?php

declare(strict_types=1);

namespace Statistics\Calculator;

use SocialPost\Dto\SocialPostTo;
use Statistics\Dto\StatisticsTo;

class AveragePostsPerUser extends AbstractCalculator
{

    protected const UNITS = 'posts';

    /**
     * @var int
     */
    private int $postCount = 0;

    /**
     * @var array
     */
    private array $authors = [];

    /**
     * @param SocialPostTo $postTo
     */
    protected function doAccumulate(SocialPostTo $postTo): void
    {
        $this->postCount++;
        $this->authors[$postTo->getAuthorId()]
            = ($this->authors[$postTo->getAuthorId()] ?? 0) + 1;
    }

    /**
     * @return StatisticsTo
     */
    protected function doCalculate(): StatisticsTo
    {
        $unique_authors = count($this->authors);

        $average_posts_per_user = $unique_authors > 0
            ? $this->postCount / $unique_authors
            : 0;

        return (new StatisticsTo())->setValue(
            round($average_posts_per_user, 2)
        );
    }

}
