<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento2\Tests\Functions;

/**
 * Class to test validate PHP functions usage of which without passing arguments.
 */
class FunctionsDeprecatedWithoutArgument
{
    /**
     * Test deprecation function.
     *
     * @return array
     */
    public function testDeprecatedMethod(): array
    {
        return [
            mb_check_encoding(), // Calling without argument is deprecated.
            mb_check_encoding('test-argument', null),
            get_class(), // Calling without argument is deprecated.
            get_class(new FunctionsDeprecatedWithoutArgument()),
            get_parent_class(), // Calling without argument is deprecated.
            get_parent_class('test-argument'),
            get_called_class(), // Calling without argument is deprecated.
            get_called_class('test-argument')
        ];
    }
}
