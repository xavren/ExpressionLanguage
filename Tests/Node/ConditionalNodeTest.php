<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Hydra\Component\ExpressionLanguage\Tests\Node;

use Hydra\Component\ExpressionLanguage\Node\ConditionalNode;
use Hydra\Component\ExpressionLanguage\Node\ConstantNode;

class ConditionalNodeTest extends AbstractNodeTest
{
    public function getEvaluateData()
    {
        return array(
            array(1, new ConditionalNode(new ConstantNode(true), new ConstantNode(1), new ConstantNode(2))),
            array(2, new ConditionalNode(new ConstantNode(false), new ConstantNode(1), new ConstantNode(2))),
        );
    }

    public function getCompileData()
    {
        return array(
            array('((true) ? (1) : (2))', new ConditionalNode(new ConstantNode(true), new ConstantNode(1), new ConstantNode(2))),
            array('((false) ? (1) : (2))', new ConditionalNode(new ConstantNode(false), new ConstantNode(1), new ConstantNode(2))),
        );
    }
}
