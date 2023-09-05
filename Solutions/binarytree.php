<?php

namespace DSA\Solutions;
require_once __DIR__ . '/../Helpers/functions.php';

use DSA\Helpers\Functions;

class BinaryTree {
    private array $nodes = [];

    public function __construct(IntNode $rootNode)
    {
        $this->nodes[] = $rootNode;
    }

    /**
     * @return IntNode[]
     */
    public function getNodes(): array
    {
        return $this->nodes;
    }

    public function addNode(IntNode $node): void
    {
        if (count($this->nodes) > 2) {
            throw new \Exception('Node already has 2 children');
        }

        $this->nodes[] = $node;
    }
}

class IntNode {
    private int $int;
    private array $children = [];

    public function __construct(
        int $int,
        ?IntNode $child1 = null,
        ?IntNode $child2 = null
    ) {
        $this->data = $int;

        if ($child1) {
            $this->children[] = $child1;
        }

        if ($child2) {
            $this->children[] = $child2;
        }
    }

    public function getData(): int
    {
        return $this->data;
    }

    /**
     * @return IntNode[]
     */
    public function getNodes(): array
    {
        return $this->children;
    }

    /**
     * @throws \Exception
     */
    public function addNode(IntNode $node): void
    {
        if (count($this->children) >= 2) {
            throw new \Exception('Node already has 2 children');
        }

        $this->children[] = $node;
    }
}

$childNode1 = new IntNode(3);
$childNode2 = new IntNode(7);
$childNode3 = new IntNode(15);
$childNode4 = new IntNode(23);

$intNode1 = new IntNode(10, $childNode1, $childNode2);
$intNode2 = new IntNode(15, $childNode3, $childNode4);

$binaryTree = new BinaryTree($intNode1);

try {
    $binaryTree->addNode($intNode2);
} catch (\Exception $e) {
    return $e;
}

$nodes = $binaryTree->getNodes();

foreach ($nodes as $node) {
    Functions::dump($node->getNodes());
}
